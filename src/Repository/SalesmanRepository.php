<?php

namespace App\Repository;

use App\Entity\Salesman;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Salesman|null find($id, $lockMode = null, $lockVersion = null)
 * @method Salesman|null findOneBy(array $criteria, array $orderBy = null)
 * @method Salesman[]    findAll()
 * @method Salesman[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalesmanRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Salesman::class);
    }

    // /**
    //  * @return Salesman[] Returns an array of Salesman objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Salesman
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
