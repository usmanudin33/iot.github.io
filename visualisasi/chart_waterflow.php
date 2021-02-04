
<?php
//index.php
include '../db.php';
 if (!$conn) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM debit ORDER BY waktu ASC LIMIT 25";
         $result = mysqli_query($conn,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $no_wf=$row['no'];
            $waktu_wf[]  = $row['waktu'];
            $data_wf[] = $row['debit_air'];
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
            <h2 class="page-header" >Data Aliran air </h2>
            <div><?php echo $no_wf; ?> </div>
            <canvas id="chart_waterflow"></canvas>
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript">
      var ctx = document.getElementById("chart_waterflow").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels:<?php echo json_encode($waktu_wf); ?>,
                        datasets: [{
                            backgroundColor: [
                            ],
                            data:<?php echo json_encode($data_wf); ?>,
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