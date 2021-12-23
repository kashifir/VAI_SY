<?php

namespace App\Entity;

use App\Repository\TestDevRepository;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Internal\TentativeType;


/**
 * TestDev
 *
 * @ORM\Table(name="test_dev")
 * @ORM\Entity(repositoryClass=TestDevRepository::class)
 */
class TestDev implements \Countable

{
    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private ?int $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type_de_donne", type="string", length=100, nullable=true)
     */
    private ?string $typeDeDonne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Module", type="string", length=100, nullable=true)
     */
    private ?string $module;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaires__informations", type="text", length=65535, nullable=true)
     */
    private ?string $commentairesInformations;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaires__informations_2", type="text", length=65535, nullable=true)
     */
    private ?string $commentairesInformations2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaires__informations_3", type="text", length=65535, nullable=true)
     */
    private ?string $commentairesInformations3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Noms", type="text", length=0, nullable=true)
     */
    private ?string $noms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Reference_SCTID", type="string", length=100, nullable=true)
     */
    private ?string $referenceSctid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Detail", type="string", length=100, nullable=true)
     */
    private ?string $detail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Data_category", type="string", length=100, nullable=true)
     */
    private ?string $dataCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Period_of_validity", type="string", length=100, nullable=true)
     */
    private ?string $periodOfValidity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Invalidation_increment", type="string", length=100, nullable=true)
     */
    private ?string $invalidationIncrement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sexe", type="string", length=100, nullable=true)
     */
    private ?string $sexe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="threshold_age_min", type="integer", nullable=true)
     */
    private ?int $thresholdAgeMin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="threshold_age_mmx", type="integer", nullable=true)
     */
    private ?int $thresholdAgeMmx;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Data_Format", type="string", length=100, nullable=true)
     */
    private ?string $dataFormat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Unit_de_mesure", type="string", length=100, nullable=true)
     */
    private ?string $unitDeMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold_min", type="string", length=100, nullable=true)
     */
    private ?string $thresholdMin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold_max", type="string", length=100, nullable=true)
     */
    private ?string $thresholdMax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition1", type="string", length=100, nullable=true)
     */
    private ?string $condition1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre", type="string", length=100, nullable=true)
     */
    private ?string $barre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $points1DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition2_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $condition2Barre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points2_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $points2Barre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_3_de_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $condition3DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_3_de_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $points3DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_4_de_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $condition4DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_4_de_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $points4DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_5_de_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $condition5DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_5_de_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $points5DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_6_de_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $condition6DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_6_de_Barre_1", type="string", length=100, nullable=true)
     */
    private ?string $points6DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $barre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $points1DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_2_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $condition2DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_2_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $points2DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_3_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $condition3DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_3_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $points3DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_4_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $condition4DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_4_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $points4DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_5_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $condition5DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_5_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $points5DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_6_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $condition6DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_6_de_Barre_2", type="string", length=100, nullable=true)
     */
    private ?string $points6DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $barre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_diffrente_de_condition_1", type="string", length=100, nullable=true)
     */
    private ?string $conditionDiffrenteDeCondition1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_1bis_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $condition1bisDeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $points1DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_2_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $condition2DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_2_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $points2DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_3_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $condition3DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_3_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $points3DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_4_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $condition4DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_4_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $points4DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_5_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $condition5DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_5_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $points5DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_6_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $condition6DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_6_de_Barre_3", type="string", length=100, nullable=true)
     */
    private ?string $points6DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre_4", type="string", length=100, nullable=true)
     */
    private ?string $barre4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Barre_4", type="string", length=100, nullable=true)
     */
    private ?string $points1DeBarre4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre_5", type="string", length=100, nullable=true)
     */
    private ?string $barre5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Barre_5", type="string", length=100, nullable=true)
     */
    private ?string $points1DeBarre5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marker_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $markerSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $points1DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_2_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $condition2DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_2_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $points2DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_3_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $condition3DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_3_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $points3DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_4_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $condition4DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_4_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $points4DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_5_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $condition5DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_5_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $points5DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_6_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $condition6DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_6_de_Markers_spcifiques_1", type="string", length=100, nullable=true)
     */
    private ?string $points6DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marker_spcifiques_2", type="string", length=100, nullable=true)
     */
    private ?string $markerSpcifiques2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Markers_spcifiques_2", type="string", length=100, nullable=true)
     */
    private ?string $points1DeMarkersSpcifiques2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marker_spcifiques_3", type="string", length=100, nullable=true)
     */
    private ?string $markerSpcifiques3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Markers_spcifiques_3", type="string", length=100, nullable=true)
     */
    private ?string $points1DeMarkersSpcifiques3;

    /**
     * @return string|null
     */
    public function getBarre(): ?string
    {
        return $this->barre;
    }

    /**
     * @param string|null $barre
     */
    public function setBarre(?string $barre): void
    {
        $this->barre = $barre;
    }

    /**
     * @return string|null
     */
    public function getBarre2(): ?string
    {
        return $this->barre2;
    }

    /**
     * @param string|null $barre2
     */
    public function setBarre2(?string $barre2): void
    {
        $this->barre2 = $barre2;
    }

    /**
     * @return string|null
     */
    public function getBarre3(): ?string
    {
        return $this->barre3;
    }

    /**
     * @param string|null $barre3
     */
    public function setBarre3(?string $barre3): void
    {
        $this->barre3 = $barre3;
    }

    /**
     * @return string|null
     */
    public function getBarre4(): ?string
    {
        return $this->barre4;
    }

    /**
     * @param string|null $barre4
     */
    public function setBarre4(?string $barre4): void
    {
        $this->barre4 = $barre4;
    }

    /**
     * @return string|null
     */
    public function getBarre5(): ?string
    {
        return $this->barre5;
    }

    /**
     * @param string|null $barre5
     */
    public function setBarre5(?string $barre5): void
    {
        $this->barre5 = $barre5;
    }

    /**
     * @return string|null
     */
    public function getCommentairesInformations(): ?string
    {
        return $this->commentairesInformations;
    }

    /**
     * @param string|null $commentairesInformations
     */
    public function setCommentairesInformations(?string $commentairesInformations): void
    {
        $this->commentairesInformations = $commentairesInformations;
    }

    /**
     * @return string|null
     */
    public function getCommentairesInformations2(): ?string
    {
        return $this->commentairesInformations2;
    }

    /**
     * @param string|null $commentairesInformations2
     */
    public function setCommentairesInformations2(?string $commentairesInformations2): void
    {
        $this->commentairesInformations2 = $commentairesInformations2;
    }

    /**
     * @return string|null
     */
    public function getCommentairesInformations3(): ?string
    {
        return $this->commentairesInformations3;
    }

    /**
     * @param string|null $commentairesInformations3
     */
    public function setCommentairesInformations3(?string $commentairesInformations3): void
    {
        $this->commentairesInformations3 = $commentairesInformations3;
    }

    /**
     * @return string|null
     */
    public function getCondition1(): ?string
    {
        return $this->condition1;
    }

    /**
     * @param string|null $condition1
     */
    public function setCondition1(?string $condition1): void
    {
        $this->condition1 = $condition1;
    }

    /**
     * @return string|null
     */
    public function getCondition1bisDeBarre3(): ?string
    {
        return $this->condition1bisDeBarre3;
    }

    /**
     * @param string|null $condition1bisDeBarre3
     */
    public function setCondition1bisDeBarre3(?string $condition1bisDeBarre3): void
    {
        $this->condition1bisDeBarre3 = $condition1bisDeBarre3;
    }

    /**
     * @return string|null
     */
    public function getCondition2Barre1(): ?string
    {
        return $this->condition2Barre1;
    }

    /**
     * @param string|null $condition2Barre1
     */
    public function setCondition2Barre1(?string $condition2Barre1): void
    {
        $this->condition2Barre1 = $condition2Barre1;
    }

    /**
     * @return string|null
     */
    public function getCondition2DeBarre2(): ?string
    {
        return $this->condition2DeBarre2;
    }

    /**
     * @param string|null $condition2DeBarre2
     */
    public function setCondition2DeBarre2(?string $condition2DeBarre2): void
    {
        $this->condition2DeBarre2 = $condition2DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getCondition2DeBarre3(): ?string
    {
        return $this->condition2DeBarre3;
    }

    /**
     * @param string|null $condition2DeBarre3
     */
    public function setCondition2DeBarre3(?string $condition2DeBarre3): void
    {
        $this->condition2DeBarre3 = $condition2DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getCondition2DeMarkersSpcifiques1(): ?string
    {
        return $this->condition2DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $condition2DeMarkersSpcifiques1
     */
    public function setCondition2DeMarkersSpcifiques1(?string $condition2DeMarkersSpcifiques1): void
    {
        $this->condition2DeMarkersSpcifiques1 = $condition2DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getCondition3DeBarre1(): ?string
    {
        return $this->condition3DeBarre1;
    }

    /**
     * @param string|null $condition3DeBarre1
     */
    public function setCondition3DeBarre1(?string $condition3DeBarre1): void
    {
        $this->condition3DeBarre1 = $condition3DeBarre1;
    }

    /**
     * @return string|null
     */
    public function getCondition3DeBarre2(): ?string
    {
        return $this->condition3DeBarre2;
    }

    /**
     * @param string|null $condition3DeBarre2
     */
    public function setCondition3DeBarre2(?string $condition3DeBarre2): void
    {
        $this->condition3DeBarre2 = $condition3DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getCondition3DeBarre3(): ?string
    {
        return $this->condition3DeBarre3;
    }

    /**
     * @param string|null $condition3DeBarre3
     */
    public function setCondition3DeBarre3(?string $condition3DeBarre3): void
    {
        $this->condition3DeBarre3 = $condition3DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getCondition3DeMarkersSpcifiques1(): ?string
    {
        return $this->condition3DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $condition3DeMarkersSpcifiques1
     */
    public function setCondition3DeMarkersSpcifiques1(?string $condition3DeMarkersSpcifiques1): void
    {
        $this->condition3DeMarkersSpcifiques1 = $condition3DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getCondition4DeBarre1(): ?string
    {
        return $this->condition4DeBarre1;
    }

    /**
     * @param string|null $condition4DeBarre1
     */
    public function setCondition4DeBarre1(?string $condition4DeBarre1): void
    {
        $this->condition4DeBarre1 = $condition4DeBarre1;
    }

    /**
     * @return string|null
     */
    public function getCondition4DeBarre2(): ?string
    {
        return $this->condition4DeBarre2;
    }

    /**
     * @param string|null $condition4DeBarre2
     */
    public function setCondition4DeBarre2(?string $condition4DeBarre2): void
    {
        $this->condition4DeBarre2 = $condition4DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getCondition4DeBarre3(): ?string
    {
        return $this->condition4DeBarre3;
    }

    /**
     * @param string|null $condition4DeBarre3
     */
    public function setCondition4DeBarre3(?string $condition4DeBarre3): void
    {
        $this->condition4DeBarre3 = $condition4DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getCondition4DeMarkersSpcifiques1(): ?string
    {
        return $this->condition4DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $condition4DeMarkersSpcifiques1
     */
    public function setCondition4DeMarkersSpcifiques1(?string $condition4DeMarkersSpcifiques1): void
    {
        $this->condition4DeMarkersSpcifiques1 = $condition4DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getCondition5DeBarre1(): ?string
    {
        return $this->condition5DeBarre1;
    }

    /**
     * @param string|null $condition5DeBarre1
     */
    public function setCondition5DeBarre1(?string $condition5DeBarre1): void
    {
        $this->condition5DeBarre1 = $condition5DeBarre1;
    }

    /**
     * @return string|null
     */
    public function getCondition5DeBarre2(): ?string
    {
        return $this->condition5DeBarre2;
    }

    /**
     * @param string|null $condition5DeBarre2
     */
    public function setCondition5DeBarre2(?string $condition5DeBarre2): void
    {
        $this->condition5DeBarre2 = $condition5DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getCondition5DeBarre3(): ?string
    {
        return $this->condition5DeBarre3;
    }

    /**
     * @param string|null $condition5DeBarre3
     */
    public function setCondition5DeBarre3(?string $condition5DeBarre3): void
    {
        $this->condition5DeBarre3 = $condition5DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getCondition5DeMarkersSpcifiques1(): ?string
    {
        return $this->condition5DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $condition5DeMarkersSpcifiques1
     */
    public function setCondition5DeMarkersSpcifiques1(?string $condition5DeMarkersSpcifiques1): void
    {
        $this->condition5DeMarkersSpcifiques1 = $condition5DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getCondition6DeBarre1(): ?string
    {
        return $this->condition6DeBarre1;
    }

    /**
     * @param string|null $condition6DeBarre1
     */
    public function setCondition6DeBarre1(?string $condition6DeBarre1): void
    {
        $this->condition6DeBarre1 = $condition6DeBarre1;
    }

    /**
     * @return string|null
     */
    public function getCondition6DeBarre2(): ?string
    {
        return $this->condition6DeBarre2;
    }

    /**
     * @param string|null $condition6DeBarre2
     */
    public function setCondition6DeBarre2(?string $condition6DeBarre2): void
    {
        $this->condition6DeBarre2 = $condition6DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getCondition6DeBarre3(): ?string
    {
        return $this->condition6DeBarre3;
    }

    /**
     * @param string|null $condition6DeBarre3
     */
    public function setCondition6DeBarre3(?string $condition6DeBarre3): void
    {
        $this->condition6DeBarre3 = $condition6DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getCondition6DeMarkersSpcifiques1(): ?string
    {
        return $this->condition6DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $condition6DeMarkersSpcifiques1
     */
    public function setCondition6DeMarkersSpcifiques1(?string $condition6DeMarkersSpcifiques1): void
    {
        $this->condition6DeMarkersSpcifiques1 = $condition6DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getConditionDiffrenteDeCondition1(): ?string
    {
        return $this->conditionDiffrenteDeCondition1;
    }

    /**
     * @param string|null $conditionDiffrenteDeCondition1
     */
    public function setConditionDiffrenteDeCondition1(?string $conditionDiffrenteDeCondition1): void
    {
        $this->conditionDiffrenteDeCondition1 = $conditionDiffrenteDeCondition1;
    }

    /**
     * @return string|null
     */
    public function getDataCategory(): ?string
    {
        return $this->dataCategory;
    }

    /**
     * @param string|null $dataCategory
     */
    public function setDataCategory(?string $dataCategory): void
    {
        $this->dataCategory = $dataCategory;
    }

    /**
     * @return string|null
     */
    public function getDataFormat(): ?string
    {
        return $this->dataFormat;
    }

    /**
     * @param string|null $dataFormat
     */
    public function setDataFormat(?string $dataFormat): void
    {
        $this->dataFormat = $dataFormat;
    }

    /**
     * @return string|null
     */
    public function getDetail(): ?string
    {
        return $this->detail;
    }

    /**
     * @param string|null $detail
     */
    public function setDetail(?string $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getInvalidationIncrement(): ?string
    {
        return $this->invalidationIncrement;
    }

    /**
     * @param string|null $invalidationIncrement
     */
    public function setInvalidationIncrement(?string $invalidationIncrement): void
    {
        $this->invalidationIncrement = $invalidationIncrement;
    }

    /**
     * @return string|null
     */
    public function getMarkerSpcifiques1(): ?string
    {
        return $this->markerSpcifiques1;
    }

    /**
     * @param string|null $markerSpcifiques1
     */
    public function setMarkerSpcifiques1(?string $markerSpcifiques1): void
    {
        $this->markerSpcifiques1 = $markerSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getMarkerSpcifiques2(): ?string
    {
        return $this->markerSpcifiques2;
    }

    /**
     * @param string|null $markerSpcifiques2
     */
    public function setMarkerSpcifiques2(?string $markerSpcifiques2): void
    {
        $this->markerSpcifiques2 = $markerSpcifiques2;
    }

    /**
     * @return string|null
     */
    public function getMarkerSpcifiques3(): ?string
    {
        return $this->markerSpcifiques3;
    }

    /**
     * @param string|null $markerSpcifiques3
     */
    public function setMarkerSpcifiques3(?string $markerSpcifiques3): void
    {
        $this->markerSpcifiques3 = $markerSpcifiques3;
    }

    /**
     * @return string|null
     */
    public function getModule(): ?string
    {
        return $this->module;
    }

    /**
     * @param string|null $module
     */
    public function setModule(?string $module): void
    {
        $this->module = $module;
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
    public function getPeriodOfValidity(): ?string
    {
        return $this->periodOfValidity;
    }

    /**
     * @param string|null $periodOfValidity
     */
    public function setPeriodOfValidity(?string $periodOfValidity): void
    {
        $this->periodOfValidity = $periodOfValidity;
    }

    /**
     * @return string|null
     */
    public function getPoints1DeBarre1(): ?string
    {
        return $this->points1DeBarre1;
    }

    /**
     * @param string|null $points1DeBarre1
     */
    public function setPoints1DeBarre1(?string $points1DeBarre1): void
    {
        $this->points1DeBarre1 = $points1DeBarre1;
    }

    /**
     * @return string|null
     */
    public function getPoints1DeBarre2(): ?string
    {
        return $this->points1DeBarre2;
    }

    /**
     * @param string|null $points1DeBarre2
     */
    public function setPoints1DeBarre2(?string $points1DeBarre2): void
    {
        $this->points1DeBarre2 = $points1DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getPoints1DeBarre3(): ?string
    {
        return $this->points1DeBarre3;
    }

    /**
     * @param string|null $points1DeBarre3
     */
    public function setPoints1DeBarre3(?string $points1DeBarre3): void
    {
        $this->points1DeBarre3 = $points1DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getPoints1DeBarre4(): ?string
    {
        return $this->points1DeBarre4;
    }

    /**
     * @param string|null $points1DeBarre4
     */
    public function setPoints1DeBarre4(?string $points1DeBarre4): void
    {
        $this->points1DeBarre4 = $points1DeBarre4;
    }

    /**
     * @return string|null
     */
    public function getPoints1DeBarre5(): ?string
    {
        return $this->points1DeBarre5;
    }

    /**
     * @param string|null $points1DeBarre5
     */
    public function setPoints1DeBarre5(?string $points1DeBarre5): void
    {
        $this->points1DeBarre5 = $points1DeBarre5;
    }

    /**
     * @return string|null
     */
    public function getPoints1DeMarkersSpcifiques1(): ?string
    {
        return $this->points1DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $points1DeMarkersSpcifiques1
     */
    public function setPoints1DeMarkersSpcifiques1(?string $points1DeMarkersSpcifiques1): void
    {
        $this->points1DeMarkersSpcifiques1 = $points1DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getPoints1DeMarkersSpcifiques2(): ?string
    {
        return $this->points1DeMarkersSpcifiques2;
    }

    /**
     * @param string|null $points1DeMarkersSpcifiques2
     */
    public function setPoints1DeMarkersSpcifiques2(?string $points1DeMarkersSpcifiques2): void
    {
        $this->points1DeMarkersSpcifiques2 = $points1DeMarkersSpcifiques2;
    }

    /**
     * @return string|null
     */
    public function getPoints1DeMarkersSpcifiques3(): ?string
    {
        return $this->points1DeMarkersSpcifiques3;
    }

    /**
     * @param string|null $points1DeMarkersSpcifiques3
     */
    public function setPoints1DeMarkersSpcifiques3(?string $points1DeMarkersSpcifiques3): void
    {
        $this->points1DeMarkersSpcifiques3 = $points1DeMarkersSpcifiques3;
    }

    /**
     * @return string|null
     */
    public function getPoints2Barre1(): ?string
    {
        return $this->points2Barre1;
    }

    /**
     * @param string|null $points2Barre1
     */
    public function setPoints2Barre1(?string $points2Barre1): void
    {
        $this->points2Barre1 = $points2Barre1;
    }

    /**
     * @return string|null
     */
    public function getPoints2DeBarre2(): ?string
    {
        return $this->points2DeBarre2;
    }

    /**
     * @param string|null $points2DeBarre2
     */
    public function setPoints2DeBarre2(?string $points2DeBarre2): void
    {
        $this->points2DeBarre2 = $points2DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getPoints2DeBarre3(): ?string
    {
        return $this->points2DeBarre3;
    }

    /**
     * @param string|null $points2DeBarre3
     */
    public function setPoints2DeBarre3(?string $points2DeBarre3): void
    {
        $this->points2DeBarre3 = $points2DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getPoints2DeMarkersSpcifiques1(): ?string
    {
        return $this->points2DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $points2DeMarkersSpcifiques1
     */
    public function setPoints2DeMarkersSpcifiques1(?string $points2DeMarkersSpcifiques1): void
    {
        $this->points2DeMarkersSpcifiques1 = $points2DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getPoints3DeBarre1(): ?string
    {
        return $this->points3DeBarre1;
    }

    /**
     * @param string|null $points3DeBarre1
     */
    public function setPoints3DeBarre1(?string $points3DeBarre1): void
    {
        $this->points3DeBarre1 = $points3DeBarre1;
    }

    /**
     * @return string|null
     */
    public function getPoints3DeBarre2(): ?string
    {
        return $this->points3DeBarre2;
    }

    /**
     * @param string|null $points3DeBarre2
     */
    public function setPoints3DeBarre2(?string $points3DeBarre2): void
    {
        $this->points3DeBarre2 = $points3DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getPoints3DeBarre3(): ?string
    {
        return $this->points3DeBarre3;
    }

    /**
     * @param string|null $points3DeBarre3
     */
    public function setPoints3DeBarre3(?string $points3DeBarre3): void
    {
        $this->points3DeBarre3 = $points3DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getPoints3DeMarkersSpcifiques1(): ?string
    {
        return $this->points3DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $points3DeMarkersSpcifiques1
     */
    public function setPoints3DeMarkersSpcifiques1(?string $points3DeMarkersSpcifiques1): void
    {
        $this->points3DeMarkersSpcifiques1 = $points3DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getPoints4DeBarre1(): ?string
    {
        return $this->points4DeBarre1;
    }

    /**
     * @param string|null $points4DeBarre1
     */
    public function setPoints4DeBarre1(?string $points4DeBarre1): void
    {
        $this->points4DeBarre1 = $points4DeBarre1;
    }

    /**
     * @return string|null
     */
    public function getPoints4DeBarre2(): ?string
    {
        return $this->points4DeBarre2;
    }

    /**
     * @param string|null $points4DeBarre2
     */
    public function setPoints4DeBarre2(?string $points4DeBarre2): void
    {
        $this->points4DeBarre2 = $points4DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getPoints4DeBarre3(): ?string
    {
        return $this->points4DeBarre3;
    }

    /**
     * @param string|null $points4DeBarre3
     */
    public function setPoints4DeBarre3(?string $points4DeBarre3): void
    {
        $this->points4DeBarre3 = $points4DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getPoints4DeMarkersSpcifiques1(): ?string
    {
        return $this->points4DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $points4DeMarkersSpcifiques1
     */
    public function setPoints4DeMarkersSpcifiques1(?string $points4DeMarkersSpcifiques1): void
    {
        $this->points4DeMarkersSpcifiques1 = $points4DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getPoints5DeBarre1(): ?string
    {
        return $this->points5DeBarre1;
    }

    /**
     * @param string|null $points5DeBarre1
     */
    public function setPoints5DeBarre1(?string $points5DeBarre1): void
    {
        $this->points5DeBarre1 = $points5DeBarre1;
    }

    /**
     * @return string|null
     */
    public function getPoints5DeBarre2(): ?string
    {
        return $this->points5DeBarre2;
    }

    /**
     * @param string|null $points5DeBarre2
     */
    public function setPoints5DeBarre2(?string $points5DeBarre2): void
    {
        $this->points5DeBarre2 = $points5DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getPoints5DeBarre3(): ?string
    {
        return $this->points5DeBarre3;
    }

    /**
     * @param string|null $points5DeBarre3
     */
    public function setPoints5DeBarre3(?string $points5DeBarre3): void
    {
        $this->points5DeBarre3 = $points5DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getPoints5DeMarkersSpcifiques1(): ?string
    {
        return $this->points5DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $points5DeMarkersSpcifiques1
     */
    public function setPoints5DeMarkersSpcifiques1(?string $points5DeMarkersSpcifiques1): void
    {
        $this->points5DeMarkersSpcifiques1 = $points5DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getPoints6DeBarre1(): ?string
    {
        return $this->points6DeBarre1;
    }

    /**
     * @param string|null $points6DeBarre1
     */
    public function setPoints6DeBarre1(?string $points6DeBarre1): void
    {
        $this->points6DeBarre1 = $points6DeBarre1;
    }

    /**
     * @return string|null
     */
    public function getPoints6DeBarre2(): ?string
    {
        return $this->points6DeBarre2;
    }

    /**
     * @param string|null $points6DeBarre2
     */
    public function setPoints6DeBarre2(?string $points6DeBarre2): void
    {
        $this->points6DeBarre2 = $points6DeBarre2;
    }

    /**
     * @return string|null
     */
    public function getPoints6DeBarre3(): ?string
    {
        return $this->points6DeBarre3;
    }

    /**
     * @param string|null $points6DeBarre3
     */
    public function setPoints6DeBarre3(?string $points6DeBarre3): void
    {
        $this->points6DeBarre3 = $points6DeBarre3;
    }

    /**
     * @return string|null
     */
    public function getPoints6DeMarkersSpcifiques1(): ?string
    {
        return $this->points6DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $points6DeMarkersSpcifiques1
     */
    public function setPoints6DeMarkersSpcifiques1(?string $points6DeMarkersSpcifiques1): void
    {
        $this->points6DeMarkersSpcifiques1 = $points6DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    public function getReferenceSctid(): ?string
    {
        return $this->referenceSctid;
    }

    /**
     * @param string|null $referenceSctid
     */
    public function setReferenceSctid(?string $referenceSctid): void
    {
        $this->referenceSctid = $referenceSctid;
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
     * @return int|null
     */
    public function getThresholdAgeMin(): ?int
    {
        return $this->thresholdAgeMin;
    }

    /**
     * @param int|null $thresholdAgeMin
     */
    public function setThresholdAgeMin(?int $thresholdAgeMin): void
    {
        $this->thresholdAgeMin = $thresholdAgeMin;
    }

    /**
     * @return int|null
     */
    public function getThresholdAgeMmx(): ?int
    {
        return $this->thresholdAgeMmx;
    }

    /**
     * @param int|null $thresholdAgeMmx
     */
    public function setThresholdAgeMmx(?int $thresholdAgeMmx): void
    {
        $this->thresholdAgeMmx = $thresholdAgeMmx;
    }

    /**
     * @return string|null
     */
    public function getThresholdMax(): ?string
    {
        return $this->thresholdMax;
    }

    /**
     * @param string|null $thresholdMax
     */
    public function setThresholdMax(?string $thresholdMax): void
    {
        $this->thresholdMax = $thresholdMax;
    }

    /**
     * @return string|null
     */
    public function getThresholdMin(): ?string
    {
        return $this->thresholdMin;
    }

    /**
     * @param string|null $thresholdMin
     */
    public function setThresholdMin(?string $thresholdMin): void
    {
        $this->thresholdMin = $thresholdMin;
    }

    /**
     * @return string|null
     */
    public function getTypeDeDonne(): ?string
    {
        return $this->typeDeDonne;
    }

    /**
     * @param string|null $typeDeDonne
     */
    public function setTypeDeDonne(?string $typeDeDonne): void
    {
        $this->typeDeDonne = $typeDeDonne;
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


    public function count()
    {
        // TODO: Implement count() method.
    }
}
