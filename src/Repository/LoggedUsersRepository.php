<?php

namespace App\Repository;

use App\Entity\LoggedUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LoggedUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method LoggedUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method LoggedUsers[]    findAll()
 * @method LoggedUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoggedUsersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LoggedUsers::class);
    }

//    /**
//     * @return LoggedUsers[] Returns an array of LoggedUsers objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LoggedUsers
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
