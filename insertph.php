<?php
include 'db.php';

    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $timestamp = date('Y-m-d H:i:s');
    if(!empty($_POST['ph_air']))
    {
		$ph = $_POST['ph_air'];
        echo $ph;
	    $sql = "INSERT INTO `asam_basa`(`no`, `ph_air`, `waktu`) VALUES ('','$ph','$timestamp')"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>