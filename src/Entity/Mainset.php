<?php

namespace App\Entity;

use App\Repository\MainsetRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * Mainset
 *
 * @ORM\Table(name="mainset")
 * @ORM\Entity(repositoryClass=MainsetRepository::class)
 */
class Mainset
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private ?int $id = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type_of_data", type="string", length=255, nullable=true)
     */
    private ?string $typeOfData;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Module", type="string", length=255, nullable=true)
     */
    private ?string $module;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaires_informations", type="string", length=255, nullable=true)
     */
    private ?string $commentairesInformations;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaires_informations_2", type="string", length=255, nullable=true)
     */
    private ?string $commentairesInformations2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaires_informations_3", type="string", length=255, nullable=true)
     */
    private ?string $commentairesInformations3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="noms_fr_en_it", type="string", length=255, nullable=true)
     */
    private ?string $nomsFrEnIt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Noms", type="string", length=255, nullable=true)
     */
    private ?string $noms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Reference_SCTID", type="string", length=255, nullable=true)
     */
    private ?string $referenceSctid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Detail", type="string", length=255, nullable=true)
     */
    private ?string $detail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Data_category", type="string", length=255, nullable=true)
     */
    private ?string $dataCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Period_of_validity", type="string", length=255, nullable=true)
     */
    private ?string $periodOfValidity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Invalidation_increment", type="string", length=255, nullable=true)
     */
    private ?string $invalidationIncrement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sexe", type="string", length=2, nullable=true)
     */
    private ?string $sexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold_age_min", type="string", length=5, nullable=true)
     */
    private ?string $thresholdAgeMin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold_age_max", type="string", length=5, nullable=true)
     */
    private ?string $thresholdAgeMax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Data_Format", type="string", length=255, nullable=true)
     */
    private ?string $dataFormat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Unit_de_mesure", type="string", length=255, nullable=true)
     */
    private ?string $unitDeMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold_min", type="string", length=255, nullable=true)
     */
    private ?string $thresholdMin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold_max", type="string", length=255, nullable=true)
     */
    private ?string $thresholdMax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition1", type="string", length=255, nullable=true)
     */
    private ?string $condition1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Barre", type="string", length=255, nullable=true)
     */
    private ?string $barre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $points1DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_2_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $condition2DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_2_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $points2DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_3_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $condition3DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_3_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $points3DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_4_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $condition4DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_4_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $points4DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_5_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $condition5DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_5_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $points5DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_6_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $condition6DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_6_de_Barre", type="string", length=255, nullable=true)
     */
    private ?string $points6DeBarre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barre_2", type="string", length=255, nullable=true)
     */
    private ?string $barre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $points1DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_2_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $condition2DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_2_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $points2DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_3_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $condition3DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_3_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $points3DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_4_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $condition4DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_4_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $points4DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_5_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $condition5DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_5_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $points5DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_6_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $condition6DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_6_de_barre_2", type="string", length=255, nullable=true)
     */
    private ?string $points6DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barre_3", type="string", length=255, nullable=true)
     */
    private ?string $barre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_differente_de_condition_1", type="string", length=255, nullable=true)
     */
    private ?string $conditionDifferenteDeCondition1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_1bis_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $condition1bisDeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $points1DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_2_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $condition2DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_2_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $points2DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_3_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $condition3DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_3_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $points3DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_4_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $condition4DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_4_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $points4DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_5_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $condition5DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_5_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $points5DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_6_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $condition6DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_6_de_barre_3", type="string", length=255, nullable=true)
     */
    private ?string $points6DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barre_4", type="string", length=255, nullable=true)
     */
    private ?string $barre4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_barre_4", type="string", length=255, nullable=true)
     */
    private ?string $points1DeBarre4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barre_5", type="string", length=255, nullable=true)
     */
    private ?string $barre5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_barre_5", type="string", length=255, nullable=true)
     */
    private ?string $points1DeBarre5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marker_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $markerSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $points1DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_2_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $condition2DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_2_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $points2DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_3_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $condition3DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_3_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $points3DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_4_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $condition4DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_4_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $points4DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_5_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $condition5DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_5_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $points5DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_6_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $condition6DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_6_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private ?string $points6DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marker_specifiques_2", type="string", length=255, nullable=true)
     */
    private ?string $markerSpecifiques2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_markers_specifiques_2", type="string", length=255, nullable=true)
     */
    private ?string $points1DeMarkersSpecifiques2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marker_specifiques_3", type="string", length=255, nullable=true)
     */
    private ?string $markerSpecifiques3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_markers_specifiques_3", type="string", length=255, nullable=true)
     */
    private ?string $points1DeMarkersSpecifiques3;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPoints1DeBarre(): ?string
    {
        return $this->points1DeBarre;
    }

    public function setPoints1DeBarre(?string $points1DeBarre): self
    {
        $this->points1DeBarre = $points1DeBarre;

        return $this;
    }

    public function getCondition2DeBarre(): ?string
    {
        return $this->condition2DeBarre;
    }

    public function setCondition2DeBarre(?string $condition2DeBarre): self
    {
        $this->condition2DeBarre = $condition2DeBarre;

        return $this;
    }

    public function getPoints2DeBarre(): ?string
    {
        return $this->points2DeBarre;
    }

    public function setPoints2DeBarre(?string $points2DeBarre): self
    {
        $this->points2DeBarre = $points2DeBarre;

        return $this;
    }

    public function getCondition3DeBarre(): ?string
    {
        return $this->condition3DeBarre;
    }

    public function setCondition3DeBarre(?string $condition3DeBarre): self
    {
        $this->condition3DeBarre = $condition3DeBarre;

        return $this;
    }

    public function getPoints3DeBarre(): ?string
    {
        return $this->points3DeBarre;
    }

    public function setPoints3DeBarre(?string $points3DeBarre): self
    {
        $this->points3DeBarre = $points3DeBarre;

        return $this;
    }

    public function getCondition4DeBarre(): ?string
    {
        return $this->condition4DeBarre;
    }

    public function setCondition4DeBarre(?string $condition4DeBarre): self
    {
        $this->condition4DeBarre = $condition4DeBarre;

        return $this;
    }

    public function getPoints4DeBarre(): ?string
    {
        return $this->points4DeBarre;
    }

    public function setPoints4DeBarre(?string $points4DeBarre): self
    {
        $this->points4DeBarre = $points4DeBarre;

        return $this;
    }

    public function getCondition5DeBarre(): ?string
    {
        return $this->condition5DeBarre;
    }

    public function setCondition5DeBarre(?string $condition5DeBarre): self
    {
        $this->condition5DeBarre = $condition5DeBarre;

        return $this;
    }

    public function getPoints5DeBarre(): ?string
    {
        return $this->points5DeBarre;
    }

    public function setPoints5DeBarre(?string $points5DeBarre): self
    {
        $this->points5DeBarre = $points5DeBarre;

        return $this;
    }

    public function getCondition6DeBarre(): ?string
    {
        return $this->condition6DeBarre;
    }

    public function setCondition6DeBarre(?string $condition6DeBarre): self
    {
        $this->condition6DeBarre = $condition6DeBarre;

        return $this;
    }

    public function getPoints6DeBarre(): ?string
    {
        return $this->points6DeBarre;
    }

    public function setPoints6DeBarre(?string $points6DeBarre): self
    {
        $this->points6DeBarre = $points6DeBarre;

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

    public function getCondition6DeBarre2(): ?string
    {
        return $this->condition6DeBarre2;
    }

    public function setCondition6DeBarre2(?string $condition6DeBarre2): self
    {
        $this->condition6DeBarre2 = $condition6DeBarre2;

        return $this;
    }

    public function getPoints6DeBarre2(): ?string
    {
        return $this->points6DeBarre2;
    }

    public function setPoints6DeBarre2(?string $points6DeBarre2): self
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

    public function getConditionDifferenteDeCondition1(): ?string
    {
        return $this->conditionDifferenteDeCondition1;
    }

    public function setConditionDifferenteDeCondition1(?string $conditionDifferenteDeCondition1): self
    {
        $this->conditionDifferenteDeCondition1 = $conditionDifferenteDeCondition1;

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

    public function getCondition4DeBarre3(): ?string
    {
        return $this->condition4DeBarre3;
    }

    public function setCondition4DeBarre3(?string $condition4DeBarre3): self
    {
        $this->condition4DeBarre3 = $condition4DeBarre3;

        return $this;
    }

    public function getPoints4DeBarre3(): ?string
    {
        return $this->points4DeBarre3;
    }

    public function setPoints4DeBarre3(?string $points4DeBarre3): self
    {
        $this->points4DeBarre3 = $points4DeBarre3;

        return $this;
    }

    public function getCondition5DeBarre3(): ?string
    {
        return $this->condition5DeBarre3;
    }

    public function setCondition5DeBarre3(?string $condition5DeBarre3): self
    {
        $this->condition5DeBarre3 = $condition5DeBarre3;

        return $this;
    }

    public function getPoints5DeBarre3(): ?string
    {
        return $this->points5DeBarre3;
    }

    public function setPoints5DeBarre3(?string $points5DeBarre3): self
    {
        $this->points5DeBarre3 = $points5DeBarre3;

        return $this;
    }

    public function getCondition6DeBarre3(): ?string
    {
        return $this->condition6DeBarre3;
    }

    public function setCondition6DeBarre3(?string $condition6DeBarre3): self
    {
        $this->condition6DeBarre3 = $condition6DeBarre3;

        return $this;
    }

    public function getPoints6DeBarre3(): ?string
    {
        return $this->points6DeBarre3;
    }

    public function setPoints6DeBarre3(?string $points6DeBarre3): self
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

    public function getPoints1DeBarre4(): ?string
    {
        return $this->points1DeBarre4;
    }

    public function setPoints1DeBarre4(?string $points1DeBarre4): self
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

    public function getPoints1DeBarre5(): ?string
    {
        return $this->points1DeBarre5;
    }

    public function setPoints1DeBarre5(?string $points1DeBarre5): self
    {
        $this->points1DeBarre5 = $points1DeBarre5;

        return $this;
    }

    public function getMarkerSpecifiques1(): ?string
    {
        return $this->markerSpecifiques1;
    }

    public function setMarkerSpecifiques1(?string $markerSpecifiques1): self
    {
        $this->markerSpecifiques1 = $markerSpecifiques1;

        return $this;
    }

    public function getPoints1DeMarkersSpecifiques1(): ?string
    {
        return $this->points1DeMarkersSpecifiques1;
    }

    public function setPoints1DeMarkersSpecifiques1(?string $points1DeMarkersSpecifiques1): self
    {
        $this->points1DeMarkersSpecifiques1 = $points1DeMarkersSpecifiques1;

        return $this;
    }

    public function getCondition2DeMarkersSpecifiques1(): ?string
    {
        return $this->condition2DeMarkersSpecifiques1;
    }

    public function setCondition2DeMarkersSpecifiques1(?string $condition2DeMarkersSpecifiques1): self
    {
        $this->condition2DeMarkersSpecifiques1 = $condition2DeMarkersSpecifiques1;

        return $this;
    }

    public function getPoints2DeMarkersSpecifiques1(): ?string
    {
        return $this->points2DeMarkersSpecifiques1;
    }

    public function setPoints2DeMarkersSpecifiques1(?string $points2DeMarkersSpecifiques1): self
    {
        $this->points2DeMarkersSpecifiques1 = $points2DeMarkersSpecifiques1;

        return $this;
    }

    public function getCondition3DeMarkersSpecifiques1(): ?string
    {
        return $this->condition3DeMarkersSpecifiques1;
    }

    public function setCondition3DeMarkersSpecifiques1(?string $condition3DeMarkersSpecifiques1): self
    {
        $this->condition3DeMarkersSpecifiques1 = $condition3DeMarkersSpecifiques1;

        return $this;
    }

    public function getPoints3DeMarkersSpecifiques1(): ?string
    {
        return $this->points3DeMarkersSpecifiques1;
    }

    public function setPoints3DeMarkersSpecifiques1(?string $points3DeMarkersSpecifiques1): self
    {
        $this->points3DeMarkersSpecifiques1 = $points3DeMarkersSpecifiques1;

        return $this;
    }

    public function getCondition4DeMarkersSpecifiques1(): ?string
    {
        return $this->condition4DeMarkersSpecifiques1;
    }

    public function setCondition4DeMarkersSpecifiques1(?string $condition4DeMarkersSpecifiques1): self
    {
        $this->condition4DeMarkersSpecifiques1 = $condition4DeMarkersSpecifiques1;

        return $this;
    }

    public function getPoints4DeMarkersSpecifiques1(): ?string
    {
        return $this->points4DeMarkersSpecifiques1;
    }

    public function setPoints4DeMarkersSpecifiques1(?string $points4DeMarkersSpecifiques1): self
    {
        $this->points4DeMarkersSpecifiques1 = $points4DeMarkersSpecifiques1;

        return $this;
    }

    public function getCondition5DeMarkersSpecifiques1(): ?string
    {
        return $this->condition5DeMarkersSpecifiques1;
    }

    public function setCondition5DeMarkersSpecifiques1(?string $condition5DeMarkersSpecifiques1): self
    {
        $this->condition5DeMarkersSpecifiques1 = $condition5DeMarkersSpecifiques1;

        return $this;
    }

    public function getPoints5DeMarkersSpecifiques1(): ?string
    {
        return $this->points5DeMarkersSpecifiques1;
    }

    public function setPoints5DeMarkersSpecifiques1(?string $points5DeMarkersSpecifiques1): self
    {
        $this->points5DeMarkersSpecifiques1 = $points5DeMarkersSpecifiques1;

        return $this;
    }

    public function getCondition6DeMarkersSpecifiques1(): ?string
    {
        return $this->condition6DeMarkersSpecifiques1;
    }

    public function setCondition6DeMarkersSpecifiques1(?string $condition6DeMarkersSpecifiques1): self
    {
        $this->condition6DeMarkersSpecifiques1 = $condition6DeMarkersSpecifiques1;

        return $this;
    }

    public function getPoints6DeMarkersSpecifiques1(): ?string
    {
        return $this->points6DeMarkersSpecifiques1;
    }

    public function setPoints6DeMarkersSpecifiques1(?string $points6DeMarkersSpecifiques1): self
    {
        $this->points6DeMarkersSpecifiques1 = $points6DeMarkersSpecifiques1;

        return $this;
    }

    public function getMarkerSpecifiques2(): ?string
    {
        return $this->markerSpecifiques2;
    }

    public function setMarkerSpecifiques2(?string $markerSpecifiques2): self
    {
        $this->markerSpecifiques2 = $markerSpecifiques2;

        return $this;
    }

    public function getPoints1DeMarkersSpecifiques2(): ?string
    {
        return $this->points1DeMarkersSpecifiques2;
    }

    public function setPoints1DeMarkersSpecifiques2(?string $points1DeMarkersSpecifiques2): self
    {
        $this->points1DeMarkersSpecifiques2 = $points1DeMarkersSpecifiques2;

        return $this;
    }

    public function getMarkerSpecifiques3(): ?string
    {
        return $this->markerSpecifiques3;
    }

    public function setMarkerSpecifiques3(?string $markerSpecifiques3): self
    {
        $this->markerSpecifiques3 = $markerSpecifiques3;

        return $this;
    }

    public function getPoints1DeMarkersSpecifiques3(): ?string
    {
        return $this->points1DeMarkersSpecifiques3;
    }

    public function setPoints1DeMarkersSpecifiques3(?string $points1DeMarkersSpecifiques3): self
    {
        $this->points1DeMarkersSpecifiques3 = $points1DeMarkersSpecifiques3;

        return $this;
    }


}
