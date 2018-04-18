<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variables in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        // We can use both single quotes ('') and double quotes ("") to store strings in a variable
        $first_name = "Robin";
        $last_name = 'Khatri';
        $age = 32;
        $measurement = 6;

        echo $first_name;
        echo $last_name;
        echo $age;
        echo $measurement;

        echo "<br/><br/>";

        // Concatenation

        echo "First name is: " . $first_name . "<br/>";
        echo "Last name is: " . $last_name . "<br/>";
        echo "Age is: " . $age . " years" . "<br/>";
        echo "Height: " . $measurement . " foot" . "<br/>";
    ?>
</body>
</html>