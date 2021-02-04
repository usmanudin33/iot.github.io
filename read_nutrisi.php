<?php 

include 'db.php';
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
		$nutrisi = mysqli_query($conn, "SELECT nutrisi FROM ab_mix ORDER BY waktu DESC LIMIT 1" );
		while($row = mysqli_fetch_array($nutrisi))
		{		
		echo $row["nutrisi"];
		}
?>