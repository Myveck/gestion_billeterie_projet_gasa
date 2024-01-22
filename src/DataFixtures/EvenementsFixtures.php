<?php

namespace App\DataFixtures;

use App\Entity\Evenements;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\String\Slugger\SluggerInterface;

class EvenementsFixtures extends Fixture
{

    public function __construct(private SluggerInterface $slugger)
    {}
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($event=0; $event < 20; $event++) { 
            $evenement = new Evenements();
            $evenement->setLibelle($faker->text(12));
            $evenement->setDescription($faker->text());
            $evenement->setSlug($this->slugger->slug($evenement->getLibelle()));
            $evenement->setPlaces(rand(50, 200));
            $evenement->setPrixN(rand(1000, 30000));
            $evenement->setPrixSV(rand(10000, 150000));
            $evenement->setPrixV(rand(25000, 250000));
            $date = new \DateTimeImmutable();
            $evenement->setDateE($date);
            // On cherche une reference de categorie
            $categorie = $this->getReference('cat-'.rand(0,3));
            $evenement->setCategorie($categorie);
            $manager->persist($evenement);

            $this->addReference('even-'.$event, $evenement);
    
            $manager->flush();
        }
    }
}
