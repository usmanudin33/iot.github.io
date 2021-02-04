<?php

include 'db.php';
$show = "SELECT ph_b FROM kontrol";
$result = $conn->query ($show);

$row = $result->fetch_assoc();
$row = $row["ph_b"];
echo $row;

?>