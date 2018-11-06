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
						<li class="current"><a href="index.php">home</a></li>
						<li><a href="control-1.php">control</a></li>
						<li><a href="monitor.php">monitor</a></li>
							<li><a href="stream.html">stream</a></li>
						<li><a href="about.php">about</a></li>
					</ul>
				</nav>
				</div>
			</div>
		</header>

	    <section id="showcase">
	      <div class="container">
	        <h1>GSM Based Substation Monitoring and Control</h1>
	        <div class="colar">
	        	<a onclick="changecolor('green')" id="green">#2ecc71</a>
	        	<a onclick="changecolor('orange')" id="orange">#e67e22</a>
	        	<a onclick="changecolor('grey')" id="grey">#A0A0A0</a>
	        	<a onclick="changecolor('black')" id="black">#000000</a>
	        </div>
	        <p>Welcome to intruder_substation. Monitor the substation by viewing graphs and watching a live video of the substation. Control substation equipments (fans and alarms) using buttons. Input your phone number and get an SMS detailing substation parameters. You can also control substation equipment using an SMS</p>
	      </div>
	    </section>

	    <section id="newsletter">
	      <div class="container">
	        <h1>Control and Monitor Substation with SMS</h1>
	        <form action="#" method="POST">
	          <input type="tel" name="sms" placeholder="Enter Cellphone number...">
	          
	          <button type="submit" class="button_1" name="Relay1" >Request</button>
	        </form>
	      </div>
	    </section>

	    <section id="boxes">
	      <div class="container">
	        <div class="box">
	         <img src="./img/iphone.png">
	          <h3>Phone SMS</h3>
	          <p> Receive SMS messages on your phone detailing the status of the substation. Send SMS messages to control substation equipment</p>
	        </div>
	        <div class="box">
	          <img src="./img/dess.png">
	          <h3>WEB Application</h3>
	          <p>Use buttons to control substation equipment. View substation perfomance over time through the bargraphs. </p>
	        </div>
	        <div class="box">
	          <img src="./img/vid.png">
	          <h3>Live Video</h3>
	          <p>Stream online videos of the substation. Take images and download videos. Pan and Tilt the position of the camera</p>
	        </div>
	      </div>
	    </section>

	    <footer id="main-footer">
	      <p>intruder_substation Copyright &copy; 2018</p>
	    </footer>
<script type="text/javascript">

	function changecolor(id){
		document.body.style.background=document.getElementById(id).innerHTML;
	}
</script>
	</body>

</html>


<?php

   $connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");

if(isset($_POST["Relay1"]))
{
	$smsnumber = $_POST['sms'];


    						    $sql = "INSERT INTO SMS (smsnumber) VALUES ('$smsnumber')";    
					    // Execute SQL statement

					    mysqli_query($connect,$sql);

}
?>
