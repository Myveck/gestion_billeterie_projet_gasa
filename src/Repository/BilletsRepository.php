<?php

namespace App\Repository;

use App\Entity\Billets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Billets>
 *
 * @method Billets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Billets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Billets[]    findAll()
 * @method Billets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BilletsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Billets::class);
    }

//    /**
//     * @return Billets[] Returns an array of Billets objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Billets
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
