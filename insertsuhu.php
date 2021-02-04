<?php

include 'db.php';
    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $timestamp = date('Y-m-d H:i:s');
    if(!empty($_POST['suhu']))
    {
		$suhu = $_POST['suhu'];
        echo $suhu;
	    $sql = "INSERT INTO `suhu`(`no`, `suhu`, `waktu`) VALUES ('','$suhu','$timestamp')"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>