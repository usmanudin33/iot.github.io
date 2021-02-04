<?php
//Creates new record as per request
include 'db.php';

    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $timestamp = date('Y-m-d H:i:s');
    if(!empty($_POST['debit']))
    {
		$debit = $_POST['debit'];
	    $sql = "INSERT INTO `debit`(`no`, `debit_air`, `waktu`) VALUES ('','$debit','$timestamp')"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>