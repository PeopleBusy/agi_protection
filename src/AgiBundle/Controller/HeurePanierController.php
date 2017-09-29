<?php

namespace AgiBundle\Controller;

use AgiBundle\Entity\HeurePanier;
use AgiBundle\Entity\ContratSite;
use AgiBundle\Entity\Operation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AgiBundle\Form\HeurePanierType;
use Symfony\Component\HttpFoundation\Request;
use \DateTime;
use \DateTimeImmutable;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class HeurePanierController extends Controller
{
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function modifierHeureAction(Request $request, $id)
    {
        $heure = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier')
            ->find($id);

        if (!$heure) {
            throw $this->createNotFoundException(
                'Aucune heure trouvée avec l\id ' . $id
            );
        }

        $form = $this->createForm(HeurePanierType::class, $heure, array(
            'action' => $this->generateUrl('modifier_config_heure', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $heure = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($heure);

            $em->flush();

            $repository = $this->getDoctrine()
                ->getRepository('AgiBundle:HeurePanier');

            $heurespaniers = $repository->findAll();

            return $this->render('AgiBundle:Default:heurepanier/list.html.twig', array('form' => $form->createView(),
                'success' => 'Modification réussie!', 'heuresPaniers' => $heurespaniers));

        }

        return $this->render('AgiBundle:Default:heurepanier/edit.html.twig', array('form' => $form->createView()));

    }

    public function configurerHeureAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AgiBundle:HeurePanier');

        $heurespaniers = $repository->findAll();

        return $this->render('AgiBundle:Default:heurepanier/list.html.twig', array('heuresPaniers' => $heurespaniers));

    }



}
