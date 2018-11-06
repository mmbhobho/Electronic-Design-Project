<?php
//index.php
$connect = mysqli_connect("localhost", "id7033275_subparameters", "02okuhle", "id7033275_substation");
$query = "SELECT * FROM intruder";
$result = mysqli_query($connect, $query);
$chart_data = '';

while($row = mysqli_fetch_array($result))
{
 $data[] = mysqli_fetch_assoc($result);
}
$chart_data = substr($chart_data, 0, -2);
echo json_encode($data);
?>
