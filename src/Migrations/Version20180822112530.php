<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180822112530 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('insert into users (username,password) VALUES (\'User number 0\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 1\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 2\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 3\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 4\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 5\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 6\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 7\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 8\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 9\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 10\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 11\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 12\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 13\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 14\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 15\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 16\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 17\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 18\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 19\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 20\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 21\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 22\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 23\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 24\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 25\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 26\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 27\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 28\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 29\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 30\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 31\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 32\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 33\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 34\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 35\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 36\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 37\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 38\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 39\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 40\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 41\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 42\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 43\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 44\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 45\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 46\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 47\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 48\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 49\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 50\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 51\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 52\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 53\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 54\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 55\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 56\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 57\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 58\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 59\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 60\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 61\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 62\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 63\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 64\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 65\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 66\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 67\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 68\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 69\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 70\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 71\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 72\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 73\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 74\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 75\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 76\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 77\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 78\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 79\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 80\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 81\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 82\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 83\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 84\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 85\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 86\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 87\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 88\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 89\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 90\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 91\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 92\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 93\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 94\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 95\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 96\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 97\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 98\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 99\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 100\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 101\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 102\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 103\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 104\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 105\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 106\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 107\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 108\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 109\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 110\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 111\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 112\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 113\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 114\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 115\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 116\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 117\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 118\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 119\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 120\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 121\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 122\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 123\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 124\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 125\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 126\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 127\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 128\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 129\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 130\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 131\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 132\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 133\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 134\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 135\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 136\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 137\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 138\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 139\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 140\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 141\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 142\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 143\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 144\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 145\',\'Password' . time() .'\')');
        $this->addSql('insert into users (username,password) VALUES (\'User number 146\',\'Password' . time() .'\')');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('TRUNCATE TABLE users');

    }
}
