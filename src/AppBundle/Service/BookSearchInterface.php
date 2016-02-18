<?php
namespace AppBundle\Service;

/**
 * Interface BookSearchInterface
 * @package AppBundle\Service
 */
interface BookSearchInterface
{
    /**
     * @param array $params
     * @return array
     */
    public function search($params = array());

    /**
     * @param DataProviderInterface $dataProvider
     * @return BookSearchInterface
     */
    public function setDataProvider($dataProvider);

    /**
     * @return DataProviderInterface
     */
    public function getDataProvider();

}