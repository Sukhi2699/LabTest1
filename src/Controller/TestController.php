<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return $this->render('test/homepage.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    public function contact()
    {
        return $this->render('test/ContactDetails.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
