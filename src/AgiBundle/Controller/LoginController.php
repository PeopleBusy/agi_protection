<?php

namespace AgiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends Controller
{

    public function loginAction(Request $request)
    {

        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        if($error != null) $error = "Nom d'utilisateur ou mot de passe incorrect!";
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('AgiBundle:Default:login/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));

    }

    public function logoutAction(Request $request)
    {


    }


}
