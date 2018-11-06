<?php

    // Prepare variables for database connection
   
    $dbusername = "id7033275_subparameters";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "02okuhle";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
$query = "SELECT * FROM substation";

    // Prepare the SQL statement
$voltage = $_GET['voltage'];
$current = $_GET['current'];
$phase = $_GET['phase'];
$power = $_GET['power'];
$temperature = $_GET['temperature'];
$humadity = $_GET['humadity'];

    $sql = "INSERT INTO substation (voltage,current,phase,power,temperature,humadity) VALUES ('$voltage','$current','$phase','$power','$temperature','$humadity')";    

    // Execute SQL statement

    mysqli_query($connect,$sql);

?>