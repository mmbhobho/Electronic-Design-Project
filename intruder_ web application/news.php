<?php 
//index.php
$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
$query = "SELECT * FROM substation";
$result = mysqli_query($connect, $query);
$chart_data = '';

while($row = mysqli_fetch_array($result))
{
  $chart_data .= "{ year:'".$row["timestamp"]."', voltage:".$row["voltage"].", humadity:".$row["humadity"].", current:".$row["current"].", power:".$row["power"].",temperature:".$row["temperature"].", phase:".$row["phase"]."}, ";
}




echo $chart_data;
//$chart_data = "[$chart_data]";
//echo $chart_data;

/*$cars = array($chart_data);
//echo $cars;

 $js_array = json_encode($cars );

echo $js_array; */

?>