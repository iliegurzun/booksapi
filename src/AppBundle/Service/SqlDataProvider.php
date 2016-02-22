<?php
/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 18/2/2016
 * Time: 5:48 PM
 */

namespace AppBundle\Service;

use AppBundle\Entity\BookRepository;

/**
 * Class SqlDataProvider
 * @package AppBundle\Service
 */
class SqlDataProvider extends AbstractDataProvider
{
    /** @const string */
    const SERVICE_NAME = 'app.sql_data_provider';

    /**
     * Makes an SQL query in order to find all matching books
     * @param array $params
     * @return array|mixed
     */
    public function makeSearch(array $params = array())
    {
        /** @var BookRepository $repository */
        $repository = $this->getProvider()->getRepository('AppBundle:Book');
        $result = $repository->searchByParameters($params);
        $result = array_column($result, 'book');

        return $result;
    }
}