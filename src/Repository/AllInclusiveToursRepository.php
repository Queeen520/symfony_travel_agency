<?php

namespace App\Repository;

use App\Entity\AllInclusiveTours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AllInclusiveTours>
 *
 * @method AllInclusiveTours|null find($id, $lockMode = null, $lockVersion = null)
 * @method AllInclusiveTours|null findOneBy(array $criteria, array $orderBy = null)
 * @method AllInclusiveTours[]    findAll()
 * @method AllInclusiveTours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllInclusiveToursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AllInclusiveTours::class);
    }

    public function save(AllInclusiveTours $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AllInclusiveTours $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return AllInclusiveTours[] Returns an array of AllInclusiveTours objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AllInclusiveTours
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
