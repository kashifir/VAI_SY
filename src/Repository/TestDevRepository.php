<?php

namespace App\Repository;

use App\Entity\TestDev;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
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

    /**
     * @return TestDev[]
     */
    public function findByInfo(string $nom, string $Unit_de_mesure, string $sexe, int $age): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'select t
            from App\Entity\TestDev t
           where t.noms = :nom AND
            t.unitDeMesure = :unitDeMesure AND
            (t.sexe= :sexe OR t.sexe = :vide)
            AND 
            ((:age >= t.thresholdAgeMin  AND :age <= t.thresholdAgeMmx ) 
            OR 
            (t.thresholdAgeMin = :vide OR  t.thresholdAgeMmx = :vide))
            ')
            ->setParameter('nom', $nom)
            ->setParameter('unitDeMesure', $Unit_de_mesure)
            ->setParameter('sexe', $sexe)
            ->setParameter('vide', "")
            ->setParameter('age', $age)
            ->setMaxResults(1);

       
        return $query->getResult(AbstractQuery::HYDRATE_ARRAY);
    }

}

