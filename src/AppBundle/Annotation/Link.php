<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 1/29/17
 * Time: 9:06 PM
 */

namespace AppBundle\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class Link
{
    /**
     * @Required
     *
     * @var string
     */
    public $name;
    /**
     * @Required
     *
     * @var string
     */
    public $route;
    public $params = array();
}