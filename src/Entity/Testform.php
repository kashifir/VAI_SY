<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Testform
 *
 * @ORM\Table(name="testform")
 * @ORM\Entity
 */
class Testform
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

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
     * @ORM\Column(name="nom", type="string", length=145, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sexs", type="string", length=1, nullable=true)
     */
    private $sexs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Unit_de_mesure", type="string", length=37, nullable=true)
     */
    private $unitDeMesure;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=50, nullable=false)
     */
    private $value;


}
