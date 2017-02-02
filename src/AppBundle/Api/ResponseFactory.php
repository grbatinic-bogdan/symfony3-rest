<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 2/2/17
 * Time: 10:45 AM
 */

namespace AppBundle\Api;


use Symfony\Component\HttpFoundation\JsonResponse;

class ResponseFactory
{
    /**
     * @param ApiProblem $apiProblem
     * @return JsonResponse
     */
    public function createResponse(ApiProblem $apiProblem)
    {
        $data = $apiProblem->toArray();
        if ($data['type'] != 'about:blank') {
            $data['type'] = 'http://localhost:8000/docs/errors#'.$data['type'];
        }

        $response = new JsonResponse(
            $data,
            $apiProblem->getStatusCode()
        );
        $response->headers->set('Content-Type', 'application/problem+json');

        return $response;
    }
}