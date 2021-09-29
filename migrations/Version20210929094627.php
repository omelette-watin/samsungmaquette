<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210929094627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE new_product ADD COLUMN description2 VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__new_product AS SELECT id, name, price, garantie, description, image FROM new_product');
        $this->addSql('DROP TABLE new_product');
        $this->addSql('CREATE TABLE new_product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, price INTEGER NOT NULL, garantie INTEGER NOT NULL, description CLOB NOT NULL, image VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO new_product (id, name, price, garantie, description, image) SELECT id, name, price, garantie, description, image FROM __temp__new_product');
        $this->addSql('DROP TABLE __temp__new_product');
    }
}
