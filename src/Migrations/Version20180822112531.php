<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180822112531 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 0\', \'text  0 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 1\', \'text  1 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 2\', \'text  2 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 3\', \'text  3 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 4\', \'text  4 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 5\', \'text  5 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 6\', \'text  6 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 7\', \'text  7 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 8\', \'text  8 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 9\', \'text  9 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 10\', \'text 10 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 11\', \'text 11 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 12\', \'text 12 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 13\', \'text 13 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 14\', \'text 14 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 15\', \'text 15 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 16\', \'text 16 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 17\', \'text 17 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 18\', \'text 18 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 19\', \'text 19 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 20\', \'text 20 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 21\', \'text 21 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 22\', \'text 22 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 23\', \'text 23 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 24\', \'text 24 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 25\', \'text 25 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 26\', \'text 26 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 27\', \'text 27 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 28\', \'text 28 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 29\', \'text 29 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 30\', \'text 30 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 31\', \'text 31 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 32\', \'text 32 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 33\', \'text 33 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 34\', \'text 34 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 35\', \'text 35 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 36\', \'text 36 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 37\', \'text 37 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 38\', \'text 38 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 39\', \'text 39 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 40\', \'text 40 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 41\', \'text 41 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 42\', \'text 42 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 43\', \'text 43 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 44\', \'text 44 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 45\', \'text 45 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 46\', \'text 46 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 47\', \'text 47 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 48\', \'text 48 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 49\', \'text 49 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 50\', \'text 50 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 51\', \'text 51 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 52\', \'text 52 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 53\', \'text 53 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 54\', \'text 54 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 55\', \'text 55 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 56\', \'text 56 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 57\', \'text 57 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 58\', \'text 58 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 59\', \'text 59 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 60\', \'text 60 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 61\', \'text 61 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 62\', \'text 62 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 63\', \'text 63 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 64\', \'text 64 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 65\', \'text 65 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 66\', \'text 66 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 67\', \'text 67 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 68\', \'text 68 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 69\', \'text 69 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 70\', \'text 70 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 71\', \'text 71 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 72\', \'text 72 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 73\', \'text 73 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 74\', \'text 74 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 75\', \'text 75 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 76\', \'text 76 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 77\', \'text 77 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 78\', \'text 78 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 79\', \'text 79 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 80\', \'text 80 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 81\', \'text 81 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 82\', \'text 82 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 83\', \'text 83 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 84\', \'text 84 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 85\', \'text 85 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 86\', \'text 86 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 87\', \'text 87 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 88\', \'text 88 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 89\', \'text 89 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 90\', \'text 90 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 91\', \'text 91 \', \'done\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 92\', \'text 92 \', \'new\')');
        $this->addSql('insert into tickets (`date`,`title`, `text`, `status`) VALUES (' . time() . ', \'title 93\', \'text 93 \', \'done\')');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('TRUNCATE TABLE tickets');

    }
}
