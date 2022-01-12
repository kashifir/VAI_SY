<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExcelTable
 *
 * @ORM\Table(name="excel_table")
 * @ORM\Entity
 */
class ExcelTable
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
     * @ORM\Column(name="finalisation", type="string", length=255, nullable=true)
     */
    private $finalisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_de_donnee", type="string", length=255, nullable=true)
     */
    private $typeDeDonnee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=255, nullable=true)
     */
    private $module;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaires_informations", type="string", length=255, nullable=true)
     */
    private $commentairesInformations;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaires_informations_2", type="string", length=255, nullable=true)
     */
    private $commentairesInformations2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaires_informations_3", type="string", length=255, nullable=true)
     */
    private $commentairesInformations3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="noms_fr_en_it", type="string", length=255, nullable=true)
     */
    private $nomsFrEnIt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="noms_en", type="string", length=255, nullable=true)
     */
    private $nomsEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference_sctid", type="string", length=255, nullable=true)
     */
    private $referenceSctid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail", type="string", length=255, nullable=true)
     */
    private $detail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data_category", type="string", length=255, nullable=true)
     */
    private $dataCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duree_de_validite", type="string", length=255, nullable=true)
     */
    private $dureeDeValidite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="increment_dinvalidation", type="string", length=255, nullable=true)
     */
    private $incrementDinvalidation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="annonymisation", type="string", length=255, nullable=true)
     */
    private $annonymisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="annonymisation2", type="string", length=255, nullable=true)
     */
    private $annonymisation2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seuil_inferieu_dage", type="string", length=255, nullable=true)
     */
    private $seuilInferieuDage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seuil_superieur_dage", type="string", length=255, nullable=true)
     */
    private $seuilSuperieurDage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="format_de_donnee", type="string", length=255, nullable=true)
     */
    private $formatDeDonnee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unite_de_mesure", type="string", length=255, nullable=true)
     */
    private $uniteDeMesure;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seuil_inferieur_1", type="string", length=255, nullable=true)
     */
    private $seuilInferieur1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seuil_superieur_1", type="string", length=255, nullable=true)
     */
    private $seuilSuperieur1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_dapplication_1", type="string", length=255, nullable=true)
     */
    private $conditionDapplication1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zone_de_test", type="string", length=255, nullable=true)
     */
    private $zoneDeTest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zone_de_test_formule", type="string", length=255, nullable=true)
     */
    private $zoneDeTestFormule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barre_1", type="string", length=255, nullable=true)
     */
    private $barre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_barre_1", type="string", length=255, nullable=true)
     */
    private $points1DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_2_de_barre_1", type="string", length=255, nullable=true)
     */
    private $condition2DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_2_de_barre_1", type="string", length=255, nullable=true)
     */
    private $points2DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_3_de_barre_1", type="string", length=255, nullable=true)
     */
    private $condition3DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_3_de_barre_1", type="string", length=255, nullable=true)
     */
    private $points3DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_4_de_barre_1", type="string", length=255, nullable=true)
     */
    private $condition4DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_4_de_barre_1", type="string", length=255, nullable=true)
     */
    private $points4DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_5_de_barre_1", type="string", length=255, nullable=true)
     */
    private $condition5DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_5_de_barre_1", type="string", length=255, nullable=true)
     */
    private $points5DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_6_de_barre_1", type="string", length=255, nullable=true)
     */
    private $condition6DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_6_de_barre_1", type="string", length=255, nullable=true)
     */
    private $points6DeBarre1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barre_2", type="string", length=255, nullable=true)
     */
    private $barre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_barre_2", type="string", length=255, nullable=true)
     */
    private $points1DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_2_de_barre_2", type="string", length=255, nullable=true)
     */
    private $condition2DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_2_de_barre_2", type="string", length=255, nullable=true)
     */
    private $points2DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_3_de_barre_2", type="string", length=255, nullable=true)
     */
    private $condition3DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_3_de_barre_2", type="string", length=255, nullable=true)
     */
    private $points3DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_4_de_barre_2", type="string", length=255, nullable=true)
     */
    private $condition4DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_4_de_barre_2", type="string", length=255, nullable=true)
     */
    private $points4DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_5_de_barre_2", type="string", length=255, nullable=true)
     */
    private $condition5DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_5_de_barre_2", type="string", length=255, nullable=true)
     */
    private $points5DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_6_de_barre_2", type="string", length=255, nullable=true)
     */
    private $condition6DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_6_de_barre_2", type="string", length=255, nullable=true)
     */
    private $points6DeBarre2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barre_3", type="string", length=255, nullable=true)
     */
    private $barre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_differente_de_condition_1", type="string", length=255, nullable=true)
     */
    private $conditionDifferenteDeCondition1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_1bis_de_barre_3", type="string", length=255, nullable=true)
     */
    private $condition1bisDeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_barre_3", type="string", length=255, nullable=true)
     */
    private $points1DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_2_de_barre_3", type="string", length=255, nullable=true)
     */
    private $condition2DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_2_de_barre_3", type="string", length=255, nullable=true)
     */
    private $points2DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_3_de_barre_3", type="string", length=255, nullable=true)
     */
    private $condition3DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_3_de_barre_3", type="string", length=255, nullable=true)
     */
    private $points3DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_4_de_barre_3", type="string", length=255, nullable=true)
     */
    private $condition4DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_4_de_barre_3", type="string", length=255, nullable=true)
     */
    private $points4DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_5_de_barre_3", type="string", length=255, nullable=true)
     */
    private $condition5DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_5_de_barre_3", type="string", length=255, nullable=true)
     */
    private $points5DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_6_de_barre_3", type="string", length=255, nullable=true)
     */
    private $condition6DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_6_de_barre_3", type="string", length=255, nullable=true)
     */
    private $points6DeBarre3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barre_4", type="string", length=255, nullable=true)
     */
    private $barre4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_barre_4", type="string", length=255, nullable=true)
     */
    private $points1DeBarre4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barre_5", type="string", length=255, nullable=true)
     */
    private $barre5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_barre_5", type="string", length=255, nullable=true)
     */
    private $points1DeBarre5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marker_specifiques_1", type="string", length=255, nullable=true)
     */
    private $markerSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $points1DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_2_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $condition2DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_2_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $points2DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_3_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $condition3DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_3_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $points3DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_4_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $condition4DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_4_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $points4DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_5_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $condition5DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_5_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $points5DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition_6_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $condition6DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_6_de_markers_specifiques_1", type="string", length=255, nullable=true)
     */
    private $points6DeMarkersSpecifiques1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marker_specifiques_2", type="string", length=255, nullable=true)
     */
    private $markerSpecifiques2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_markers_specifiques_2", type="string", length=255, nullable=true)
     */
    private $points1DeMarkersSpecifiques2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marker_specifiques_3", type="string", length=255, nullable=true)
     */
    private $markerSpecifiques3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="points_1_de_markers_specifiques_3", type="string", length=255, nullable=true)
     */
    private $points1DeMarkersSpecifiques3;

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

    public function getTypeDeDonnee(): ?string
    {
        return $this->typeDeDonnee;
    }

    public function setTypeDeDonnee(?string $typeDeDonnee): self
    {
        $this->typeDeDonnee = $typeDeDonnee;

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

    public function getNomsEn(): ?string
    {
        return $this->nomsEn;
    }

    public function setNomsEn(?string $nomsEn): self
    {
        $this->nomsEn = $nomsEn;

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

    public function getDureeDeValidite(): ?string
    {
        return $this->dureeDeValidite;
    }

    public function setDureeDeValidite(?string $dureeDeValidite): self
    {
        $this->dureeDeValidite = $dureeDeValidite;

        return $this;
    }

    public function getIncrementDinvalidation(): ?string
    {
        return $this->incrementDinvalidation;
    }

    public function setIncrementDinvalidation(?string $incrementDinvalidation): self
    {
        $this->incrementDinvalidation = $incrementDinvalidation;

        return $this;
    }

    public function getAnnonymisation(): ?string
    {
        return $this->annonymisation;
    }

    public function setAnnonymisation(?string $annonymisation): self
    {
        $this->annonymisation = $annonymisation;

        return $this;
    }

    public function getAnnonymisation2(): ?string
    {
        return $this->annonymisation2;
    }

    public function setAnnonymisation2(?string $annonymisation2): self
    {
        $this->annonymisation2 = $annonymisation2;

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

    public function getSeuilInferieuDage(): ?string
    {
        return $this->seuilInferieuDage;
    }

    public function setSeuilInferieuDage(?string $seuilInferieuDage): self
    {
        $this->seuilInferieuDage = $seuilInferieuDage;

        return $this;
    }

    public function getSeuilSuperieurDage(): ?string
    {
        return $this->seuilSuperieurDage;
    }

    public function setSeuilSuperieurDage(?string $seuilSuperieurDage): self
    {
        $this->seuilSuperieurDage = $seuilSuperieurDage;

        return $this;
    }

    public function getFormatDeDonnee(): ?string
    {
        return $this->formatDeDonnee;
    }

    public function setFormatDeDonnee(?string $formatDeDonnee): self
    {
        $this->formatDeDonnee = $formatDeDonnee;

        return $this;
    }

    public function getUniteDeMesure(): ?string
    {
        return $this->uniteDeMesure;
    }

    public function setUniteDeMesure(?string $uniteDeMesure): self
    {
        $this->uniteDeMesure = $uniteDeMesure;

        return $this;
    }

    public function getSeuilInferieur1(): ?string
    {
        return $this->seuilInferieur1;
    }

    public function setSeuilInferieur1(?string $seuilInferieur1): self
    {
        $this->seuilInferieur1 = $seuilInferieur1;

        return $this;
    }

    public function getSeuilSuperieur1(): ?string
    {
        return $this->seuilSuperieur1;
    }

    public function setSeuilSuperieur1(?string $seuilSuperieur1): self
    {
        $this->seuilSuperieur1 = $seuilSuperieur1;

        return $this;
    }

    public function getConditionDapplication1(): ?string
    {
        return $this->conditionDapplication1;
    }

    public function setConditionDapplication1(?string $conditionDapplication1): self
    {
        $this->conditionDapplication1 = $conditionDapplication1;

        return $this;
    }

    public function getZoneDeTest(): ?string
    {
        return $this->zoneDeTest;
    }

    public function setZoneDeTest(?string $zoneDeTest): self
    {
        $this->zoneDeTest = $zoneDeTest;

        return $this;
    }

    public function getZoneDeTestFormule(): ?string
    {
        return $this->zoneDeTestFormule;
    }

    public function setZoneDeTestFormule(?string $zoneDeTestFormule): self
    {
        $this->zoneDeTestFormule = $zoneDeTestFormule;

        return $this;
    }

    public function getBarre1(): ?string
    {
        return $this->barre1;
    }

    public function setBarre1(?string $barre1): self
    {
        $this->barre1 = $barre1;

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

    public function getPoints3DeBarre1(): ?string
    {
        return $this->points3DeBarre1;
    }

    public function setPoints3DeBarre1(?string $points3DeBarre1): self
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

    public function getPoints4DeBarre1(): ?string
    {
        return $this->points4DeBarre1;
    }

    public function setPoints4DeBarre1(?string $points4DeBarre1): self
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

    public function getPoints5DeBarre1(): ?string
    {
        return $this->points5DeBarre1;
    }

    public function setPoints5DeBarre1(?string $points5DeBarre1): self
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

    public function getPoints6DeBarre1(): ?string
    {
        return $this->points6DeBarre1;
    }

    public function setPoints6DeBarre1(?string $points6DeBarre1): self
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
