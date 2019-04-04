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
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    /**
     * @Route("/test/known")
     */
    public function detail()
    {
        return $this->render('test/detail.html.twig',[
            'controller_name' => 'TestController',
            'user' => [
                'username' => 'andrejmaly',
                'password' => 'velicesložitéheslo',
                'name' => 'Andrej Malý',
                'age' => 20
            ]
        ]);
    }


}
