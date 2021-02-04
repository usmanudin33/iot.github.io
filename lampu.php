<?php

include 'db.php';

$show = "SELECT lampu FROM kontrol";
$result = $conn->query ($show);

$row = $result->fetch_assoc();
$row = $row["lampu"];
echo $row;

?> 