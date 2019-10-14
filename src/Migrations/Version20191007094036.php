<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191007094036 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE visite (id INT AUTO_INCREMENT NOT NULL, suite VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visite_bien (visite_id INT NOT NULL, bien_id INT NOT NULL, INDEX IDX_C89C6C37C1C5DC59 (visite_id), INDEX IDX_C89C6C37BD95B80F (bien_id), PRIMARY KEY(visite_id, bien_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visite_visiteur (visite_id INT NOT NULL, visiteur_id INT NOT NULL, INDEX IDX_9C620330C1C5DC59 (visite_id), INDEX IDX_9C6203307F72333D (visiteur_id), PRIMARY KEY(visite_id, visiteur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bien (id INT AUTO_INCREMENT NOT NULL, id_type_id INT NOT NULL, nb_piece INT NOT NULL, nb_chambre INT NOT NULL, superficie INT NOT NULL, prix DOUBLE PRECISION NOT NULL, chauffage VARCHAR(50) NOT NULL, année INT NOT NULL, localisation VARCHAR(100) NOT NULL, état VARCHAR(50) NOT NULL, INDEX IDX_45EDC3861BD125E3 (id_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visiteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(25) NOT NULL, prenom VARCHAR(25) NOT NULL, adresse VARCHAR(100) NOT NULL, telephone INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE visite_bien ADD CONSTRAINT FK_C89C6C37C1C5DC59 FOREIGN KEY (visite_id) REFERENCES visite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE visite_bien ADD CONSTRAINT FK_C89C6C37BD95B80F FOREIGN KEY (bien_id) REFERENCES bien (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE visite_visiteur ADD CONSTRAINT FK_9C620330C1C5DC59 FOREIGN KEY (visite_id) REFERENCES visite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE visite_visiteur ADD CONSTRAINT FK_9C6203307F72333D FOREIGN KEY (visiteur_id) REFERENCES visiteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC3861BD125E3 FOREIGN KEY (id_type_id) REFERENCES type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE visite_bien DROP FOREIGN KEY FK_C89C6C37C1C5DC59');
        $this->addSql('ALTER TABLE visite_visiteur DROP FOREIGN KEY FK_9C620330C1C5DC59');
        $this->addSql('ALTER TABLE visite_bien DROP FOREIGN KEY FK_C89C6C37BD95B80F');
        $this->addSql('ALTER TABLE visite_visiteur DROP FOREIGN KEY FK_9C6203307F72333D');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC3861BD125E3');
        $this->addSql('DROP TABLE visite');
        $this->addSql('DROP TABLE visite_bien');
        $this->addSql('DROP TABLE visite_visiteur');
        $this->addSql('DROP TABLE bien');
        $this->addSql('DROP TABLE visiteur');
        $this->addSql('DROP TABLE type');
    }
}
