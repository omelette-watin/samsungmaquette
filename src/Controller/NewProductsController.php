<?php

namespace App\Controller;

use App\Entity\NewProduct;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewProductsController extends AbstractController
{
    #[Route('/nouveautés', name: 'new_products')]
    public function index(EntityManagerInterface $em): Response
    {
        $products = $em->getRepository(NewProduct::class)->findAll();
        return $this->render('new_products/index.html.twig', [
            "products" => $products
        ]);
    }
}
