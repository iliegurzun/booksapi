<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use AppBundle\Service\BookSearchService;
use AppBundle\Service\DataValidatorService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * Find one or more books by search parameters
     *
     * @return Book[]|array
     * @Rest\Post
     *
     */
    public function indexAction(Request $request)
    {
        /** @var BookSearchService $service */
        $service = $this->get(BookSearchService::SERVICE_NAME);
        $data = $request->request->all();
        /** @var DataValidatorService $validationService */
        $validationService = $this->get(DataValidatorService::SERVICE_NAME);
        if (!$validationService->validate($data)) {
            return new Response('Bad data received!', 400);
        }

        return $service->search($data);
    }
}
