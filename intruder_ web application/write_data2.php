<?php

    // Prepare variables for database connection
   
    $dbusername = "id7033275_subparameters";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "02okuhle";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
$query = "SELECT * FROM relay";

    // Prepare the SQL statement
$relay1 = $_GET['relay1'];
$relay2 = $_GET['relay2'];
$relay3 = $_GET['relay3'];
$relay4 = $_GET['relay4'];
$relay5 = $_GET['relay5'];

        
    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$relay1','$relay2','$relay3','$relay4','$relay5')";

    // Execute SQL statement

    mysqli_query($connect,$sql);
?>
//https://mmbhobho.000webhostapp.com/write_data2.php?relay1=OPEN&relay2=OPEN&relay3=OPEN&relay4=OPEN&relay5=OPEN