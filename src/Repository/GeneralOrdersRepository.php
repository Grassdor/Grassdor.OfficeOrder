<?php

namespace App\Repository;

use App\Entity\GeneralOrders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GeneralOrders>
 *
 * @method GeneralOrders|null find($id, $lockMode = null, $lockVersion = null)
 * @method GeneralOrders|null findOneBy(array $criteria, array $orderBy = null)
 * @method GeneralOrders[]    findAll()
 * @method GeneralOrders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeneralOrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GeneralOrders::class);
    }

    //    /**
    //     * @return GeneralOrders[] Returns an array of GeneralOrders objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('g.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?GeneralOrders
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
