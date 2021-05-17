<?php

require_once "EletronicItem.php";

class Microwave extends EletronicItem
{

    /**
    *	@var float
    */
    
    public $totalPrice;

    public function __construct($price, $name = "", $maxExtras = 0)
    {
        $this->setPrice($price);
        $this->setMaxExtraItems($maxExtras);
        $this->setName($name);
    }
}
