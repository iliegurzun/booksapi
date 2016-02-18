<?php
/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 18/2/2016
 * Time: 5:48 PM
 */

namespace AppBundle\Service;


use Doctrine\ORM\EntityManager;

class SqlDataProvider implements DataProviderInterface
{
    const SERVICE_NAME = 'app.data_provider';

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
        return array();
    }
}