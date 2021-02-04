<?php
//Creates new record as per request
include 'db.php';
    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $timestamp = date('Y-m-d H:i:s');
    if(!empty($_POST['hujan']))
    {
		$hujan = $_POST['hujan'];
	    $sql = "INSERT INTO `cuaca`(`no`, `curah_hujan`, `waktu`) VALUES ('','$hujan','$timestamp')"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>