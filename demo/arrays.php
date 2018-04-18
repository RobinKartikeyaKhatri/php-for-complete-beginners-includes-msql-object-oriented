<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arrays in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

        // created an array and assign it to $numberList variable
        $numberList = array(101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111);

        // accessing array elements endividually
        echo $numberList[0] . "<br/>";
        echo $numberList[1] . "<br/>";
        echo $numberList[2] . "<br/>";
        echo $numberList[3] . "<br/>";
        echo $numberList[4] . "<br/>";
        echo $numberList[5] . "<br/>";
        echo $numberList[6] . "<br/>";
        echo $numberList[7] . "<br/>";
        echo $numberList[8] . "<br/>";
        echo $numberList[9] . "<br/>";
        echo $numberList[10] . "<br/>";

        // Assigning endividual value to array element
        $numberList[11] = 112;

        echo $numberList[11];

        echo "<br/><br/><br/>";

        // Accessing array via foreach loop
        foreach ($numberList as $element) 
        {
            echo $element . "<br/>";
        }

        echo "<br/><br/>";

        // Printing the array in human readable format
        print_r($numberList);

        echo "<br/><br/>";

        // Displays structured information about variables/expressions including its type and value
        var_dump($numberList);

    
    ?>
</body>
</html>