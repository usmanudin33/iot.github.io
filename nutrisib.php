<?php

include 'db.php';
$show = "SELECT nut_b FROM kontrol";
$result = $conn->query ($show);

$row = $result->fetch_assoc();
$row = $row["nut_b"];
echo $row;

?>