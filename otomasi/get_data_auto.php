<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../user.css">
<head>
  <title></title>
</head>
<script type="text/javascript" src="../tampil.js"></script>
<script src="../jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        setInterval(function(){get_data()},2000);
        function get_data()
        { 
          jQuery.ajax({
            type:"GET",
            url: "query_penjadwalan.php",
            data:"json",
            beforeSend: function() {
            },
            complete: function() {
            },
            success:function(hasil) {
              $("#stnutrisi").html(hasil);
              $("#stph").html(hasil);
      
            } 

          });
        }
      });
    </script>
<body>

<?php 
$ph = '<div id="stph"></div>'; echo $ph;
$nutrisi = '<div id="stph"></div>'; echo $nutrisi;
?>
</body>
</html>

