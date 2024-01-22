<?php

namespace App\DataFixtures;

use App\Entity\TypeBillets;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class TypeBilletsFixtures extends Fixture
{
    private $counter = 1;
    public function __construct(private SluggerInterface $slugger)
    {}
    public function load(ObjectManager $manager): void
    {
        $this->createTypeBillet('VIP', $manager);
        $this->createTypeBillet('Semi-VIP',  $manager);
        $this->createTypeBillet('normal',  $manager);
    }

    public function createTypeBillet(string $nom, ObjectManager $manager)
    {
        $typeBillet = new TypeBillets();
        $typeBillet->setLibelle($nom);
        $evenement = $this->getReference('even-'.rand(0, 19));
        $typeBillet->setEvenement($evenement);
        $typeBillet->setSlug($this->slugger->slug($typeBillet->getLibelle()));
        $manager->persist($typeBillet);

        $this->addReference('type-'.$this->counter, $typeBillet);
        $this->counter++;

        $manager->flush();
    }
}
