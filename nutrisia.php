<?php

include 'db.php';
$show = "SELECT nut_a FROM kontrol";
$result = $conn->query ($show);

$row = $result->fetch_assoc();
$row = $row["nut_a"];
echo $row;

?>