<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231005125037 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaire DROP FOREIGN KEY FK_BBC83DB6FE6E88D7');
        $this->addSql('DROP INDEX IDX_BBC83DB6FE6E88D7 ON horaire');
        $this->addSql('ALTER TABLE horaire ADD user_id INT NOT NULL, DROP idUser, CHANGE begin_date begin_date VARCHAR(255) NOT NULL, CHANGE end_date end_date VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE horaire ADD CONSTRAINT FK_BBC83DB6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_BBC83DB6A76ED395 ON horaire (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaire DROP FOREIGN KEY FK_BBC83DB6A76ED395');
        $this->addSql('DROP INDEX IDX_BBC83DB6A76ED395 ON horaire');
        $this->addSql('ALTER TABLE horaire ADD idUser INT DEFAULT NULL, DROP user_id, CHANGE begin_date begin_date DATETIME NOT NULL, CHANGE end_date end_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE horaire ADD CONSTRAINT FK_BBC83DB6FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_BBC83DB6FE6E88D7 ON horaire (idUser)');
    }
}
