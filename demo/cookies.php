<?php

$name = "Robin";
$value = 32;
$expirationTime = time() + (60 * 60 * 24 * 7);

setcookie($name, $value, $expirationTime);

print_r($_COOKIE);

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

</body>
</html>