<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BienvenueController extends AbstractController 
{ 
    
    
    /**
     * @Route("/", name="app_bienvenue", methods="GET")
     */
    public function index(): Response
    {
        
       
        return $this->render('bienvenue/index.html.twig', [
            'controller_name' => 'BienvenueController',
           
        ]);
    }
    
   
    

}
