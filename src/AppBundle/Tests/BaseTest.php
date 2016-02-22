<?php

/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 19/2/2016
 * Time: 4:15 PM
 */

namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpKernel\Tests\ClientTest;

/**
 * Class BaseTest
 * @package AppBundle\Tests
 */
abstract class BaseTest extends WebTestCase
{
    /**
     * @var ClientTest
     */
    protected $client;

    /**
     * @var Container
     */
    protected $container;

    /**
     * Creates the container for accessing services in the tests extending this
     */
    public function setUp()
    {
        $this->client = static::createClient();
        $this->container = $this->client->getContainer();
    }
}