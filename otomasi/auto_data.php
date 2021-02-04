

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

	$swaktu = "SELECT waktu FROM ab_mix ORDER BY waktu DESC LIMIT 1";
		$result = $conn->query ($swaktu);

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
*/		$new_server = strtotime($waktu_server);
		$new_req = strtotime($waktu_siram_on);
		$new_end = strtotime($waktu_siram_off);
		//echo $new_server."<br>";
		//echo $new_req."<br>";
		//echo $new_end."<br>";

		echo "waktu server = ".$waktu_server."<br>";
		echo "waktu_pompa_on = ".$waktu_siram_on."<br>";
		echo "waktu_pompa_off = ".$waktu_siram_off."<br>";
		//echo "tombol_manual = ".$tombol."<br><br>";




		if ($tombol == 2) {
			echo "tombol otomatis diaktifkan <br>";
			if ($new_server > $new_req && $new_server < $new_end) {
				$update_pompa_on = "UPDATE `kontrol` SET `pomp_tank`= $pompa_siram_ON"; 
					if ($conn->query($update_pompa_on) === TRUE) {
					    echo '<script>alert("Pompa tangki Hidup")</script>';

					     if(intval($data_nutrisi) > 1400){
					    	 $update_valve_on="UPDATE kontrol SET nut_a=3, pomp_BIG =2, buzzer=2";
						    	 if ($conn->query($update_valve_on) === TRUE){
						    	 	echo "<br>valve aktif <br>pompa aktif <br>";
						    	 }
						    	 else {
									    echo "Error: " . $update_valve_on . "<br>" . $conn->error;
									}
						}else if (intval($data_nutrisi) > 800 ){
								echo "Nutrisi Terpenuhi: ";
						    	$update_valve_off="UPDATE kontrol SET nut_a=3, pomp_BIG = 3, buzzer=3";
						    	 if ($conn->query($update_valve_off) === TRUE){

						    	 	echo "valve non aktif (AMAN) <br>";
						    	 	echo "Pompa Nutrisi mati <br>";
						    	 }
						    	 else {

									    echo "Error: " . $update_valve_off . "<br>" . $conn->error;
									}
						 }else if (intval($data_nutrisi) < 800) {
						    	# code...
						    	echo "Nutrisi Kurang : ";
						    	$update_nut="UPDATE kontrol SET nut_a = 2, buzzer=3";
						    	 if ($conn->query($update_nut) === TRUE){
						    	 	echo "pompa nutrisi aktif selama 4<br>";
						    	 }
						    	 else {

									    echo "Error: " . $update_nut . "<br>" . $conn->error;
									}
						 }else{

						    }

						 if ($data_ph > 6.5) {
						 	echo "ph ASAM kurang.. :  ";
						 	$update_ph="UPDATE kontrol SET ph_a = 2,ph_b = 3";
						    	 if ($conn->query($update_ph) === TRUE){
						    	 	echo "sedang menambahkan pH Asam <br>";
						    	 }
						    	 else {
						    	 		echo "ph asam gagal ditambahkan <br>";
									    echo "Error: " . $update_ph . "<br>" . $conn->error;
									}
						 } else if ($data_ph >= 5) {
						 	echo "pH Terpenuhi <br>";
						 	# code...
						 } else if ($data_ph < 5) {
						 	$update_ph="UPDATE kontrol SET ph_b = 2, ph_a = 3";
						    	 if ($conn->query($update_ph) === TRUE){
						    	 	echo "sedang menambahkan pH Basa <br>";
						    	 }
						    	 else {
						    	 		echo "ph asam gagal ditambahkan <br>";
									    echo "Error: " . $update_ph . "<br>" . $conn->error;
									}
						 } else {
						 	# code...
						 }


						if ($data_waterflow > 1) {
							echo "terdapat aliran air <br>";
						} else if ($data_waterflow <= 0){
							echo "tidak terdapat aliran air, silahkan cek pompa tangki <br><br>";
							$cek_pompatangki="SELECT pomp_tank FROM kontrol";
							$result = $conn->query ($cek_pompatangki);
										$row = $result->fetch_assoc();
										$row = $row["pomp_tank"];
										$status_pompa = $row;
										if ($status_pompa = 3) {
											echo "pompa tangki mati, sedang dihidupkan :..... <br>";
											$update_pompa="UPDATE kontrol SET pomp_tank = 2";
									    	 if ($conn->query($update_pompa) === TRUE){
									    	 	echo "status pompa tangki sudah aktif <br><br>";
									    	 }
									    	 else {
									    	 		echo "error cek manual.. <br>";
												    echo "Error: " . $update_pompa . "<br>" . $conn->error;
													}
										} else {
											echo "pompa tangki sudah aktif<br><br>";
										}
										
						}else{

						}


					if ($data_tinggi_air > 45) { //perhitungan dari bawah
							echo "Valve mati ";
							$update_Valve="UPDATE kontrol SET pomp_BIG = 2";
								if ($conn->query($update_Valve) === TRUE){
									   echo "status Valve sudah aktif <br><br>";
									   }
									   else {
									    echo "error cek manual.. <br>";
										echo "Error: " . $update_Valve. "<br>" . $conn->error;
										}
									
						} else if ($data_tinggi_air >35){
							echo "tangki air aman (isi cukup) <br><br>";
							
										
						}else{
							echo "air kurang <br>";
							$cek_pompatangki="SELECT pomp_BIG FROM kontrol";
							$result = $conn->query ($cek_pompatangki);
										$row = $result->fetch_assoc();
										$row = $row["pomp_BIG"];
										$status_pompa = $row;
										if ($status_pompa = 3) {
											echo "Valve mati, sedang dihidupkan :..... <br>";
											$update_pompa="UPDATE kontrol SET pomp_tank = 2";
									    	 if ($conn->query($update_pompa) === TRUE){
									    	 	echo "status pompa tangki sudah aktif <br><br>";
									    	 }
									    	 else {
									    	 		echo "error cek manual.. <br>";
												    echo "Error: " . $update_pompa . "<br>" . $conn->error;
													}
										} else {
											echo "pompa tangki sudah aktif<br><br>";
										}

						}
						
					if ($data_cahaya > 1020) {
							echo "lampu growthlight sedang dimatikan : ";
							$update_lampu="UPDATE kontrol SET lampu = 3";
						    	 if ($conn->query($update_lampu) === TRUE){
						    	 	echo "Lampu Growthlight mati <br>";
						    	 }
						    	 else {
						    	 		echo "lampu gagal dimatikan <br>";
									    echo "Error: " . $update_ph . "<br>" . $conn->error;
									}
						 	# code...
						 } else {
						 	echo "lampu growthlight dihidupkan : ";
						 	$update_lampu="UPDATE kontrol SET lampu = 2";
						    	 if ($conn->query($update_lampu) === TRUE){
						    	 	echo "Lampu Growthlight hidup <br>";
						    	 }
						    	 else {
						    	 		echo "lampu gagal dihidupkan <br>";
									    echo "Error: " . $update_ph . "<br>" . $conn->error;
									}
						 }
						 	 

					} else {
					    echo "Error: " . $update_pompa_on . "<br>" . $conn->error;
					}


			} else if ($new_server > $new_end && $new_server > $new_req) {
					$update_pompa_off = "UPDATE `kontrol` SET `pomp_tank`= 3, ph_a = 3, ph_b = 3, nut_a=3"; 

					if ($conn->query($update_pompa_off) === TRUE) {
					    echo '<script>alert("Pompa tangki Mati")</script>';
					} else {
					    echo "Error: " . $update_pompa_off . "<br>" . $conn->error;
					}
			} else{
					$update_pompa_off = "UPDATE `kontrol` SET pomp_tank=3"; 
					if ($conn->query($update_pompa_off) === TRUE) {
					    echo '<script>alert("Belum ada perintah otomatisasi")</script>';
					} else {
					    echo "Error: " . $update_pompa_off . "<br>" . $conn->error;
					}
			}
		} else if ($tombol == 3) {
			echo '<script>alert("Tombol Otomatis dinon-aktifkan silahkan pakai tombol manual")</script>';
		} else {
			# code...
		}




$conn->close();
 ?>

<html>
<head></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.info {
  background-color: #e7f3fe;
  border-left: 6px solid #2196F3;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  padding: 10px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

</style>
<body>
<h2>Jadwal Penyiraman</h2>
<div class="card">
  <div class="container">
    <h4><b>Pompa Air Hidup pada Pukul</b></h4> 
    <p><?php echo $waktu_siram_on; ?></p> 
  </div>
</div>
<div class="card">
  <div class="container">
    <h4><b>Pompa Air Mati pada Pukul</b></h4> 
    <p><?php echo $waktu_siram_off; ?></p> 
  </div>
</div>


</body>
</html>



