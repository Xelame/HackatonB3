<?php

namespace App\Repository;

use App\Entity\RelUserEtat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RelUserEtat>
 *
 * @method RelUserEtat|null find($id, $lockMode = null, $lockVersion = null)
 * @method RelUserEtat|null findOneBy(array $criteria, array $orderBy = null)
 * @method RelUserEtat[]    findAll()
 * @method RelUserEtat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RelUserEtatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RelUserEtat::class);
    }

//    /**
//     * @return RelUserEtat[] Returns an array of RelUserEtat objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RelUserEtat
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
