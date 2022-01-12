<?php

namespace App\Repository;


use App\Entity\Mainset;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Mainset|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mainset|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mainset[]    findAll()
 * @method Mainset[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MainsetRepository extends ServiceEntityRepository
{


    /**
     * TestDevRepository constructor
     * @param ManagerRegistry $registry
     */

    public function __construct(ManagerRegistry $registry,)
    {
        parent::__construct($registry, Mainset::class);
    }

    /**
     * @param string $nom
     * @param string $Unit_de_mesure
     * @param string $sexe
     * @param int $age
     * @return array
     */
    public function getTestBy(string $nom, string $Unit_de_mesure, string $sexe, int $age): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'select t
            from App\Entity\Mainset t
           where t.noms = :nom AND
            t.unitDeMesure IN(:unitDeMesure,:vide) AND
            (t.sexe in( :sexe,:vide))
            AND
            ((t.thresholdAgeMin <= :age AND  t.thresholdAgeMax >= :age)
            OR
            (t.thresholdAgeMin = :vide AND  t.thresholdAgeMax = :vide )
            OR(:age > t.thresholdAgeMin AND  t.thresholdAgeMax = :vide )
            )'
        )
            ->setParameter('nom', $nom)
            ->setParameter('unitDeMesure', $Unit_de_mesure)
            ->setParameter('sexe', $sexe)
            ->setParameter('age', $age)
            ->setParameter('vide', ' ');

        return $query->getResult();
    }

}

