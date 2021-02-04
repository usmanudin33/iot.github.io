<?php
include 'db.php';
$show = "SELECT tombol_auto FROM kontrol";
		$result = $conn->query ($show);

		$row = $result->fetch_assoc();
		$tombol = $row["tombol_auto"];
		echo $tombol;
?>