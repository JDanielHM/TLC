<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class skeletonController extends AbstractController
{
    /**
     * @Route("/example", name="skelleton_example", methods={"GET"})
     */
    public function index()
    {
        return $this->render('tlc.html.twig');
    }
}