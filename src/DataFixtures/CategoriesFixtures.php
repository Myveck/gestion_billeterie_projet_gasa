<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;
use Faker;

class CategoriesFixtures extends Fixture
{
    private $counter = 0;

    public function __construct(private SluggerInterface $slugger)
    {}
    public function load(ObjectManager $manager): void
    {
        $this->createCategorie('Musique', $manager);
        $this->createCategorie('Sport', $manager);
        $this->createCategorie('Show', $manager);
        $this->createCategorie('Chill', $manager);
        
    }

    public function createCategorie(string $libelle, ObjectManager $manager): Categories
    {
        $faker = Faker\Factory::create('fr_FR');

        $categorie = new Categories();
        $categorie->setLibelle($libelle);
        $categorie->setSlug($this->slugger->slug($categorie->getLibelle())->lower());
        $categorie->setDescription($faker->text());
        $manager->persist($categorie);
        $manager->flush();

        $this->addReference('cat-'.$this->counter, $categorie);
        $this->counter++;

        return $categorie;
    }
}
