<?php

require_once "EletronicItem.php";

class Controller extends EletronicItem
{

    /**
    *	@var float
    */

    /**
    *	@var string
    */
    

    private $type; public $wired;

    public function __construct($price, $wired = false)
    {
        $this->setPrice($price);
        $this->setWired($wired);
    }
    
    function getWired()
    {
        return $this->wired;
    }

    function setWired($wired)
    {
        $this->wired = $wired;
    }

}
