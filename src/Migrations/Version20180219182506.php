<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180219182506 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE profiles (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, tag VARCHAR(100) NOT NULL, profilephoto VARCHAR(255) NOT NULL, sex VARCHAR(100) NOT NULL, height NUMERIC(10, 2) DEFAULT NULL, mass NUMERIC(10, 3) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE old_credit_transactions');
        $this->addSql('DROP TABLE old_criminal_records');
        $this->addSql('DROP TABLE old_profiles');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE old_credit_transactions (from_id VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, to_id INT NOT NULL, amount NUMERIC(10, 0) NOT NULL, date DATETIME NOT NULL) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE old_criminal_records (id INT AUTO_INCREMENT NOT NULL, Crime VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, Date DATE NOT NULL, Description TEXT NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE old_profiles (id VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, name VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, length NUMERIC(10, 0) NOT NULL COMMENT \'meter\', weight NUMERIC(10, 0) NOT NULL COMMENT \'kilogram\', profilephoto VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, sex VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE profiles');
    }
}
