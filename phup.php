<?php

include 'db.php';

$show = "SELECT ph_a FROM kontrol";
$result = $conn->query ($show);

$row = $result->fetch_assoc();
$row = $row["ph_a"];
echo $row;

?>