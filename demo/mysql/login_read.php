<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Show Users</h1>
            <?php

                $conn = mysqli_connect('localhost', 'root', '', 'loginapp');

                $query = "SELECT * FROM users";

                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result)) 
                {
            ?>
                <pre>
                <?php
                    echo $id = $row['id'] . "<br/>";
                    echo $username   = $row['username'] . "<br/>";
                    echo $password   = $row['password'] . "<br/>";
                ?>
                </pre>
            <?php  
                }
            ?>




        </div>
    </div>
        

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>