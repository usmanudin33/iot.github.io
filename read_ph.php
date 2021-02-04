<?php 

include 'db.php';
		// Check connection
		if (!$conn) {
			die("Connection failed !!!");
		} 
		$ph = mysqli_query($conn, "SELECT ph_air FROM asam_basa ORDER BY waktu DESC LIMIT 1" );
		while($row = mysqli_fetch_array($ph))
		{
?>		
		<p> <?php echo $row["ph_air"];?> </p>
		<?php
		}
		?>