 <?php
include 'db.php';
date_default_timezone_set('Asia/Jakarta');
$timestamp = date('Y-m-d H:i:s');
// menyimpan data kedalam variabel
$nutrisi     = $_POST["nutrisi"];
$ph_air       = $_POST["ph_air"];
$debit_air       = $_POST["debit_air"];
$matahari     = $_POST["matahari"];
$ketinggian     = $_POST["ketinggian"];
$suhu    = $_POST["suhu"];
//echo $nutrisi;
// query SQL untuk insert data
$query="INSERT INTO `ab_mix`(`no`,`nutrisi`, `waktu`)VALUES(``,`$nutrisi`, `$timestamp`)";
$query1="INSERT INTO `asam_basa`(`no`,`ph_air`, `waktu`)VALUES(``,`$ph_air`, `$timestamp`)";
$query2="INSERT INTO debit SET debit_air='$debit_air'";
$query3="INSERT INTO cahaya SET matahari='$matahari'";
$query4="INSERT INTO tinggi_air SET ketinggian='$ketinggian'";
$query5="INSERT INTO suhu SET suhu='$suhu'";

if ($conn->query($query) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $query . "<br>" . $conn->error;
		}

if ($conn->query($query1) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $query1 . "<br>" . $conn->error;
		}

if ($conn->query($query2) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $query2 . "<br>" . $conn->error;
		}

if ($conn->query($query3) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $query3 . "<br>" . $conn->error;
		}

if ($conn->query($query4) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $query4 . "<br>" . $conn->error;
		}


if ($conn->query($query5) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $query5 . "<br>" . $conn->error;
		}


// mengalihkan ke halaman index.php

//header("location:index.php");
?>

