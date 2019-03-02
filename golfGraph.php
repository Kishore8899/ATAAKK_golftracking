<?php
include 'graphRef.php';
$servername = "localhost";
$username = "root";
$password = "";
$db = "golfball";
$conn = mysqli_connect($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
//echo "Connected successfully";
}
$sql = "SELECT dx as x FROM golf order by dx asc";

$result = mysqli_query($conn,$sql);

    $result = mysqli_fetch_all($result,MYSQLI_ASSOC);

    $result = json_encode(array_column($result, 'x'),JSON_NUMERIC_CHECK);



	$sql2 = "SELECT dy as y FROM golf";
   	$result2 = mysqli_query($conn,$sql2);
    $result2 = mysqli_fetch_all($result2,MYSQLI_ASSOC);

    $result2 = json_encode(array_column($result2, 'y'),JSON_NUMERIC_CHECK);
//while($row = $result->fetch_assoc()) {
	//echo "id: " . $row["hours"];
   //$data[] = $row['hours'];
//}
//	echo $result2;
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<body>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">




    var data_click = <?php echo $result; ?>;
    var data_click2 = <?php echo $result2; ?>;

  Highcharts.chart('container', {
  chart: {
    type: 'spline'
  },
  title: {
    text: 'Ball trajectory'
  },
  subtitle: {
    text: 'ATAAKK'
  },
  xAxis: {
    categories: data_click,
	title: {text:'Distance'}
  },
  yAxis: {
    categories: data_click2,
    title: {
      text: 'Height'
    }
  },
  plotOptions: {
    line: {
      dataLabels: {
        enabled: true
      },
      enableMouseTracking: false
    }
  },
  series: [{
    name: 'target time',
    data: data_click
  }]
});



</script>
</body>
</html>