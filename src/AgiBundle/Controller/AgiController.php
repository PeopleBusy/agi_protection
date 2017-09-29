<?php

namespace AgiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AgiController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        $agentRepository = $this->getDoctrine()
            ->getRepository('AgiBundle:Agent');

        $nbAgents = $agentRepository->findNbAgents('1');

        $siteRepository = $this->getDoctrine()
            ->getRepository('AgiBundle:Site');

        $nbSites = $siteRepository->findNbSites('1');

        $vacationRepository = $this->getDoctrine()
            ->getRepository('AgiBundle:Vacation');

        $nbVacations = $vacationRepository->findNbVacations('1');

        return $this->render('AgiBundle:Default:index.html.twig', array('nbAgents' => $nbAgents,
                                                'nbSites' => $nbSites, 'nbVacations' => $nbVacations));
    }
}
