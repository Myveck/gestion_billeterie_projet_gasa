<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class UsersFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        private SluggerInterface $slugger
    ){}
    public function load(ObjectManager $manager): void
    {
        $admin = new Users;
        $admin->setEmail('admin@gmail.com');
        $admin->setPrenom('Admin');
        $admin->setNom('NomAdmin');
        $admin->setTelephone('54 90 90 90');
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'qwerty')
        );
        $admin->setRoles(['ROLE_ADMIN']);

        $manager->persist($admin);

        $manager->flush();
    }
}
