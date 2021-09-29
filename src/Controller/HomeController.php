<?php

namespace App\Controller;

use App\Entity\Partner;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index() : Response
    {
        return $this->redirectToRoute('home');
    }

    #[Route('/accueil', name: 'home')]
    public function home(EntityManagerInterface $em): Response
    {
        $partners = $em->getRepository(Partner::class)->findAll();
        return $this->render('home/index.html.twig', [
            "partners" => $partners
        ]);
    }

}
