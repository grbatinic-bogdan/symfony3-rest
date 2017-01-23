<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 1/22/17
 * Time: 6:47 PM
 */

namespace AppBundle\Serializer;


use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;

class DataSerializer
{
    /**
     * @param NormalizerInterface $normalizer
     * @param $data
     * @return string|\Symfony\Component\Serializer\Encoder\scalar
     */
    public static function serializeJson(NormalizerInterface $normalizer, $data)
    {
        $serializer = new Serializer(array($normalizer), array(new JsonEncoder()));

        return $serializer->serialize($data, 'json');
    }
}