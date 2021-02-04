
<?php
//index.php
include '../db.php';
 if (!$conn) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM cahaya ORDER BY waktu ASC LIMIT 25";
         $result = mysqli_query($conn,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $no_cahaya=$row['no'];
            $waktu_cahaya[]  = $row['waktu'];
            $data_cahaya[] = $row['matahari'];
        }
 
 
 }
 
 
?>
<!DOCTYPE HTML>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
    </head>
    <body>
        <div style="width:100%;height:100%;text-align:center">
            <h2 class="page-header" >Intensitas Cahaya </h2>
            <div><?php echo $no_cahaya; ?> </div>
            <canvas id="chart_intensitas"></canvas>
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
      var ctx = document.getElementById("chart_intensitas").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($waktu_cahaya); ?>,
                        datasets: [{
                            backgroundColor: [
                            ],
                            data:<?php echo json_encode($data_cahaya); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>