<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231005140745 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE rel_user_etat');
        $this->addSql('DROP TABLE rel_user_role');
        $this->addSql('ALTER TABLE horaire CHANGE user_id user_id INT DEFAULT NULL, CHANGE begin_date begin_date DATETIME NOT NULL, CHANGE end_date end_date DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rel_user_etat (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_etat INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rel_user_role (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_role INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE horaire CHANGE user_id user_id INT NOT NULL, CHANGE begin_date begin_date VARCHAR(255) NOT NULL, CHANGE end_date end_date VARCHAR(255) NOT NULL');
    }
}
