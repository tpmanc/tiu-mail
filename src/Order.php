<?php
namespace tpmanc\tiu;

use tiu\Item;

/**
 * Tiu order
 */
class Order extends Item
{
    private $username;

    function __construct($id, $link, $username)
    {
        parent::__construct($id, $link);
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}
