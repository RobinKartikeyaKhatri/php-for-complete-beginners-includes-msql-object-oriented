<?php
include("db.php");
?>

<?php

function showAllData()
{
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateUsers()
{
    global $conn;
    
    if (isset($_POST['update'])) 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if ($result) 
        {
            echo "<p class='text-success text-center'>Recored updated successfuly.</p>";
        }
        else
        {
            echo "<p class='text-danger text-center'>Unable to update record</p>";
            die("Query failed!" . mysqli_error($conn));
        }
    }
}

function createUser()
{
    global $conn;

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
}

?>