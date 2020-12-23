<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216154942 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_B6BD307FCF18BB82');
        $this->addSql('CREATE TEMPORARY TABLE __temp__message AS SELECT id, reponse_id, name, object, receipt_at, message FROM message');
        $this->addSql('DROP TABLE message');
        $this->addSql('CREATE TABLE message (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, reponse_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, object VARCHAR(1024) NOT NULL COLLATE BINARY, receipt_at DATETIME NOT NULL, message CLOB NOT NULL COLLATE BINARY, email VARCHAR(255) NOT NULL, CONSTRAINT FK_B6BD307FCF18BB82 FOREIGN KEY (reponse_id) REFERENCES message (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO message (id, reponse_id, name, object, receipt_at, message) SELECT id, reponse_id, name, object, receipt_at, message FROM __temp__message');
        $this->addSql('DROP TABLE __temp__message');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B6BD307FCF18BB82 ON message (reponse_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_B6BD307FCF18BB82');
        $this->addSql('CREATE TEMPORARY TABLE __temp__message AS SELECT id, reponse_id, name, object, receipt_at, message FROM message');
        $this->addSql('DROP TABLE message');
        $this->addSql('CREATE TABLE message (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, reponse_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, object VARCHAR(1024) NOT NULL, receipt_at DATETIME NOT NULL, message CLOB NOT NULL)');
        $this->addSql('INSERT INTO message (id, reponse_id, name, object, receipt_at, message) SELECT id, reponse_id, name, object, receipt_at, message FROM __temp__message');
        $this->addSql('DROP TABLE __temp__message');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B6BD307FCF18BB82 ON message (reponse_id)');
    }
}
