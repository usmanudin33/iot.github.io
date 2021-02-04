<?php

include 'db.php';
$show = "SELECT buzzer FROM kontrol";
$result = $conn->query ($show);

$row = $result->fetch_assoc();
$row = $row["buzzer"];
echo $row;

?>