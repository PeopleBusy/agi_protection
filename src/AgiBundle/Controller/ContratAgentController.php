<?php

namespace AgiBundle\Controller;

use AgiBundle\Entity\Agent;
use AgiBundle\Entity\ContratAgent;
use AgiBundle\Entity\Operation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AgiBundle\Form\AgentType;
use AgiBundle\Form\ContratAgentType;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;

class ContratAgentController extends Controller
{
    public function ajouterAction(Request $request)
    {

        $form = $this->createForm(ContratAgentType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /*$contratagent = $form->getData();

            $agent = clone $contratagent->getAgent();

            $typeContrat = $agent->getTypeContrat();
            if($typeContrat == "CDD"){
                //CDD
                $date_debut = $contratagent->getDateDebut();
                $date_fin = $contratagent->getDateFin();
                if($date_debut == null || $date_fin == null || $date_debut >= $date_fin){
                    return $this->render('AgiBundle:Default:agent/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Veuillez vérifier les dates saisies!'));
                }

                $date_embauche = new DateTime();

                $date_debut = DateTime::createFromFormat('d/m/Y', $date_debut);
                $date_fin = DateTime::createFromFormat('d/m/Y', $date_fin);

            }else{
                //CDI
                $date_embauche = $agent->getDateEmbauche();
                $date_embauche = DateTime::createFromFormat('d/m/Y', $date_embauche);
                if($date_embauche == null || $date_embauche == ""){
                    return $this->render('AgiBundle:Default:agent/new.html.twig', array('form' => $form->createView(), 'erreur' => 'Veuillez saisir la date d\'embauche!'));
                }
            }

            $agent->setDateEmbauche($date_embauche);
            $agent->setEtat("1");

            $operation = new Operation();
            $operation->setAgent($agent);
            $operation->setLibelle("Enregistrement");
            $operation->setDateHeure(new DateTime());
            $operation->setAuteur("admin");
            $operation->setTypeOperation(1); //1=enregistement, 2=modification, 0=suppression

            $em = $this->getDoctrine()->getManager();
            $em->persist($agent);
            $em->persist($operation);

            if($typeContrat == "CDD"){
                //CDD
                $contratagent->setAgent($agent);
                $contratagent->setDateDebut($date_debut);
                $contratagent->setDateFin($date_fin);
                $contratagent->setEtat("1");
                $em->persist($contratagent);
            }

            $em->flush();

            $form = $this->createForm(ContratAgentType::class, new ContratAgent(), array(
                'action' => $this->generateUrl('ajouter_agent'),
                'method' => 'POST',
            ));*/

            return $this->render('AgiBundle:Default:agent/new.html.twig', array('form' => $form->createView(), 'success' => 'Enregistrement réussi!'));

        }else{
            //$form->addError();
        }

        return $this->render('AgiBundle:Default:agent/new.html.twig', array('form' => $form->createView()));

    }


    public function modifierAction(Request $request, $id)
    {
        $agent = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent')
            ->find($id);

        if (!$agent) {
            throw $this->createNotFoundException(
                'Aucun agent trouvé avec l\id '.$id
            );
        }

        $form = $this->createForm(AgentType::class, $agent, array(
            'action' => $this->generateUrl('modifier_agent', array('id' => $id)),
            'method' => 'POST',
        ));

        return $this->render('AgiBundle:Default:agent/edit.html.twig', array('form' => $form->createView()));

    }

    public function supprimerAction(Request $request, $id)
    {
        $agent = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent')
            ->find($id);

        if (!$agent) {
            throw $this->createNotFoundException(
                'Aucun agent trouvé avec l\id '.$id
            );
        }

        $form = $this->createForm(AgentType::class, $agent, array(
            'action' => $this->generateUrl('supprimer_agent', array('id' => $id)),
            'method' => 'POST',
        ));

        return $this->render('AgiBundle:Default:agent/delete.html.twig', array('form' => $form->createView()));

    }

    public function listerAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent');

        $agents = $repository->findAll();

        return $this->render('AgiBundle:Default:agent/list.html.twig', array('agents' => $agents));

    }


}
