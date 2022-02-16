<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fromtest
 *
 * @ORM\Table(name="fromtest")
 * @ORM\Entity
 */
class Fromtest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Noms", type="string", length=146, nullable=true)
     */
    private $noms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sexe", type="string", length=2, nullable=true)
     */
    private $sexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Unit_de_mesure", type="string", length=38, nullable=true)
     */
    private $unitDeMesure;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getNoms(): ?string
    {
        return $this->noms;
    }

    /**
     * @param string|null $noms
     */
    public function setNoms(?string $noms): void
    {
        $this->noms = $noms;
    }

    /**
     * @return string|null
     */
    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    /**
     * @param string|null $sexe
     */
    public function setSexe(?string $sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @return string|null
     */
    public function getUnitDeMesure(): ?string
    {
        return $this->unitDeMesure;
    }

    /**
     * @param string|null $unitDeMesure
     */
    public function setUnitDeMesure(?string $unitDeMesure): void
    {
        $this->unitDeMesure = $unitDeMesure;
    }


}
