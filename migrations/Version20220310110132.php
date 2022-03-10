<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220310110132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE movement (id INT AUTO_INCREMENT NOT NULL, account_id INT NOT NULL, category_id INT DEFAULT NULL, object VARCHAR(255) NOT NULL, value DOUBLE PRECISION NOT NULL, date DATE DEFAULT NULL, credit TINYINT(1) NOT NULL, reccurent TINYINT(1) NOT NULL, recurrence VARCHAR(255) DEFAULT NULL, comment LONGTEXT DEFAULT NULL, valued TINYINT(1) NOT NULL, method VARCHAR(255) NOT NULL, INDEX IDX_F4DD95F79B6B5FBA (account_id), INDEX IDX_F4DD95F712469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE movement ADD CONSTRAINT FK_F4DD95F79B6B5FBA FOREIGN KEY (account_id) REFERENCES account (id)');
        $this->addSql('ALTER TABLE movement ADD CONSTRAINT FK_F4DD95F712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE movement');
    }
}
