<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200925082045 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transactions ADD COLUMN creat_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE transactions ADD COLUMN satisfy_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__transactions AS SELECT id, devise_donner, devise_recevoir, montant_donner, montant_recevoir, adress_reception, email, id_transaction, status, status_paiement FROM transactions');
        $this->addSql('DROP TABLE transactions');
        $this->addSql('CREATE TABLE transactions (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, devise_donner VARCHAR(255) NOT NULL, devise_recevoir VARCHAR(255) NOT NULL, montant_donner DOUBLE PRECISION NOT NULL, montant_recevoir DOUBLE PRECISION NOT NULL, adress_reception VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, id_transaction VARCHAR(255) DEFAULT NULL, status BOOLEAN NOT NULL, status_paiement BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO transactions (id, devise_donner, devise_recevoir, montant_donner, montant_recevoir, adress_reception, email, id_transaction, status, status_paiement) SELECT id, devise_donner, devise_recevoir, montant_donner, montant_recevoir, adress_reception, email, id_transaction, status, status_paiement FROM __temp__transactions');
        $this->addSql('DROP TABLE __temp__transactions');
    }
}
