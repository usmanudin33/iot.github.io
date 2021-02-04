<?php
//Creates new record as per request
    //Connect to database
    include 'db.php';
    $timestamp = date('Y-m-d H:i:s');
    if(!empty($_POST['matahari']))
    {
		$cahaya = $_POST['matahari'];
        echo $cahaya;
	    $sql = "INSERT INTO `cahaya`(`no`, `matahari`, `waktu`) VALUES ('','$cahaya','$timestamp')"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>