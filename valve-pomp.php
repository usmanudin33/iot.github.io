<?php

include 'db.php';

$show = "SELECT pomp_BIG FROM kontrol";
$result = $conn->query ($show);

$row = $result->fetch_assoc();
$row = $row["pomp_BIG"];
echo $row;

?>