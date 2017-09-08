<?php

namespace AgiBundle\Controller;

use AgiBundle\Entity\Site;
use AgiBundle\Entity\Vacation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AgiBundle\Form\VacationType;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;
use \DateTimeImmutable;

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

            $date_vacation = new DateTime();
            $agent_id = $request->request->get('agent_id');
            $site_id = $request->request->get('site_id');
            $heure_panier = $request->request->get('heure_panier');
            $heure_jour = $request->request->get('heure_jour');
            $heure_nuit = $request->request->get('heure_nuit');
            $heure_dimanche = $request->request->get('heure_dimanche');

            $heureDebVac = $form->getData()->getHeureDebVac();
            $heureFinVac = $form->getData()->getHeureFinVac();

            if ($site_id == null || $agent_id == null || $heureDebVac == null || $heureFinVac == null || $heureDebVac->format('H:i') == '00:00' || $heureFinVac->format('H:i') == '00:00') {

                return $this->render('AgiBundle:Default:vacation/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Veuillez vérifier les valeurs saisies!',
                    'site' => $site, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

            }

            if($heure_panier == null){
                $heure_panier = 0;
            }
            if($heure_jour == null){
                $heure_jour = 0;
            }
            if($heure_nuit == null){
                $heure_nuit = 0;
            }
            if($heure_dimanche == null){
                $heure_dimanche = 0;
            }

            $heure_ferie = 0;//A calculer après

            $agent = $this->getDoctrine()
                ->getRepository('AgiBundle:Agent')
                ->find(intval($agent_id));

            $vacation = $form->getData();
            $vacation->setAgent($agent);
            $vacation->setSite($site);
            $vacation->setDateVacation($date_vacation);
            $vacation->setHeurePanier($heure_panier);
            $vacation->setHeureJour($heure_jour);
            $vacation->setHeureNuit($heure_nuit);
            $vacation->setHeureDimanche($heure_dimanche);
            $vacation->setHeureFerie($heure_ferie);

            $vacation->setEtat("1");


            $em = $this->getDoctrine()->getManager();
            $em->persist($vacation);

            $em->flush();

            $form = $this->createForm(VacationType::class, new Vacation(), array(
                'action' => $this->generateUrl('site_enregistrer_vacation', array('id' => $id)),
                'method' => 'POST',
            ));

            return $this->render('AgiBundle:Default:vacation/new.html.twig', array('form' => $form->createView(), 'success' => 'Enregistrement réussi!', 'site' => $site, 'agents' => $agents,
                        'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

        }

        return $this->render('AgiBundle:Default:vacation/new.html.twig', array('form' => $form->createView(), 'site' => $site, 'agents' => $agents,
                        'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

    }


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
            ->getRepository('AgiBundle:Site');

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

            $date_vacation = new DateTime();
            $agent_id = $request->request->get('agent_id');
            $site_id = $request->request->get('site_id');
            $heure_panier = $request->request->get('heure_panier');
            $heure_jour = $request->request->get('heure_jour');
            $heure_nuit = $request->request->get('heure_nuit');
            $heure_dimanche = $request->request->get('heure_dimanche');

            $heureDebVac = $form->getData()->getHeureDebVac();
            $heureFinVac = $form->getData()->getHeureFinVac();

            if ($date_vacation == null || $site_id == null || $agent_id == null || $heureDebVac == null || $heureFinVac == null || $heureDebVac->format('H:i') == '00:00' || $heureFinVac->format('H:i:s') == '00:00') {

                return $this->render('AgiBundle:Default:vacation/edit.html.twig', array('form' => $form->createView(), 'erreur' => 'Veuillez vérifier les valeurs saisies!',
                    'vacation' => $vacation,'site' => $site, 'agent' => $agent, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

            }

            if($heure_panier == null){
                $heure_panier = 0;
            }
            if($heure_jour == null){
                $heure_jour = 0;
            }
            if($heure_nuit == null){
                $heure_nuit = 0;
            }
            if($heure_dimanche == null){
                $heure_dimanche = 0;
            }

            $heure_ferie = 0;

            $agent = $this->getDoctrine()
                ->getRepository('AgiBundle:Agent')
                ->find(intval($agent_id));

            $vacation = $form->getData();
            $vacation->setAgent($agent);
            $vacation->setSite($site);
            $vacation->setDateVacation($date_vacation);
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


        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

        $site = $repository->find($vacation->getSite());

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

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

            $vacation->setEtat("0");

            $em = $this->getDoctrine()->getManager();
            $em->persist($vacation);

            $em->flush();

            $repository = $this->getDoctrine()
                ->getRepository('AgiBundle:Vacation');

            $vacations = $repository->findVacations('1');

            return $this->render('AgiBundle:Default:vacation/list.html.twig', array('vacations' => $vacations, 'actif' => 0));


        }



        return $this->render('AgiBundle:Default:vacation/edit.html.twig', array('form' => $form->createView(),'site' => $site,
            'agent' => $agent, 'agents' => $agents, 'heureJour' => $heureJour, 'heureNuit' => $heureNuit, 'heureDimanche' => $heureDimanche));

    }


    public function listerActifAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation');

        $vacations = $repository->findVacations('1');

        return $this->render('AgiBundle:Default:vacation/list.html.twig', array('vacations' => $vacations, 'actif' => 1));

    }

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

}
