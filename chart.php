 
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <div id="chart_div" style="width: 400px; height: 120px;"></div>
  <title></title>
</head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = new mysqli ("156.67.213.192","u5364860_usman","Margonda100","u5364860_greenhouse-tp");
if ($conn->connect_error){
  die("koneksi_gagal: " . $conn->connect_error);
}

$show = "SELECT suhu FROM suhu ORDER BY waktu DESC LIMIT 1";
$result = $conn->query($show);
$row = $result->fetch_assoc();
$suhu = $row["suhu"];

?>
<script type="text/javascript">
    google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Tekanan', 0]
          
        ]);


        var options = {
          
          redFrom: 90, redTo: 500,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1,+ Math.round(<?php echo ($suhu) ?>));
          chart.draw(data, options);
        }, 1000);
  
        
      }
</script>
</body>
</html>
    