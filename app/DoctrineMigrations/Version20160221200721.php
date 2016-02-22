<?php

namespace AppBundle\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160221200721 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql(
            '
              INSERT into book (`id`, `title`, `author`, `isbn`, `release_date`) VALUES (1, "lorem ipsum", "lorem ipsum", "foobar", NOW());
              INSERT into book (`id`, `title`, `author`, `isbn`, `release_date`) VALUES (2, "foo", "bar", "isbn", NOW());
              INSERT into rating (`id`, `book_id`, `rating`) VALUES (1, 1, 2);
            '
        );

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('
            DELETE FROM rating where id IN (1);
            DELETE FROM book where id IN (1,2);
            ');

    }
}
