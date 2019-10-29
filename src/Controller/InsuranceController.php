<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InsuranceController extends AbstractController
{
    /**
     * @Route("/insurance", name="insurance")
     */
    public function index()
    {
        return $this->render('insurance/index.html.twig', [
            'controller_name' => 'InsuranceController',
        ]);
    }
    
       /**
     * @Route("/insurance/compare", name="insurance_compare")
     */
    public function compare()
    {
        return $this->render('insurance/index.html.twig', [
            'controller_name' => 'InsuranceController',
        ]);
    }
    
     /**
     * @Route("/insurance/compare/makereferral", name="insurance_makereferral")
     */
    public function makereferral()
    {
        return $this->render('insurance/index.html.twig', [
            'controller_name' => 'InsuranceController',
        ]);
    }
}
