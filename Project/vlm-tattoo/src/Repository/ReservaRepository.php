<?php

namespace App\Repository;

use App\Entity\Reserva;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reserva|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reserva|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reserva[]    findAll()
 * @method Reserva[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reserva::class);
    }



    // /**
    //  * @return Reserva[] Returns an array of Reserva objects
    //  */

    public function findByDateField($from, $to)
    {
        return $this->createQueryBuilder('r')
            ->Where('r.fechaInicio BETWEEN :from AND :to')
            ->setParameter('from', $from )
            ->setParameter('to', $to)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findOneByUser($user_id): ?Reserva
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.cliente = :user_id')
            ->setParameter('user_id', $user_id)
            ->orderBy('r.id','desc')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        ;
    }

}
