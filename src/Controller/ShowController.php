<?php

/*
$repository = $doctrine->getRepository(tour::class);
// query for a single tour by its primary key (usually "id")
$tour = $repository->find($id);
// dynamic method names to find a single tour based on a column value
$tour = $repository->findOneById($id);
$tour = $repository->findOneByName('Keyboard');
// dynamic method names to find a group of tours based on a column value
$tours = $repository->findByPrice(19);
// find *all* tours
$tours = $repository->findAll(); 
*/

namespace App\Controller;

use App\Entity\AllInclusiveTours;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


class ShowController extends AbstractController
{
    #[Route('/show/{id}', name: 'show-tours')]
    public function showTours($id, ManagerRegistry $doctrine)
    {

        $tour = $doctrine
            ->getRepository(AllInclusiveTours::class)
            ->find($id);
        if (!$tour) {
            throw $this->createNotFoundException(
                'No tour found for id ' . $id
            );
        } else {
            return new Response('Details from the tour with id ' . $id . ", tour destination is " . $tour->getDestination() . " and it cost " . $tour->getPrice() . "€");
        }
    }

    #[Route('/home', name: 'home-page')]
    public function showToursInHome(ManagerRegistry $doctrine)
    {
        $tours = $doctrine
            ->getRepository(AllInclusiveTours::class)
            ->findAll(); // this variable $products will store the result of running a query to find all the products
        return $this->render('home.html.twig', array("tours" => $tours));
        //sends the variable that have all the products as an array of objects to the index.html.twig page
    }
}
