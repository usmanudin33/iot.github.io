
<?php 
include 'db_otomasi.php';
$timestamp = date('Y-m-d H:i:s');

    if(!empty($_POST['siram_on']))
    {
    $siram_on = $_POST['siram_on'];
    $siram_off = $_POST['siram_off'];
      $sql = "INSERT INTO `otomasi`(`no`, `waktu_pompa_on`, `waktu_pompa_off`, `waktu`)  VALUES ('','$siram_on','$siram_off','$timestamp')"; //nodemcu_ldr_table = Youre_table_name

    if ($conn->query($sql) === TRUE) {
        echo "OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }



  $jadwal_penyiraman = mysqli_query($conn,"SELECT `no`, `waktu_pompa_on`, `waktu_pompa_off`, `waktu` FROM `otomasi` ORDER BY waktu DESC LIMIT 1");
  while($row = mysqli_fetch_array($jadwal_penyiraman))
    {    
    $waktu_siram_on = $row["waktu_pompa_on"];
    $waktu_siram_off = $row["waktu_pompa_off"];
    $waktu = $row["waktu"];
    }
    
  $nutrisi = mysqli_query($conn,"SELECT `nutrisi`,`waktu` FROM `ab_mix` ORDER BY waktu DESC LIMIT 1");
  while($row = mysqli_fetch_array($nutrisi))
    {
      echo "nutrisi = ".$data_nutrisi = $row['nutrisi']."<br>";
    }
  $ph = mysqli_query($conn,"SELECT `ph_air`,`waktu` FROM `asam_basa` ORDER BY waktu DESC LIMIT 1");
  while($row = mysqli_fetch_array($ph))
    {
      echo "ph = ".$data_ph =$row['ph_air']."<br>";
    }
  $cahaya = mysqli_query($conn,"SELECT `matahari`,`waktu` FROM `cahaya` ORDER BY waktu DESC LIMIT 1");
  while($row = mysqli_fetch_array($cahaya))
    {
      echo "cahaya = ".$data_cahaya = $row['matahari']."<br>";
    }
  
  $dt_suhu = mysqli_query($conn,"SELECT `suhu`,`waktu` FROM `suhu` ORDER BY waktu DESC LIMIT 1");
  while($row = mysqli_fetch_array($dt_suhu))
    {
      echo "suhu = ".$dt_suhu = $row['suhu']."<br>";
    }
  $waterlevel = mysqli_query($conn,"SELECT `ketinggian`,`waktu` FROM `tinggi_air` ORDER BY waktu DESC LIMIT 1");
  while($row = mysqli_fetch_array($waterlevel))
    {
      echo "water level = ".$data_tinggi_air = $row['ketinggian']."<br>";
    }
  $waterflow = mysqli_query($conn,"SELECT `debit_air`,`waktu` FROM `debit` ORDER BY waktu DESC LIMIT 1");
  while($row = mysqli_fetch_array($waterflow))
    {
      echo "debit = ".$data_waterflow = $row['debit_air']."<br>";
    } 

  $show = "SELECT waktu FROM ab_mix ORDER BY waktu DESC LIMIT 1";
    $result = $conn->query ($show);

    $row = $result->fetch_assoc();
    $waktu_server = $row["waktu"];
  $show = "SELECT tombol_auto FROM kontrol";
    $result = $conn->query ($show);

    $row = $result->fetch_assoc();
    $tombol = $row["tombol_auto"];

    
    $pompa_siram_ON =2;
    $pompa_siram_OFF =3;



/*get_tombol_manual
    $conn_btn = new mysqli ("156.67.213.192","u5364860_usman","Margonda100","u5364860_greenhouse-tp");
          if ($conn_btn->connect_error){
            die("koneksi_gagal: ".$conn_btn->connect_error);
          }
            $status_manual="SELECT tombol_manual FROM kontrol";
          $result = $conn_btn->query ($status_manual);

          $row = $result->fetch_assoc();
          $tombol_manual = $row["tombol_auto"];
          echo $tombol_manual;
    $new_server = strtotime($waktu_server);
    $new_req = strtotime($waktu_siram_on);
    $new_end = strtotime($waktu_siram_off);
    echo $new_server."<br>";
    echo $new_req."<br>";
    echo $new_end."<br>";
    */
?>