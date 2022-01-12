<?php

namespace App\Repository;

use App\Entity\TestDev;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\AbstractQuery;
use Doctrine\Persistence\ManagerRegistry;


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

    /**
     * @return TestDev[]
     */
    public function findByInfo(string $nom, string $Unit_de_mesure, string $sexe, int $age): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'select t.noms
            from App\Entity\TestDev t
           where t.noms = :nom AND
            t.unitDeMesure = :unitDeMesure AND
            (t.sexe= :sexe OR t.sexe = :vide)
            AND
            ((t.thresholdAgeMin <= :age AND  t.thresholdAgeMax >= :age)
            OR
            (t.thresholdAgeMin = 0 AND  t.thresholdAgeMax = 0 )
            OR(:age > t.thresholdAgeMin AND  t.thresholdAgeMax = 0 )
            )')
            ->setParameter('nom', $nom)
            ->setParameter('unitDeMesure', $Unit_de_mesure)
            ->setParameter('sexe', $sexe)
            ->setParameter('age', $age)
            ->setParameter('vide', "");

        return $query->getResult();
    }

}

