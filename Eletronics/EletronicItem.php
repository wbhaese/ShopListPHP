<?php
class EletronicItem 
{

    /**
    *	@var float
    */
    public $price;

    /**
    *	@var string
    */
    
    // private $type; 
    public $extraItems = [];
    public $maxExtraItems;
    public $val = 0;
    public $name;

    const ELECTRONIC_ITEM_TELEVISION = 'television'; 
    const ELECTRONIC_ITEM_CONSOLE = 'console';
    const ELECTRONIC_ITEM_MICROWAVE = 'microwave';

    private static $types = array(
        self::ELECTRONIC_ITEM_CONSOLE, 
        self::ELECTRONIC_ITEM_MICROWAVE, 
        self::ELECTRONIC_ITEM_TELEVISION
    );

    function totalEletronicPrice(){
        $this->totalPrice = $this->price;
        foreach($this->extraItems as $v => $items){
            $this->totalPrice += floatval($items->price);
        }
    }

    function maxExtrasAlowed(){
        $maxExtrasBool = false;

        if(
            (count($this->getExtraItems()) +1) <= $this->getMaxExtraItems() 
            || 
            $this->getMaxExtraItems() == -1)
        {
            $maxExtrasBool = true;
        }

        return $maxExtrasBool;
    }

    function getName()
    {
        return $this->name;
    }

    function getMaxExtraItems()
    {
        return $this->maxExtraItems;
    }

    function getExtraItems()
    {
        return $this->extraItems;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getType()
    {
        return $this->type;
    }

    function getWired()
    {
        return $this->wired;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setExtra($item)
    {
        if($this->maxExtrasAlowed()){
            $this->extraItems[] = $item;
        }else{
            return "Its only possible add " . $this->getMaxExtraItems() . " max extra items";
        }
    }

    function setMaxExtraItems($maxExtraItems)
    {
        $this->maxExtraItems = $maxExtraItems;
    }


}
