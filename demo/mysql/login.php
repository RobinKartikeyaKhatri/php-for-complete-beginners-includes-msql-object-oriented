<?php
    if (isset($_POST['submit'])) 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password))
        {
            $conn = mysqli_connect('localhost', 'root', '', 'loginapp');

            $query = "INSERT INTO users(username, password)";
            $query .= "VALUES('$username', '$password')";

            $result = mysqli_query($conn, $query);

            if($result)
            {
                echo "<p class='text-success text-center'>Record added to database successfuly.</p>";
            }
            else
            {
                echo "<p class='text-danger text-center'>Recored does not added to database.</p>";
                die("Query failed!" . mysqli_error($conn));
            }
        }
        else
        {
            echo "<h3 class='text-danger text-center'>Please enter a username and password</h3>";
            
        }
    }
?>

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
            <form action="" method="post">
                <label for="username">Username</label>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="username">
                    </div>

                <label for="password">Password</label>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password">
                </div>
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
        

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>