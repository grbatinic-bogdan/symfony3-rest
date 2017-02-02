<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 12/7/16
 * Time: 4:59 PM
 */

namespace AppBundle\Controller\Api;


use AppBundle\Api\ApiProblem;
use AppBundle\Api\ApiProblemException;
use AppBundle\Controller\BaseController;
use AppBundle\Entity\Programmer;
use AppBundle\Form\ProgrammerType;
use AppBundle\Form\UpdateProgrammerType;
use AppBundle\Serializer\ProductNameConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class ProgrammerController
 * @package AppBundle\Controller\Api
 * @Security("is_granted('ROLE_USER')")
 */
class ProgrammerController extends BaseController
{
    /**
     * @Route("/api/programmers")
     * @Method("POST")
     */
    public function newAction()
    {

        $this->denyAccessUnlessGranted('ROLE_USER');

        $request = $this->get('request_stack')->getCurrentRequest();
        $programmer = new Programmer();

        $form = $this->createForm(ProgrammerType::class, $programmer);
        $this->processForm($request, $form);


        if (!$form->isValid()) {
            $this->throwApiProblemValidationException($form);
        }

        $programmer->setUser($this->getUser());

        $em = $this->getDoctrine()->getManager();
        $em->persist($programmer);
        $em->flush();

        $programmerUrl = $this->generateUrl(
            'api_programmers_show',
            ['nickname' => $programmer->getNickname()]
        );

        $response = $this->createApiResponse($programmer, Response::HTTP_CREATED);
        $response->headers->set('Location', $programmerUrl);

        return $response;

    }

    /**
     * @Route("/api/programmers/{nickname}", name="api_programmers_show")
     * @Method("GET")
     * @param string $nickname
     * @return Response
     */
    public function showAction($nickname)
    {
        $programmer = $this->getDoctrine()
            ->getRepository('AppBundle:Programmer')
            ->findOneByNickname($nickname);

        if (!$programmer) {
            throw $this->createNotFoundException(sprintf(
                'No programmer found with nickname "%s"',
                $nickname
            ));
        }

        return $this->createApiResponse($programmer);
    }

    /**
     * @Route("/api/programmers", name="api_programmers_collection")
     * @Method("GET")
     */
    public function listAction()
    {
        $request = $this->get('request_stack')->getCurrentRequest();
        $filter = $request->query->get('filter');

        $qb = $this->getDoctrine()
            ->getRepository('AppBundle:Programmer')
            ->findAllQueryBuilder($filter);

        $paginatedCollection = $this->get('pagination_factory')->createCollection($qb, $request, 'api_programmers_collection');

        return $this->createApiResponse($paginatedCollection, 200);
    }

    /**
     * @Route("/api/programmers/{nickname}")
     * @Method({"PUT", "PATCH"})
     * @param  string $nickname
     * @return Response $response
     */
    public function updateAction($nickname)
    {
        $request = $this->get('request_stack')->getCurrentRequest();
        $programmer = $this->getDoctrine()
            ->getRepository('AppBundle:Programmer')
            ->findOneByNickname($nickname);
        if (!$programmer) {
            throw $this->createNotFoundException(sprintf(
                'No programmer found with nickname "%s"',
                $nickname
            ));
        }

        $form = $this->createForm(UpdateProgrammerType::class, $programmer);
        $this->processForm($request, $form);

        if (!$form->isValid()) {
            $this->throwApiProblemValidationException($form);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($programmer);
        $em->flush();

        return $this->createApiResponse($programmer);
    }

    /**
     * @Route("/api/programmers/{nickname}")
     * @Method("DELETE")
     */
    public function deleteAction($nickname)
    {
        $programmer = $this->getDoctrine()
            ->getRepository('AppBundle:Programmer')
            ->findOneByNickname($nickname);
        if ($programmer) {
            // debated point: should we 404 on an unknown nickname?
            // or should we just return a nice 204 in all cases?
            // we're doing the latter

            $em = $this->getDoctrine()->getManager();
            $em->remove($programmer);
            $em->flush();
        }

        return new Response(null, 204);
    }

    /**
     * @param Programmer[]|Programmer $data
     * @return string|\Symfony\Component\Serializer\Encoder\scalar
     */
    private function serialize($data)
    {

        $serializer = $this->get('my_serializer');

        $productNameConverter = new ProductNameConverter();
        $normalizer = new ObjectNormalizer();


        $serializer = new Serializer(array($normalizer), array(new JsonEncoder()));

        return $serializer->serialize($data, 'json');
    }

    private function processForm(Request $request, FormInterface $form)
    {
        $data = json_decode($request->getContent(), true);
        if ($data === null) {
            //throw new HttpException(400, 'Invalid JSON body');
            $apiProblem = new ApiProblem(400, ApiProblem::TYPE_INVALID_REQUEST_BODY_FORMAT);
            throw new ApiProblemException($apiProblem);
        }
        $clearMissing = $request->getMethod() !== 'PATCH';
        $form->submit($data, $clearMissing);
    }

    protected function createApiResponse($data, $statusCode = 200)
    {
        $serializer = $this->get('my_serializer');

        $request = $this->get('request_stack')->getCurrentRequest();
        $group = ($request->query->getBoolean('deep')) ? 'deep' : 'default';

        $json = $serializer->serialize($data, 'json', array(
            'groups' => array(
                $group
            ),
            'include_relations' => $request->query->getBoolean('deep')
        ));

        return new Response($json, $statusCode, array(
            'Content-Type' => 'application/json'
        ));
    }

    private function getErrorsFromForm(FormInterface $form)
    {
        $errors = array();
        foreach ($form->getErrors() as $error) {
            $errors[] = $error->getMessage();
        }
        foreach ($form->all() as $childForm) {
            if ($childForm instanceof FormInterface) {
                if ($childErrors = $this->getErrorsFromForm($childForm)) {
                    $errors[$childForm->getName()] = $childErrors;
                }
            }
        }
        return $errors;
    }

    private function throwApiProblemValidationException(FormInterface $form)
    {

        $apiProblem = new ApiProblem(
            400,
            ApiProblem::TYPE_VALIDATION_ERROR
        );

        $errors = $this->getErrorsFromForm($form);
        $apiProblem->set('errors', $errors);

        throw new ApiProblemException($apiProblem);
    }
}