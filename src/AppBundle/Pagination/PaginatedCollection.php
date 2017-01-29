<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 1/22/17
 * Time: 5:52 PM
 */

namespace AppBundle\Pagination;

/**
 * Class PaginatedCollection
 * @package AppBundle\Pagination
 * TODO: add @Link annotation to define links
 */
class PaginatedCollection
{
    private $items;

    private $total;

    private $count;

    private $_links = array();

    public function __construct(array $items, $totalItems)
    {
        $this->items = $items;
        $this->total = $totalItems;
        $this->count = count($items);
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function addLink($ref, $url)
    {
        $this->_links[$ref] = $url;
    }

    public function getLinks()
    {
        return $this->_links;
    }


}