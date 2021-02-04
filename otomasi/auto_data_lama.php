<html>
<head></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.info {
  background-color: #e7f3fe;
  border-left: 6px solid #2196F3;
}

</style>
<body>
<?php 

 
include 'db.php';
$timestamp = date('Y-m-d H:i:s');
    if(!empty($_POST['siram']))
    {
		$siram = $_POST['siram'];
		$nutrisi = $_POST['nutrisi']; 
		$ph = $_POST['ph']; 
		$lampu = $_POST['lampu'];
		$tangki = $_POST['tangki'];
	    $sql = "INSERT INTO `otomasi`(`no`, `waktu_siram_air`, `waktu_siram_nutrisi`, `waktu_siram_ph`, `waktu_lampu_ON`, `waktu_isi_pompa`, `waktu`)  VALUES ('','$siram','$nutrisi','$ph','$lampu','$tangki','$timestamp')"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	$jadwal_penyiraman = mysqli_query($conn,"SELECT `no`, `waktu_siram_air`, `waktu_siram_nutrisi`, `waktu_siram_ph`, `waktu_lampu_ON`, `waktu_isi_pompa`, `waktu` FROM `otomasi` ORDER BY waktu DESC LIMIT 1");
	while($row = mysqli_fetch_array($jadwal_penyiraman))
		{		
		$waktu_siram_air = $row["waktu_siram_air"];
		$waktu_siram_nutrisi = $row["waktu_siram_nutrisi"];
		$waktu_siram_ph = $row["waktu_siram_ph"];
		$waktu_lampu_ON = $row["waktu_lampu_ON"];
		$waktu_isi_pompa = $row["waktu_isi_pompa"];
		$waktu = $row["waktu"];
		}

	$conn->close();

 ?>

<div>
<h2>Jadwal Penyiraman</h2>
<body onload=display_ct();>
<span id='ct' ></span>
<div class="info">
  <ul>
  	<li><p><strong>Pompa Air Hidup pada Pukul : </strong><br>
  	<?php echo $waktu_siram_air; ?></p></li>
  	<li><p><strong>Pemberian Nutrisi Pukul </strong><br>
  	<?php echo $waktu_siram_nutrisi; ?></p></li>
  	<li><p><strong>Penyesuaian pH Pukul </strong><br>
  	<?php echo $waktu_siram_ph; ?></p></li>
  	<li><p><strong>Lampu Hidup Pukul </strong><br>
  	<?php echo $waktu_lampu_ON; ?></p></li>
  	<li> <p><strong>Tangki Terisi Ulang Pukul </strong><br>
  	<?php echo $waktu_isi_pompa; ?></p></li>

  </ul></div>

</body>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
document.getElementById('ct').innerHTML = x;
display_c();
 }
</script>
</html>