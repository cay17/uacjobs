<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216134725 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE podcast ADD COLUMN description CLOB DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__podcast AS SELECT id, title, lien, creat_at, status FROM podcast');
        $this->addSql('DROP TABLE podcast');
        $this->addSql('CREATE TABLE podcast (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(1024) NOT NULL, lien VARCHAR(1024) NOT NULL, creat_at DATETIME NOT NULL, status BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO podcast (id, title, lien, creat_at, status) SELECT id, title, lien, creat_at, status FROM __temp__podcast');
        $this->addSql('DROP TABLE __temp__podcast');
    }
}
