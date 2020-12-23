<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216185333 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE galery (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, file_id INTEGER DEFAULT NULL, creat_at DATETIME DEFAULT NULL, title VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_B5D532093CB796C ON galery (file_id)');
        $this->addSql('CREATE TABLE media_object (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, file_path VARCHAR(255) DEFAULT NULL)');
        $this->addSql('DROP INDEX IDX_E8FF75CCBCF5E72D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__faq AS SELECT id, categorie_id, question, reponse, creat_at, status FROM faq');
        $this->addSql('DROP TABLE faq');
        $this->addSql('CREATE TABLE faq (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, categorie_id INTEGER NOT NULL, creat_at DATETIME NOT NULL, status BOOLEAN DEFAULT NULL, question CLOB NOT NULL, reponse CLOB NOT NULL, CONSTRAINT FK_E8FF75CCBCF5E72D FOREIGN KEY (categorie_id) REFERENCES faq_categorie (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO faq (id, categorie_id, question, reponse, creat_at, status) SELECT id, categorie_id, question, reponse, creat_at, status FROM __temp__faq');
        $this->addSql('DROP TABLE __temp__faq');
        $this->addSql('CREATE INDEX IDX_E8FF75CCBCF5E72D ON faq (categorie_id)');
        $this->addSql('DROP INDEX UNIQ_B6BD307FCF18BB82');
        $this->addSql('CREATE TEMPORARY TABLE __temp__message AS SELECT id, reponse_id, name, object, receipt_at, message, email FROM message');
        $this->addSql('DROP TABLE message');
        $this->addSql('CREATE TABLE message (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, reponse_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, object VARCHAR(1024) NOT NULL COLLATE BINARY, receipt_at DATETIME NOT NULL, message CLOB NOT NULL COLLATE BINARY, email VARCHAR(255) NOT NULL COLLATE BINARY, CONSTRAINT FK_B6BD307FCF18BB82 FOREIGN KEY (reponse_id) REFERENCES message (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO message (id, reponse_id, name, object, receipt_at, message, email) SELECT id, reponse_id, name, object, receipt_at, message, email FROM __temp__message');
        $this->addSql('DROP TABLE __temp__message');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B6BD307FCF18BB82 ON message (reponse_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE galery');
        $this->addSql('DROP TABLE media_object');
        $this->addSql('DROP INDEX IDX_E8FF75CCBCF5E72D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__faq AS SELECT id, categorie_id, question, reponse, creat_at, status FROM faq');
        $this->addSql('DROP TABLE faq');
        $this->addSql('CREATE TABLE faq (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, categorie_id INTEGER NOT NULL, creat_at DATETIME NOT NULL, status BOOLEAN DEFAULT NULL, question CLOB NOT NULL COLLATE BINARY, reponse CLOB NOT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO faq (id, categorie_id, question, reponse, creat_at, status) SELECT id, categorie_id, question, reponse, creat_at, status FROM __temp__faq');
        $this->addSql('DROP TABLE __temp__faq');
        $this->addSql('CREATE INDEX IDX_E8FF75CCBCF5E72D ON faq (categorie_id)');
        $this->addSql('DROP INDEX UNIQ_B6BD307FCF18BB82');
        $this->addSql('CREATE TEMPORARY TABLE __temp__message AS SELECT id, reponse_id, name, object, receipt_at, message, email FROM message');
        $this->addSql('DROP TABLE message');
        $this->addSql('CREATE TABLE message (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, reponse_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, object VARCHAR(1024) NOT NULL, receipt_at DATETIME NOT NULL, message CLOB NOT NULL, email VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO message (id, reponse_id, name, object, receipt_at, message, email) SELECT id, reponse_id, name, object, receipt_at, message, email FROM __temp__message');
        $this->addSql('DROP TABLE __temp__message');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B6BD307FCF18BB82 ON message (reponse_id)');
    }
}
