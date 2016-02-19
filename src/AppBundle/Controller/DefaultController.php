<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use AppBundle\Service\BaseBookSearch;
use AppBundle\Service\BookSearchService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FOS\RestBundle\Controller\Annotations\Post;

class DefaultController extends Controller
{
    /**
     * Find one or more books by search parameters
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Make interrogation for finding a book by several parameters",
     *   output = "AppBundle\Entity\Book[]",
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @Rest\View
     *
     * @return Book[]|array
     * @Post
     *
     */
    public function indexAction(Request $request)
    {
        /** @var BookSearchService $service */
        $service = $this->get(BookSearchService::SERVICE_NAME);

        return $service->search($request->request->all());
    }
}
