<?php

namespace AgiBundle\Controller;

use AgiBundle\Entity\Site;
use AgiBundle\Entity\ContratSite;
use AgiBundle\Entity\Operation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AgiBundle\Form\SiteType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;
use \DateTimeZone;
use \DateTimeImmutable;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
    public function ajouterAction(Request $request)
    {

        $form = $this->createForm(SiteType::class, new Site(), array(
            'action' => $this->generateUrl('ajouter_site'),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $site = $form->getData();

            $houvj = $site->getHeureOuvJour();
            $hfermj = $site->getHeureFermJour();
            $houvN = $site->getHeureOuvNuit();
            $hfermN = $site->getHeureFermNuit();

            if ($houvj !== null) {
                $site->setHeureOuvJour($houvj);
            }

            if ($hfermj !== null) {
                $site->setHeureFermJour($hfermj);
            } else {
                $site->setHeureFermJour(null);
            }

            if ($houvN !== null) {
                $site->setHeureOuvNuit($houvN);
            } else {
                $site->setHeureOuvNuit(null);
            }

            if ($hfermN !== null) {
                $site->setHeureFermNuit($hfermN);
            } else {
                $site->setHeureFermNuit(null);
            }

            $site->setEtat("1");

            $operation = new Operation();
            $operation->setSite($site);
            $operation->setLibelle("Enregistrement");
            $operation->setDateHeure(new DateTime());
            $operation->setAuteur("admin");
            $operation->setTypeOperation(1); //1=enregistement, 2=modification, 0=suppression

            $contrat = new ContratSite();
            $contrat->setSite($site);
            $contrat->setDateDebut(new DateTime());
            $contrat->setDateFin(new DateTime());
            $contrat->setEtat("1");

            $em = $this->getDoctrine()->getManager();
            $em->persist($site);
            $em->persist($operation);
            $em->persist($contrat);


            $em->flush();

            $form = $this->createForm(SiteType::class, new Site(), array(
                'action' => $this->generateUrl('ajouter_site'),
                'method' => 'POST',
            ));

            return $this->render('AgiBundle:Default:site/new.html.twig', array('form' => $form->createView(), 'success' => 'Enregistrement réussi!'));

        }

        return $this->render('AgiBundle:Default:site/new.html.twig', array('form' => $form->createView()));

    }


    public function modifierAction(Request $request, $id)
    {
        $site = $this->getDoctrine()
            ->getRepository('AgiBundle:Site')
            ->find($id);

        if (!$site) {
            throw $this->createNotFoundException(
                'Aucun site trouvé avec l\id ' . $id
            );
        }

        $form = $this->createForm(SiteType::class, $site, array(
            'action' => $this->generateUrl('modifier_site', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $site = $form->getData();

            $houvj = $site->getHeureOuvJour();
            $hfermj = $site->getHeureFermJour();
            $houvN = $site->getHeureOuvNuit();
            $hfermN = $site->getHeureFermNuit();

            if ($houvj !== null) {
                $site->setHeureOuvJour($houvj);
            }

            if ($hfermj !== null) {
                $site->setHeureFermJour($hfermj);
            } else {
                $site->setHeureFermJour(null);
            }

            if ($houvN !== null) {
                $site->setHeureOuvNuit($houvN);
            } else {
                $site->setHeureOuvNuit(null);
            }

            if ($hfermN !== null) {
                $site->setHeureFermNuit($hfermN);
            } else {
                $site->setHeureFermNuit(null);
            }

            $operation = new Operation();
            $operation->setSite($site);
            $operation->setLibelle("Modification");
            $operation->setDateHeure(new DateTime());
            $operation->setAuteur("admin");
            $operation->setTypeOperation(2); //1=enregistement, 2=modification, 0=suppression

            $em = $this->getDoctrine()->getManager();
            $em->persist($site);
            $em->persist($operation);

            $em->flush();

            $form = $this->createForm(SiteType::class, new Site(), array(
                'action' => $this->generateUrl('modifier_site', array('id' => $id)),
                'method' => 'POST',
            ));

            return $this->render('AgiBundle:Default:site/edit.html.twig', array('form' => $form->createView(), 'success' => 'Modification réussie!'));

        }

        return $this->render('AgiBundle:Default:site/edit.html.twig', array('form' => $form->createView(), 'site' => $site));

    }

    public function supprimerAction(Request $request, $id)
    {
        $site = $this->getDoctrine()
            ->getRepository('AgiBundle:Site')
            ->find($id);

        if (!$site) {
            throw $this->createNotFoundException(
                'Aucun site trouvé avec l\id ' . $id
            );
        }

        $form = $this->createForm(SiteType::class, $site, array(
            'action' => $this->generateUrl('supprimer_site', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $repository = $this->getDoctrine()
                ->getRepository('AgiBundle:Site');

            $site = $repository->find($id);

            $site->setEtat("0");//1=actif, 0=supprime

            $operation = new Operation();
            $operation->setSite($site);
            $operation->setLibelle("Suppression");
            $operation->setDateHeure(new DateTime());
            $operation->setAuteur("admin");
            $operation->setTypeOperation(0); //1=enregistement, 2=modification, 0=suppression

            $em = $this->getDoctrine()->getManager();

            $em->persist($site);
            $em->persist($operation);

            $em->flush();

            $repository = $this->getDoctrine()
                ->getRepository('AgiBundle:Site');

            $sites = $repository->findSites('0');

            return $this->render('AgiBundle:Default:site/list.html.twig', array('success' => 'Suppression réussie!', 'sites' => $sites, 'actif' => 0));

        }

        return $this->render('AgiBundle:Default:site/delete.html.twig', array('form' => $form->createView(), 'site' => $site));

    }

    public function listerActifAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

        $sites = $repository->findSites('1');

        return $this->render('AgiBundle:Default:site/list.html.twig', array('sites' => $sites, 'actif' => 1));

    }

    public function listerSupprimeAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

        $sites = $repository->findSites('0');


        return $this->render('AgiBundle:Default:site/list.html.twig', array('sites' => $sites, 'actif' => 0));

    }


    public function detailsAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Operation');

        $operations = $repository->findSitesOperations($id);

        return $this->render('AgiBundle:Default:site/operation.html.twig', array('operations' => $operations));

    }

    public function planningAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

        $site = $repository->find($id);

        $thp = 0; $thj = 0; $thn = 0; $thd = 0; $thf = 0;

        return $this->render('AgiBundle:Default:site/planning.html.twig', array('site' => $site, 'vacations' => null,
            'thp' => $thp, 'thj' => $thj, 'thn' => $thn, 'thd' => $thd, 'thf' => $thf));
    }

    public function displayPlanningAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation');

        $vacations = $repository->findVacationsBySite($id);

        $thp = 0; $thj = 0; $thn = 0; $thd = 0; $thf = 0;
        $thjH = 0; $thjM = 0;
        $thnH = 0; $thnM = 0;
        $thdH = 0; $thdM = 0;
        $thfH = 0; $thfM = 0;

        foreach ($vacations as $v){
            $thp += $v->getHeurePanier();
            $thf += $v->getHeureFerie();

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

        }

        if($thjM >= 60){
            $thjH += ($thjM / 60);
            $thjM = ($thjM % 60);
        }
        if($thjH < 10){
            $thjH = '0' . $thjH;
        }
        if($thjM < 10){
            $thjM = '0' . $thjM;
        }
        $thj = $thjH . ':' . $thjM;
        if($thjH == "00" && $thjM == "00"){
            $thj = 0;
        }



        if($thnM >= 60){
            $thnH += ($thnM / 60);
            $thnM = ($thnM % 60);
        }
        if($thnH < 10){
            $thnH = '0' . $thnH;
        }
        if($thnM < 10){
            $thnM = '0' . $thnM;
        }
        $thn = $thnH . ':' . $thnM;
        if($thnH == "00" && $thnM == "00"){
            $thn = 0;
        }




        if($thdM >= 60){
            $thdH += ($thdM / 60);
            $thdM = ($thdM % 60);
        }
        if($thdH < 10){
            $thdH = '0' . $thdH;
        }
        if($thdM < 10){
            $thdM = '0' . $thdM;
        }
        $thd = $thdH . ':' . $thdM;
        if($thdH == "00" && $thdM == "00"){
            $thd = 0;
        }



        if($thfM >= 60){
            $thfH += ($thfM / 60);
            $thfM = ($thfM % 60);
        }
        if($thfH < 10){
            $thfH = '0' . $thfH;
        }
        if($thfM < 10){
            $thfM = '0' . $thfM;
        }
        $thf = $thfH . ':' . $thfM;
        if($thfH == "00" && $thfM == "00"){
            $thf = 0;
        }

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

        $site = $repository->find($id);


        return $this->render('AgiBundle:Default:site/planning.html.twig', array('vacations' => $vacations, 'site' => $site, 'thp' => $thp, 'thj' => $thj, 'thn' => $thn,
            'thd' => $thd, 'thf' => $thf));
    }

    public function calendrierAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

        $site = $repository->find($id);


        return $this->render('AgiBundle:Default:site/calendrier.html.twig', array('site' => $site));

    }


    public function displayCalendrierAction(Request $request, $id)
    {
        if ($request->isXmlHttpRequest()) {
            $repository = $this->getDoctrine()
                ->getRepository('AgiBundle:Vacation');

            $vac_array = array();
            $vacations = $repository->findVacationsForCalendar($id);
            foreach ($vacations as $v){
                $e = array();
                $e['id'] = $v->getId();
                $e['title'] = $v->getAgent()->getNom() . " " . $v->getAgent()->getPrenom();
                $e['start'] = $v->getHeureDebVac()->format('Y-m-d H:i:s');
                $e['end'] = $v->getHeureFinVac()->format('Y-m-d H:i:s');
                $e['allDay'] = false;
                array_push($vac_array, $e);
            }

            return new JsonResponse($vac_array);
        }
        return new Response("Ceci n'est pas une requete AJAX!", 400);

    }

    public function recapitulatifAction($id)
    {

        $repository = $this->getDoctrine()
                ->getRepository('AgiBundle:Vacation');

        $vacations = $repository->findVacationsBySite($id);

        $thp = 0; $thj = 0; $thn = 0; $thd = 0; $thf = 0;
        $thjH = 0; $thjM = 0;
        $thnH = 0; $thnM = 0;
        $thdH = 0; $thdM = 0;
        $thfH = 0; $thfM = 0;

        foreach ($vacations as $v){
            $thp += $v->getHeurePanier();
            $thf += $v->getHeureFerie();

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

        }

        if($thjM >= 60){
            $thjH += ($thjM / 60);
            $thjM = ($thjM % 60);
        }
        if($thjH < 10){
            $thjH = '0' . $thjH;
        }
        if($thjM < 10){
            $thjM = '0' . $thjM;
        }
        $thj = $thjH . ':' . $thjM;
        if($thjH == "00" && $thjM == "00"){
            $thj = 0;
        }



        if($thnM >= 60){
            $thnH += ($thnM / 60);
            $thnM = ($thnM % 60);
        }
        if($thnH < 10){
            $thnH = '0' . $thnH;
        }
        if($thnM < 10){
            $thnM = '0' . $thnM;
        }
        $thn = $thnH . ':' . $thnM;
        if($thnH == "00" && $thnM == "00"){
            $thn = 0;
        }




        if($thdM >= 60){
            $thdH += ($thdM / 60);
            $thdM = ($thdM % 60);
        }
        if($thdH < 10){
            $thdH = '0' . $thdH;
        }
        if($thdM < 10){
            $thdM = '0' . $thdM;
        }
        $thd = $thdH . ':' . $thdM;
        if($thdH == "00" && $thdM == "00"){
            $thd = 0;
        }



        if($thfM >= 60){
            $thfH += ($thfM / 60);
            $thfM = ($thfM % 60);
        }
        if($thfH < 10){
            $thfH = '0' . $thfH;
        }
        if($thfM < 10){
            $thfM = '0' . $thfM;
        }
        $thf = $thfH . ':' . $thfM;
        if($thfH == "00" && $thfM == "00"){
            $thf = 0;
        }

        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

        $site = $repository->find($id);


        return $this->render('AgiBundle:Default:site/recapitulatif.html.twig', array('vacations' => $vacations, 'site' => $site, 'thp' => $thp, 'thj' => $thj, 'thn' => $thn,
                'thd' => $thd, 'thf' => $thf));

    }

}
