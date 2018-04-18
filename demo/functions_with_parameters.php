<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Functions with Parameters</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        //Functions with Parameters
        
        function addNumbers($num1, $num2)
        {
            $sum = $num1 + $num2;
            echo "Sum of two numbers: " . $sum . "<br/>";
        }

        function substractNumbers($num1, $num2)
        {
            $sub = $num1 - $num2;
            echo "Substraction of two numbers: " . $sub . "<br/>";
        }

        function multiplyNumbers($num1, $num2)
        {
            $mul = $num1 * $num2;
            echo "Multiplication of two numbers: " . $mul . "<br/>";
        }

        function divideNumbers($num1, $num2)
        {
            $div = $num1 / $num2;
            echo "Division of two numbers: " . $div . "<br/>";
        }

        addNumbers(5, 5);
        substractNumbers(10, 5);
        multiplyNumbers(5, 4);
        divideNumbers(10, 5);
    
    ?>
</body>
</html>