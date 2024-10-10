<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * Hello world, avec Twig cette fois :)
     *
     * @Route("/hello/{name}", name="hello")
     */
    public function hello($name): Response
    {
        return $this->render('test/index.html.twig', ['name' => $name]);
    }
}
