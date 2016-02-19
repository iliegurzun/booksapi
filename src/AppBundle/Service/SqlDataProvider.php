<?php
/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 18/2/2016
 * Time: 5:48 PM
 */

namespace AppBundle\Service;


use AppBundle\Entity\BookRepository;
use Doctrine\ORM\EntityManager;

class SqlDataProvider implements DataProviderInterface
{
    const SERVICE_NAME = 'app.sql_data_provider';

    /**
     * @var EntityManager
     */
    protected $provider;

    public function getProvider()
    {
        return $this->provider;
    }

    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    public function makeSearch($params = array())
    {
        /** @var BookRepository $repository */
        $repository = $this->getProvider()->getRepository('AppBundle:Book');

        return $repository->searchByParameters($params);
    }
}