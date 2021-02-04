<?php 

include 'db.php';
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
		$cuaca = mysqli_query($conn, "SELECT curah_hujan FROM cuaca ORDER BY waktu DESC LIMIT 1" );
		while($row = mysqli_fetch_array($cuaca))
		{		
		echo $row["curah_hujan"];
		}
?>