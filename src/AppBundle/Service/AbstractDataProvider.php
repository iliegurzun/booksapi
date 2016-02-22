<?php
/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 18/2/2016
 * Time: 5:45 PM
 */

namespace AppBundle\Service;

/**
 * Class AbstractDataProvider
 * @package AppBundle\Service
 */
abstract class AbstractDataProvider
{
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

    abstract public function makeSearch(array $params = array());
}