<?php

namespace App\DataFixtures;

use App\Entity\Billets;
use App\Entity\TypeBillets;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;
use Faker;

class BilletsFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(private SluggerInterface $slugger)
    {}
    public function load(ObjectManager $manager): void
    {
        $prix = 0;
        $faker = Faker\Factory::create('fr_FR');
        for ($bil=0; $bil < 20; $bil++) { 
            $billet = new Billets();
            $rand = rand(1,3);
            $type = $this->getReference('type-'.$rand);
            $billet->setTypeBillet($type);
            if($rand == 2) {
                $prix = rand(1000, 3000);
            }elseif ($rand == 1) {
                $prix = rand(10000, 150000);
            } else {
                $prix = rand(25000, 250000);
            }
            $billet->setPrix($prix);
            $billet->setSlug($this->slugger->slug($faker->text(5)));
            $manager->persist($billet);
    
            $manager->flush();
        }
    }

    public function getDependencies(): array
    {
        return [
            CategoriesFixtures::class,
            EvenementsFixtures::class,
            TypeBilletsFixtures::class
        ];
    }
}
