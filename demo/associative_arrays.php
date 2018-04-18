<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Associative Arrays in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        // created an associative array and assign it to $studentInfo variable
        $studentInfo = array('Student First Name' => 'Robin', 'Student Last Name' => 'Khatri', 'Age' => 32, 'Gender' => 'Male', 'Hobby' => 'Computer Programming');

        // accessing array elements endividually
        echo $studentInfo['Student First Name'] . "<br/>";
        echo $studentInfo['Student Last Name'] . "<br/>";
        echo $studentInfo['Age'] . "<br/>";
        echo $studentInfo['Gender'] . "<br/>";
        echo $studentInfo['Hobby'] . "<br/>";

        // Assigning endividual value to array element
        $studentInfo['Bloog Group'] = "O Positive";

        echo "<br/><br/>";

        // Accessing array via foreach loop
        foreach ($studentInfo as $key => $info) 
        {
            echo $key . " : " . $info . "<br/>";
        }

        echo "<br/><br/>";

        // Printing the array in human readable format
        print_r($studentInfo);

        echo "<br/><br/>";

        // Displays structured information about variables/expressions including its type and value
        var_dump($studentInfo);

        echo "<br/><br/>";
        echo "<br/><br/>";

        // Concatenate array elements

        echo $studentInfo['Student First Name'] . " " . $studentInfo['Student Last Name'] . "<br/>";
        
    
    ?>
</body>
</html>