<?php

include 'db.php';

    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $timestamp = date('Y-m-d H:i:s');
    if(!empty($_POST['ph_b']))
    {
		$ph_b = $_POST['ph_b'];
	    $sql = "UPDATE `kontrol` SET `ph_b`= $ph_b"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();

?>