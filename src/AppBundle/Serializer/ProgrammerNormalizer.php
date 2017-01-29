<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 1/29/17
 * Time: 6:41 PM
 */

namespace AppBundle\Serializer;


use AppBundle\Annotation\Link;
use AppBundle\Entity\Programmer;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\Routing\Router;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerAwareTrait;
use Symfony\Component\Serializer\SerializerInterface;

class ProgrammerNormalizer extends ObjectNormalizer implements NormalizerInterface
{
    use SerializerAwareTrait;

    /**
     * @var Router
     */
    private $router;

    /**
     * @var AnnotationReader
     */
    private $annotationReader;

    private $expressionLanguage;

    public function __construct($classMetadataFactory = null, NameConverterInterface $nameConverter, Router $router, AnnotationReader $annotationReader)
    {
        parent::__construct($classMetadataFactory, $nameConverter);
        $this->router = $router;
        $this->annotationReader = $annotationReader;
        $this->expressionLanguage = new ExpressionLanguage();
        //$this->setSerializer($serializer);
    }

    public function normalize($object, $format = null, array $context = array())
    {

        $annotations = $this->annotationReader->getClassAnnotations(new \ReflectionObject($object));
        $links = array();
        foreach ($annotations as $annotation) {
            if ($annotation instanceof Link) {
                $uri = $this->router->generate(
                    $annotation->route,
                    $this->resolveParams($annotation->params, $object)
                );
                $links[$annotation->name] = $uri;
            }
        }

        $data = array(
            'id' => $object->getId(),
            'nickname' => $object->getNickname(),
            'avatarNumber' => $object->getAvatarNumber(),
            'tagLine' => $object->getTagLine(),
            'powerLevel' => $object->getPowerLevel(),
            '_links' => $links,
            'uri' => $this->router->generate('api_programmers_show', array('nickname' => $object->getNickname()))
        );

        if ($context['include_relations']) {
            $data['user'] = $this->serializer->normalize($object->getUser(), 'json');
        }

        return $data;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof Programmer;
    }

    private function resolveParams(array $params, $object)
    {
        foreach ($params as $key => $param) {
            $params[$key] = $this->expressionLanguage
                ->evaluate($param, array('object' => $object));
        }
        return $params;
    }
}