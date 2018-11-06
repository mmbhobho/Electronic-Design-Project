

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
$chart_data = substr($chart_data, 0, -2);

?>



<!DOCTYPE html>
<html>
<head>
  <title>intruder_substation</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
      <?php include 'get_data2.php';?>

  <link rel="stylesheet" type="text/css" href="./css/style.css">
  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {



        var power = <?php echo $print[1] ?>;
        var temperature = <?php echo $print[5] ?>;
        var Humadity = <?php echo $print[7] ?>;

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Battery voltage %', power],
          ['Temperature', temperature],
          ['Humadity %', Humadity]
        ]);

        var options = {
          width: 400, height: 120,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(70);
          chart.draw(data, options);
        }, 13000);
        setInterval(function() {
          data.setValue(70);
          chart.draw(data, options);
        }, 5000);
        setInterval(function() {
         data.setValue(70);
          chart.draw(data, options);
        }, 26000);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Voltage');
      data.addColumn('number', 'Current');
      data.addColumn('number', 'Temperature');


      data.addRows([
        [1,  37.8, 80.8, 61.8],
        [2,  30.9, 69.5, 72.4],
        [3,  25.4,   57, 45.7],
        [4,  21.7, 58.8, 50.5],
        [5,  31.9, 57.6, 60.4],
        [6,   28.8, 63.6,  71.7],
        [7,   27.6, 72.3,  89.6],
        [8,  32.3, 99.2, 60.6],
        [9,  16.9, 112.9, 64.8],
        [10, 22.8, 98.9, 51.6,
        [11,  25.3,  77.9,  44.7],
        [12,  26.6,  108.4,  35.2],
        [13,  24.8,  106.3,  63.6],
        [14,  24.2,  66.2,  73.4]
      ]);

      var options = {
        chart: {
          title: 'Childs Health',
          subtitle: 'Temperature, Heart Rate and Humadity'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
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
            <li class="current"><a href="monitor.php">monitor</a></li>
            	<li><a href="stream.html">stream</a></li>
            <li><a href="about.php">about</a></li>
          </ul>
        </nav>
        </div>
      </div>
    </header>
      <div id="chart_div" style="width: 400px; height: 120px; margin-left: 500px; margin-top: 20px;"></div>
            <div class="container">
                  <div class="colar">
            <a onclick="changecolor('green')" id="green">#2ecc71</a>
            <a onclick="changecolor('orange')" id="orange">#e67e22</a>
            <a onclick="changecolor('grey')" id="grey">#A0A0A0</a>
            <a onclick="changecolor('black')" id="black">#000000</a>
          </div>
  
          <section class="graphs">

            <h1 style="color:#DAF7A6;">Temperature °C</h1>
            <div id="chart1"></div> 
            <h1 style="color:#52BE80;">Humadity %</h1>
            <div id="chart2"></div>
           <!-- <h1 style="color:#FF5733;">Power (W)</h1>
            <div id="chart3"></div>
            <h1 style="color:#FFC300;">Phase</h1>
            <div id="chart4"></div> -->
            <h1 style="color:#C70039;">Battery voltage %</h1>
            <div id="chart5"></div>
            <!--<h1 style="color:#4286f4;">Current (A)</h1>
            <div id="chart6"></div> -->

          </section>




  </body>

</html>


<script>


 
Morris.Bar({
 element : 'chart5',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['voltage'],
 barColors: ['#C70039'],
 labels:['voltage'],
 hideHover:'auto',
 //stacked:true
});
/*
 Morris.Bar({
 element : 'chart5',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['current'],
 labels:['current'],
 barColors: ['#C70039'],
 hideHover:'auto',
 //stacked:true
});
 Morris.Bar({
 element : 'chart4',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['power'],
 labels:['power'],
 barColors: ['#FF5733'],
 hideHover:'auto',
 //stacked:true
});
 Morris.Bar({
 element : 'chart3',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['phase'],
 labels:['phase'],
 barColors: ['#FFC300'],
 hideHover:'auto',
 //stacked:true
});
*/
 Morris.Bar({
 element : 'chart1',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['temperature'],
 labels:['temperature'],
 barColors: ['#DAF7A6'],
 hideHover:'auto',
 //stacked:true
});
  Morris.Bar({
 element : 'chart2',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['humadity'],
 labels:['humadity'],
 barColors: ['#52BE80'],
 hideHover:'auto',
 //stacked:true
});
 
</script>

<script type="text/javascript">
  function changecolor(id){
    document.body.style.background=document.getElementById(id).innerHTML;
  }
</script>