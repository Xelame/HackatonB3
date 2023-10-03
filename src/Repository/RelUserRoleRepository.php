<?php

namespace App\Repository;

use App\Entity\RelUserRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RelUserRole>
 *
 * @method RelUserRole|null find($id, $lockMode = null, $lockVersion = null)
 * @method RelUserRole|null findOneBy(array $criteria, array $orderBy = null)
 * @method RelUserRole[]    findAll()
 * @method RelUserRole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RelUserRoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RelUserRole::class);
    }

//    /**
//     * @return RelUserRole[] Returns an array of RelUserRole objects
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

//    public function findOneBySomeField($value): ?RelUserRole
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
