<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201215121312 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_351268BB813AF326');
        $this->addSql('DROP INDEX IDX_351268BBBC6D351B');
        $this->addSql('CREATE TEMPORARY TABLE __temp__abonnement AS SELECT id, pharmacie_id, type_abonnement_id, start_at, end_at FROM abonnement');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('CREATE TABLE abonnement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pharmacie_id INTEGER DEFAULT NULL, type_abonnement_id INTEGER DEFAULT NULL, start_at DATETIME DEFAULT NULL, end_at DATETIME DEFAULT NULL, CONSTRAINT FK_351268BBBC6D351B FOREIGN KEY (pharmacie_id) REFERENCES pharmacies (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_351268BB813AF326 FOREIGN KEY (type_abonnement_id) REFERENCES type_abonnement (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO abonnement (id, pharmacie_id, type_abonnement_id, start_at, end_at) SELECT id, pharmacie_id, type_abonnement_id, start_at, end_at FROM __temp__abonnement');
        $this->addSql('DROP TABLE __temp__abonnement');
        $this->addSql('CREATE INDEX IDX_351268BB813AF326 ON abonnement (type_abonnement_id)');
        $this->addSql('CREATE INDEX IDX_351268BBBC6D351B ON abonnement (pharmacie_id)');
        $this->addSql('DROP INDEX IDX_C654BB456DA819FC');
        $this->addSql('DROP INDEX IDX_C654BB45C403D7FB');
        $this->addSql('CREATE TEMPORARY TABLE __temp__medicaments_pharmacies AS SELECT pharmacies_id, medicaments_id FROM medicaments_pharmacies');
        $this->addSql('DROP TABLE medicaments_pharmacies');
        $this->addSql('CREATE TABLE medicaments_pharmacies (pharmacies_id INTEGER NOT NULL, medicaments_id INTEGER NOT NULL, PRIMARY KEY(medicaments_id, pharmacies_id), CONSTRAINT FK_C654BB45C403D7FB FOREIGN KEY (medicaments_id) REFERENCES medicaments (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_C654BB456DA819FC FOREIGN KEY (pharmacies_id) REFERENCES pharmacies (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO medicaments_pharmacies (pharmacies_id, medicaments_id) SELECT pharmacies_id, medicaments_id FROM __temp__medicaments_pharmacies');
        $this->addSql('DROP TABLE __temp__medicaments_pharmacies');
        $this->addSql('CREATE INDEX IDX_C654BB456DA819FC ON medicaments_pharmacies (pharmacies_id)');
        $this->addSql('CREATE INDEX IDX_C654BB45C403D7FB ON medicaments_pharmacies (medicaments_id)');
        $this->addSql('DROP INDEX UNIQ_5FC19434F85E0677');
        $this->addSql('DROP INDEX UNIQ_5FC194346DA819FC');
        $this->addSql('CREATE TEMPORARY TABLE __temp__pharmacie AS SELECT id, pharmacies_id, username, roles, password FROM pharmacie');
        $this->addSql('DROP TABLE pharmacie');
        $this->addSql('CREATE TABLE pharmacie (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pharmacies_id INTEGER DEFAULT NULL, username VARCHAR(180) NOT NULL COLLATE BINARY, roles CLOB NOT NULL COLLATE BINARY --(DC2Type:json)
        , password VARCHAR(255) NOT NULL COLLATE BINARY, CONSTRAINT FK_5FC194346DA819FC FOREIGN KEY (pharmacies_id) REFERENCES pharmacies (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO pharmacie (id, pharmacies_id, username, roles, password) SELECT id, pharmacies_id, username, roles, password FROM __temp__pharmacie');
        $this->addSql('DROP TABLE __temp__pharmacie');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5FC19434F85E0677 ON pharmacie (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5FC194346DA819FC ON pharmacie (pharmacies_id)');
        $this->addSql('ALTER TABLE pharmacies ADD COLUMN long NUMERIC(10, 4) DEFAULT NULL');
        $this->addSql('ALTER TABLE pharmacies ADD COLUMN lat NUMERIC(10, 4) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_351268BBBC6D351B');
        $this->addSql('DROP INDEX IDX_351268BB813AF326');
        $this->addSql('CREATE TEMPORARY TABLE __temp__abonnement AS SELECT id, pharmacie_id, type_abonnement_id, start_at, end_at FROM abonnement');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('CREATE TABLE abonnement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pharmacie_id INTEGER DEFAULT NULL, type_abonnement_id INTEGER DEFAULT NULL, start_at DATETIME DEFAULT NULL, end_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO abonnement (id, pharmacie_id, type_abonnement_id, start_at, end_at) SELECT id, pharmacie_id, type_abonnement_id, start_at, end_at FROM __temp__abonnement');
        $this->addSql('DROP TABLE __temp__abonnement');
        $this->addSql('CREATE INDEX IDX_351268BBBC6D351B ON abonnement (pharmacie_id)');
        $this->addSql('CREATE INDEX IDX_351268BB813AF326 ON abonnement (type_abonnement_id)');
        $this->addSql('DROP INDEX IDX_C654BB45C403D7FB');
        $this->addSql('DROP INDEX IDX_C654BB456DA819FC');
        $this->addSql('CREATE TEMPORARY TABLE __temp__medicaments_pharmacies AS SELECT medicaments_id, pharmacies_id FROM medicaments_pharmacies');
        $this->addSql('DROP TABLE medicaments_pharmacies');
        $this->addSql('CREATE TABLE medicaments_pharmacies (medicaments_id INTEGER NOT NULL, pharmacies_id INTEGER NOT NULL, PRIMARY KEY(medicaments_id, pharmacies_id))');
        $this->addSql('INSERT INTO medicaments_pharmacies (medicaments_id, pharmacies_id) SELECT medicaments_id, pharmacies_id FROM __temp__medicaments_pharmacies');
        $this->addSql('DROP TABLE __temp__medicaments_pharmacies');
        $this->addSql('CREATE INDEX IDX_C654BB45C403D7FB ON medicaments_pharmacies (medicaments_id)');
        $this->addSql('CREATE INDEX IDX_C654BB456DA819FC ON medicaments_pharmacies (pharmacies_id)');
        $this->addSql('DROP INDEX UNIQ_5FC19434F85E0677');
        $this->addSql('DROP INDEX UNIQ_5FC194346DA819FC');
        $this->addSql('CREATE TEMPORARY TABLE __temp__pharmacie AS SELECT id, pharmacies_id, username, roles, password FROM pharmacie');
        $this->addSql('DROP TABLE pharmacie');
        $this->addSql('CREATE TABLE pharmacie (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pharmacies_id INTEGER DEFAULT NULL, username VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO pharmacie (id, pharmacies_id, username, roles, password) SELECT id, pharmacies_id, username, roles, password FROM __temp__pharmacie');
        $this->addSql('DROP TABLE __temp__pharmacie');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5FC19434F85E0677 ON pharmacie (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5FC194346DA819FC ON pharmacie (pharmacies_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__pharmacies AS SELECT id, name, referent, num_tel_referent, email_referent, add_at, status_abonnement FROM pharmacies');
        $this->addSql('DROP TABLE pharmacies');
        $this->addSql('CREATE TABLE pharmacies (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, referent VARCHAR(255) NOT NULL, num_tel_referent VARCHAR(255) NOT NULL, email_referent VARCHAR(255) NOT NULL, add_at DATETIME DEFAULT NULL, status_abonnement BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO pharmacies (id, name, referent, num_tel_referent, email_referent, add_at, status_abonnement) SELECT id, name, referent, num_tel_referent, email_referent, add_at, status_abonnement FROM __temp__pharmacies');
        $this->addSql('DROP TABLE __temp__pharmacies');
    }
}
