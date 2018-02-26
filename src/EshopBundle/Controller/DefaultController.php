<?php

namespace EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    // rout definuje url adresu
    public function indexAction()
    {
        // Instance databázového připojení; Nese informace o databázi...
        $entity_manager = $this->getDoctrine()->getManager();
        // repozitář pro práci
        $product_repository = $entity_manager->getRepository("EshopBundle:Product");
        // vyhledá všechny záznamy v dané tabulce
        $products = $product_repository->findAll();
        
        // array - Parametr šablony
        return $this->render('@Eshop\Default\index.html.twig', array(
            "products" => $products,
            "password" => password_hash("heslo", PASSWORD_BCRYPT, array("cost" => 12))
        ));
    }
}
