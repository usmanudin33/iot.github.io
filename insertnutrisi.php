<?php
//Creates new record as per request
    //Connect to database
include 'db.php';
    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $timestamp = date('Y-m-d H:i:s');
    if(!empty($_POST['nutrisi']))
    {
		$nutrisi = $_POST['nutrisi'];
        echo $nutrisi;
	    $sql = "INSERT INTO `ab_mix`(`no`, `nutrisi`, `waktu`) VALUES ('','$nutrisi','$timestamp')"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>