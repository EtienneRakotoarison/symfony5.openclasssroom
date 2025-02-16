<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/halo", name="halo")
     */
    public function hello(): JsonResponse
    {
        dd('Hello PHP Symfony 5 🐘');
    }
}