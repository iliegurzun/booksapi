<?php
/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 18/2/2016
 * Time: 5:45 PM
 */

namespace AppBundle\Service;

/**
 * Class AbstractBookSearch
 * @package AppBundle\Service
 */
abstract class AbstractBookSearch
{
    /**
     * @var AbstractDataProvider
     */
    protected $dataProvider;

    /**
     * @param array $params
     * @return mixed
     */
    public function search($params = array())
    {
        return $this->getDataProvider()->makeSearch($params);
    }

    /**
     * @param AbstractDataProvider $dataProvider
     * @return $this
     */
    public function setDataProvider($dataProvider)
    {
        $this->dataProvider = $dataProvider;

        return $this;
    }

    /**
     * @return AbstractDataProvider
     */
    public function getDataProvider()
    {
        return $this->dataProvider;
    }
}