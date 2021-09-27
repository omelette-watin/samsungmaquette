<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewProductsController extends AbstractController
{
    #[Route('/new/products', name: 'new_products')]
    public function index(): Response
    {
        return $this->render('new_products/index.html.twig', [
            'controller_name' => 'NewProductsController',
        ]);
    }
}
