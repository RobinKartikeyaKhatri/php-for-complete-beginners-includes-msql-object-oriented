<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Constants in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        define('NAME', 'Robin Kartikeya Khatri');
        define('AGE', 32);
        define('GENDER', 'MALE');
        define('OCCUPATION', 'Web Develoer');
        define('EMAIL', 'kartikrobin@gmail.com');
        define('CONTACT_NO', +919461430010);

        echo "Name: " . NAME . "<br/>";
        echo "Age: " . AGE . "<br/>";
        echo "Gender: " . GENDER . "<br/>";
        echo "Occupation: " . OCCUPATION . "<br/>";
        echo "Email Address: " . EMAIL . "<br/>";
        echo "Contact Number: " . CONTACT_NO . "<br/>";
    ?>
</body>
</html>