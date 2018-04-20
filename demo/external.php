<?php

    if (isset($_POST['submit'])) 
    {
        $name       = $_POST['name'];
        $last_name  = $_POST['last_name'];
        $password   = $_POST['password'];

        echo "Your first name is: " . $name . "<br/>";
        echo "Your last name is: " . $last_name . "<br/>";
        echo "Your password is: " . $password . "<br/>";
    }

?>