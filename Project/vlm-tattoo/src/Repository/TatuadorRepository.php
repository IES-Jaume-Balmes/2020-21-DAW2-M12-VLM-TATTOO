<?php

namespace App\Repository;

use App\Entity\Tatuador;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tatuador|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tatuador|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tatuador[]    findAll()
 * @method Tatuador[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TatuadorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tatuador::class);
    }

    // /**
    //  * @return Tatuador[] Returns an array of Tatuador objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tatuador
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
