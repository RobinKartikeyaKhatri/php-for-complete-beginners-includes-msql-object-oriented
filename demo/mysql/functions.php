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

?>