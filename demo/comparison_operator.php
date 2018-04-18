<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Comparison Operators in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        if (4 == 4) 
        {
            echo "Number four is equal to Number four";
        }
        else
        {
            echo "Number four is not equal to Number four";
        }

        echo "<br/><br/>";

        if(4 == "4")
        {
            echo "Number four is equal to string Number four";
        }
        else
        {
            echo "Number four is not equal to Number four";
        }

        echo "<br/><br/>";

        if(4 === "4")
        {
            echo "Number four is identical to string Number four";
        }
        else
        {
            echo "Number four is not identical to string Number four";
        }

        echo "<br/><br/>";

        if(4 === 4)
        {
            echo "Number four is identical to Number four";
        }
        else
        {
            echo "Number four is not identical Number four";
        }

        echo "<br/><br/>";

        if(4 > 2)
        {
            echo "Number four is greater than Number two";
        }
        else
        {
            echo "Number four is not grater than Number two";
        }

        echo "<br/><br/>";

        if(4 < 2)
        {
            echo "Number four is not less than Number two";
        }
        else
        {
            echo "Number four is less than Number two";
        }

        echo "<br/><br/>";

        if(4 <= 5)
        {
            echo "Number four is less than and equal to Number five";
        }
        else
        {
            echo "Number four is not less than and equal to Number five";
        }

        echo "<br/><br/>";

        if(100 >= 80)
        {
            echo "Number hundred is greater than and equal to Number eighty";
        }
        else
        {
            echo "Number hundred is not greater than and equal to Number eighty";
        }

        echo "<br/><br/>";

        if(80 != 10)
        {
            echo "Number eighty is not eqaul to Number ten";
        }
        else
        {
            echo "Number eighty is equal to Number ten";
        }

        echo "<br/><br/>";

        if(80 !== "80")
        {
            echo "Number eighty is not identical to string eighty";
        }
        else
        {
            echo "Number eighty is identical to string eighty";
        }

    ?>
</body>
</html>