<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216095637 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE articles (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, type VARCHAR(255) NOT NULL, title VARCHAR(1024) NOT NULL, creat_at DATETIME NOT NULL, content CLOB DEFAULT NULL, slug VARCHAR(1024) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BFDD3168989D9B62 ON articles (slug)');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE appreciations');
        $this->addSql('DROP TABLE assureurs');
        $this->addSql('DROP TABLE assureurs_pharmacies');
        $this->addSql('DROP TABLE medicaments');
        $this->addSql('DROP TABLE medicaments_pharmacies');
        $this->addSql('DROP TABLE paiements');
        $this->addSql('DROP TABLE pharmacie');
        $this->addSql('DROP TABLE pharmacies');
        $this->addSql('DROP TABLE recherches');
        $this->addSql('DROP TABLE type_abonnement');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pharmacie_id INTEGER DEFAULT NULL, type_abonnement_id INTEGER DEFAULT NULL, start_at DATETIME DEFAULT NULL, end_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_351268BBBC6D351B ON abonnement (pharmacie_id)');
        $this->addSql('CREATE INDEX IDX_351268BB813AF326 ON abonnement (type_abonnement_id)');
        $this->addSql('CREATE TABLE appreciations (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pharmacie_id INTEGER NOT NULL, comment CLOB DEFAULT NULL COLLATE BINARY, nbreofstars INTEGER DEFAULT NULL, creat_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_5A5661B5BC6D351B ON appreciations (pharmacie_id)');
        $this->addSql('CREATE TABLE assureurs (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, logo VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('CREATE TABLE assureurs_pharmacies (assureurs_id INTEGER NOT NULL, pharmacies_id INTEGER NOT NULL, PRIMARY KEY(assureurs_id, pharmacies_id))');
        $this->addSql('CREATE INDEX IDX_D13C8DD3724A3D9 ON assureurs_pharmacies (assureurs_id)');
        $this->addSql('CREATE INDEX IDX_D13C8DD36DA819FC ON assureurs_pharmacies (pharmacies_id)');
        $this->addSql('CREATE TABLE medicaments (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('CREATE TABLE medicaments_pharmacies (pharmacies_id INTEGER NOT NULL, medicaments_id INTEGER NOT NULL, PRIMARY KEY(medicaments_id, pharmacies_id))');
        $this->addSql('CREATE INDEX IDX_C654BB45C403D7FB ON medicaments_pharmacies (medicaments_id)');
        $this->addSql('CREATE INDEX IDX_C654BB456DA819FC ON medicaments_pharmacies (pharmacies_id)');
        $this->addSql('CREATE TABLE paiements (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, montant VARCHAR(255) NOT NULL COLLATE BINARY, date DATETIME DEFAULT NULL, medicament VARCHAR(255) DEFAULT NULL COLLATE BINARY)');
        $this->addSql('CREATE TABLE pharmacie (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pharmacies_id INTEGER DEFAULT NULL, username VARCHAR(180) NOT NULL COLLATE BINARY, roles CLOB NOT NULL COLLATE BINARY --(DC2Type:json)
        , password VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5FC194346DA819FC ON pharmacie (pharmacies_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5FC19434F85E0677 ON pharmacie (username)');
        $this->addSql('CREATE TABLE pharmacies (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, referent VARCHAR(255) NOT NULL COLLATE BINARY, num_tel_referent VARCHAR(255) NOT NULL COLLATE BINARY, email_referent VARCHAR(255) NOT NULL COLLATE BINARY, add_at DATETIME DEFAULT NULL, status_abonnement BOOLEAN NOT NULL, long NUMERIC(10, 4) DEFAULT NULL, lat NUMERIC(10, 4) DEFAULT NULL)');
        $this->addSql('CREATE TABLE recherches (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, medicament_id INTEGER NOT NULL, search_at DATETIME NOT NULL)');
        $this->addSql('CREATE INDEX IDX_84050CB5AB0D61F7 ON recherches (medicament_id)');
        $this->addSql('CREATE TABLE type_abonnement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, price VARCHAR(255) NOT NULL COLLATE BINARY, duree INTEGER NOT NULL)');
        $this->addSql('DROP TABLE articles');
    }
}
