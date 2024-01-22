<?php

namespace App\Repository;

use App\Entity\TypeBillets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeBillets>
 *
 * @method TypeBillets|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeBillets|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeBillets[]    findAll()
 * @method TypeBillets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeBilletsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeBillets::class);
    }

//    /**
//     * @return TypeBillets[] Returns an array of TypeBillets objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypeBillets
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
