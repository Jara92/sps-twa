<?php

namespace EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use EshopBundle\Form\RegistrationType;
use EshopBundle\Entity\User;

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
    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request){
        $user = new User();
        
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        $error = "";
        if($form->isSubmitted() && $form->isValid()){
            try{
                $user->setRole("ROLE_USER");
                $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT, array("cost" => 12)));
                $entity_manager = $this->getDoctrine().getManager();
                $entity_manager->persist($user);
                $entity_manager->flush(); // pošle změny do databáze
                $error = ("Registrace se podařila.");
            } catch (Exception $ex) {
                $error = ("Registrace se nezdařila.");
            }
        }
       return $this->render("@Eshop\security\register.html.twig", array(
           "form" => $form->createView(),
           "error" => $error
       ));
    }
}
