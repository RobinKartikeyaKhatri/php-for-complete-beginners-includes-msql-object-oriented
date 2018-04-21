<?php include("includes/header.php"); ?>

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
        

<?php include("includes/footer.php"); ?>