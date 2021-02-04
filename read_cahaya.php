<?php 

include 'db.php';
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
		$cahaya = mysqli_query($conn, "SELECT matahari FROM cahaya ORDER BY waktu DESC LIMIT 1" );
		while($row = mysqli_fetch_array($cahaya))
		{		
		echo $row["matahari"];
		}
?>