<?php

/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 19/2/2016
 * Time: 4:14 PM
 */
namespace AppBundle\Tests\Service;

use AppBundle\Service\BookSearchService;
use AppBundle\Tests\BaseTest;
use AppBundle\Service\AbstractDataProvider;

/**
 * Class BookSearchServiceTest
 * @package AppBundle\Tests\Service
 */
class BookSearchServiceTest extends BaseTest
{

    public function testBookSearchService()
    {
        /** @var BookSearchService $service */
        $service = $this->container->get(BookSearchService::SERVICE_NAME);
        $this->assertInstanceOf(AbstractDataProvider::class, $service->getDataProvider());
    }
}