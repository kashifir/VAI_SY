<?php

namespace App\Entity;

use App\Repository\TestDevRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name:"test_dev")]
#[ORM\Entity(repositoryClass: TestDevRepository::class)]
class TestDev
{
    #[
        ORM\Id,
        ORM\Column(name: 'id', type: Types::INTEGER, unique: true),
        ORM\GeneratedValue(strategy: 'AUTO'),
    ]
    private ?int $id = null;

    #[ORM\Column(name: "Finalisation", type: Types::STRING, length: 2, nullable: true)]
    private ?string $finalisation;


    #[ORM\Column(name: "Type_of_data", type: Types::STRING, length: 35, nullable: true)]
    private ?string $typeOfData;


    #[ORM\Column(name: "Module", type: Types::STRING, length: 28, nullable: true)]
    private ?string $module;

    #[ORM\Column(name: "Commentaires_informations", type: Types::STRING, length: 28, nullable: true)]
    private ?string $commentairesInformations;


    #[ORM\Column(name: "Commentaires_informations_2", type: Types::STRING, length: 78, nullable: true)]
    private ?string $commentairesInformations2;

    #[ORM\Column(name: "Commentaires_informations_3", type: Types::STRING, length: 118, nullable: true)]
    private ?string $commentairesInformations3;


    #[ORM\Column(name: "Noms_FR_EN_IT", type: Types::STRING, length: 113, nullable: true)]
    private ?string $nomsFrEnIt;

    #[ORM\Column(name: "Noms", type: Types::STRING, length: 145, nullable: true)]
    private ?string $noms;

    #[ORM\Column(name: "Reference_SCTID", type: Types::DECIMAL, precision: 26, scale: 16, nullable: true)]
    private   $referenceSctid;

    #[ORM\Column(name: "Detail", type: Types::STRING, length: 24, nullable: true)]
    private ?string $detail;

    #[ORM\Column(name: "Data_category", type: Types::STRING, length: 33, nullable: true)]
    private ?string $dataCategory;

    #[ORM\Column(name: "Period_of_validity", type: Types::STRING, length: 28, nullable: true)]
    private ?string $periodOfValidity;

    #[ORM\Column(name: "Invalidation_increment", type: Types::STRING, length: 17, nullable: true)]
    private ?string $invalidationIncrement;

    #[ORM\Column(name: "Sexe", type: Types::STRING, length: 1, nullable: true)]
    private  ?string $sexe;

    #[ORM\Column(name: "threshold_age_min", type: Types::STRING, length: 5, nullable: true)]
    private ?string $thresholdAgeMin;

    #[ORM\Column(name: "threshold_age_max", type: Types::STRING, length: 5, nullable: true)]
    private ?string $thresholdAgeMax;

    #[ORM\Column(name: "Data_Format", type: Types::STRING, length: 10, nullable: true)]
    private ?string $dataFormat;

    #[ORM\Column(name: "Unit_de_mesure", type: Types::STRING, length: 37, nullable: true)]
    private ?string $unitDeMesure;

    #[ORM\Column(name: "threshold_min", type: Types::STRING, length: 31, nullable: true)]
    private ?string $thresholdMin;

    #[ORM\Column(name: "threshold_max", type: Types::STRING, length: 27, nullable: true)]
    private ?string $thresholdMax;

    #[ORM\Column(name: "condition1", type: Types::STRING, length: 17, nullable: true)]
    private ?string $condition1;

    #[ORM\Column(name: "Barre", type: Types::STRING, length: 18, nullable: true)]
    private ?string $barre;

    #[ORM\Column(name: "Points_1_de_Barre_1", type: Types::STRING, length: 45, nullable: true)]
    private ?string $points1DeBarre1;

    #[ORM\Column(name: "Condition_2_de_Barre_1", type: Types::STRING, length: 39, nullable: true)]
    private ?string $condition2DeBarre1;

    #[ORM\Column(name: "Points_2_de_Barre_1", type: Types::DECIMAL, precision: 3, scale: 1, nullable: true)]
    private  $points2DeBarre1;

    #[ORM\Column(name: "Condition_3_de_Barre_1", type: Types::STRING, length: 13, nullable: true)]
    private ?string $condition3DeBarre1;

    #[ORM\Column(name: "Points_3_de_Barre_1", type: Types::INTEGER, nullable: true)]
    private ?int $points3DeBarre1;

    #[ORM\Column(name: "Condition_4_de_Barre_1", type: Types::STRING, length: 10, nullable: true)]
    private ?string $condition4DeBarre1;

    #[ORM\Column(name: "Points_4_de_Barre_1", type: Types::INTEGER, nullable: true)]
    private ?int $points4DeBarre1;

    #[ORM\Column(name: "Condition_5_de_Barre_1", type: Types::STRING, length: 10, nullable: true)]
    private ?string $condition5DeBarre1;

    #[ORM\Column(name: "Points_5_de_Barre_1", type: Types::INTEGER, nullable: true)]
    private ?int $points5DeBarre1;

    #[ORM\Column(name: "Condition_6_de_Barre_1", type: Types::STRING, length: 11, nullable: true)]
    private ?string $condition6DeBarre1;

    #[ORM\Column(name: "Points_6_de_Barre_1", type: Types::INTEGER, nullable: true)]
    private ?int $points6DeBarre1;

    #[ORM\Column(name: "Barre_2", type: Types::STRING, length: 28, nullable: true)]
    private ?string $barre2;

    #[ORM\Column(name: "Points_1_de_Barre_2", type: Types::STRING, length: 40, nullable: true)]
    private ?string $points1DeBarre2;

    #[ORM\Column(name: "Condition_2_de_Barre_2", type: Types::STRING, length: 38, nullable: true)]
    private ?string $condition2DeBarre2;

    #[ORM\Column(name: "Points_2_de_Barre_2", type: Types::STRING, length: 38, nullable: true)]
    private ?string $points2DeBarre2;

    #[ORM\Column(name: "Condition_3_de_Barre_2", type: Types::STRING, length: 81, nullable: true)]
    private ?string $condition3DeBarre2;

    #[ORM\Column(name: "Points_3_de_Barre_2", type: Types::STRING, length: 38, nullable: true)]
    private ?string $points3DeBarre2;

    #[ORM\Column(name: "Condition_4_de_Barre_2", type: Types::STRING, length: 15, nullable: true)]
    private ?string $condition4DeBarre2;

    #[ORM\Column(name: "Points_4_de_Barre_2", type: Types::STRING, length: 15, nullable: true)]
    private ?string $points4DeBarre2;

    #[ORM\Column(name: "Condition_5_de_Barre_2", type: Types::STRING, length: 4, nullable: true)]
    private ?string $condition5DeBarre2;

    #[ORM\Column(name: "Points_5_de_Barre_2", type: Types::STRING, length: 15, nullable: true)]
    private ?string $points5DeBarre2;

    #[ORM\Column(name: "Condition_6_de_Barre_2", type: Types::STRING, nullable: true)]
    private ?string $condition6DeBarre2;

    #[ORM\Column(name: "Points_6_de_Barre_2", type: Types::STRING, nullable: true)]
    private ?string $points6DeBarre2;

    #[ORM\Column(name: "Barre_3", type: Types::STRING, length: 56, nullable: true)]
    private ?string $barre3;

    #[ORM\Column(name: "Condition_diff_rente_de_condition_1", type: Types::STRING, length: 3, nullable: true)]
    private ?string $conditionDiffRenteDeCondition1;

    #[ORM\Column(name: "Condition_1bis_de_Barre_3", type: Types::STRING, length: 6, nullable: true)]
    private ?string $condition1bisDeBarre3;

    #[ORM\Column(name: "Points_1_de_Barre_3", type: Types::STRING, precision: 3, scale: 2, nullable: true)]
    private ?string $points1DeBarre3;

    #[ORM\Column(name: "Condition_2_de_Barre_3", type: Types::STRING, length: 13, nullable: true)]
    private ?string $condition2DeBarre3;

    #[ORM\Column(name: "Points_2_de_Barre_3", type: Types::STRING, length: 28, nullable: true)]
    private ?string $points2DeBarre3;

    #[ORM\Column(name: "Condition_3_de_Barre_3", type: Types::STRING, length: 5, nullable: true)]
    private ?string $condition3DeBarre3;

    #[ORM\Column(name: "Points_3_de_Barre_3", type: Types::STRING, length: 28, nullable: true)]
    private ?string $points3DeBarre3;

    #[ORM\Column(name: "Condition_4_de_Barre_3", type: Types::INTEGER, nullable: true)]
    private ?int $condition4DeBarre3;

    #[ORM\Column(name: "Points_4_de_Barre_3", type: Types::INTEGER, nullable: true)]
    private ?int $points4DeBarre3;

    #[ORM\Column(name: "Condition_5_de_Barre_3", type: Types::INTEGER, nullable: true)]
    private ?int $condition5DeBarre3;

    #[ORM\Column(name: "Points_5_de_Barre_3", type: Types::INTEGER, nullable: true)]
    private ?int $points5DeBarre3;

    #[ORM\Column(name: "Condition_6_de_Barre_3", type: Types::INTEGER, nullable: true)]
    private ?int $condition6DeBarre3;

    #[ORM\Column(name: "Points_6_de_Barre_3", type: Types::INTEGER, nullable: true)]
    private ?int $points6DeBarre3;

    #[ORM\Column(name: "Barre_4", type: Types::STRING, length: 19, nullable: true)]
    private ?string $barre4;

    #[ORM\Column(name: "Points_1_de_Barre_4", type: Types::INTEGER, nullable: true)]
    private ?int $points1DeBarre4;

    #[ORM\Column(name: "Barre_5", type: Types::STRING, length: 24, nullable: true)]
    private ?string $barre5;

    #[ORM\Column(name: "Points_1_de_Barre_5", type: Types::INTEGER, nullable: true)]
    private ?int $points1DeBarre5;

    #[ORM\Column(name: "Marker_spcifiques_1", type: Types::STRING, length: 76, nullable: true)]
    private ?string $markerSpcifiques1;

    #[ORM\Column(name: "Points_1_de_Markers_spcifiques_1", type: Types::STRING, length: 83, nullable: true)]
    private ?string $points1DeMarkersSpcifiques1;

    #[ORM\Column(name: "Condition_2_de_Markers_spcifiques_1", type: Types::STRING, length: 71, nullable: true)]
    private ?string $condition2DeMarkersSpcifiques1;

    #[ORM\Column(name: "Points_2_de_Markers_spcifiques_1", type: Types::STRING, length: 42, nullable: true)]
    private ?string $points2DeMarkersSpcifiques1;

    #[ORM\Column(name: "Condition_3_de_Markers_spcifiques_1", type: Types::STRING, length: 40, nullable: true)]
    private ?string $condition3DeMarkersSpcifiques1;

    #[ORM\Column(name: "Points_3_de_Markers_spcifiques_1", type: Types::STRING, length: 43, nullable: true)]
    private ?string $points3DeMarkersSpcifiques1;

    #[ORM\Column(name: "Condition_4_de_Markers_spcifiques_1", type: Types::STRING, length: 43, nullable: true)]
    private ?string $condition4DeMarkersSpcifiques1;

    #[ORM\Column(name: "Points_4_de_Markers_spcifiques_1", type: Types::STRING, length: 5, nullable: true)]
    private  $points4DeMarkersSpcifiques1;

    #[ORM\Column(name: "Condition_5_de_Markers_spcifiques_1", type: Types::STRING, length: 10, nullable: true)]
    private ?string $condition5DeMarkersSpcifiques1;

    #[ORM\Column(name: "Points_5_de_Markers_spcifiques_1", type: Types::INTEGER, nullable: true)]
    private ?int $points5DeMarkersSpcifiques1;

    #[ORM\Column(name: "Condition_6_de_Markers_spcifiques_1", type: Types::STRING, length: 11, nullable: true)]
    private ?string $condition6DeMarkersSpcifiques1;

    #[ORM\Column(name: "Points_6_de_Markers_spcifiques_1", type: Types::INTEGER, nullable: true)]
    private ?int $points6DeMarkersSpcifiques1;

    #[ORM\Column(name: "Marker_spcifiques_2", type: Types::STRING, length: 47, nullable: true)]
    private ?string $markerSpcifiques2;

    #[ORM\Column(name: "Points_1_de_Markers_spcifiques_2", type: Types::STRING, length: 29, nullable: true)]
    private ?string $points1DeMarkersSpcifiques2;

    /**
     * @return int|null
     */
    final public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    final public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    final public function getFinalisation(): ?string
    {
        return $this->finalisation;
    }

    /**
     * @param string|null $finalisation
     */
    final public function setFinalisation(?string $finalisation): void
    {
        $this->finalisation = $finalisation;
    }

    /**
     * @return string|null
     */
    final public function getTypeOfData(): ?string
    {
        return $this->typeOfData;
    }

    /**
     * @param string|null $typeOfData
     */
    final public function setTypeOfData(?string $typeOfData): void
    {
        $this->typeOfData = $typeOfData;
    }

    /**
     * @return string|null
     */
    final public function getModule(): ?string
    {
        return $this->module;
    }

    /**
     * @param string|null $module
     */
    final public function setModule(?string $module): void
    {
        $this->module = $module;
    }

    /**
     * @return string|null
     */
    final public function getCommentairesInformations(): ?string
    {
        return $this->commentairesInformations;
    }

    /**
     * @param string|null $commentairesInformations
     */
    final public function setCommentairesInformations(?string $commentairesInformations): void
    {
        $this->commentairesInformations = $commentairesInformations;
    }

    /**
     * @return string|null
     */
    final public function getCommentairesInformations2(): ?string
    {
        return $this->commentairesInformations2;
    }

    /**
     * @param string|null $commentairesInformations2
     */
    final public function setCommentairesInformations2(?string $commentairesInformations2): void
    {
        $this->commentairesInformations2 = $commentairesInformations2;
    }

    /**
     * @return string|null
     */
    final public function getCommentairesInformations3(): ?string
    {
        return $this->commentairesInformations3;
    }

    /**
     * @param string|null $commentairesInformations3
     */
    final public function setCommentairesInformations3(?string $commentairesInformations3): void
    {
        $this->commentairesInformations3 = $commentairesInformations3;
    }

    /**
     * @return string|null
     */
    final public function getNomsFrEnIt(): ?string
    {
        return $this->nomsFrEnIt;
    }

    /**
     * @param string|null $nomsFrEnIt
     */
    final public function setNomsFrEnIt(?string $nomsFrEnIt): void
    {
        $this->nomsFrEnIt = $nomsFrEnIt;
    }

    /**
     * @return string|null
     */
    final public function getNoms(): ?string
    {
        return $this->noms;
    }

    /**
     * @param string|null $noms
     */
    final public function setNoms(?string $noms): void
    {
        $this->noms = $noms;
    }

    /**
     * @return string|null
     */
    final public function getReferenceSctid(): ?string
    {
        return $this->referenceSctid;
    }

    /**
     * @param string|null $referenceSctid
     */
    final public function setReferenceSctid(?string $referenceSctid): void
    {
        $this->referenceSctid = $referenceSctid;
    }

    /**
     * @return string|null
     */
    final public function getDetail(): ?string
    {
        return $this->detail;
    }

    /**
     * @param string|null $detail
     */
    final public function setDetail(?string $detail): void
    {
        $this->detail = $detail;
    }

    final public function getDataCategory(): ?string
    {
        return $this->dataCategory;
    }

    final public function setDataCategory(?string $dataCategory): void
    {
        $this->dataCategory = $dataCategory;
    }

    /**
     * @return string|null
     */
    final public function getPeriodOfValidity(): ?string
    {
        return $this->periodOfValidity;
    }

    /**
     * @param string|null $periodOfValidity
     */
    final public function setPeriodOfValidity(?string $periodOfValidity): void
    {
        $this->periodOfValidity = $periodOfValidity;
    }

    /**
     * @return string|null
     */
    final public function getInvalidationIncrement(): ?string
    {
        return $this->invalidationIncrement;
    }

    /**
     * @param string|null $invalidationIncrement
     */
    final public function setInvalidationIncrement(?string $invalidationIncrement): void
    {
        $this->invalidationIncrement = $invalidationIncrement;
    }

    /**
     * @return string|null
     */
    final public function getSexe(): ?string
    {
        return $this->sexe;
    }

    /**
     * @param string|null $sexe
     */
    final public function setSexe(?string $sexe): void
    {
        $this->sexe = $sexe;
    }

    /**
     * @return string|null
     */
    final public function getThresholdAgeMin(): ?string
    {
        return $this->thresholdAgeMin;
    }

    /**
     * @param string|null $thresholdAgeMin
     */
    final public function setThresholdAgeMin(?string $thresholdAgeMin): void
    {
        $this->thresholdAgeMin = $thresholdAgeMin;
    }

    /**
     * @return string|null
     */
    final public function getThresholdAgeMax(): ?string
    {
        return $this->thresholdAgeMax;
    }

    /**
     * @param string|null $thresholdAgeMax
     */
    final public function setThresholdAgeMax(?string $thresholdAgeMax): void
    {
        $this->thresholdAgeMax = $thresholdAgeMax;
    }

    /**
     * @return string|null
     */
    final public function getDataFormat(): ?string
    {
        return $this->dataFormat;
    }

    /**
     * @param string|null $dataFormat
     */
    final public function setDataFormat(?string $dataFormat): void
    {
        $this->dataFormat = $dataFormat;
    }

    /**
     * @return string|null
     */
    final public function getUnitDeMesure(): ?string
    {
        return $this->unitDeMesure;
    }

    /**
     * @param string|null $unitDeMesure
     */
    final public function setUnitDeMesure(?string $unitDeMesure): void
    {
        $this->unitDeMesure = $unitDeMesure;
    }

    /**
     * @return string|null
     */
    final public function getThresholdMin(): ?string
    {
        return $this->thresholdMin;
    }

    /**
     * @param string|null $thresholdMin
     */
    final public function setThresholdMin(?string $thresholdMin): void
    {
        $this->thresholdMin = $thresholdMin;
    }

    /**
     * @return string|null
     */
    final public function getThresholdMax(): ?string
    {
        return $this->thresholdMax;
    }

    /**
     * @param string|null $thresholdMax
     */
    final public function setThresholdMax(?string $thresholdMax): void
    {
        $this->thresholdMax = $thresholdMax;
    }

    /**
     * @return string|null
     */
    final public function getCondition1(): ?string
    {
        return $this->condition1;
    }

    /**
     * @param string|null $condition1
     */
    final public function setCondition1(?string $condition1): void
    {
        $this->condition1 = $condition1;
    }

    /**
     * @return string|null
     */
    final public function getBarre(): ?string
    {
        return $this->barre;
    }

    /**
     * @param string|null $barre
     */
    final public function setBarre(?string $barre): void
    {
        $this->barre = $barre;
    }

    /**
     * @return string|null
     */
    final public function getPoints1DeBarre1(): ?string
    {
        return $this->points1DeBarre1;
    }

    /**
     * @param string|null $points1DeBarre1
     */
    final public function setPoints1DeBarre1(?string $points1DeBarre1): void
    {
        $this->points1DeBarre1 = $points1DeBarre1;
    }

    /**
     * @return string|null
     */
    final public function getCondition2DeBarre1(): ?string
    {
        return $this->condition2DeBarre1;
    }

    /**
     * @param string|null $condition2DeBarre1
     */
    final public function setCondition2DeBarre1(?string $condition2DeBarre1): void
    {
        $this->condition2DeBarre1 = $condition2DeBarre1;
    }

    /**
     * @return string|null
     */
    final public function getPoints2DeBarre1(): ?string
    {
        return $this->points2DeBarre1;
    }

    /**
     * @param string|null $points2DeBarre1
     */
    final public function setPoints2DeBarre1(?string $points2DeBarre1): void
    {
        $this->points2DeBarre1 = $points2DeBarre1;
    }

    /**
     * @return string|null
     */
    final public function getCondition3DeBarre1(): ?string
    {
        return $this->condition3DeBarre1;
    }

    /**
     * @param string|null $condition3DeBarre1
     */
    final public function setCondition3DeBarre1(?string $condition3DeBarre1): void
    {
        $this->condition3DeBarre1 = $condition3DeBarre1;
    }

    /**
     * @return int|null
     */
    final public function getPoints3DeBarre1(): ?int
    {
        return $this->points3DeBarre1;
    }

    /**
     * @param int|null $points3DeBarre1
     */
    final public function setPoints3DeBarre1(?int $points3DeBarre1): void
    {
        $this->points3DeBarre1 = $points3DeBarre1;
    }

    /**
     * @return string|null
     */
    final public function getCondition4DeBarre1(): ?string
    {
        return $this->condition4DeBarre1;
    }

    /**
     * @param string|null $condition4DeBarre1
     */
    final public function setCondition4DeBarre1(?string $condition4DeBarre1): void
    {
        $this->condition4DeBarre1 = $condition4DeBarre1;
    }

    /**
     * @return int|null
     */
    final public function getPoints4DeBarre1(): ?int
    {
        return $this->points4DeBarre1;
    }

    /**
     * @param int|null $points4DeBarre1
     */
    final public function setPoints4DeBarre1(?int $points4DeBarre1): void
    {
        $this->points4DeBarre1 = $points4DeBarre1;
    }

    /**
     * @return string|null
     */
    final public function getCondition5DeBarre1(): ?string
    {
        return $this->condition5DeBarre1;
    }

    /**
     * @param string|null $condition5DeBarre1
     */
    final public function setCondition5DeBarre1(?string $condition5DeBarre1): void
    {
        $this->condition5DeBarre1 = $condition5DeBarre1;
    }

    /**
     * @return int|null
     */
    final public function getPoints5DeBarre1(): ?int
    {
        return $this->points5DeBarre1;
    }

    /**
     * @param int|null $points5DeBarre1
     */
    final public function setPoints5DeBarre1(?int $points5DeBarre1): void
    {
        $this->points5DeBarre1 = $points5DeBarre1;
    }

    /**
     * @return string|null
     */
    final public function getCondition6DeBarre1(): ?string
    {
        return $this->condition6DeBarre1;
    }

    /**
     * @param string|null $condition6DeBarre1
     */
    final public function setCondition6DeBarre1(?string $condition6DeBarre1): void
    {
        $this->condition6DeBarre1 = $condition6DeBarre1;
    }

    /**
     * @return int|null
     */
    final public function getPoints6DeBarre1(): ?int
    {
        return $this->points6DeBarre1;
    }

    /**
     * @param int|null $points6DeBarre1
     */
    final public function setPoints6DeBarre1(?int $points6DeBarre1): void
    {
        $this->points6DeBarre1 = $points6DeBarre1;
    }

    /**
     * @return string|null
     */
    final public function getBarre2(): ?string
    {
        return $this->barre2;
    }

    /**
     * @param string|null $barre2
     */
    final public function setBarre2(?string $barre2): void
    {
        $this->barre2 = $barre2;
    }

    /**
     * @return string|null
     */
    final public function getPoints1DeBarre2(): ?string
    {
        return $this->points1DeBarre2;
    }

    /**
     * @param string|null $points1DeBarre2
     */
    final public function setPoints1DeBarre2(?string $points1DeBarre2): void
    {
        $this->points1DeBarre2 = $points1DeBarre2;
    }

    /**
     * @return string|null
     */
    final public function getCondition2DeBarre2(): ?string
    {
        return $this->condition2DeBarre2;
    }

    /**
     * @param string|null $condition2DeBarre2
     */
    final public function setCondition2DeBarre2(?string $condition2DeBarre2): void
    {
        $this->condition2DeBarre2 = $condition2DeBarre2;
    }

    /**
     * @return string|null
     */
    final public function getPoints2DeBarre2(): ?string
    {
        return $this->points2DeBarre2;
    }

    /**
     * @param string|null $points2DeBarre2
     */
    final public function setPoints2DeBarre2(?string $points2DeBarre2): void
    {
        $this->points2DeBarre2 = $points2DeBarre2;
    }

    /**
     * @return string|null
     */
    final public function getCondition3DeBarre2(): ?string
    {
        return $this->condition3DeBarre2;
    }

    /**
     * @param string|null $condition3DeBarre2
     */
    final public function setCondition3DeBarre2(?string $condition3DeBarre2): void
    {
        $this->condition3DeBarre2 = $condition3DeBarre2;
    }

    /**
     * @return string|null
     */
    final public function getPoints3DeBarre2(): ?string
    {
        return $this->points3DeBarre2;
    }

    /**
     * @param string|null $points3DeBarre2
     */
    final public function setPoints3DeBarre2(?string $points3DeBarre2): void
    {
        $this->points3DeBarre2 = $points3DeBarre2;
    }

    /**
     * @return string|null
     */
    final public function getCondition4DeBarre2(): ?string
    {
        return $this->condition4DeBarre2;
    }

    /**
     * @param string|null $condition4DeBarre2
     */
    final public function setCondition4DeBarre2(?string $condition4DeBarre2): void
    {
        $this->condition4DeBarre2 = $condition4DeBarre2;
    }

    /**
     * @return string|null
     */
    final public function getPoints4DeBarre2(): ?string
    {
        return $this->points4DeBarre2;
    }

    /**
     * @param string|null $points4DeBarre2
     */
    final public function setPoints4DeBarre2(?string $points4DeBarre2): void
    {
        $this->points4DeBarre2 = $points4DeBarre2;
    }

    /**
     * @return string|null
     */
    final public function getCondition5DeBarre2(): ?string
    {
        return $this->condition5DeBarre2;
    }

    /**
     * @param string|null $condition5DeBarre2
     */
    final public function setCondition5DeBarre2(?string $condition5DeBarre2): void
    {
        $this->condition5DeBarre2 = $condition5DeBarre2;
    }

    /**
     * @return string|null
     */
    final public function getPoints5DeBarre2(): ?string
    {
        return $this->points5DeBarre2;
    }

    /**
     * @param string|null $points5DeBarre2
     */
    final public function setPoints5DeBarre2(?string $points5DeBarre2): void
    {
        $this->points5DeBarre2 = $points5DeBarre2;
    }

    /**
     * @return string|null
     */
    final public function getCondition6DeBarre2(): ?string
    {
        return $this->condition6DeBarre2;
    }

    /**
     * @param string|null $condition6DeBarre2
     */
    final public function setCondition6DeBarre2(?string $condition6DeBarre2): void
    {
        $this->condition6DeBarre2 = $condition6DeBarre2;
    }

    /**
     * @return int|null
     */
    final public function getPoints6DeBarre2(): ?int
    {
        return $this->points6DeBarre2;
    }

    /**
     * @param int|null $points6DeBarre2
     */
    final public function setPoints6DeBarre2(?int $points6DeBarre2): void
    {
        $this->points6DeBarre2 = $points6DeBarre2;
    }

    /**
     * @return string|null
     */
    final public function getBarre3(): ?string
    {
        return $this->barre3;
    }

    /**
     * @param string|null $barre3
     */
    final public function setBarre3(?string $barre3): void
    {
        $this->barre3 = $barre3;
    }

    /**
     * @return string|null
     */
    final public function getConditionDiffRenteDeCondition1(): ?string
    {
        return $this->conditionDiffRenteDeCondition1;
    }

    /**
     * @param string|null $conditionDiffRenteDeCondition1
     */
    final public function setConditionDiffRenteDeCondition1(?string $conditionDiffRenteDeCondition1): void
    {
        $this->conditionDiffRenteDeCondition1 = $conditionDiffRenteDeCondition1;
    }

    /**
     * @return string|null
     */
    final public function getCondition1bisDeBarre3(): ?string
    {
        return $this->condition1bisDeBarre3;
    }

    /**
     * @param string|null $condition1bisDeBarre3
     */
    final public function setCondition1bisDeBarre3(?string $condition1bisDeBarre3): void
    {
        $this->condition1bisDeBarre3 = $condition1bisDeBarre3;
    }

    /**
     * @return string|null
     */
    final public function getPoints1DeBarre3(): ?string    {
        return floatval($this->points1DeBarre3);
    }

    /**
     * @param string|null $points1DeBarre3
     */
    final public function setPoints1DeBarre3(?string $points1DeBarre3): void
    {
        $this->points1DeBarre3 = $points1DeBarre3;
    }

    /**
     * @return string|null
     */
    final public function getCondition2DeBarre3(): ?string
    {
        return $this->condition2DeBarre3;
    }

    /**
     * @param string|null $condition2DeBarre3
     */
    final public function setCondition2DeBarre3(?string $condition2DeBarre3): void
    {
        $this->condition2DeBarre3 = $condition2DeBarre3;
    }

    /**
     * @return string|null
     */
    final public function getPoints2DeBarre3(): ?string
    {
        return $this->points2DeBarre3;
    }

    /**
     * @param string|null $points2DeBarre3
     */
    final public function setPoints2DeBarre3(?string $points2DeBarre3): void
    {
        $this->points2DeBarre3 = $points2DeBarre3;
    }

    /**
     * @return string|null
     */
    final public function getCondition3DeBarre3(): ?string
    {
        return $this->condition3DeBarre3;
    }

    /**
     * @param string|null $condition3DeBarre3
     */
    final public function setCondition3DeBarre3(?string $condition3DeBarre3): void
    {
        $this->condition3DeBarre3 = $condition3DeBarre3;
    }

    /**
     * @return string|null
     */
    final public function getPoints3DeBarre3(): ?string
    {
        return $this->points3DeBarre3;
    }

    /**
     * @param string|null $points3DeBarre3
     */
    final public function setPoints3DeBarre3(?string $points3DeBarre3): void
    {
        $this->points3DeBarre3 = $points3DeBarre3;
    }

    /**
     * @return int|null
     */
    final public function getCondition4DeBarre3(): ?int
    {
        return $this->condition4DeBarre3;
    }

    /**
     * @param int|null $condition4DeBarre3
     */
    final public function setCondition4DeBarre3(?int $condition4DeBarre3): void
    {
        $this->condition4DeBarre3 = $condition4DeBarre3;
    }

    /**
     * @return int|null
     */
    final public function getPoints4DeBarre3(): ?int
    {
        return $this->points4DeBarre3;
    }

    /**
     * @param int|null $points4DeBarre3
     */
    final public function setPoints4DeBarre3(?int $points4DeBarre3): void
    {
        $this->points4DeBarre3 = $points4DeBarre3;
    }

    /**
     * @return int|null
     */
    final public function getCondition5DeBarre3(): ?int
    {
        return $this->condition5DeBarre3;
    }

    /**
     * @param int|null $condition5DeBarre3
     */
    final public function setCondition5DeBarre3(?int $condition5DeBarre3): void
    {
        $this->condition5DeBarre3 = $condition5DeBarre3;
    }

    /**
     * @return int|null
     */
    final public function getPoints5DeBarre3(): ?int
    {
        return $this->points5DeBarre3;
    }

    /**
     * @param int|null $points5DeBarre3
     */
    final public function setPoints5DeBarre3(?int $points5DeBarre3): void
    {
        $this->points5DeBarre3 = $points5DeBarre3;
    }

    /**
     * @return int|null
     */
    final public function getCondition6DeBarre3(): ?int
    {
        return $this->condition6DeBarre3;
    }

    /**
     * @param int|null $condition6DeBarre3
     */
    final public function setCondition6DeBarre3(?int $condition6DeBarre3): void
    {
        $this->condition6DeBarre3 = $condition6DeBarre3;
    }

    /**
     * @return int|null
     */
    final public function getPoints6DeBarre3(): ?int
    {
        return $this->points6DeBarre3;
    }

    /**
     * @param int|null $points6DeBarre3
     */
    final public function setPoints6DeBarre3(?int $points6DeBarre3): void
    {
        $this->points6DeBarre3 = $points6DeBarre3;
    }

    /**
     * @return string|null
     */
    final public function getBarre4(): ?string
    {
        return $this->barre4;
    }

    /**
     * @param string|null $barre4
     */
    final public function setBarre4(?string $barre4): void
    {
        $this->barre4 = $barre4;
    }

    /**
     * @return int|null
     */
    final public function getPoints1DeBarre4(): ?int
    {
        return $this->points1DeBarre4;
    }

    /**
     * @param int|null $points1DeBarre4
     */
    final public function setPoints1DeBarre4(?int $points1DeBarre4): void
    {
        $this->points1DeBarre4 = $points1DeBarre4;
    }

    /**
     * @return string|null
     */
    final public function getBarre5(): ?string
    {
        return $this->barre5;
    }

    /**
     * @param string|null $barre5
     */
    final public function setBarre5(?int $barre5): void
    {
        $this->barre5 = $barre5;
    }

    /**
     * @return int|null
     */
    final public function getPoints1DeBarre5(): ?int
    {
        return $this->points1DeBarre5;
    }

    /**
     * @param int|null $points1DeBarre5
     */
    final public function setPoints1DeBarre5(?int $points1DeBarre5): void
    {
        $this->points1DeBarre5 = $points1DeBarre5;
    }

    /**
     * @return string|null
     */
    final public function getMarkerSpcifiques1(): ?string
    {
        return $this->markerSpcifiques1;
    }

    /**
     * @param string|null $markerSpcifiques1
     */
    final public function setMarkerSpcifiques1(?string $markerSpcifiques1): void
    {
        $this->markerSpcifiques1 = $markerSpcifiques1;
    }

    /**
     * @return string|null
     */
    final public function getPoints1DeMarkersSpcifiques1(): ?string
    {
        return $this->points1DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $points1DeMarkersSpcifiques1
     */
    final public function setPoints1DeMarkersSpcifiques1(?string $points1DeMarkersSpcifiques1): void
    {
        $this->points1DeMarkersSpcifiques1 = $points1DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    final public function getCondition2DeMarkersSpcifiques1(): ?string
    {
        return $this->condition2DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $condition2DeMarkersSpcifiques1
     */
    final public function setCondition2DeMarkersSpcifiques1(?string $condition2DeMarkersSpcifiques1): void
    {
        $this->condition2DeMarkersSpcifiques1 = $condition2DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    final public function getPoints2DeMarkersSpcifiques1(): ?string
    {
        return $this->points2DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $points2DeMarkersSpcifiques1
     */
    final public function setPoints2DeMarkersSpcifiques1(?string $points2DeMarkersSpcifiques1): void
    {
        $this->points2DeMarkersSpcifiques1 = $points2DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    final public function getCondition3DeMarkersSpcifiques1(): ?string
    {
        return $this->condition3DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $condition3DeMarkersSpcifiques1
     */
    final public function setCondition3DeMarkersSpcifiques1(?string $condition3DeMarkersSpcifiques1): void
    {
        $this->condition3DeMarkersSpcifiques1 = $condition3DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    final public function getPoints3DeMarkersSpcifiques1(): ?string
    {
        return $this->points3DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $points3DeMarkersSpcifiques1
     */
    final public function setPoints3DeMarkersSpcifiques1(?string $points3DeMarkersSpcifiques1): void
    {
        $this->points3DeMarkersSpcifiques1 = $points3DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    final public function getCondition4DeMarkersSpcifiques1(): ?string
    {
        return $this->condition4DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $condition4DeMarkersSpcifiques1
     */
    final public function setCondition4DeMarkersSpcifiques1(?string $condition4DeMarkersSpcifiques1): void
    {
        $this->condition4DeMarkersSpcifiques1 = $condition4DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    final public function getPoints4DeMarkersSpcifiques1(): ?string
    {
        return $this->points4DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $points4DeMarkersSpcifiques1
     */
    final public function setPoints4DeMarkersSpcifiques1(?string $points4DeMarkersSpcifiques1): void
    {
        $this->points4DeMarkersSpcifiques1 = $points4DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    final public function getCondition5DeMarkersSpcifiques1(): ?string
    {
        return $this->condition5DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $condition5DeMarkersSpcifiques1
     */
    final public function setCondition5DeMarkersSpcifiques1(?string $condition5DeMarkersSpcifiques1): void
    {
        $this->condition5DeMarkersSpcifiques1 = $condition5DeMarkersSpcifiques1;
    }

    /**
     * @return int|null
     */
    final public function getPoints5DeMarkersSpcifiques1(): ?int
    {
        return $this->points5DeMarkersSpcifiques1;
    }

    /**
     * @param int|null $points5DeMarkersSpcifiques1
     */
    final public function setPoints5DeMarkersSpcifiques1(?int $points5DeMarkersSpcifiques1): void
    {
        $this->points5DeMarkersSpcifiques1 = $points5DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    final public function getCondition6DeMarkersSpcifiques1(): ?string
    {
        return $this->condition6DeMarkersSpcifiques1;
    }

    /**
     * @param string|null $condition6DeMarkersSpcifiques1
     */
    final public function setCondition6DeMarkersSpcifiques1(?string $condition6DeMarkersSpcifiques1): void
    {
        $this->condition6DeMarkersSpcifiques1 = $condition6DeMarkersSpcifiques1;
    }

    /**
     * @return int|null
     */
    final public function getPoints6DeMarkersSpcifiques1(): ?int
    {
        return $this->points6DeMarkersSpcifiques1;
    }

    /**
     * @param int|null $points6DeMarkersSpcifiques1
     */
    final public function setPoints6DeMarkersSpcifiques1(?int $points6DeMarkersSpcifiques1): void
    {
        $this->points6DeMarkersSpcifiques1 = $points6DeMarkersSpcifiques1;
    }

    /**
     * @return string|null
     */
    final public function getMarkerSpcifiques2(): ?string
    {
        return $this->markerSpcifiques2;
    }

    /**
     * @param string|null $markerSpcifiques2
     */
    final public function setMarkerSpcifiques2(?string $markerSpcifiques2): void
    {
        $this->markerSpcifiques2 = $markerSpcifiques2;
    }

    /**
     * @return string|null
     */
    final public function getPoints1DeMarkersSpcifiques2(): ?string
    {
        return $this->points1DeMarkersSpcifiques2;
    }

    /**
     * @param string|null $points1DeMarkersSpcifiques2
     */
    final public function setPoints1DeMarkersSpcifiques2(?string $points1DeMarkersSpcifiques2): void
    {
        $this->points1DeMarkersSpcifiques2 = $points1DeMarkersSpcifiques2;
    }

    /**
     * @return string|null
     */
    final public function getMarkerSpcifiques3(): ?string
    {
        return $this->markerSpcifiques3;
    }

    /**
     * @param string|null $markerSpcifiques3
     */
    final public function setMarkerSpcifiques3(?string $markerSpcifiques3): void
    {
        $this->markerSpcifiques3 = $markerSpcifiques3;
    }

    /**
     * @return int|null
     */
    final public function getPoints1DeMarkersSpcifiques3(): ?int
    {
        return $this->points1DeMarkersSpcifiques3;
    }

    /**
     * @param int|null $points1DeMarkersSpcifiques3
     */
    final public function setPoints1DeMarkersSpcifiques3(?int $points1DeMarkersSpcifiques3): void
    {
        $this->points1DeMarkersSpcifiques3 = $points1DeMarkersSpcifiques3;
    }

    #[ORM\Column(name: "Marker_spcifiques_3", type: Types::STRING, length: 32, nullable: true)]
    private ?string $markerSpcifiques3;

    #[ORM\Column(name: "Points_1_de_Markers_spcifiques_3", type: Types::INTEGER, nullable: true)]
    private ?int $points1DeMarkersSpcifiques3;
}
