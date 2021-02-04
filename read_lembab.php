<?php 

include 'db.php';
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
		$kelembaban = mysqli_query($conn, "SELECT lembab FROM kelembaban ORDER BY waktu DESC LIMIT 1" );
		while($row = mysqli_fetch_array($kelembaban))
		{		
		echo $row["lembab"];
		}
?>