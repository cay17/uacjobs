<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216114853 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_BFDD3168989D9B62');
        $this->addSql('CREATE TEMPORARY TABLE __temp__articles AS SELECT id, type, title, creat_at, content, slug FROM articles');
        $this->addSql('DROP TABLE articles');
        $this->addSql('CREATE TABLE articles (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, type VARCHAR(255) NOT NULL COLLATE BINARY, title VARCHAR(1024) NOT NULL COLLATE BINARY, content CLOB DEFAULT NULL COLLATE BINARY, slug VARCHAR(1024) NOT NULL COLLATE BINARY, creat_at DATETIME DEFAULT NULL, status BOOLEAN DEFAULT NULL)');
        $this->addSql('INSERT INTO articles (id, type, title, creat_at, content, slug) SELECT id, type, title, creat_at, content, slug FROM __temp__articles');
        $this->addSql('DROP TABLE __temp__articles');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BFDD3168989D9B62 ON articles (slug)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_BFDD3168989D9B62');
        $this->addSql('CREATE TEMPORARY TABLE __temp__articles AS SELECT id, type, title, creat_at, content, slug FROM articles');
        $this->addSql('DROP TABLE articles');
        $this->addSql('CREATE TABLE articles (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, type VARCHAR(255) NOT NULL, title VARCHAR(1024) NOT NULL, content CLOB DEFAULT NULL, slug VARCHAR(1024) NOT NULL, creat_at DATETIME NOT NULL)');
        $this->addSql('INSERT INTO articles (id, type, title, creat_at, content, slug) SELECT id, type, title, creat_at, content, slug FROM __temp__articles');
        $this->addSql('DROP TABLE __temp__articles');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BFDD3168989D9B62 ON articles (slug)');
    }
}
