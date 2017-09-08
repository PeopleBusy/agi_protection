<?php

namespace AgiBundle\Controller;

use AgiBundle\Entity\Agent;
use AgiBundle\Entity\ContratAgent;
use AgiBundle\Entity\Operation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AgiBundle\Form\AgentType;
use AgiBundle\Form\ContratAgentType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;

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
                if ($date_debut == null || $date_fin == null || $date_debut >= $date_fin) {
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
                if ($date_debut == null || $date_fin == null || $date_debut >= $date_fin) {
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

//https://gist.github.com/FabianSchmick/adcf75c439abda7e4342bca2dfa6e1e0

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


}
