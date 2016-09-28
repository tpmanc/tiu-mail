<?php
namespace tpmanc\tiu;

use tpmanc\tiu\Item;

/**
 * Tiu message
 */
class Message extends Item
{
    protected $title;

    public function __construct($id, $link, $title)
    {
        parent::__construct($id, $link);
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
