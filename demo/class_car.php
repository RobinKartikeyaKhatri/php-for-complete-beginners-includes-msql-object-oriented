<?php

class Car
{
    function moveWheels()
    {
        echo "Wheels move";
    }
}

$bmw = new Car();
$tacoma = new Car();

$bmw->moveWheels();
$tacoma->moveWheels();

?>