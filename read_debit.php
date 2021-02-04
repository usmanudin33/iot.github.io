<?php 

include 'db.php';
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
		$debit = mysqli_query($conn, "SELECT debit_air FROM debit ORDER BY waktu DESC LIMIT 1" );
		while($row = mysqli_fetch_array($debit))
		{		
		echo $row["debit_air"];
		}
?>