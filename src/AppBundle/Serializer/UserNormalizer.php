<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 1/29/17
 * Time: 10:23 PM
 */

namespace AppBundle\Serializer;


use AppBundle\Entity\User;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\scalar;
use Symfony\Component\Serializer\SerializerAwareTrait;

class UserNormalizer implements NormalizerInterface
{

    use SerializerAwareTrait;

    public function normalize($object, $format = null, array $context = array())
    {
        return array(
            'id' => $object->getId(),
            'username' => $object->getUsername(),
            'email' => $object->getEmail(),
        );
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof User;
    }

}