<?php 

include 'db.php';
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
		$t_air = mysqli_query($conn, "SELECT ketinggian FROM tinggi_air ORDER BY waktu DESC LIMIT 1" );
		while($row = mysqli_fetch_array($t_air))
		{		
		echo $row["ketinggian"];
		}
?>