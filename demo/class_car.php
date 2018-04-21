<?php

class Car
{
    static $wheels = 4;
    var $hood = 1;

    function showStaticProperty()
    {
        echo self::$wheels . "<br/>";
    }
}

echo Car::$wheels . "<br/>";

Car::showStaticProperty();


?>