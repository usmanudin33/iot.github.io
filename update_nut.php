<?php

include 'db.php';

    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $timestamp = date('Y-m-d H:i:s');
    if(!empty($_POST['nut_a']))
    {
		$nut_a = $_POST['nut_a'];
	    $sql = "UPDATE `kontrol` SET `nut_a`= $nut_a"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();

?>