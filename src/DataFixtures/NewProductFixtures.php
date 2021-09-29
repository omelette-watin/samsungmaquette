<?php

namespace App\DataFixtures;

use App\Entity\NewProduct;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class NewProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $products = new NewProduct();
        $products->setName("Galaxy S30");
        $products->setImage("images/products/phones.png");
        $products->setGarantie(4);
        $products->setPrice(1999);
        $products->setDescription("- 32 Go de RAM");
        $products->setDescription2("- 256 Go de Stockage ...");

        $manager->persist($products);
        $products = new NewProduct();
        $products->setName("Galaxy S9");
        $products->setImage("images/products/galaxy.png");
        $products->setGarantie(2);
        $products->setPrice(799);
        $products->setDescription("- 16 Go de RAM");
        $products->setDescription2("- 64 Go de stockage ...");

        $manager->persist($products);
        $products = new NewProduct();
        $products->setName("Galaxy S8");
        $products->setImage("images/products/phone.png");
        $products->setGarantie(1);
        $products->setPrice(499);
        $products->setDescription("- 16 Go de RAM");
        $products->setDescription2("- 64 Go de Stockage ...");

        $manager->persist($products);
        $products = new NewProduct();
        $products->setName("Driver RT56x");
        $products->setImage("images/products/driver.png");
        $products->setGarantie(3);
        $products->setPrice(99);
        $products->setDescription("- 16 Go de RAM");
        $products->setDescription2("- 144 Ghz ...");

        $manager->persist($products);


        $manager->flush();
    }
}
