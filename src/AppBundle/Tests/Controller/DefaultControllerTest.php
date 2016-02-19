<?php

namespace AppBundle\Tests\Controller;

use AppBundle\Entity\Book;
use AppBundle\Tests\BaseTest;

class DefaultControllerTest extends BaseTest
{
    public function testIndex()
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $book = new Book();
        $book
            ->setAuthor('foobar author')
            ->setIsbn('foo-bar')
            ->setReleaseDate(new \DateTime('2015-01-01'))
            ->setTitle('foo bar title');
        $em->persist($book);
        $em->flush();

        $this->client->request(
            'POST',
            '/api/index.json',
            array(
                'isbn' => 'foo'
            )
        );

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $this->assertNotEmpty($this->client->getResponse()->getContent());
        $this->assertEquals(
            '[{"id":1,"title":"foo bar title","isbn":"foo-bar","author":"foobar author","release_date":"2015-01-01T00:00:00+0200","ratings":[]}]',
            $this->client->getResponse()->getContent()
        );
    }
}
