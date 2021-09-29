<?php

namespace App\Repository;

use App\Entity\NewProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NewProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewProduct[]    findAll()
 * @method NewProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewProduct::class);
    }

    // /**
    //  * @return NewProduct[] Returns an array of NewProduct objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NewProduct
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
