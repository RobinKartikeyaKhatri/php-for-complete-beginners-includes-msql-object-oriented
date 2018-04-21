<?php

class Car
{

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels()
    {
        echo $this->wheels;
    }
}

$bmw = new Car();

class Truck extends Car
{

}

$tacoma = new Truck;

$tacoma->moveWheels();

echo "<br/>";

echo $tacoma->wheels . "<br/>";
echo $tacoma->hood . "<br/>";
echo $tacoma->engine . "<br/>";
echo $tacoma->doors . "<br/>";


?>