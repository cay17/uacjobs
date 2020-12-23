<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200925190512 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pharmacie_id INTEGER DEFAULT NULL, type_abonnement_id INTEGER DEFAULT NULL, start_at DATETIME DEFAULT NULL, end_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_351268BBBC6D351B ON abonnement (pharmacie_id)');
        $this->addSql('CREATE INDEX IDX_351268BB813AF326 ON abonnement (type_abonnement_id)');
        $this->addSql('CREATE TABLE medicaments (name VARCHAR(255) NOT NULL, id INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE medicaments_pharmacies (medicaments_id INTEGER NOT NULL, pharmacies_id INTEGER NOT NULL, PRIMARY KEY(medicaments_id, pharmacies_id))');
        $this->addSql('CREATE INDEX IDX_C654BB45C403D7FB ON medicaments_pharmacies (medicaments_id)');
        $this->addSql('CREATE INDEX IDX_C654BB456DA819FC ON medicaments_pharmacies (pharmacies_id)');
        $this->addSql('CREATE TABLE pharmacies (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, referent VARCHAR(255) NOT NULL, num_tel_referent VARCHAR(255) NOT NULL, email_referent VARCHAR(255) NOT NULL, add_at DATETIME DEFAULT NULL, status_abonnement BOOLEAN NOT NULL)');
        $this->addSql('CREATE TABLE type_abonnement (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, price VARCHAR(255) NOT NULL, duree INTEGER NOT NULL)');
        $this->addSql('DROP TABLE numeros');
        $this->addSql('DROP TABLE transactions');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE numeros (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, numero VARCHAR(255) NOT NULL COLLATE BINARY, reseau VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('CREATE TABLE transactions (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, devise_donner VARCHAR(255) NOT NULL COLLATE BINARY, devise_recevoir VARCHAR(255) NOT NULL COLLATE BINARY, montant_donner DOUBLE PRECISION NOT NULL, montant_recevoir DOUBLE PRECISION NOT NULL, adress_reception VARCHAR(255) NOT NULL COLLATE BINARY, email VARCHAR(255) NOT NULL COLLATE BINARY, id_transaction VARCHAR(255) DEFAULT NULL COLLATE BINARY, status BOOLEAN NOT NULL, status_paiement BOOLEAN NOT NULL, creat_at DATETIME DEFAULT NULL, satisfy_at DATETIME DEFAULT NULL)');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE medicaments');
        $this->addSql('DROP TABLE medicaments_pharmacies');
        $this->addSql('DROP TABLE pharmacies');
        $this->addSql('DROP TABLE type_abonnement');
    }
}
