<?php

class Car
{

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels()
    {
        $this->wheels = 8;
    }
}

$bmw = new Car();

//$bmw->wheels = 8; // assign a new value to class property via object of the class

echo $bmw->wheels . "<br/>";
echo $bmw->hood . "<br/>";
echo $bmw->engine . "<br/>";
echo $bmw->doors . "<br/>";



?>