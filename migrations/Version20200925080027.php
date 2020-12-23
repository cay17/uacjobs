<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200925080027 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE numeros (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, numero VARCHAR(255) NOT NULL, reseau VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE transactions (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, devise_donner VARCHAR(255) NOT NULL, devise_recevoir VARCHAR(255) NOT NULL, montant_donner DOUBLE PRECISION NOT NULL, montant_recevoir DOUBLE PRECISION NOT NULL, adress_reception VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, id_transaction VARCHAR(255) DEFAULT NULL, status BOOLEAN NOT NULL, status_paiement BOOLEAN NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE numeros');
        $this->addSql('DROP TABLE transactions');
    }
}
