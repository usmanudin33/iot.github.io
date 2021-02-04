<?php
include 'db.php';

    if(!empty($_POST['st_pompa']))
    {
		$tvalue = $_POST['st_pompa'];
	    $sql = "UPDATE 'kontrol' SET 'st_pompa'='".$tvalue."'"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
        $show = "SELECT st_pompa FROM kontrol";
        $result = $conn->query ($show);

        $row = $result->fetch_assoc();
        $row = $row["st_pompa"];
        echo $row;


	$conn->close();
?>