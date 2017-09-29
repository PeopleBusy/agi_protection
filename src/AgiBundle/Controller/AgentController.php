<?php

namespace AgiBundle\Controller;

use AgiBundle\Entity\Agent;
use AgiBundle\Entity\ContratAgent;
use AgiBundle\Entity\Operation;
use AgiBundle\Entity\Vacation;
use AgiBundle\Entity\Site;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AgiBundle\Form\AgentType;
use AgiBundle\Form\ContratAgentType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;
use \DateInterval;
use \DatePeriod;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AgentController extends Controller
{
    public function ajouterAction(Request $request)
    {

        $form = $this->createForm(AgentType::class, new Agent(), array(
            'action' => $this->generateUrl('ajouter_agent'),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agent = $form->getData();

            $typeContrat = $agent->getTypeContrat();
            if ($typeContrat == "CDD") {
                //CDD
                $date_debut = $request->request->get('date_debut');
                $date_fin = $request->request->get('date_fin');
                if ($date_debut == null || $date_fin == null) {
                    return $this->render('AgiBundle:Default:agent/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Veuillez vérifier les dates saisies!'));
                }

                $date_embauche = new DateTime();

                $date_debut = DateTime::createFromFormat('d/m/Y', $date_debut);
                $date_fin = DateTime::createFromFormat('d/m/Y', $date_fin);

            } else {
                //CDI
                $date_embauche = $request->request->get('date_embauche');
                $date_embauche = DateTime::createFromFormat('d/m/Y', $date_embauche);
                if ($date_embauche == null || $date_embauche == "") {
                    return $this->render('AgiBundle:Default:agent/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Veuillez saisir la date d\'embauche!'));
                }

                $date_debut = $date_embauche;
                $date_fin = $date_embauche;

            }

            $agent = $form->getData();
            $agent->setDateEmbauche($date_embauche);
            $agent->setEtat("1");

            $operation = new Operation();
            $operation->setAgent($agent);
            $operation->setLibelle("Enregistrement");
            $operation->setDateHeure(new DateTime());
            $operation->setAuteur("admin");
            $operation->setTypeOperation(1); //1=enregistement, 2=modification, 0=suppression

            $contrat = new ContratAgent();
            $contrat->setAgent($agent);
            $contrat->setDateDebut($date_debut);
            $contrat->setDateFin($date_fin);
            $contrat->setEtat("1");

            $em = $this->getDoctrine()->getManager();
            $em->persist($agent);
            $em->persist($operation);
            $em->persist($contrat);


            $em->flush();

            $form = $this->createForm(AgentType::class, new Agent(), array(
                'action' => $this->generateUrl('ajouter_agent'),
                'method' => 'POST',
            ));

            return $this->render('AgiBundle:Default:agent/new.html.twig', array('form' => $form->createView(), 'success' => 'Enregistrement réussi!'));

        }

        return $this->render('AgiBundle:Default:agent/new.html.twig', array('form' => $form->createView()));

    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function modifierAction(Request $request, $id)
    {
        $contratagent = $this->getDoctrine()
            ->getRepository('AgiBundle:ContratAgent')
            ->find($id);

        if (!$contratagent) {
            throw $this->createNotFoundException(
                'Aucun agent trouvé avec l\id ' . $id
            );
        }

        $form = $this->createForm(AgentType::class, $contratagent->getAgent(), array(
            'action' => $this->generateUrl('modifier_agent', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agent = $form->getData();

            $typeContrat = $agent->getTypeContrat();
            if ($typeContrat == "CDD") {
                //CDD
                $date_debut = $request->request->get('date_debut');
                $date_fin = $request->request->get('date_fin');
                if ($date_debut == null || $date_fin == null) {
                    return $this->render('AgiBundle:Default:agent/edit.html.twig', array('form' => $form->createView(), 'erreur' => 'Veuillez vérifier les dates saisies!'));
                }

                $date_embauche = new DateTime();

                $date_debut = DateTime::createFromFormat('d/m/Y', $date_debut);
                $date_fin = DateTime::createFromFormat('d/m/Y', $date_fin);

            } else {
                //CDI
                $date_embauche = $request->request->get('date_embauche');
                $date_embauche = DateTime::createFromFormat('d/m/Y', $date_embauche);
                if ($date_embauche == null || $date_embauche == "") {
                    return $this->render('AgiBundle:Default:agent/edit.html.twig', array('form' => $form->createView(), 'erreur' => 'Veuillez saisir la date d\'embauche!'));
                }

                $date_debut = $date_embauche;
                $date_fin = $date_embauche;

            }

            $agent = $contratagent->getAgent();

            $agent = $form->getData();
            $agent->setDateEmbauche($date_embauche);


            $operation = new Operation();
            $operation->setAgent($agent);
            $operation->setLibelle("Modification");
            $operation->setDateHeure(new DateTime());
            $operation->setAuteur("admin");
            $operation->setTypeOperation(2); //1=enregistement, 2=modification, 0=suppression

            $em = $this->getDoctrine()->getManager();
            $em->persist($agent);
            $em->persist($operation);

            $contratagent->setDateDebut($date_debut);
            $contratagent->setDateFin($date_fin);
            $em->persist($contratagent);

            $em->flush();

            $form = $this->createForm(AgentType::class, $agent, array(
                'action' => $this->generateUrl('modifier_agent', array('id' => $id)),
                'method' => 'POST',
            ));

            return $this->render('AgiBundle:Default:agent/edit.html.twig', array('form' => $form->createView(), 'success' => 'Modification réussie!', 'contratagent' => $contratagent));

        }

        return $this->render('AgiBundle:Default:agent/edit.html.twig', array('form' => $form->createView(),'contratagent' => $contratagent));

    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function supprimerAction(Request $request, $id)
    {
        $contratagent = $this->getDoctrine()
            ->getRepository('AgiBundle:ContratAgent')
            ->find($id);

        if (!$contratagent) {
            throw $this->createNotFoundException(
                'Aucun agent trouvé avec l\id ' . $id
            );
        }

        $form = $this->createForm(AgentType::class, $contratagent->getAgent(), array(
            'action' => $this->generateUrl('supprimer_agent', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $repository = $this->getDoctrine()
                ->getRepository('AgiBundle:Agent');

            $agent = $repository->find($contratagent->getAgent()->getId());

            $agent->setEtat("0");//1=actif, 0=supprime

            $contratagent->setEtat("0");//1=actif, 0=supprime
            $contratagent->setAgent($agent);

            $operation = new Operation();
            $operation->setAgent($agent);
            $operation->setLibelle("Suppression");
            $operation->setDateHeure(new DateTime());
            $operation->setAuteur("admin");
            $operation->setTypeOperation(0); //1=enregistement, 2=modification, 0=suppression

            $em = $this->getDoctrine()->getManager();

            $em->persist($agent);
            $em->persist($operation);
            $em->persist($contratagent);

            $em->flush();

            $repository = $this->getDoctrine()
                ->getRepository('AgiBundle:ContratAgent');

            $contratagents = $repository->findContratsAgents('0');

            return $this->render('AgiBundle:Default:agent/list.html.twig', array('success' => 'Suppression réussie!', 'contratagents' => $contratagents, 'actif' => 0));

        }

        return $this->render('AgiBundle:Default:agent/delete.html.twig', array('form' => $form->createView(),'contratagent' => $contratagent));

    }

    public function listerActifAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:ContratAgent');

        $contratagents = $repository->findContratsAgents('1');

        return $this->render('AgiBundle:Default:agent/list.html.twig', array('contratagents' => $contratagents, 'actif' => 1));

    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function listerSupprimeAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:ContratAgent');

        $contratagents = $repository->findContratsAgents('0');



        return $this->render('AgiBundle:Default:agent/list.html.twig', array('contratagents' => $contratagents, 'actif' => 0));

    }

    public function detailsAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Operation');

        $operations = $repository->findAgentOperations($id);


        return $this->render('AgiBundle:Default:agent/operation.html.twig', array('operations' => $operations));

    }

    public function rechercherAction(Request $request)
    {
        if($request->isXmlHttpRequest()){

            $nom = $request->get('q');

            $repository = $this->getDoctrine()
                ->getRepository('AgiBundle:Agent');

            $agent = $repository->findAgentByName($nom);

            return new JsonResponse(array('data' => json_decode($agent)));

        }


    }

    public function recapitulatifAction($id)
    {

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation');

        $vacations = $repository->findVacationsByAgent($id);

        $thp = 0; $thj = 0; $thn = 0; $thd = 0; $thf = 0;
        $thjH = 0; $thjM = 0;
        $thnH = 0; $thnM = 0;
        $thdH = 0; $thdM = 0;
        $thfH = 0; $thfM = 0;

        foreach ($vacations as $v){
            $thp += $v->getHeurePanier();

            if($v->getHeureJour() == '0'){
                $thjH += 0;
                $thjM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureJour())[0]);
                $m = intval(mbsplit(":", $v->getHeureJour())[1]);
                $thjH += $h;
                $thjM += $m;
            }

            if($v->getHeureNuit() == '0'){
                $thnH += 0;
                $thnM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureNuit())[0]);
                $m = intval(mbsplit(":", $v->getHeureNuit())[1]);
                $thnH += $h;
                $thnM += $m;
            }

            if($v->getHeureDimanche() == '0'){
                $thdH += 0;
                $thdM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureDimanche())[0]);
                $m = intval(mbsplit(":", $v->getHeureDimanche())[1]);
                $thdH += $h;
                $thdM += $m;
            }

            if($v->getHeureFerie() == '0'){
                $thfH += 0;
                $thfM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureFerie())[0]);
                $m = intval(mbsplit(":", $v->getHeureFerie())[1]);
                $thfH += $h;
                $thfM += $m;
            }

        }

        if($thjM >= 60){
            $thjH += floor($thjM / 60);
            $thjM = ($thjM % 60);
        }
        if($thjH < 10){
            $thjH = '0' . $thjH;
        }
        if($thjM < 10){
            $thjM = '0' . $thjM;
        }
        $thj = $thjH . ':' . $thjM;
        /*if($thjH == "00" && $thjM == "00"){
            $thj = 0;
        }*/



        if($thnM >= 60){
            $thnH += floor($thnM / 60);
            $thnM = ($thnM % 60);
        }
        if($thnH < 10){
            $thnH = '0' . $thnH;
        }
        if($thnM < 10){
            $thnM = '0' . $thnM;
        }
        $thn = $thnH . ':' . $thnM;
        /*if($thnH == "00" && $thnM == "00"){
            $thn = 0;
        }*/




        if($thdM >= 60){
            $thdH += floor($thdM / 60);
            $thdM = ($thdM % 60);
        }
        if($thdH < 10){
            $thdH = '0' . $thdH;
        }
        if($thdM < 10){
            $thdM = '0' . $thdM;
        }
        $thd = $thdH . ':' . $thdM;
        /*if($thdH == "00" && $thdM == "00"){
            $thd = 0;
        }*/



        if($thfM >= 60){
            $thfH += floor($thfM / 60);
            $thfM = ($thfM % 60);
        }
        if($thfH < 10){
            $thfH = '0' . $thfH;
        }
        if($thfM < 10){
            $thfM = '0' . $thfM;
        }
        $thf = $thfH . ':' . $thfM;
        /*if($thfH == "00" && $thfM == "00"){
            $thf = 0;
        }*/



        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent');

        $agent = $repository->find($id);


        return $this->render('AgiBundle:Default:agent/recapitulatif.html.twig', array('vacations' => $vacations, 'agent' => $agent, 'thp' => $thp, 'thj' => $thj, 'thn' => $thn,
                'thd' => $thd, 'thf' => $thf));

    }

    public function planningAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent');

        $agent = $repository->find($id);

        $thp = "0"; $thj = "00:00"; $thn = "00:00"; $thd = "00:00"; $thf = "00:00";

        $title = "Veuillez sélectionner une date début et une date fin pour afficher le planning";

        return $this->render('AgiBundle:Default:agent/planning.html.twig', array('agent' => $agent, 'vacations' => null,
            'thp' => $thp, 'thj' => $thj, 'thn' => $thn, 'thd' => $thd, 'thf' => $thf, 'title' => $title, 'date_debut' => '', 'date_fin' => ''));
    }

    public function displayPlanningAction(Request $request, $id)
    {
        $date_debut = $request->request->get('date_debut');
        $date_fin = $request->request->get('date_fin');

        $title = "Affichage du planning du " . $date_debut . " - au - " . $date_fin;

        $dd = DateTime::createFromFormat('d/m/Y', $date_debut);
        $df = DateTime::createFromFormat('d/m/Y', $date_fin);

        $dd = $dd->format('Y-m-d');
        $df = $df->format('Y-m-d');

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation');

        $vacations = $repository->findVacationsByAgentAndPeriode($id, $dd, $df);

        $thp = 0; $thj = 0; $thn = 0; $thd = 0; $thf = 0;
        $thjH = 0; $thjM = 0;
        $thnH = 0; $thnM = 0;
        $thdH = 0; $thdM = 0;
        $thfH = 0; $thfM = 0;

        foreach ($vacations as $v){
            $thp += $v->getHeurePanier();

            if($v->getHeureJour() == '0'){
                $thjH += 0;
                $thjM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureJour())[0]);
                $m = intval(mbsplit(":", $v->getHeureJour())[1]);
                $thjH += $h;
                $thjM += $m;
            }

            if($v->getHeureNuit() == '0'){
                $thnH += 0;
                $thnM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureNuit())[0]);
                $m = intval(mbsplit(":", $v->getHeureNuit())[1]);
                $thnH += $h;
                $thnM += $m;
            }

            if($v->getHeureDimanche() == '0'){
                $thdH += 0;
                $thdM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureDimanche())[0]);
                $m = intval(mbsplit(":", $v->getHeureDimanche())[1]);
                $thdH += $h;
                $thdM += $m;
            }

            if($v->getHeureFerie() == '0'){
                $thfH += 0;
                $thfM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureFerie())[0]);
                $m = intval(mbsplit(":", $v->getHeureFerie())[1]);
                $thfH += $h;
                $thfM += $m;
            }

        }

        if($thjM >= 60){
            $thjH += floor($thjM / 60);
            $thjM = ($thjM % 60);
        }
        if($thjH < 10){
            $thjH = '0' . $thjH;
        }
        if($thjM < 10){
            $thjM = '0' . $thjM;
        }
        $thj = $thjH . ':' . $thjM;
        /*if($thjH == "00" && $thjM == "00"){
            $thj = 0;
        }*/



        if($thnM >= 60){
            $thnH += floor($thnM / 60);
            $thnM = ($thnM % 60);
        }
        if($thnH < 10){
            $thnH = '0' . $thnH;
        }
        if($thnM < 10){
            $thnM = '0' . $thnM;
        }
        $thn = $thnH . ':' . $thnM;
        /*if($thnH == "00" && $thnM == "00"){
            $thn = 0;
        }*/




        if($thdM >= 60){
            $thdH += floor($thdM / 60);
            $thdM = ($thdM % 60);
        }
        if($thdH < 10){
            $thdH = '0' . $thdH;
        }
        if($thdM < 10){
            $thdM = '0' . $thdM;
        }
        $thd = $thdH . ':' . $thdM;
        /*if($thdH == "00" && $thdM == "00"){
            $thd = 0;
        }*/



        if($thfM >= 60){
            $thfH += floor($thfM / 60);
            $thfM = ($thfM % 60);
        }
        if($thfH < 10){
            $thfH = '0' . $thfH;
        }
        if($thfM < 10){
            $thfM = '0' . $thfM;
        }
        $thf = $thfH . ':' . $thfM;
        /*if($thfH == "00" && $thfM == "00"){
            $thf = 0;
        }*/

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent');

        $agent = $repository->find($id);


        return $this->render('AgiBundle:Default:agent/planning.html.twig', array('vacations' => $vacations, 'agent' => $agent, 'thp' => $thp, 'thj' => $thj, 'thn' => $thn,
            'thd' => $thd, 'thf' => $thf, 'title' => $title, 'date_debut' => $date_debut, 'date_fin' => $date_fin));
    }

    public function imprimerAction(Request $request, $id)
    {

        $date_debut = $request->request->get('date_debut_planning');
        $date_fin = $request->request->get('date_fin_planning');

        $title = $date_debut . " - AU - " . $date_fin;

        $dd = DateTime::createFromFormat('d/m/Y', $date_debut);
        $df = DateTime::createFromFormat('d/m/Y', $date_fin);

        $dd = $dd->format('Y-m-d');
        $df = $df->format('Y-m-d');

        $listDates = $this->getDatesBetween($dd, $df);

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation');

        $vacations = $repository->findVacationsByAgentAndPeriode($id, $dd, $df);

        $thp = 0; $thj = 0; $thn = 0; $thd = 0; $thf = 0;
        $thjH = 0; $thjM = 0;
        $thnH = 0; $thnM = 0;
        $thdH = 0; $thdM = 0;
        $thfH = 0; $thfM = 0;

        foreach ($vacations as $v){
            $thp += $v->getHeurePanier();

            if($v->getHeureJour() == '0'){
                $thjH += 0;
                $thjM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureJour())[0]);
                $m = intval(mbsplit(":", $v->getHeureJour())[1]);
                $thjH += $h;
                $thjM += $m;
            }

            if($v->getHeureNuit() == '0'){
                $thnH += 0;
                $thnM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureNuit())[0]);
                $m = intval(mbsplit(":", $v->getHeureNuit())[1]);
                $thnH += $h;
                $thnM += $m;
            }

            if($v->getHeureDimanche() == '0'){
                $thdH += 0;
                $thdM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureDimanche())[0]);
                $m = intval(mbsplit(":", $v->getHeureDimanche())[1]);
                $thdH += $h;
                $thdM += $m;
            }

            if($v->getHeureFerie() == '0'){
                $thfH += 0;
                $thfM += 0;
            }else{
                $h = intval(mbsplit(":", $v->getHeureFerie())[0]);
                $m = intval(mbsplit(":", $v->getHeureFerie())[1]);
                $thfH += $h;
                $thfM += $m;
            }

        }

        if($thjM >= 60){
            $thjH += floor($thjM / 60);
            $thjM = ($thjM % 60);
        }
        if($thjH < 10){
            $thjH = '0' . $thjH;
        }
        if($thjM < 10){
            $thjM = '0' . $thjM;
        }
        $thj = $thjH . ':' . $thjM;
        /*if($thjH == "00" && $thjM == "00"){
            $thj = 0;
        }*/



        if($thnM >= 60){
            $thnH += floor($thnM / 60);
            $thnM = ($thnM % 60);
        }
        if($thnH < 10){
            $thnH = '0' . $thnH;
        }
        if($thnM < 10){
            $thnM = '0' . $thnM;
        }
        $thn = $thnH . ':' . $thnM;
        /*if($thnH == "00" && $thnM == "00"){
            $thn = 0;
        }*/




        if($thdM >= 60){
            $thdH += floor($thdM / 60);
            $thdM = ($thdM % 60);
        }
        if($thdH < 10){
            $thdH = '0' . $thdH;
        }
        if($thdM < 10){
            $thdM = '0' . $thdM;
        }
        $thd = $thdH . ':' . $thdM;
        /*if($thdH == "00" && $thdM == "00"){
            $thd = 0;
        }*/



        if($thfM >= 60){
            $thfH += floor($thfM / 60);
            $thfM = ($thfM % 60);
        }
        if($thfH < 10){
            $thfH = '0' . $thfH;
        }
        if($thfM < 10){
            $thfM = '0' . $thfM;
        }
        $thf = $thfH . ':' . $thfM;
        /*if($thfH == "00" && $thfM == "00"){
            $thf = 0;
        }*/

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent');

        $agent = $repository->find($id);

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation');

        $vac_array = array();
        foreach ($listDates as $d) {
            $vacs = $repository->findVacationsByAgentAndDate($id, $d);
            if($vacs == null || sizeof($vacs) == 0){

                $nv = new Vacation();
                $nv->setSite(new Site());
                $nv->setDateVacation(new DateTime($d));
                $nv->setHeureDebVac(new DateTime($d));
                $nv->setHeureFinVac(new DateTime($d));
                $nv->setHeurePanier(0);
                $nv->setHeureJour(0);
                $nv->setHeureNuit(0);
                $nv->setHeureDimanche(0);
                $nv->setHeureFerie(0);
                array_push($vac_array, $nv);

            }else{
                foreach ($vacs as $va){
                    array_push($vac_array, $va);
                }
            }

        }


        $template = $this->render('AgiBundle:Default:agent/pdf.html.twig', array('vacations' => $vac_array, 'agent' => $agent, 'thp' => $thp, 'thj' => $thj, 'thn' => $thn,
            'thd' => $thd, 'thf' => $thf, 'title' => $title, 'date_debut' => $date_debut, 'date_fin' => $date_fin))->getContent();


        $html2pdf = $this->get('app.html2pdf');

        //$html2pdf->create('L', 'A4', 'fr', true, 'UTF-8', array(20, 5, 20, 5));
        $html2pdf->create('P', 'A4', 'fr', true, 'UTF-8', array(4, 3, 3, 3));

        return $html2pdf->generatePdf($template, "planning_" . $agent->getNom() . '_' . $title);


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


}
