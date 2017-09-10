<?php

namespace AgiBundle\Controller;

use AgiBundle\Entity\Site;
use AgiBundle\Entity\ContratSite;
use AgiBundle\Entity\Operation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AgiBundle\Form\SiteType;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;
use \DateTimeImmutable;
use AgiBundle\EventCalendar\Event;
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

            if($houvj !== null){
                $site->setHeureOuvJour($houvj);
            }

            if($hfermj !== null){
                $site->setHeureFermJour($hfermj);
            }else{
                $site->setHeureFermJour(null);
            }

            if($houvN !== null){
                $site->setHeureOuvNuit($houvN);
            }else{
                $site->setHeureOuvNuit(null);
            }

            if($hfermN !== null){
                $site->setHeureFermNuit($hfermN);
            }else{
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

            if($houvj !== null){
                $site->setHeureOuvJour($houvj);
            }

            if($hfermj !== null){
                $site->setHeureFermJour($hfermj);
            }else{
                $site->setHeureFermJour(null);
            }

            if($houvN !== null){
                $site->setHeureOuvNuit($houvN);
            }else{
                $site->setHeureOuvNuit(null);
            }

            if($hfermN !== null){
                $site->setHeureFermNuit($hfermN);
            }else{
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

        return $this->render('AgiBundle:Default:site/edit.html.twig', array('form' => $form->createView(),'site' => $site));

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

        return $this->render('AgiBundle:Default:site/delete.html.twig', array('form' => $form->createView(),'site' => $site));

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


        return $this->render('AgiBundle:Default:site/planning.html.twig', array('site' => $site));

    }


    public function displayPlanningAction(Request $request)
    {
        if($request->isXmlHttpRequest()){

        }
        return new Response("Ceci n'est pas une requete AJAX!", 400);

    }

}
