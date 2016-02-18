<?php
/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 18/2/2016
 * Time: 5:45 PM
 */

namespace AppBundle\Service;


interface DataProviderInterface
{
    public function getProvider();

    public function setProvider($provider);

    public function makeSearch($params = array());
}