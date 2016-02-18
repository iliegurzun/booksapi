<?php

namespace AppBundle\Controller;

use AppBundle\Service\BaseBookSearch;
use AppBundle\Service\BookSearchService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        /** @var BookSearchService $service */
        $service = $this->get(BookSearchService::SERVICE_NAME);

        return $service->search($request->request->all());
    }
}
