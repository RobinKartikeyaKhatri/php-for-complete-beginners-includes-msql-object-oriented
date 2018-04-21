<?php

class Car
{
    function moveWheels()
    {
        echo "Wheels move";
    }
}

// if (class_exists('Car')) 
// {
//     echo "Yes class exists";
// }
// else
// {
//     echo "Class does not exists";
// }

if (method_exists("Car", "moveWheels")) 
{
    echo "Yes method exists";
}
else
{
    echo "No method does not exsits";
}

?>