<?php

namespace App\Controller;

use App\Entity\AllInclusiveTours;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


class ToursController extends AbstractController
{
    #[Route('/tours', name: 'tours')]
    public function showTours(ManagerRegistry $doctrine): Response
    {
        // you can fetch the ManagerRegistry via $doctrine()
        $em = $doctrine->getManager();
        $tour = new AllInclusiveTours(); // here we will create an object from our class AllInclusiveTours.
        $tour->setHotel('Another Test Hotel'); // in our Product class we have a set function for each column in our db
        $tour->setNights(7);
        $tour->setPrice(959.99);
        $tour->setDestination('California');


        // tells Doctrine you want to (eventually) save the entry (no queries yet)
        $em->persist($tour);
        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
        return new Response('Saved new product with id ' . $tour->getId());
    }
}
