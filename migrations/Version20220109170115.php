<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220109170115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test_dev (id INT AUTO_INCREMENT NOT NULL, Type_de_donne VARCHAR(100) DEFAULT NULL, Module VARCHAR(100) DEFAULT NULL, Commentaires__informations TEXT DEFAULT NULL, Commentaires__informations_2 TEXT DEFAULT NULL, Commentaires__informations_3 TEXT DEFAULT NULL, Noms LONGTEXT DEFAULT NULL, Reference_SCTID VARCHAR(100) DEFAULT NULL, Detail VARCHAR(100) DEFAULT NULL, Data_category VARCHAR(100) DEFAULT NULL, Period_of_validity VARCHAR(100) DEFAULT NULL, Invalidation_increment VARCHAR(100) DEFAULT NULL, Sexe VARCHAR(100) DEFAULT NULL, threshold_age_min INT DEFAULT NULL, threshold_age_mmx INT DEFAULT NULL, Data_Format VARCHAR(100) DEFAULT NULL, Unit_de_mesure VARCHAR(100) DEFAULT NULL, threshold_min VARCHAR(100) DEFAULT NULL, threshold_max VARCHAR(100) DEFAULT NULL, condition1 VARCHAR(100) DEFAULT NULL, Barre VARCHAR(100) DEFAULT NULL, Points_1_de_Barre_1 VARCHAR(100) DEFAULT NULL, condition2_Barre_1 VARCHAR(100) DEFAULT NULL, Points2_Barre_1 VARCHAR(100) DEFAULT NULL, Condition_3_de_Barre_1 VARCHAR(100) DEFAULT NULL, Points_3_de_Barre_1 VARCHAR(100) DEFAULT NULL, Condition_4_de_Barre_1 VARCHAR(100) DEFAULT NULL, Points_4_de_Barre_1 VARCHAR(100) DEFAULT NULL, Condition_5_de_Barre_1 VARCHAR(100) DEFAULT NULL, Points_5_de_Barre_1 VARCHAR(100) DEFAULT NULL, Condition_6_de_Barre_1 VARCHAR(100) DEFAULT NULL, Points_6_de_Barre_1 VARCHAR(100) DEFAULT NULL, Barre_2 VARCHAR(100) DEFAULT NULL, Points_1_de_Barre_2 VARCHAR(100) DEFAULT NULL, Condition_2_de_Barre_2 VARCHAR(100) DEFAULT NULL, Points_2_de_Barre_2 VARCHAR(100) DEFAULT NULL, Condition_3_de_Barre_2 VARCHAR(100) DEFAULT NULL, Points_3_de_Barre_2 VARCHAR(100) DEFAULT NULL, Condition_4_de_Barre_2 VARCHAR(100) DEFAULT NULL, Points_4_de_Barre_2 VARCHAR(100) DEFAULT NULL, Condition_5_de_Barre_2 VARCHAR(100) DEFAULT NULL, Points_5_de_Barre_2 VARCHAR(100) DEFAULT NULL, Condition_6_de_Barre_2 VARCHAR(100) DEFAULT NULL, Points_6_de_Barre_2 VARCHAR(100) DEFAULT NULL, Barre_3 VARCHAR(100) DEFAULT NULL, Condition_diffrente_de_condition_1 VARCHAR(100) DEFAULT NULL, Condition_1bis_de_Barre_3 VARCHAR(100) DEFAULT NULL, Points_1_de_Barre_3 VARCHAR(100) DEFAULT NULL, Condition_2_de_Barre_3 VARCHAR(100) DEFAULT NULL, Points_2_de_Barre_3 VARCHAR(100) DEFAULT NULL, Condition_3_de_Barre_3 VARCHAR(100) DEFAULT NULL, Points_3_de_Barre_3 VARCHAR(100) DEFAULT NULL, Condition_4_de_Barre_3 VARCHAR(100) DEFAULT NULL, Points_4_de_Barre_3 VARCHAR(100) DEFAULT NULL, Condition_5_de_Barre_3 VARCHAR(100) DEFAULT NULL, Points_5_de_Barre_3 VARCHAR(100) DEFAULT NULL, Condition_6_de_Barre_3 VARCHAR(100) DEFAULT NULL, Points_6_de_Barre_3 VARCHAR(100) DEFAULT NULL, Barre_4 VARCHAR(100) DEFAULT NULL, Points_1_de_Barre_4 VARCHAR(100) DEFAULT NULL, Barre_5 VARCHAR(100) DEFAULT NULL, Points_1_de_Barre_5 VARCHAR(100) DEFAULT NULL, Marker_spcifiques_1 VARCHAR(100) DEFAULT NULL, Points_1_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Condition_2_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Points_2_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Condition_3_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Points_3_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Condition_4_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Points_4_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Condition_5_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Points_5_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Condition_6_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Points_6_de_Markers_spcifiques_1 VARCHAR(100) DEFAULT NULL, Marker_spcifiques_2 VARCHAR(100) DEFAULT NULL, Points_1_de_Markers_spcifiques_2 VARCHAR(100) DEFAULT NULL, Marker_spcifiques_3 VARCHAR(100) DEFAULT NULL, Points_1_de_Markers_spcifiques_3 VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE test_dev');
    }
}
