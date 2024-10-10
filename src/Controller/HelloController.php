<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): JsonResponse
    {
        dd('Welcome to Mainccscscs!');
    }

    /**
     * @Route("/hello", name="hello")
     */
    public function hello(): JsonResponse
    {
        dd('Welcome to your new controller!');
    }
}