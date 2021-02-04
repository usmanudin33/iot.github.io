<?php 

include 'db.php';
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
		$d_air = mysqli_query($conn, "SELECT debit_air FROM debit ORDER BY waktu DESC LIMIT 1" );
		while($row = mysqli_fetch_array($d_air))
		{		
		echo $row["debit_air"];
		}
?>