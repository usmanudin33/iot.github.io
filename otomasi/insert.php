<?php
//Insert Data
$hostname = "localhost";
$username = "root";
$password = "Bismilah33x";
$databasename = "greenhouse";
try
{
 $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 if(isset($_POST["tombol_auto"]))
 {
	 $query = "UPDATE kontrol SET tombol_auto = (:tombol_auto)";
	 $statement = $conn->prepare($query);
	 $statement->execute(
	 array('tombol_auto' => $_POST["tombol_auto"]));
	 $btn_auto = $statement->rowCount();
	 if($btn_auto > 0)
		 {
		 echo "Success..!";
		 echo $btn_auto;
		 }
	 else
	 {
		 echo "Failed";
		 echo $btn_auto;
	 }
 }
 //PH
 else if(isset($_POST["ph_a"]))
	 {
	 $query = "UPDATE kontrol SET ph_a = (:ph_a)";
	 $statement = $conn->prepare($query);
	 $statement->execute(
	 array('ph_a' => $_POST["ph_a"]));
	 $count = $statement->rowCount();
	 if($count > 0)
	 {
	 	echo "Success..!";
	 }
	 else
	 {
	 	echo "Failed";
	 }
 }
 else if(isset($_POST["ph_b"]))
 {
	 $query = "UPDATE kontrol SET ph_b = (:ph_b)";
	 $statement = $conn->prepare($query);
	 $statement->execute(
	 array('ph_b' => $_POST["ph_b"]));
	 $count = $statement->rowCount();
	 if($count > 0)
	 {
	 	echo "Success..!";
	 }
	 else
	 {
	 	echo "Failed";
	 }
 }

 //NUTRISI
 else if(isset($_POST["nut_a"]))
 {
	 $query = "UPDATE kontrol SET nut_a = (:nut_a)";
	 $statement = $conn->prepare($query);
	 $statement->execute(
	 array('nut_a' => $_POST["nut_a"]));
	 $count = $statement->rowCount();
	 if($count > 0)
	 {
	 	echo "Success..!";
	 }
	 else
	 {
	 	echo "Failed";
	 }
 }

 //NUTRISI
 /*if(isset($_POST["nut_b"]))
 {
 $query = "UPDATE kontrol SET nut_b = (:nut_b)";
 $statement = $conn->prepare($query);
 $statement->execute(
 array(
 'nut_b' => $_POST["nut_b"]
 )
 );
 $count = $statement->rowCount();
 if($count > 0)
 {
 echo "Success..!";
 }
 else
 {
 echo "Failed";
 }
 }
*/
 //POMPA TANGKI AIR
 else if(isset($_POST["pomp_tank"]))
 {
	 $query = "UPDATE kontrol SET pomp_tank = (:pomp_tank)";
	 $statement = $conn->prepare($query);
	 $statement->execute(
	 array(
	 'pomp_tank' => $_POST["pomp_tank"]));
	 $count = $statement->rowCount();
	 if($count > 0)
	 {
	 	echo "Success..!";
	 }
	 else
	 {
	 	echo "Failed";
	 }
 }

 //POMPA_BIG
 else if(isset($_POST["pomp_BIG"]))
 {
	 $query = "UPDATE kontrol SET pomp_BIG = (:pomp_BIG)";
	 $statement = $conn->prepare($query);
	 $statement->execute(
	 array(
	 'pomp_BIG' => $_POST["pomp_BIG"]));
	 $count = $statement->rowCount();
	 if($count > 0)
	 {
	 	echo "Success..!";
	 }
	 else
	 {
	 	echo "Failed";
	 }
 }

//LAMPU
 else if(isset($_POST["lampu"]))
 {
	 $query = "UPDATE kontrol SET lampu = (:lampu)";
	 $statement = $conn->prepare($query);
	 $statement->execute(
	 array(
	 'lampu' => $_POST["lampu"]));
	 $count = $statement->rowCount();
	 if($count > 0)
	 {
	 	echo "Success..!";
	 }
	 else
	 {
	 	echo "Failed";
	 }
 }
}
catch(PDOException $error)
{
 echo $error->getMessage();
}
?>