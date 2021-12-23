<?php

namespace App\Repository;

use App\Entity\TestDev;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Integer;


/**
 * @method TestDev|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestDev|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestDev[]    findAll()
 * @method TestDev[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestDevRepository extends ServiceEntityRepository
{
    /**
     * TestDevRepository constructor
     * @param ManagerRegistry $registry
     */

    public function __construct(ManagerRegistry $registry,)
    {
        parent::__construct($registry, TestDev::class);
    }
}

