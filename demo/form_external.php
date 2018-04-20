<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>External Page Submission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="external.php" method="post">
        <input type="text" name="name" placeholder="Your First Name">
        <br/><br/>
        <input type="text" name="last_name" placeholder="Your Last Name">
        <br/><br/>
        <input type="password" name="password" placeholder="Your Password Here">
        <br/><br/>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>