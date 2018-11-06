<?php
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 2; URL=$url");  // Refresh the webpage every 5 seconds
?>
<!DOCTYPE html>
<html>
<head>
	<title>intruder_substation</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="shortcut icon" type="image ico" href="./img/elec.png">
</head>
<body>
		<header>
			<div class="container">
				<div id="branding">
					<h1>in<span class="highlight">.truder</span></h1>
				<nav>
					<ul>
						<li><a href="index.php">home</a></li>
						<li class="current"><a href="control-1.php">control</a></li>
						<li><a href="monitor.php">monitor</a></li>
							<li><a href="stream.html">stream</a></li>
						<li><a href="about.php">about</a></li>
					</ul>
				</nav>
				</div>
			</div>
		</header>
       
		<section id="showcase1">
		 	<div class="container">
		 			        <div class="colar">
	        	<a onclick="changecolor('green')" id="green">#2ecc71</a>
	        	<a onclick="changecolor('orange')" id="orange">#e67e22</a>
	        	<a onclick="changecolor('grey')" id="grey">#A0A0A0</a>
	        	<a onclick="changecolor('black')" id="black">#000000</a>
	        </div>
			  	<div class="upper1">
			  		<ul>
			  			<li id="Relay11" >Open</li>
			  			<li id="Relay22" >Closed</li>
			  		</ul>
			  	</div>
			  	<div class="upper">

			  		<ul>
			  			<form action="" method="POST">
                            <li><input type="submit" value="Fan-1" id="Relay1" class="button_2" name="Relay1" "></li>
                            <li><input type="submit" value="Fan-2" id="Relay2" class="button_2" name="Relay2" "></li>
			  		    </form>
			  		</ul>

			  	</div>

			  	<div class="lower1">
			  		<ul>
			  			<li id="Relay33">Closed</li>
			  			<li id="Relay44" >Closed</li>
			  			<li id="Relay55">Closed</li>
			  		</ul>
			  	</div>
			 	<div class="lower">
			  		<ul>
			  		    <form action="" method="POST">
				  			<li><input type="submit" value="Battery Alarm" id="Relay3" class="button_2" name="Relay3" "></li>
				  			<li><input type="submit" value="Generala Alarm" id="Relay4" class="button_2" name="Relay4" "></li>
				  			<li><input type="submit" value="Switch Off" id="Relay5" class="button_2" name="Relay5" "></li>
			  			</form>
			  		</ul>
			 	</div>		
		  	</div>
		</section>
		<script type="text/javascript">
	function changecolor(id){
		document.body.style.background=document.getElementById(id).innerHTML;
	}
</script>
	</body>
</html>

<?php

    // Prepare variables for database connection
   
    $dbusername = "id7033275_subparameters";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "02okuhle";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
$result = mysqli_query($connect,'SELECT * FROM relay ORDER BY id DESC LIMIT 1');

$print = mysqli_fetch_row($result);

?>

<script>

		    		const a = "<?php echo $print[2] ?>";



	            document.getElementById("Relay11").innerHTML = a;

	    		const b = "<?php echo $print[3] ?>";


	            document.getElementById("Relay22").innerHTML = b;

		    		const c = "<?php echo $print[4] ?>";

	            document.getElementById("Relay33").innerHTML = c; 

	    		const d = "<?php echo $print[5] ?>";


	            document.getElementById("Relay44").innerHTML = d;	

	            	    		const e = "<?php echo $print[6] ?>";


	            document.getElementById("Relay55").innerHTML = e;                       

		
</script>



<?php



if(isset($_POST["Relay1"]))
{

    $dbusername = "id7033275_subparameters";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "02okuhle";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

	$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
	$result = mysqli_query($connect,'SELECT * FROM relay ORDER BY id DESC LIMIT 1');

	$print = mysqli_fetch_row($result);


					$a = "OPEN";
					$b = "CLOSED";


  if ($a == $print[2])
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$b','$print[3]','$print[4]','$print[5]','$print[6]')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }
  elseif ($b == $print[2])
  {
					   $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$a','$print[3]','$print[4]','$print[5]','$print[6]')";     

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }
    else
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$b','$print[3]','$print[4]','$print[5]','$print[6]')";     

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }

}

if(isset($_POST["Relay2"]))
{

    $dbusername = "id7033275_subparameters";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "02okuhle";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

	$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
	$result = mysqli_query($connect,'SELECT * FROM relay ORDER BY id DESC LIMIT 1');

	$print = mysqli_fetch_row($result);


					$a = "OPEN";
					$b = "CLOSED";


  if ($a == $print[3])
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$b','$print[4]','$print[5]','$print[6]')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }
  elseif ($b == $print[3])
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$a','$print[4]','$print[5]','$print[6]')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }
    else
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$b','$print[4]','$print[5]','$print[6]')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }

}


if(isset($_POST["Relay3"]))
{

    $dbusername = "id7033275_subparameters";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "02okuhle";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

	$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
	$result = mysqli_query($connect,'SELECT * FROM relay ORDER BY id DESC LIMIT 1');

	$print = mysqli_fetch_row($result);


					$a = "OPEN";
					$b = "CLOSED";


  if ($a == $print[4])
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$print[3]','$b','$print[5]','$print[6]')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }
  elseif ($b == $print[4])
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$print[3]','$a','$print[5]','$print[6]')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }
    else
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$print[3]','$b','$print[5]','$print[6]')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }

}

if(isset($_POST["Relay4"]))
{

    $dbusername = "id7033275_subparameters";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "02okuhle";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

	$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
	$result = mysqli_query($connect,'SELECT * FROM relay ORDER BY id DESC LIMIT 1');

	$print = mysqli_fetch_row($result);


					$a = "OPEN";
					$b = "CLOSED";


  if ($a == $print[5])
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$print[3]','$print[4]','$b','$print[6]')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }
  elseif ($b == $print[5])
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$print[3]','$print[4]','$a','$print[6]')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }
    else
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$print[3]','$print[4]','$b','$print[6]')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }

}

if(isset($_POST["Relay5"]))
{

    $dbusername = "id7033275_subparameters";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "02okuhle";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

	$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
	$result = mysqli_query($connect,'SELECT * FROM relay ORDER BY id DESC LIMIT 1');

	$print = mysqli_fetch_row($result);


					$a = "OPEN";
					$b = "CLOSED";


  if ($a == $print[6])
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$print[3]','$print[4]','$print[5]','$b')";    

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }
  elseif ($b == $print[6])
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$print[3]','$print[4]','$print[5]','$a')";     

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }
    else
  {
					    $sql = "INSERT INTO relay (relay1,relay2,relay3,relay4,relay5) VALUES ('$print[2]','$print[3]','$print[4]','$print[5]','$b')";     

					    // Execute SQL statement

					    mysqli_query($connect,$sql);
  }

}


?>
