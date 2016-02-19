<?php
/**
 * Created by PhpStorm.
 * User: ilie.gurzun
 * Date: 18/2/2016
 * Time: 5:48 PM
 */

namespace AppBundle\Service;

use AppBundle\Entity\BookRepository;

class SqlDataProvider extends AbstractDataProvider
{
    /** @const string */
    const SERVICE_NAME = 'app.sql_data_provider';

    public function makeSearch(array $params = array())
    {
        /** @var BookRepository $repository */
        $repository = $this->getProvider()->getRepository('AppBundle:Book');

        return $repository->searchByParameters($params);
    }
}