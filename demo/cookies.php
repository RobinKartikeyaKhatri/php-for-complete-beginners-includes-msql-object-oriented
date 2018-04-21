<?php

$name = "Robin";
$value = 32;
$expirationTime = time() + (60 * 60 * 24 * 7);

setcookie($name, $value, $expirationTime);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookies in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php

        if (isset($_COOKIE["Robin"])) 
        {
           echo $grabCookieValue1 = $_COOKIE["Robin"];
        }
        else
        {
            $grabCookieValue1 = "";
        }
    ?>
</body>
</html>