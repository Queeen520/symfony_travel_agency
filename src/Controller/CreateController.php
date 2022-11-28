<?php

namespace App\Controller;

use App\Entity\AllInclusiveTours;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


class CreateController extends AbstractController
{
    #[Route('/create', name: 'app_create')]
    public function create(): Response
    {
        return $this->render('create/index.html.twig', [
            'controller_name' => 'CreateController',
        ]);
    }
}
