<!DOCTYPE html>
<html>

<title>Smart Greenhouse</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="user.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="tampil.js"></script>
<?php include 'header.css'; ?>
<?php include 'header.php'; ?>
<style type="text/css">
  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
  padding: 12px;
  text-align: center;
  background-color: #f1f1f1;
}
* {
  box-sizing: border-box;
}
</style>
<body class="w3-white">
<div class="row">
  <div class="column" style="background-color:#bbb; height: 100%;">
    <h4 style="text-align: center; color: white;">CAMERA</h4>
    <div class="camera" style="align-content: center; align-items: center;text-align: center; height: 65%;">
      <?php
      include 'camera.php';
      ?>
    </div>    
    <div class="grid-container">
      <div class="card">
        <h6 ><?php include 'data_ph.php'; ?></h6>
       
          <div class="kolom_sensor">
            <h6>PH</h6>
          </div>
        
        </div>
       <div class="card">
        <h6 ><?php include 'data_nutrisi.php'; ?></h6>
       
          <div class="kolom_sensor">
            <h6>PPM</h6>
          </div>
        
        </div>
       <div class="card">
        <h6 ><?php include 'data_tinggiair.php'; ?></h6>
       
          <div class="kolom_sensor">
            <h6>Air (cm)</h6>
          </div>
        
        </div> 
       <div class="card">
        <h6 ><?php include 'data_cahaya.php'; ?></h6>
       
          <div class="kolom_sensor">
            <h6>Cahaya</h6>
          </div>
        
        </div>
       <div class="card" >
        <h6 ><?php include 'data_waterflow.php'; ?></h6>
       
          <div class="kolom_sensor">
            <h7 >aliran air</h7>
          </div>
        
        </div>
       <div class="card">
        <h6 ><?php include 'data_suhu.php'; ?></h6>
       
          <div class="kolom_sensor">
            <h6>*C</h6>
          </div>
        
        </div>
    </div>
  </div>
  <div class="column" style="background-color: white;">
    <h4 style="text-align: center; color: grey;">NOTIFICATION</h4>
      <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display= 'none';">&times;</span> 
        <strong> <?php include "mitigasi/ajax_notif_cahaya.php" ;?></strong> 
      </div><br>
       <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display= 'none';">&times;</span> 
        <strong><?php include "mitigasi/ajax_notif_debit.php";?></strong> 
      </div><br>
      <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display= 'none';">&times;</span> 
        <strong><?php include "mitigasi/ajax_notif_tinggi_air.php";?></strong> 
      </div>
  </div>
</div>
</body>
  <!-- 
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <p>Powered by <a href="https://gunadarma.ac.id" target="_blank">Smart Greenhouse</a></p>
  </footer>

End page content -->
</div>


</body>
</html>