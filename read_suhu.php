<?php 

include 'db.php';
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
		$suhu = mysqli_query($conn, "SELECT suhu FROM suhu ORDER BY waktu DESC LIMIT 1" );
		while($row = mysqli_fetch_array($suhu))
		{		
		echo $row["suhu"];
		}
?>