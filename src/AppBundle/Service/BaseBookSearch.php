<?php
/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 18/2/2016
 * Time: 5:45 PM
 */

namespace AppBundle\Service;


abstract class BaseBookSearch implements BookSearchInterface
{
    const SERVICE_NAME = 'app.base_search';

    /**
     * @var DataProviderInterface
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
     * @param DataProviderInterface $dataProvider
     * @return $this
     */
    public function setDataProvider($dataProvider)
    {
        $this->dataProvider = $dataProvider;

        return $this;
    }

    /**
     * @return DataProviderInterface
     */
    public function getDataProvider()
    {
        return $this->dataProvider;
    }
}