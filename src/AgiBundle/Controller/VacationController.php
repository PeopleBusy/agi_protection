<?php

namespace AgiBundle\Controller;

use AgiBundle\Entity\Site;
use AgiBundle\Entity\Agent;
use AgiBundle\Entity\ContratAgent;
use AgiBundle\Entity\Vacation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AgiBundle\Form\VacationType;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;
use \DateTimeImmutable;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class VacationController extends Controller
{
    public function enregistrerAction(Request $request, $id)
    {

        $form = $this->createForm(VacationType::class, new Vacation(), array(
            'action' => $this->generateUrl('site_enregistrer_vacation', array('id' => $id)),
            'method' => 'POST',
        ));

        $site = $this->getDoctrine()
            ->getRepository('AgiBundle:Site')
            ->find($id);

        if (!$site) {
            throw $this->createNotFoundException(
                'Aucun site trouvé avec l\id ' . $id
            );
        }

        $agents = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent')
            ->findAgents('1');

        $heureJour = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier')
            ->find(1);

        $heureNuit = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier')
            ->find(2);

        $heureDimanche = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier')
            ->find(3);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $agent_ids = mbsplit('#', $request->request->get('agent_id'));



            $site_id = $request->request->get('site_id');
            $heure_panier = $request->request->get('heure_panier');
            $heure_jour = $request->request->get('heure_jour');
            $heure_nuit = $request->request->get('heure_nuit');
            $heure_dimanche = $request->request->get('heure_dimanche');
            $heure_ferie = $request->request->get('heure_ferie');

            $heureDebVac = $form->getData()->getHeureDebVac();
            $heureFinVac = $form->getData()->getHeureFinVac();


            if ($heureDebVac > $heureFinVac || $site_id == null || $heureDebVac == null || $heureFinVac == null) {

                return $this->render('AgiBundle:Default:vacation/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Veuillez vérifier les valeurs ou les dates saisies!',
                    'site' => $site, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

            }

            if($heure_panier == null){
                $heure_panier = 0;
            }
            if($heure_jour == null || $heure_jour == "0"){
                $heure_jour = "00:00";
            }
            if($heure_nuit == null || $heure_nuit == "0"){
                $heure_nuit = "00:00";
            }
            if($heure_dimanche == null || $heure_dimanche == "0"){
                $heure_dimanche = "00:00";
            }
            if($heure_ferie == null || $heure_ferie == "0"){
                $heure_ferie = "00:00";
            }

            $em = $this->getDoctrine()->getManager();

            for($i = 1; $i < sizeof($agent_ids); $i++){

                $agent_id = $agent_ids[$i];

                $agent = $this->getDoctrine()
                    ->getRepository('AgiBundle:Agent')
                    ->find(intval($agent_id));

                if($agent->getTypeContrat() == "CDD"){
                    $contratAgent = $this->getDoctrine()
                        ->getRepository('AgiBundle:ContratAgent')
                        ->findByAgent($agent);


                    if($contratAgent[0]->getDateFin() < DateTime::createFromFormat('Y-m-d',$heureDebVac->format('Y-m-d')) ||
                        $contratAgent[0]->getDateFin() < DateTime::createFromFormat('Y-m-d',$heureFinVac->format('Y-m-d'))){
                        return $this->render('AgiBundle:Default:vacation/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Le contrat de cet agent fini le ' .$contratAgent[0]->getDateFin()->format('d/m/Y'),
                            'site' => $site, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));
                    }
                }

                $site = $this->getDoctrine()
                    ->getRepository('AgiBundle:Site')
                    ->find($id);

                if (!$site) {
                    throw $this->createNotFoundException(
                        'Aucun site trouvé avec l\id ' . $id
                    );
                }


                //A revoir
                $vacs = $this->getDoctrine()
                    ->getRepository('AgiBundle:Vacation')
                    ->findVacationsByAgentAndDate(intval($agent_id), $heureDebVac->format('Y-m-d'));

                $isBtweenDate = false;

                foreach ($vacs as $vac){
                    if($this->dateTimeIsBetween($vac->getHeureDebVac()->format('Y-m-d H:i:s'), $vac->getHeureFinVac()->format('Y-m-d H:i:s'), $heureDebVac->format('Y-m-d H:i:s')) &&
                        $this->dateTimeIsBetween($vac->getHeureDebVac()->format('Y-m-d H:i:s'), $vac->getHeureFinVac()->format('Y-m-d H:i:s'), $heureFinVac->format('Y-m-d H:i:s'))){

                        $isBtweenDate = true;
                        break;

                    }

                    if($this->dateTimeIsBetween($heureDebVac->format('Y-m-d H:i:s'), $heureFinVac->format('Y-m-d H:i:s'), $vac->getHeureDebVac()->format('Y-m-d H:i:s')) &&
                        $this->dateTimeIsBetween($heureDebVac->format('Y-m-d H:i:s'), $heureFinVac->format('Y-m-d H:i:s'), $vac->getHeureFinVac()->format('Y-m-d H:i:s'))){

                        $isBtweenDate = true;
                        break;

                    }

                    if($vac->getHeureDebVac() == $heureDebVac && $vac->getHeureFinVac() == $heureFinVac){

                        $isBtweenDate = true;
                        break;

                    }

                }

                if($isBtweenDate){

                    return $this->render('AgiBundle:Default:vacation/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Cet agent a déja un planning dans cette période!',
                        'site' => $site, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

                }
                //A revoir

                $vacation = $form->getData();
                $vacation->setAgent($agent);
                $vacation->setSite($site);
                $vacation->setDateVacation($vacation->getHeureDebVac());
                $vacation->setHeurePanier($heure_panier);
                $vacation->setHeureJour($heure_jour);
                $vacation->setHeureNuit($heure_nuit);
                $vacation->setHeureDimanche($heure_dimanche);
                $vacation->setHeureFerie($heure_ferie);

                $vacation->setEtat("1");

                $em->persist($vacation);

                //$em->persist($site);

                $em->flush();
                $em->clear();

                $vacation = new Vacation();


            }




            $form = $this->createForm(VacationType::class, $vacation, array(
                'action' => $this->generateUrl('site_enregistrer_vacation', array('id' => $id)),
                'method' => 'POST',
            ));

            return $this->render('AgiBundle:Default:vacation/new.html.twig', array('form' => $form->createView(), 'success' => 'Enregistrement réussi!', 'site' => $site, 'agents' => $agents,
                        'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

        }

        return $this->render('AgiBundle:Default:vacation/new.html.twig', array('form' => $form->createView(), 'site' => $site, 'agents' => $agents,
            'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function modifierAction(Request $request, $id)
    {
        $vacation = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation')
            ->find($id);

        if (!$vacation) {
            throw $this->createNotFoundException(
                'Aucune vacation trouvée avec l\id ' . $id
            );
        }

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

        $site = $repository->find($vacation->getSite());

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent');

        $agent = $repository->find($vacation->getAgent());

        $agents = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent')
            ->findAgents('1');

        $heureJour = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier')
            ->find(1);

        $heureNuit = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier')
            ->find(2);

        $heureDimanche = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier')
            ->find(3);

        $form = $this->createForm(VacationType::class, $vacation, array(
            'action' => $this->generateUrl('site_modifier_vacation', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $agent_id = $request->request->get('agent_id');
            $site_id = $request->request->get('site_id');
            $heure_panier = $request->request->get('heure_panier');
            $heure_jour = $request->request->get('heure_jour');
            $heure_nuit = $request->request->get('heure_nuit');
            $heure_dimanche = $request->request->get('heure_dimanche');
            $heure_ferie = $request->request->get('heure_ferie');

            $heureDebVac = $form->getData()->getHeureDebVac();
            $heureFinVac = $form->getData()->getHeureFinVac();

            if ($heureDebVac > $heureFinVac || $site_id == null || $agent_id == null || $heureDebVac == null || $heureFinVac == null) {

                return $this->render('AgiBundle:Default:vacation/edit.html.twig', array('form' => $form->createView(), 'erreur' => 'Veuillez vérifier les valeurs ou les dates saisies!',
                    'vacation' => $vacation,'site' => $site, 'agent' => $agent, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

            }

            if($heure_panier == null){
                $heure_panier = 0;
            }
            if($heure_jour == null || $heure_jour == "0"){
                $heure_jour = "00:00";
            }
            if($heure_nuit == null || $heure_nuit == "0"){
                $heure_nuit = "00:00";
            }
            if($heure_dimanche == null || $heure_dimanche == "0"){
                $heure_dimanche = "00:00";
            }
            if($heure_ferie == null || $heure_ferie == "0"){
                $heure_ferie = "00:00";
            }

            $agent = $this->getDoctrine()
                ->getRepository('AgiBundle:Agent')
                ->find(intval($agent_id));

            if($agent->getTypeContrat() == "CDD"){
                $contratAgent = $this->getDoctrine()
                    ->getRepository('AgiBundle:ContratAgent')
                    ->findByAgent($agent);


                if($contratAgent[0]->getDateFin() < DateTime::createFromFormat('Y-m-d',$heureDebVac->format('Y-m-d')) ||
                    $contratAgent[0]->getDateFin() < DateTime::createFromFormat('Y-m-d',$heureFinVac->format('Y-m-d'))){

                    return $this->render('AgiBundle:Default:vacation/edit.html.twig', array('form' => $form->createView(), 'erreur' => 'Le contrat de cet agent fini le ' .$contratAgent[0]->getDateFin()->format('d/m/Y'),
                        'vacation' => $vacation,'site' => $site, 'agent' => $agent, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

                }
            }

            //A revoir
            $vacs = $this->getDoctrine()
                ->getRepository('AgiBundle:Vacation')
                ->findVacationsByAgentAndDate(intval($agent_id), $heureDebVac->format('Y-m-d'));

            $isBtweenDate = false;

            /*foreach ($vacs as $vac){
                if($this->dateTimeIsBetween($vac->getHeureDebVac()->format('Y-m-d H:i:s'), $vac->getHeureFinVac()->format('Y-m-d H:i:s'), $heureDebVac->format('Y-m-d H:i:s')) &&
                    $this->dateTimeIsBetween($vac->getHeureDebVac()->format('Y-m-d H:i:s'), $vac->getHeureFinVac()->format('Y-m-d H:i:s'), $heureFinVac->format('Y-m-d H:i:s'))){

                    $isBtweenDate = true;
                    break;

                }

                if($this->dateTimeIsBetween($heureDebVac->format('Y-m-d H:i:s'), $heureFinVac->format('Y-m-d H:i:s'), $vac->getHeureDebVac()->format('Y-m-d H:i:s')) &&
                    $this->dateTimeIsBetween($heureDebVac->format('Y-m-d H:i:s'), $heureFinVac->format('Y-m-d H:i:s'), $vac->getHeureFinVac()->format('Y-m-d H:i:s'))){

                    $isBtweenDate = true;
                    break;

                }

                if($vac->getHeureDebVac() == $heureDebVac && $vac->getHeureFinVac() == $heureFinVac){

                    $isBtweenDate = true;
                    break;

                }

            }

            if($isBtweenDate){

                return $this->render('AgiBundle:Default:vacation/edit.html.twig', array('form' => $form->createView(), 'erreur' => 'Cet agent a déja un planning dans cette période!',
                    'vacation' => $vacation,'site' => $site, 'agent' => $agent, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

            }*/

            $vacation = $form->getData();
            $vacation->setAgent($agent);
            $vacation->setSite($site);
            $vacation->setDateVacation($vacation->getHeureDebVac());
            $vacation->setHeurePanier($heure_panier);
            $vacation->setHeureJour($heure_jour);
            $vacation->setHeureNuit($heure_nuit);
            $vacation->setHeureDimanche($heure_dimanche);
            $vacation->setHeureFerie($heure_ferie);

            $vacation->setEtat("1");


            $em = $this->getDoctrine()->getManager();
            $em->persist($vacation);

            $em->flush();

            $form = $this->createForm(VacationType::class, $vacation, array(
                'action' => $this->generateUrl('site_modifier_vacation', array('id' => $id)),
                'method' => 'POST',
            ));

            return $this->render('AgiBundle:Default:vacation/edit.html.twig', array('form' => $form->createView(), 'success' => 'Modification réussie!', 'vacation' => $vacation,'site' => $site,
                'agent' => $agent, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

        }


        return $this->render('AgiBundle:Default:vacation/edit.html.twig', array('form' => $form->createView(), 'vacation' => $vacation, 'site' => $site,
                                    'agent' => $agent, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));


    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function supprimerAction(Request $request, $id)
    {
        $vacation = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation')
            ->find($id);

        if (!$vacation) {
            throw $this->createNotFoundException(
                'Aucune vacation trouvée avec l\id ' . $id
            );
        }

        $success = null;

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

        $site = $repository->find($vacation->getSite());

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent');

        $agent = $repository->find($vacation->getAgent());

        $agents = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent')
            ->findAgents('1');

        $heureJour = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier')
            ->find(1);

        $heureNuit = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier')
            ->find(2);

        $heureDimanche = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier')
            ->find(3);

        $form = $this->createForm(VacationType::class, $vacation, array(
            'action' => $this->generateUrl('site_supprimer_vacation', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $vacation = $this->getDoctrine()
                ->getRepository('AgiBundle:Vacation')
                ->find($id);

            /*$vacation->setEtat("0");
            $em->persist($vacation);*/

            $em = $this->getDoctrine()->getManager();
            $em->remove($vacation);

            $em->flush();

            $repository = $this->getDoctrine()
                ->getRepository('AgiBundle:Vacation');

            $vacations = $repository->findVacations('0');

            $success = "Suppression réussie!";

            return $this->render('AgiBundle:Default:vacation/list.html.twig', array('vacations' => $vacations, 'actif' => 0, 'success' => $success));


        }



        return $this->render('AgiBundle:Default:vacation/delete.html.twig', array('form' => $form->createView(), 'vacation' => $vacation,'site' => $site,
            'agent' => $agent, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

    }


    public function listerActifAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation');

        $vacations = $repository->findVacations('1');

        return $this->render('AgiBundle:Default:vacation/list.html.twig', array('vacations' => $vacations, 'actif' => 1));

    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function listerSupprimeAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation');

        $vacations = $repository->findVacations('0');

        return $this->render('AgiBundle:Default:vacation/list.html.twig', array('vacations' => $vacations, 'actif' => 0));

    }

    public function detailsAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Operation');

        $operations = $repository->findSitesOperations($id);


        return $this->render('AgiBundle:Default:agent/operation.html.twig', array('operations' => $operations));

    }

    public function getDatesBetween($start, $end, $format = 'Y-m-d') {

        $start  = new DateTime($start);
        $end    = new DateTime($end);
        $invert = $start > $end;

        $dates = array();
        $dates[] = $start->format($format);
        while ($start != $end) {
            $start->modify(($invert ? '-' : '+') . '1 day');
            $dates[] = $start->format($format);
        }
        return $dates;

    }

    function dateTimeIsBetween($from, $to, $date="now") {
        $date = new DateTime($date);
        $from= new DateTime($from);
        $to = new DateTime($to);
        if ($date >= $from && $date <= $to) {
            return true;
        }
        return false;
    }

}
