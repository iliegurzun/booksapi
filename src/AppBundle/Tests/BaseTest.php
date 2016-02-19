<?php

/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 19/2/2016
 * Time: 4:15 PM
 */

namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class BaseTest extends WebTestCase
{
    protected $client;

    protected $container;

    public function setUp()
    {
        $this->client = static::createClient();
        $this->container = $this->client->getContainer();
    }
}