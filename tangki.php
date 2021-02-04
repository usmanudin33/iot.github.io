<?php

include 'db.php';
$show = "SELECT pomp_tank FROM kontrol";
$result = $conn->query ($show);

$row = $result->fetch_assoc();
$row = $row["pomp_tank"];
echo $row;

?>