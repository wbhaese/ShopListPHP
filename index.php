<?php

include "Eletronics/Television.php";
include "Eletronics/Console.php";
include "Eletronics/Microwave.php";
include "Eletronics/Controller.php";

function organizeList($EletronicList)
{
    usort($EletronicList, function($Item1, $Item2) {
        return $Item1->totalPrice > $Item2->totalPrice;
    });

    return $EletronicList;
}

function startShop(){

    //Create controllers. Variables: price, boolean wired
    $wiredController = new Controller(20, true);
    $notWiredController = new Controller(30, true);
    
    //First TV / values for price, maxExtras(default 0) infite extras = -1, 
    $Television1 = new Television(250.50, "TV1", -1);

    $Television1Extras = 2;

    for($i = 0; $i < $Television1Extras; $i++){
        $Television1->setExtra($notWiredController);
    }

    $Television1->totalEletronicPrice();

    //Second TV / values for price, maxExtras
    $Television2 = new Television(200.50, "TV 2", -1);

    $Television2Extras = 1;
    for($i = 0; $i < $Television2Extras; $i++){
        $Television2->setExtra($notWiredController);
    }

    $Television2->totalEletronicPrice();

    //Console / values for price, maxExtras(default 0)
    $Console1 = new Console(500.50, "Console", 4);

    //add extra not wired controller
    $Console1Extras = 2;
    for($i = 0; $i < $Console1Extras; $i++){
        $Console1->setExtra($notWiredController);
    }

    //add extra wired controller 
    $Console1Extras = 3;
    for($i = 0; $i < $Console1Extras; $i++){
        $Console1->setExtra($wiredController);
    }

    $Console1->totalEletronicPrice();

    //microwave / values for price, maxExtras(default 0)
    $Microwave1 = new microwave(350.80, "Microwave");

    $Microwave1Extras = 0;
    for($i = 0; $i < $Microwave1Extras; $i++){
        $Microwave1->setExtra($wiredController);
    }
    $Microwave1->totalEletronicPrice();

    $EletronicList = array(
        $Television1,
        $Television2,
        $Console1,
        $Microwave1
    );

    return $EletronicList;
}

$EletronicList = organizeList(startShop());

include "view/view.php";