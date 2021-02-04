
<?php 

include 'db.php';
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
$show = "SELECT waktu FROM ab_mix ORDER BY waktu DESC LIMIT 1";
		$result = $conn->query ($show);

		$row = $result->fetch_assoc();
		$waktu_server = $row["waktu"];
		echo $waktu_server;
?>