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
						<li><a href="control-1.php">control</a></li>
						<li><a href="monitor.php">monitor</a></li>
						<li><a href="stream.html">stream</a></li>
						<li class="current"><a href="about.php">about</a></li>
					</ul>
				</nav>
				</div>
			</div>
		</header>

			    <section id="newsletter">
	      <div class="container">
	        <h1>Post a warning to an LCD and SMS</h1>
	        <form action="#" method="POST">
	            <input type="tel" name="sms2" placeholder="Enter Cellphone number...">
	          <input type="tel" name="sms" placeholder="Post warning to an LCD and SMS">
	          
	          <button type="submit" class="button_1" name="Relay1" >POST...</button>
	        </form>
	      </div>
	    </section>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">About intruder_substation</h1>
          <p>
            intruder_substation is the name given to the project titled "GSM Based Substation Control and Monitoring System". Implementing Softwares like LabVIEW and SCADA to monitor and control is quite expensive. If computers operating these software get corrupted or damaged, operators can no longer control or monitor a substation remotely. There has been many reported cases of theft in substations, where criminals steal copper wires and other substation equipment. Overloading and ineffective cooling of transformers are the major causes of failure in distribution transformers. It takes month to implement fibre optic networks and it is very expensive. 
          <p class="dark">
            intruder_substation is IoT(Internet of Things) based. The interface to monitor and control substation equipment is on the internet. Any device with access to the internet can be used, installation of softwares is not required. The system makes it easier to apprehend criminals stealing substation equipment as the footage will be available. Temperature and Humidity of the control room are measured, displayed on an LCD, sent as SMS (if requested), stored on a database and displayed in bargraphs on a web interface. An alarm is triggered if temperature exceed a predefined value and a Fan automatically starts cooling the control room. The system can be easily deployed in any control room with no implemetation/installation of sophicasted expensive softwares.  
            
          </p>

          <p class="dark">
              Temperature and Humidiy are measured using sensors. Output of the sensors is fed to a microntroller. Microcontroller processes input from the sensors, displays it on an LCD and send it to an online database [using GET method, a PHP script accepts these parameters and stores them on MySQL database] through a GSM module using AT commands. Another PHP script retrieve stored values on MySQL, stores them in an array and Morris.js library is used to display array elements in bargraphs. The same procedure is used to update status of the equipment on a web interface. Equipment includes two fans and two alarms. Equipment can be closed either by keypad or SMS and web interface will update and display that equipment as closed. Equipment can also be closed using a web interface, when requesting status of equipment using SMS it will show same status as that of the web interface. <br/>
              <br/>
              Using keypad on the built prototype and on a web interface user can request an SMS detailing substation parameters. Using the built prototype user can make and receive phone calls. <br/>
              <br/>
              Raspberry Pi and a camera are interface to stream videos and take images. Motion JPEG is used and the resulting video lag is low. A web server 'Apache' is installed on Raspberry Pi to allow files to be accessed on the internet. RPi Cam Web Interface is installed on raspberry pi. Videos and images can be accessed using IP address of Raspberry Pi (link made available on navigation bar as 'STREAM' tag). Video/ Image recording can be triggered by motion detection or using time-lapse. Position of the camera can be controlled by using pan and tilt servos. Recorded videos can be downloaded in MP4 format.    
       
          </p>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Special Thanks to</h3>
            <p>Dr Walingo for being a good supervisor and granting me this project. Mr Galo Eskom engineer, he has been a mentor since the start of this project</p>
          </div>

		 			        <div class="colarabout">
	        	<a onclick="changecolor('green')" id="green">#2ecc71</a>
	        	<a onclick="changecolor('orange')" id="orange">#e67e22</a>
	        	<a onclick="changecolor('grey')" id="grey">#A0A0A0</a>
	        	<a onclick="changecolor('black')" id="black">#000000</a>
	        </div>
        </aside>
      </div>
    </section>

	    <footer id="about-footer">
	      <p>intruder_substation Copyright &copy; 2018</p>
	    </footer>


	</body>

</html>
<script type="text/javascript">
	function changecolor(id){
		document.body.style.background=document.getElementById(id).innerHTML;
	}
</script>

<?php

   $connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");

if(isset($_POST["Relay1"]))
{
	$smsnumber = $_POST['sms'];
	$sms = $_POST['sms2'];


    						   $sql = "INSERT INTO warningtable (warning,smsnumber) VALUES ('$smsnumber','$sms')";     
					    // Execute SQL statement

					    mysqli_query($connect,$sql);

}
?>
