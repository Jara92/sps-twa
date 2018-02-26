<?php

namespace EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        $authencation_utils = $this->get("security.authentication_utils");
        $error = $authencation_utils->getLastAuthenticationError();
        $last_username = $authencation_utils->getLastUsername();
        
       return $this->render("@Eshop\security\login.html.twig", array(
           "error" => $error,
           "last_username" => $last_username
       ));
    }
}
