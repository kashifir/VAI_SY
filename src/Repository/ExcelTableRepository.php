<?php

namespace App\Repository;


use App\Entity\ExcelTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\AbstractQuery;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method ExcelTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExcelTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExcelTable[]    findAll()
 * @method ExcelTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcelTableRepository extends ServiceEntityRepository
{


    /**
     * TestDevRepository constructor
     * @param ManagerRegistry $registry
     */

    public function __construct(ManagerRegistry $registry,)
    {
        parent::__construct($registry, ExcelTable::class);
    }

    /**
     * @return ExcelTable[]
     */
    public function getTestBy(string $nom, string $Unit_de_mesure, string $sexe, int $age): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'select t.nomsEn
            from App\Entity\ExcelTable t
           where t.nomsEn = :nom AND
            t.uniteDeMesure = :unitDeMesure AND
            (t.sexe= :sexe OR t.sexe = :vide)
            AND
            ((t.seuilInferieuDage <= :age AND  t.seuilSuperieurDage>= :age)
            OR
            (t.seuilInferieuDage = 0 AND  t.seuilSuperieurDage = 0 )
            OR(:age > t.seuilInferieuDage AND  t.seuilSuperieurDage = 0 )
            )')
            ->setParameter('nom', $nom)
            ->setParameter('unitDeMesure', $Unit_de_mesure)
            ->setParameter('sexe', $sexe)
            ->setParameter('age', $age)
            ->setParameter('vide', "");

        return $query->getResult();
    }

}

