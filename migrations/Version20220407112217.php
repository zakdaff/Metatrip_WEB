<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407112217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE localisationvoyage (idv INT DEFAULT NULL, Idlocalisation INT AUTO_INCREMENT NOT NULL, latitude DOUBLE PRECISION NOT NULL, longitude DOUBLE PRECISION NOT NULL, INDEX idv (idv), PRIMARY KEY(Idlocalisation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE localisationvoyage ADD CONSTRAINT FK_7CBDD6B8B05317 FOREIGN KEY (idv) REFERENCES voyage (Idv)');
        $this->addSql('DROP TABLE voyage_organise');
        $this->addSql('ALTER TABLE abonnement CHANGE Ref_paiement Ref_paiement INT DEFAULT NULL');
        $this->addSql('ALTER TABLE chambre DROP FOREIGN KEY fk_hot');
        $this->addSql('ALTER TABLE chambre CHANGE idh idh INT DEFAULT NULL');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FFFABF6E74 FOREIGN KEY (idh) REFERENCES hotel (Idh)');
        $this->addSql('ALTER TABLE evenement DROP image');
        $this->addSql('ALTER TABLE paiement CHANGE Ref_paiement Ref_paiement INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reservation_event DROP FOREIGN KEY Fk_eve');
        $this->addSql('ALTER TABLE reservation_event DROP FOREIGN KEY Fk_usr');
        $this->addSql('ALTER TABLE reservation_event CHANGE Ide Ide INT DEFAULT NULL, CHANGE Idu Idu INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation_event ADD CONSTRAINT FK_78D1DA00A1F4444D FOREIGN KEY (Idu) REFERENCES user (Idu)');
        $this->addSql('ALTER TABLE reservation_event ADD CONSTRAINT FK_78D1DA00BC435429 FOREIGN KEY (Ide) REFERENCES evenement (Ide)');
        $this->addSql('ALTER TABLE reservation_hotel DROP FOREIGN KEY FK_u');
        $this->addSql('ALTER TABLE reservation_hotel CHANGE Idu Idu INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation_hotel ADD CONSTRAINT FK_402C8E7EA1F4444D FOREIGN KEY (Idu) REFERENCES user (Idu)');
        $this->addSql('ALTER TABLE reservation_voiture DROP FOREIGN KEY FK_CHAUFF');
        $this->addSql('ALTER TABLE reservation_voiture DROP FOREIGN KEY FK_resv');
        $this->addSql('ALTER TABLE reservation_voiture DROP FOREIGN KEY FK_resu');
        $this->addSql('ALTER TABLE reservation_voiture CHANGE Idu Idu INT DEFAULT NULL, CHANGE Idvoit Idvoit INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation_voiture ADD CONSTRAINT FK_8E773A8AA1F4444D FOREIGN KEY (Idu) REFERENCES user (Idu)');
        $this->addSql('ALTER TABLE reservation_voiture ADD CONSTRAINT FK_8E773A8A250DD567 FOREIGN KEY (idch) REFERENCES chauffeur (idch)');
        $this->addSql('ALTER TABLE reservation_voiture ADD CONSTRAINT FK_8E773A8A1BAF3D1C FOREIGN KEY (Idvoit) REFERENCES voiture (Idvoit)');
        $this->addSql('ALTER TABLE reservation_voyage DROP FOREIGN KEY FK_resvoy');
        $this->addSql('ALTER TABLE reservation_voyage CHANGE Idv Idv INT DEFAULT NULL, CHANGE Ref_paiement Ref_paiement INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_voyage ADD CONSTRAINT FK_776CC0CE38FD15F7 FOREIGN KEY (Idv) REFERENCES voyage (Idv)');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY sponsor_ibfk_1');
        $this->addSql('ALTER TABLE sponsor CHANGE ide ide INT DEFAULT NULL, CHANGE image image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D4840E12C9 FOREIGN KEY (ide) REFERENCES evenement (Ide)');
        $this->addSql('ALTER TABLE user CHANGE Role Role INT DEFAULT NULL');
        $this->addSql('ALTER TABLE voyage_virtuel DROP FOREIGN KEY FK_abb');
        $this->addSql('ALTER TABLE voyage_virtuel DROP FOREIGN KEY FK_vv');
        $this->addSql('ALTER TABLE voyage_virtuel CHANGE Idv Idv INT DEFAULT NULL, CHANGE Ida Ida INT DEFAULT NULL');
        $this->addSql('ALTER TABLE voyage_virtuel ADD CONSTRAINT FK_A25D618738FD15F7 FOREIGN KEY (Idv) REFERENCES voyage (Idv)');
        $this->addSql('ALTER TABLE voyage_virtuel ADD CONSTRAINT FK_A25D6187BB2E9030 FOREIGN KEY (Ida) REFERENCES abonnement (Ida)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE voyage_organise (Idvo INT AUTO_INCREMENT NOT NULL, Prix_billet DOUBLE PRECISION NOT NULL, Airline VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Nb_nuitees INT NOT NULL, etatVoyage VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Idv INT NOT NULL, INDEX FK_vo (Idv), PRIMARY KEY(Idvo)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE voyage_organise ADD CONSTRAINT FK_vo FOREIGN KEY (Idv) REFERENCES voyage (Idv) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP TABLE localisationvoyage');
        $this->addSql('ALTER TABLE abonnement CHANGE Ref_paiement Ref_paiement INT NOT NULL');
        $this->addSql('ALTER TABLE chambre DROP FOREIGN KEY FK_C509E4FFFABF6E74');
        $this->addSql('ALTER TABLE chambre CHANGE idh idh INT NOT NULL');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT fk_hot FOREIGN KEY (idh) REFERENCES hotel (Idh) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement ADD image VARCHAR(40) NOT NULL');
        $this->addSql('ALTER TABLE paiement CHANGE Ref_paiement Ref_paiement INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_event DROP FOREIGN KEY FK_78D1DA00A1F4444D');
        $this->addSql('ALTER TABLE reservation_event DROP FOREIGN KEY FK_78D1DA00BC435429');
        $this->addSql('ALTER TABLE reservation_event CHANGE Idu Idu INT NOT NULL, CHANGE Ide Ide INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_event ADD CONSTRAINT Fk_eve FOREIGN KEY (Ide) REFERENCES evenement (Ide) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_event ADD CONSTRAINT Fk_usr FOREIGN KEY (Idu) REFERENCES user (Idu) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_hotel DROP FOREIGN KEY FK_402C8E7EA1F4444D');
        $this->addSql('ALTER TABLE reservation_hotel CHANGE Idu Idu INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_hotel ADD CONSTRAINT FK_u FOREIGN KEY (Idu) REFERENCES user (Idu) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_voiture DROP FOREIGN KEY FK_8E773A8AA1F4444D');
        $this->addSql('ALTER TABLE reservation_voiture DROP FOREIGN KEY FK_8E773A8A250DD567');
        $this->addSql('ALTER TABLE reservation_voiture DROP FOREIGN KEY FK_8E773A8A1BAF3D1C');
        $this->addSql('ALTER TABLE reservation_voiture CHANGE Idu Idu INT NOT NULL, CHANGE Idvoit Idvoit INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_voiture ADD CONSTRAINT FK_CHAUFF FOREIGN KEY (idch) REFERENCES chauffeur (idch) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_voiture ADD CONSTRAINT FK_resv FOREIGN KEY (Idvoit) REFERENCES voiture (Idvoit) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_voiture ADD CONSTRAINT FK_resu FOREIGN KEY (Idu) REFERENCES user (Idu) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_voyage DROP FOREIGN KEY FK_776CC0CE38FD15F7');
        $this->addSql('ALTER TABLE reservation_voyage CHANGE Ref_paiement Ref_paiement INT DEFAULT 0 NOT NULL, CHANGE Idv Idv INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_voyage ADD CONSTRAINT FK_resvoy FOREIGN KEY (Idv) REFERENCES voyage (Idv) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D4840E12C9');
        $this->addSql('ALTER TABLE sponsor CHANGE ide ide INT NOT NULL, CHANGE image image VARCHAR(40) NOT NULL');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT sponsor_ibfk_1 FOREIGN KEY (ide) REFERENCES evenement (Ide) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user CHANGE Role Role INT DEFAULT 0');
        $this->addSql('ALTER TABLE voyage_virtuel DROP FOREIGN KEY FK_A25D618738FD15F7');
        $this->addSql('ALTER TABLE voyage_virtuel DROP FOREIGN KEY FK_A25D6187BB2E9030');
        $this->addSql('ALTER TABLE voyage_virtuel CHANGE Idv Idv INT NOT NULL, CHANGE Ida Ida INT NOT NULL');
        $this->addSql('ALTER TABLE voyage_virtuel ADD CONSTRAINT FK_abb FOREIGN KEY (Ida) REFERENCES abonnement (Ida) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE voyage_virtuel ADD CONSTRAINT FK_vv FOREIGN KEY (Idv) REFERENCES voyage (Idv) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
