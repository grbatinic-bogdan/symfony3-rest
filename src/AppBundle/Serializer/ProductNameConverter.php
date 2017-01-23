<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 1/22/17
 * Time: 6:50 PM
 */

namespace AppBundle\Serializer;


use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

class ProductNameConverter implements NameConverterInterface
{
    public function normalize($propertyName)
    {
        if ($propertyName === "links") {
            return "_".$propertyName;
        } else {
            return $propertyName;
        }
    }

    public function denormalize($propertyName)
    {
        if ($propertyName === "_links") {
            return "links";
        } else {
            return $propertyName;
        }
    }

}