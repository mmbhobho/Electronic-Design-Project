

<?php

    // Prepare variables for database connection
   
    $dbusername = "id7033275_subparameters";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "02okuhle";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
$result = mysqli_query($connect,'SELECT * FROM warningtable ORDER BY id DESC LIMIT 1');

$print = mysqli_fetch_row($result);

echo $print[1];


/*
echo $print[2];
echo $print[3];
echo $print[4];
echo $print[5];
echo $print[6];*/
?>