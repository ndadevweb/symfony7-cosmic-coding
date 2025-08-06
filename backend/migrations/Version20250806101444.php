<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250806101444 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE starship ALTER updated_at TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE starship ALTER created_at TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('COMMENT ON COLUMN starship.updated_at IS NULL');
        $this->addSql('COMMENT ON COLUMN starship.created_at IS NULL');
        $this->addSql('ALTER TABLE starship_part ADD starship_id INT NOT NULL');
        $this->addSql('ALTER TABLE starship_part ADD CONSTRAINT FK_41C447379B24DF5 FOREIGN KEY (starship_id) REFERENCES starship (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_41C447379B24DF5 ON starship_part (starship_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE starship ALTER created_at TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE starship ALTER updated_at TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('COMMENT ON COLUMN starship.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN starship.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE starship_part DROP CONSTRAINT FK_41C447379B24DF5');
        $this->addSql('DROP INDEX IDX_41C447379B24DF5');
        $this->addSql('ALTER TABLE starship_part DROP starship_id');
    }
}
