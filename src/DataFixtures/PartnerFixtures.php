<?php

namespace App\DataFixtures;

use App\Entity\Partner;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PartnerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $partner = new Partner();
        $partner->setName("IBM");
        $partner->setImage("/images/partners/ibm.png");
        $partner->setLink("https://www.ibm.com/fr-fr");
        $manager->persist($partner);
        $partner = new Partner();
        $partner->setName("Microsoft");
        $partner->setImage("/images/partners/microsoft.png");
        $partner->setLink("https://www.microsoft.com/fr-fr");
        $manager->persist($partner);
        $partner = new Partner();
        $partner->setName("Cisco");
        $partner->setImage("/images/partners/cisco.png");
        $partner->setLink("https://www.cisco.com/c/fr_fr/index.html");
        $manager->persist($partner);
        $partner = new Partner();
        $partner->setName("Google");
        $partner->setImage("/images/partners/google.png");
        $partner->setLink("google.com");
        $manager->persist($partner);
        $partner = new Partner();
        $partner->setName("Apple");
        $partner->setImage("/images/partners/apple.png");
        $partner->setLink("https://www.apple.com/fr/");
        $manager->persist($partner);
        $partner = new Partner();
        $partner->setName("Android");
        $partner->setImage("/images/partners/android.png");
        $partner->setLink("https://www.android.com/intl/fr_fr/");
        $manager->persist($partner);

        $partner = new Partner();
        $partner->setName("Xbox");
        $partner->setImage("/images/partners/xbox.png");
        $partner->setLink("https://www.xbox.com/fr-FR");
        $manager->persist($partner);
        $partner = new Partner();
        $partner->setName("Facebook");
        $partner->setImage("/images/partners/fb.png");
        $partner->setLink("facebook.com");
        $manager->persist($partner);
        $partner = new Partner();
        $partner->setName("HP");
        $partner->setImage("/images/partners/hp.png");
        $partner->setLink("https://www.hp.com/fr-fr/home.html");
        $manager->persist($partner);
        $partner = new Partner();
        $partner->setName("Discord");
        $partner->setImage("/images/partners/discord.png");
        $partner->setLink("https://discord.com/");
        $manager->persist($partner);

        $manager->flush();
    }
}
