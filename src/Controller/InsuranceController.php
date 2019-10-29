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
}
