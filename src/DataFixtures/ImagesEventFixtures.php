<?php

namespace App\DataFixtures;

use App\Entity\ImagesEvent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ImagesEventFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($img=0; $img < 10; $img++) { 
            $imagesevent = new ImagesEvent();
            $imagesevent->setNom($faker->image(null, 640, 480));
            $event = $this->getReference('even-'.rand(0, 19));
            $imagesevent->setEvenement($event);
    
            $manager->persist($imagesevent);
    
            $manager->flush();
        }
    }
}
