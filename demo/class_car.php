<?php

class Car
{

    public $wheels = 4;
    private $hood = 1;
    protected $engine = 1;
    //$doors = 4;

    function showProperties()
    {
        echo $this->wheels . "<br/>";
        echo $this->hood . "<br/>";
        echo $this->engine . "<br/>";
    }

    function showPrivateProperty()
    {
        echo $this->hood . "<br/>";
    }
}

$bmw = new Car();

$bmw->showProperties();

echo "<br/><br/>";

echo $bmw->wheels . "<br/>";
//echo $bmw->hood . "<br/>";
//echo $bmw->engine . "<br/>";

class Truck extends Car
{
    function showEngineProperty()
    {
        echo $this->engine . "<br/>";
    }
}

$tacoma = new Truck;

$tacoma->showEngineProperty();

echo "<br/><br/>";

$bmw->showPrivateProperty();




?>