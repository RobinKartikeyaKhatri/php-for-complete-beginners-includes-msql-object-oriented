<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Function with Return Values</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        function addNumbers($num1, $num2)
        {
            $sum = $num1 + $num2;
            return $sum;
        }

        $result = addNumbers(12, 8);

        $result = addNumbers(50, $result);

        echo $result;

    
    ?>
</body>
</html>