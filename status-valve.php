<?php
//Creates new record as per request
   include 'db.php';


    if(!empty($_POST['stvalve']))
    {
		$tvalue = $_POST['stvalve'];
	    $sql = "UPDATE 'kontrol' SET 'stvalve'='".$tvalue."'"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>