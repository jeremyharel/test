<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Description of AccueilController
 *
 * @author jeremy
 */


class AccueilController extends AbstractController {

    /**
     * @Route("/", name="acceuil")
     * @return Response
     */
    
    public function index(): Response{
        return new Response($this->render("pages/accueil.html.twig"));
    }
    //put your code here
}
