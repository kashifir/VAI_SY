<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestDev
 *
 * @ORM\Table(name="test_dev")
 * @ORM\Entity
 */
class TestDev
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
     * @ORM\Column(name="Finalisation", type="string", length=2, nullable=true)
     */
    private $finalisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type_of_data", type="string", length=35, nullable=true)
     */
    private $typeOfData;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Module", type="string", length=28, nullable=true)
     */
    private $module;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaires_informations", type="string", length=103, nullable=true)
     */
    private $commentairesInformations;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaires_informations_2", type="string", length=78, nullable=true)
     */
    private $commentairesInformations2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaires_informations_3", type="string", length=118, nullable=true)
     */
    private $commentairesInformations3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Noms_FR_EN_IT", type="string", length=113, nullable=true)
     */
    private $nomsFrEnIt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Noms", type="string", length=145, nullable=true)
     */
    private $noms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Reference_SCTID", type="decimal", precision=26, scale=16, nullable=true)
     */
    private $referenceSctid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Detail", type="string", length=24, nullable=true)
     */
    private $detail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Data_category", type="string", length=33, nullable=true)
     */
    private $dataCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Period_of_validity", type="string", length=28, nullable=true)
     */
    private $periodOfValidity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Invalidation_increment", type="string", length=17, nullable=true)
     */
    private $invalidationIncrement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sexe", type="string", length=1, nullable=true)
     */
    private $sexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold_age_min", type="string", length=5, nullable=true)
     */
    private $thresholdAgeMin = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold_age_max", type="string", length=5, nullable=true)
     */
    private $thresholdAgeMax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Data_Format", type="string", length=10, nullable=true)
     */
    private $dataFormat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Unit_de_mesure", type="string", length=37, nullable=true)
     */
    private $unitDeMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold_min", type="string", length=31, nullable=true)
     */
    private $thresholdMin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold_max", type="string", length=27, nullable=true)
     */
    private $thresholdMax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition1", type="string", length=17, nullable=true)
     */
    private $condition1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre", type="string", length=18, nullable=true)
     */
    private $barre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Barre_1", type="string", length=45, nullable=true)
     */
    private $points1DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_2_de_Barre_1", type="string", length=39, nullable=true)
     */
    private $condition2DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_2_de_Barre_1", type="decimal", precision=3, scale=1, nullable=true)
     */
    private $points2DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_3_de_Barre_1", type="string", length=13, nullable=true)
     */
    private $condition3DeBarre1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_3_de_Barre_1", type="integer", nullable=true)
     */
    private $points3DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_4_de_Barre_1", type="string", length=10, nullable=true)
     */
    private $condition4DeBarre1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_4_de_Barre_1", type="integer", nullable=true)
     */
    private $points4DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_5_de_Barre_1", type="string", length=10, nullable=true)
     */
    private $condition5DeBarre1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_5_de_Barre_1", type="integer", nullable=true)
     */
    private $points5DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_6_de_Barre_1", type="string", length=11, nullable=true)
     */
    private $condition6DeBarre1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_6_de_Barre_1", type="integer", nullable=true)
     */
    private $points6DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre_2", type="string", length=28, nullable=true)
     */
    private $barre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Barre_2", type="string", length=40, nullable=true)
     */
    private $points1DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_2_de_Barre_2", type="string", length=38, nullable=true)
     */
    private $condition2DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_2_de_Barre_2", type="string", length=38, nullable=true)
     */
    private $points2DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_3_de_Barre_2", type="string", length=81, nullable=true)
     */
    private $condition3DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_3_de_Barre_2", type="string", length=38, nullable=true)
     */
    private $points3DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_4_de_Barre_2", type="string", length=15, nullable=true)
     */
    private $condition4DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_4_de_Barre_2", type="decimal", precision=2, scale=1, nullable=true)
     */
    private $points4DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_5_de_Barre_2", type="string", length=4, nullable=true)
     */
    private $condition5DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_5_de_Barre_2", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $points5DeBarre2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Condition_6_de_Barre_2", type="integer", nullable=true)
     */
    private $condition6DeBarre2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_6_de_Barre_2", type="integer", nullable=true)
     */
    private $points6DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre_3", type="string", length=56, nullable=true)
     */
    private $barre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_diff_rente_de_condition_1", type="string", length=3, nullable=true)
     */
    private $conditionDiffRenteDeCondition1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_1bis_de_Barre_3", type="string", length=6, nullable=true)
     */
    private $condition1bisDeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Barre_3", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $points1DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_2_de_Barre_3", type="string", length=13, nullable=true)
     */
    private $condition2DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_2_de_Barre_3", type="string", length=28, nullable=true)
     */
    private $points2DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_3_de_Barre_3", type="string", length=5, nullable=true)
     */
    private $condition3DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_3_de_Barre_3", type="string", length=28, nullable=true)
     */
    private $points3DeBarre3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Condition_4_de_Barre_3", type="integer", nullable=true)
     */
    private $condition4DeBarre3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_4_de_Barre_3", type="integer", nullable=true)
     */
    private $points4DeBarre3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Condition_5_de_Barre_3", type="integer", nullable=true)
     */
    private $condition5DeBarre3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_5_de_Barre_3", type="integer", nullable=true)
     */
    private $points5DeBarre3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Condition_6_de_Barre_3", type="integer", nullable=true)
     */
    private $condition6DeBarre3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_6_de_Barre_3", type="integer", nullable=true)
     */
    private $points6DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre_4", type="string", length=19, nullable=true)
     */
    private $barre4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_1_de_Barre_4", type="integer", nullable=true)
     */
    private $points1DeBarre4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre_5", type="string", length=24, nullable=true)
     */
    private $barre5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_1_de_Barre_5", type="integer", nullable=true)
     */
    private $points1DeBarre5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marker_spcifiques_1", type="string", length=76, nullable=true)
     */
    private $markerSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Markers_spcifiques_1", type="string", length=83, nullable=true)
     */
    private $points1DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_2_de_Markers_spcifiques_1", type="string", length=71, nullable=true)
     */
    private $condition2DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_2_de_Markers_spcifiques_1", type="string", length=42, nullable=true)
     */
    private $points2DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_3_de_Markers_spcifiques_1", type="string", length=40, nullable=true)
     */
    private $condition3DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_3_de_Markers_spcifiques_1", type="string", length=43, nullable=true)
     */
    private $points3DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_4_de_Markers_spcifiques_1", type="string", length=43, nullable=true)
     */
    private $condition4DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_4_de_Markers_spcifiques_1", type="decimal", precision=2, scale=1, nullable=true)
     */
    private $points4DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_5_de_Markers_spcifiques_1", type="string", length=10, nullable=true)
     */
    private $condition5DeMarkersSpcifiques1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_5_de_Markers_spcifiques_1", type="integer", nullable=true)
     */
    private $points5DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Condition_6_de_Markers_spcifiques_1", type="string", length=11, nullable=true)
     */
    private $condition6DeMarkersSpcifiques1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_6_de_Markers_spcifiques_1", type="integer", nullable=true)
     */
    private $points6DeMarkersSpcifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marker_spcifiques_2", type="string", length=47, nullable=true)
     */
    private $markerSpcifiques2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Points_1_de_Markers_spcifiques_2", type="string", length=29, nullable=true)
     */
    private $points1DeMarkersSpcifiques2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marker_spcifiques_3", type="string", length=32, nullable=true)
     */
    private $markerSpcifiques3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Points_1_de_Markers_spcifiques_3", type="integer", nullable=true)
     */
    private $points1DeMarkersSpcifiques3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFinalisation(): ?string
    {
        return $this->finalisation;
    }

    public function setFinalisation(?string $finalisation): self
    {
        $this->finalisation = $finalisation;

        return $this;
    }

    public function getTypeOfData(): ?string
    {
        return $this->typeOfData;
    }

    public function setTypeOfData(?string $typeOfData): self
    {
        $this->typeOfData = $typeOfData;

        return $this;
    }

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(?string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getCommentairesInformations(): ?string
    {
        return $this->commentairesInformations;
    }

    public function setCommentairesInformations(?string $commentairesInformations): self
    {
        $this->commentairesInformations = $commentairesInformations;

        return $this;
    }

    public function getCommentairesInformations2(): ?string
    {
        return $this->commentairesInformations2;
    }

    public function setCommentairesInformations2(?string $commentairesInformations2): self
    {
        $this->commentairesInformations2 = $commentairesInformations2;

        return $this;
    }

    public function getCommentairesInformations3(): ?string
    {
        return $this->commentairesInformations3;
    }

    public function setCommentairesInformations3(?string $commentairesInformations3): self
    {
        $this->commentairesInformations3 = $commentairesInformations3;

        return $this;
    }

    public function getNomsFrEnIt(): ?string
    {
        return $this->nomsFrEnIt;
    }

    public function setNomsFrEnIt(?string $nomsFrEnIt): self
    {
        $this->nomsFrEnIt = $nomsFrEnIt;

        return $this;
    }

    public function getNoms(): ?string
    {
        return $this->noms;
    }

    public function setNoms(?string $noms): self
    {
        $this->noms = $noms;

        return $this;
    }

    public function getReferenceSctid(): ?string
    {
        return $this->referenceSctid;
    }

    public function setReferenceSctid(?string $referenceSctid): self
    {
        $this->referenceSctid = $referenceSctid;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(?string $detail): self
    {
        $this->detail = $detail;

        return $this;
    }

    public function getDataCategory(): ?string
    {
        return $this->dataCategory;
    }

    public function setDataCategory(?string $dataCategory): self
    {
        $this->dataCategory = $dataCategory;

        return $this;
    }

    public function getPeriodOfValidity(): ?string
    {
        return $this->periodOfValidity;
    }

    public function setPeriodOfValidity(?string $periodOfValidity): self
    {
        $this->periodOfValidity = $periodOfValidity;

        return $this;
    }

    public function getInvalidationIncrement(): ?string
    {
        return $this->invalidationIncrement;
    }

    public function setInvalidationIncrement(?string $invalidationIncrement): self
    {
        $this->invalidationIncrement = $invalidationIncrement;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getThresholdAgeMin(): ?string
    {
        return $this->thresholdAgeMin;
    }

    public function setThresholdAgeMin(?string $thresholdAgeMin): self
    {
        $this->thresholdAgeMin = $thresholdAgeMin;

        return $this;
    }

    public function getThresholdAgeMax(): ?string
    {
        return $this->thresholdAgeMax;
    }

    public function setThresholdAgeMax(?string $thresholdAgeMax): self
    {
        $this->thresholdAgeMax = $thresholdAgeMax;

        return $this;
    }

    public function getDataFormat(): ?string
    {
        return $this->dataFormat;
    }

    public function setDataFormat(?string $dataFormat): self
    {
        $this->dataFormat = $dataFormat;

        return $this;
    }

    public function getUnitDeMesure(): ?string
    {
        return $this->unitDeMesure;
    }

    public function setUnitDeMesure(?string $unitDeMesure): self
    {
        $this->unitDeMesure = $unitDeMesure;

        return $this;
    }

    public function getThresholdMin(): ?string
    {
        return $this->thresholdMin;
    }

    public function setThresholdMin(?string $thresholdMin): self
    {
        $this->thresholdMin = $thresholdMin;

        return $this;
    }

    public function getThresholdMax(): ?string
    {
        return $this->thresholdMax;
    }

    public function setThresholdMax(?string $thresholdMax): self
    {
        $this->thresholdMax = $thresholdMax;

        return $this;
    }

    public function getCondition1(): ?string
    {
        return $this->condition1;
    }

    public function setCondition1(?string $condition1): self
    {
        $this->condition1 = $condition1;

        return $this;
    }

    public function getBarre(): ?string
    {
        return $this->barre;
    }

    public function setBarre(?string $barre): self
    {
        $this->barre = $barre;

        return $this;
    }

    public function getPoints1DeBarre1(): ?string
    {
        return $this->points1DeBarre1;
    }

    public function setPoints1DeBarre1(?string $points1DeBarre1): self
    {
        $this->points1DeBarre1 = $points1DeBarre1;

        return $this;
    }

    public function getCondition2DeBarre1(): ?string
    {
        return $this->condition2DeBarre1;
    }

    public function setCondition2DeBarre1(?string $condition2DeBarre1): self
    {
        $this->condition2DeBarre1 = $condition2DeBarre1;

        return $this;
    }

    public function getPoints2DeBarre1(): ?string
    {
        return $this->points2DeBarre1;
    }

    public function setPoints2DeBarre1(?string $points2DeBarre1): self
    {
        $this->points2DeBarre1 = $points2DeBarre1;

        return $this;
    }

    public function getCondition3DeBarre1(): ?string
    {
        return $this->condition3DeBarre1;
    }

    public function setCondition3DeBarre1(?string $condition3DeBarre1): self
    {
        $this->condition3DeBarre1 = $condition3DeBarre1;

        return $this;
    }

    public function getPoints3DeBarre1(): ?int
    {
        return $this->points3DeBarre1;
    }

    public function setPoints3DeBarre1(?int $points3DeBarre1): self
    {
        $this->points3DeBarre1 = $points3DeBarre1;

        return $this;
    }

    public function getCondition4DeBarre1(): ?string
    {
        return $this->condition4DeBarre1;
    }

    public function setCondition4DeBarre1(?string $condition4DeBarre1): self
    {
        $this->condition4DeBarre1 = $condition4DeBarre1;

        return $this;
    }

    public function getPoints4DeBarre1(): ?int
    {
        return $this->points4DeBarre1;
    }

    public function setPoints4DeBarre1(?int $points4DeBarre1): self
    {
        $this->points4DeBarre1 = $points4DeBarre1;

        return $this;
    }

    public function getCondition5DeBarre1(): ?string
    {
        return $this->condition5DeBarre1;
    }

    public function setCondition5DeBarre1(?string $condition5DeBarre1): self
    {
        $this->condition5DeBarre1 = $condition5DeBarre1;

        return $this;
    }

    public function getPoints5DeBarre1(): ?int
    {
        return $this->points5DeBarre1;
    }

    public function setPoints5DeBarre1(?int $points5DeBarre1): self
    {
        $this->points5DeBarre1 = $points5DeBarre1;

        return $this;
    }

    public function getCondition6DeBarre1(): ?string
    {
        return $this->condition6DeBarre1;
    }

    public function setCondition6DeBarre1(?string $condition6DeBarre1): self
    {
        $this->condition6DeBarre1 = $condition6DeBarre1;

        return $this;
    }

    public function getPoints6DeBarre1(): ?int
    {
        return $this->points6DeBarre1;
    }

    public function setPoints6DeBarre1(?int $points6DeBarre1): self
    {
        $this->points6DeBarre1 = $points6DeBarre1;

        return $this;
    }

    public function getBarre2(): ?string
    {
        return $this->barre2;
    }

    public function setBarre2(?string $barre2): self
    {
        $this->barre2 = $barre2;

        return $this;
    }

    public function getPoints1DeBarre2(): ?string
    {
        return $this->points1DeBarre2;
    }

    public function setPoints1DeBarre2(?string $points1DeBarre2): self
    {
        $this->points1DeBarre2 = $points1DeBarre2;

        return $this;
    }

    public function getCondition2DeBarre2(): ?string
    {
        return $this->condition2DeBarre2;
    }

    public function setCondition2DeBarre2(?string $condition2DeBarre2): self
    {
        $this->condition2DeBarre2 = $condition2DeBarre2;

        return $this;
    }

    public function getPoints2DeBarre2(): ?string
    {
        return $this->points2DeBarre2;
    }

    public function setPoints2DeBarre2(?string $points2DeBarre2): self
    {
        $this->points2DeBarre2 = $points2DeBarre2;

        return $this;
    }

    public function getCondition3DeBarre2(): ?string
    {
        return $this->condition3DeBarre2;
    }

    public function setCondition3DeBarre2(?string $condition3DeBarre2): self
    {
        $this->condition3DeBarre2 = $condition3DeBarre2;

        return $this;
    }

    public function getPoints3DeBarre2(): ?string
    {
        return $this->points3DeBarre2;
    }

    public function setPoints3DeBarre2(?string $points3DeBarre2): self
    {
        $this->points3DeBarre2 = $points3DeBarre2;

        return $this;
    }

    public function getCondition4DeBarre2(): ?string
    {
        return $this->condition4DeBarre2;
    }

    public function setCondition4DeBarre2(?string $condition4DeBarre2): self
    {
        $this->condition4DeBarre2 = $condition4DeBarre2;

        return $this;
    }

    public function getPoints4DeBarre2(): ?string
    {
        return $this->points4DeBarre2;
    }

    public function setPoints4DeBarre2(?string $points4DeBarre2): self
    {
        $this->points4DeBarre2 = $points4DeBarre2;

        return $this;
    }

    public function getCondition5DeBarre2(): ?string
    {
        return $this->condition5DeBarre2;
    }

    public function setCondition5DeBarre2(?string $condition5DeBarre2): self
    {
        $this->condition5DeBarre2 = $condition5DeBarre2;

        return $this;
    }

    public function getPoints5DeBarre2(): ?string
    {
        return $this->points5DeBarre2;
    }

    public function setPoints5DeBarre2(?string $points5DeBarre2): self
    {
        $this->points5DeBarre2 = $points5DeBarre2;

        return $this;
    }

    public function getCondition6DeBarre2(): ?int
    {
        return $this->condition6DeBarre2;
    }

    public function setCondition6DeBarre2(?int $condition6DeBarre2): self
    {
        $this->condition6DeBarre2 = $condition6DeBarre2;

        return $this;
    }

    public function getPoints6DeBarre2(): ?int
    {
        return $this->points6DeBarre2;
    }

    public function setPoints6DeBarre2(?int $points6DeBarre2): self
    {
        $this->points6DeBarre2 = $points6DeBarre2;

        return $this;
    }

    public function getBarre3(): ?string
    {
        return $this->barre3;
    }

    public function setBarre3(?string $barre3): self
    {
        $this->barre3 = $barre3;

        return $this;
    }

    public function getConditionDiffRenteDeCondition1(): ?string
    {
        return $this->conditionDiffRenteDeCondition1;
    }

    public function setConditionDiffRenteDeCondition1(?string $conditionDiffRenteDeCondition1): self
    {
        $this->conditionDiffRenteDeCondition1 = $conditionDiffRenteDeCondition1;

        return $this;
    }

    public function getCondition1bisDeBarre3(): ?string
    {
        return $this->condition1bisDeBarre3;
    }

    public function setCondition1bisDeBarre3(?string $condition1bisDeBarre3): self
    {
        $this->condition1bisDeBarre3 = $condition1bisDeBarre3;

        return $this;
    }

    public function getPoints1DeBarre3(): ?string
    {
        return $this->points1DeBarre3;
    }

    public function setPoints1DeBarre3(?string $points1DeBarre3): self
    {
        $this->points1DeBarre3 = $points1DeBarre3;

        return $this;
    }

    public function getCondition2DeBarre3(): ?string
    {
        return $this->condition2DeBarre3;
    }

    public function setCondition2DeBarre3(?string $condition2DeBarre3): self
    {
        $this->condition2DeBarre3 = $condition2DeBarre3;

        return $this;
    }

    public function getPoints2DeBarre3(): ?string
    {
        return $this->points2DeBarre3;
    }

    public function setPoints2DeBarre3(?string $points2DeBarre3): self
    {
        $this->points2DeBarre3 = $points2DeBarre3;

        return $this;
    }

    public function getCondition3DeBarre3(): ?string
    {
        return $this->condition3DeBarre3;
    }

    public function setCondition3DeBarre3(?string $condition3DeBarre3): self
    {
        $this->condition3DeBarre3 = $condition3DeBarre3;

        return $this;
    }

    public function getPoints3DeBarre3(): ?string
    {
        return $this->points3DeBarre3;
    }

    public function setPoints3DeBarre3(?string $points3DeBarre3): self
    {
        $this->points3DeBarre3 = $points3DeBarre3;

        return $this;
    }

    public function getCondition4DeBarre3(): ?int
    {
        return $this->condition4DeBarre3;
    }

    public function setCondition4DeBarre3(?int $condition4DeBarre3): self
    {
        $this->condition4DeBarre3 = $condition4DeBarre3;

        return $this;
    }

    public function getPoints4DeBarre3(): ?int
    {
        return $this->points4DeBarre3;
    }

    public function setPoints4DeBarre3(?int $points4DeBarre3): self
    {
        $this->points4DeBarre3 = $points4DeBarre3;

        return $this;
    }

    public function getCondition5DeBarre3(): ?int
    {
        return $this->condition5DeBarre3;
    }

    public function setCondition5DeBarre3(?int $condition5DeBarre3): self
    {
        $this->condition5DeBarre3 = $condition5DeBarre3;

        return $this;
    }

    public function getPoints5DeBarre3(): ?int
    {
        return $this->points5DeBarre3;
    }

    public function setPoints5DeBarre3(?int $points5DeBarre3): self
    {
        $this->points5DeBarre3 = $points5DeBarre3;

        return $this;
    }

    public function getCondition6DeBarre3(): ?int
    {
        return $this->condition6DeBarre3;
    }

    public function setCondition6DeBarre3(?int $condition6DeBarre3): self
    {
        $this->condition6DeBarre3 = $condition6DeBarre3;

        return $this;
    }

    public function getPoints6DeBarre3(): ?int
    {
        return $this->points6DeBarre3;
    }

    public function setPoints6DeBarre3(?int $points6DeBarre3): self
    {
        $this->points6DeBarre3 = $points6DeBarre3;

        return $this;
    }

    public function getBarre4(): ?string
    {
        return $this->barre4;
    }

    public function setBarre4(?string $barre4): self
    {
        $this->barre4 = $barre4;

        return $this;
    }

    public function getPoints1DeBarre4(): ?int
    {
        return $this->points1DeBarre4;
    }

    public function setPoints1DeBarre4(?int $points1DeBarre4): self
    {
        $this->points1DeBarre4 = $points1DeBarre4;

        return $this;
    }

    public function getBarre5(): ?string
    {
        return $this->barre5;
    }

    public function setBarre5(?string $barre5): self
    {
        $this->barre5 = $barre5;

        return $this;
    }

    public function getPoints1DeBarre5(): ?int
    {
        return $this->points1DeBarre5;
    }

    public function setPoints1DeBarre5(?int $points1DeBarre5): self
    {
        $this->points1DeBarre5 = $points1DeBarre5;

        return $this;
    }

    public function getMarkerSpcifiques1(): ?string
    {
        return $this->markerSpcifiques1;
    }

    public function setMarkerSpcifiques1(?string $markerSpcifiques1): self
    {
        $this->markerSpcifiques1 = $markerSpcifiques1;

        return $this;
    }

    public function getPoints1DeMarkersSpcifiques1(): ?string
    {
        return $this->points1DeMarkersSpcifiques1;
    }

    public function setPoints1DeMarkersSpcifiques1(?string $points1DeMarkersSpcifiques1): self
    {
        $this->points1DeMarkersSpcifiques1 = $points1DeMarkersSpcifiques1;

        return $this;
    }

    public function getCondition2DeMarkersSpcifiques1(): ?string
    {
        return $this->condition2DeMarkersSpcifiques1;
    }

    public function setCondition2DeMarkersSpcifiques1(?string $condition2DeMarkersSpcifiques1): self
    {
        $this->condition2DeMarkersSpcifiques1 = $condition2DeMarkersSpcifiques1;

        return $this;
    }

    public function getPoints2DeMarkersSpcifiques1(): ?string
    {
        return $this->points2DeMarkersSpcifiques1;
    }

    public function setPoints2DeMarkersSpcifiques1(?string $points2DeMarkersSpcifiques1): self
    {
        $this->points2DeMarkersSpcifiques1 = $points2DeMarkersSpcifiques1;

        return $this;
    }

    public function getCondition3DeMarkersSpcifiques1(): ?string
    {
        return $this->condition3DeMarkersSpcifiques1;
    }

    public function setCondition3DeMarkersSpcifiques1(?string $condition3DeMarkersSpcifiques1): self
    {
        $this->condition3DeMarkersSpcifiques1 = $condition3DeMarkersSpcifiques1;

        return $this;
    }

    public function getPoints3DeMarkersSpcifiques1(): ?string
    {
        return $this->points3DeMarkersSpcifiques1;
    }

    public function setPoints3DeMarkersSpcifiques1(?string $points3DeMarkersSpcifiques1): self
    {
        $this->points3DeMarkersSpcifiques1 = $points3DeMarkersSpcifiques1;

        return $this;
    }

    public function getCondition4DeMarkersSpcifiques1(): ?string
    {
        return $this->condition4DeMarkersSpcifiques1;
    }

    public function setCondition4DeMarkersSpcifiques1(?string $condition4DeMarkersSpcifiques1): self
    {
        $this->condition4DeMarkersSpcifiques1 = $condition4DeMarkersSpcifiques1;

        return $this;
    }

    public function getPoints4DeMarkersSpcifiques1(): ?string
    {
        return $this->points4DeMarkersSpcifiques1;
    }

    public function setPoints4DeMarkersSpcifiques1(?string $points4DeMarkersSpcifiques1): self
    {
        $this->points4DeMarkersSpcifiques1 = $points4DeMarkersSpcifiques1;

        return $this;
    }

    public function getCondition5DeMarkersSpcifiques1(): ?string
    {
        return $this->condition5DeMarkersSpcifiques1;
    }

    public function setCondition5DeMarkersSpcifiques1(?string $condition5DeMarkersSpcifiques1): self
    {
        $this->condition5DeMarkersSpcifiques1 = $condition5DeMarkersSpcifiques1;

        return $this;
    }

    public function getPoints5DeMarkersSpcifiques1(): ?int
    {
        return $this->points5DeMarkersSpcifiques1;
    }

    public function setPoints5DeMarkersSpcifiques1(?int $points5DeMarkersSpcifiques1): self
    {
        $this->points5DeMarkersSpcifiques1 = $points5DeMarkersSpcifiques1;

        return $this;
    }

    public function getCondition6DeMarkersSpcifiques1(): ?string
    {
        return $this->condition6DeMarkersSpcifiques1;
    }

    public function setCondition6DeMarkersSpcifiques1(?string $condition6DeMarkersSpcifiques1): self
    {
        $this->condition6DeMarkersSpcifiques1 = $condition6DeMarkersSpcifiques1;

        return $this;
    }

    public function getPoints6DeMarkersSpcifiques1(): ?int
    {
        return $this->points6DeMarkersSpcifiques1;
    }

    public function setPoints6DeMarkersSpcifiques1(?int $points6DeMarkersSpcifiques1): self
    {
        $this->points6DeMarkersSpcifiques1 = $points6DeMarkersSpcifiques1;

        return $this;
    }

    public function getMarkerSpcifiques2(): ?string
    {
        return $this->markerSpcifiques2;
    }

    public function setMarkerSpcifiques2(?string $markerSpcifiques2): self
    {
        $this->markerSpcifiques2 = $markerSpcifiques2;

        return $this;
    }

    public function getPoints1DeMarkersSpcifiques2(): ?string
    {
        return $this->points1DeMarkersSpcifiques2;
    }

    public function setPoints1DeMarkersSpcifiques2(?string $points1DeMarkersSpcifiques2): self
    {
        $this->points1DeMarkersSpcifiques2 = $points1DeMarkersSpcifiques2;

        return $this;
    }

    public function getMarkerSpcifiques3(): ?string
    {
        return $this->markerSpcifiques3;
    }

    public function setMarkerSpcifiques3(?string $markerSpcifiques3): self
    {
        $this->markerSpcifiques3 = $markerSpcifiques3;

        return $this;
    }

    public function getPoints1DeMarkersSpcifiques3(): ?int
    {
        return $this->points1DeMarkersSpcifiques3;
    }

    public function setPoints1DeMarkersSpcifiques3(?int $points1DeMarkersSpcifiques3): self
    {
        $this->points1DeMarkersSpcifiques3 = $points1DeMarkersSpcifiques3;

        return $this;
    }


}
