<?php
$servername = "156.67.213.192";		//example = localhost or 192.168.0.0
    $username = "u5364860_usman";		//example = root
    $password = "Margonda100";	
    $dbname = "u5364860_greenhouse-tp";
try
{
  $conn=new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password); 
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 if(isset($_POST["tombol_auto"]))
 {	 $dataon= 2;
 	 $dataoff= 3;
 	 $auto =$_POST['tombol_auto'];
 	 if ($auto == 'ON') {
 	 	$query1 = "UPDATE kontrol SET tombol_auto = $dataon";
	 	$statement1 = $conn->prepare($query1);
	 	$statement1->execute(
	 	array('tombol_auto' => $_POST["tombol_auto"]));
	 	$btn_auto = $statement1->rowCount();
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
	 } else if ($auto == 'OFF') {
 	 	$query2 = "UPDATE kontrol SET tombol_auto = $dataoff";
	 	$statement2 = $conn->prepare($query2); 	 
	 	$statement2->execute(
	 	array('tombol_auto' => $_POST["tombol_auto"]));
	 	$btn_auto = $statement2->rowCount();
	 		if($btn_auto > 0)
			 {
				 echo "Success..!";
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
 else if(isset($_POST["nut_a"]))
 {	 $on_nut_a= 2;
 	 $off_nut_a= 3;
 	 $nut_a =$_POST['nut_a'];
 	 if ($nut_a == 'NUT_ON') {
 	 	$query3 = "UPDATE kontrol SET nut_a = $on_nut_a";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('nut_a' => $_POST["nut_a"]));
	 	$btn_nut = $statement3->rowCount();
	 		if($btn_nut > 0)
			 {
				 echo "Success..!";
				 echo $btn_nut;
			 }
	 			else
			 {
				 echo "Failed";
				 echo $btn_nut;
			 }	 
	 } else if ($nut_a == 'NUT_OFF') {
 	 	$query4 = "UPDATE kontrol SET nut_a = $off_nut_a";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('nut_a' => $_POST["nut_a"]));
	 	$btn_nut = $statement4->rowCount();
	 		if($btn_nut > 0)
			 {
				 echo "Success..!";
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
  else if(isset($_POST["ph_a"]))
 {	 $on_ph_a= 2;
 	 $off_ph_a= 3;
 	 $ph_a =$_POST['ph_a'];
 	 if ($ph_a == 'ph_a_ON') {
 	 	$query3 = "UPDATE kontrol SET ph_a = $on_ph_a";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('ph_a' => $_POST["ph_a"]));
	 	$btn_ph = $statement3->rowCount();
	 		if($btn_ph > 0)
			 {
				 echo "Success..!";
				 echo $btn_ph;
			 }
	 			else
			 {
				 echo "Failed";
				 echo $btn_ph;
			 }	 
	 } else if ($ph_a == 'ph_a_OFF') {
 	 	$query4 = "UPDATE kontrol SET ph_a = $off_ph_a";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('ph_a' => $_POST["ph_a"]));
	 	$btn_ph = $statement4->rowCount();
	 		if($btn_ph > 0)
			 {
				 echo "Success..!";
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 } else if(isset($_POST["ph_b"]))
 {	 $on_ph_b= 2;
 	 $off_ph_b= 3;
 	 $ph_b =$_POST['ph_b'];
 	 if ($ph_b == 'ph_b_ON') {
 	 	$query3 = "UPDATE kontrol SET ph_b = $on_ph_b";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('ph_b' => $_POST["ph_b"]));
	 	$btn_nut = $statement3->rowCount();
	 		if($btn_nut > 0)
			 {
				 echo "Success..!";
				 echo $btn_nut;
			 }
	 			else
			 {
				 echo "Failed";
				 echo $btn_nut;
			 }	 
	 } else if ($ph_b == 'ph_b_OFF') {
 	 	$query4 = "UPDATE kontrol SET ph_b = $off_ph_b";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('ph_b' => $_POST["ph_b"]));
	 	$btn_nut = $statement4->rowCount();
	 		if($btn_nut > 0)
			 {
				 echo "Success..!";
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 } else if(isset($_POST["lampu"]))
 {	 $on_lampu= 2;
 	 $off_lampu= 3;
 	 $lampu =$_POST['lampu'];
 	 if ($lampu == 'lampu_ON') {
 	 	$query3 = "UPDATE kontrol SET lampu = $on_lampu";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('lampu' => $_POST["lampu"]));
	 	$btn_nut = $statement3->rowCount();
	 		if($btn_nut > 0)
			 {
				 echo "Success..!";
				 echo $btn_nut;
			 }
	 			else
			 {
				 echo "Failed";
				 echo $btn_nut;
			 }	 
	 } else if ($lampu == 'lampu_OFF') {
 	 	$query4 = "UPDATE kontrol SET lampu = $off_lampu";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('lampu' => $_POST["lampu"]));
	 	$btn_lampu = $statement4->rowCount();
	 		if($btn_lampu > 0)
			 {
				 echo "Success..!";
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }else if(isset($_POST["pomp_BIG"]))
 {	 $on_pomp_BIG= 2;
 	 $off_pomp_BIG= 3;
 	 $pomp_BIG =$_POST['pomp_BIG'];
 	 if ($pomp_BIG == 'pomp_BIG_ON') {
 	 	$query3 = "UPDATE kontrol SET pomp_BIG = $on_pomp_BIG";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('pomp_BIG' => $_POST["pomp_BIG"]));
	 	$btn_nut = $statement3->rowCount();
	 		if($btn_nut > 0)
			 {
				 echo "Success..!";
				 echo $btn_nut;
			 }
	 			else
			 {
				 echo "Failed";
				 echo $btn_nut;
			 }	 
	 } else if ($pomp_BIG == 'pomp_BIG_OFF') {
 	 	$query4 = "UPDATE kontrol SET pomp_BIG = $off_pomp_BIG";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('pomp_BIG' => $_POST["pomp_BIG"]));
	 	$btn_pomp_BIG = $statement4->rowCount();
	 		if($btn_pomp_BIG > 0)
			 {
				 echo "Success..!";
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
 else if(isset($_POST["pomp_tank"]))
 {	 $on_pomp_tank= 2;
 	 $off_pomp_tank= 3;
 	 $pomp_tank =$_POST['pomp_tank'];
 	 if ($pomp_tank == 'pomp_tank_ON') {
 	 	$query3 = "UPDATE kontrol SET pomp_tank = $on_pomp_tank";
	 	$statement3 = $conn->prepare($query3);
	 	$statement3->execute(
	 	array('pomp_tank' => $_POST["pomp_tank"]));
	 	$btn_nut = $statement3->rowCount();
	 		if($btn_nut > 0)
			 {
				 echo "Success..!";
				 echo $btn_nut;
			 }
	 			else
			 {
				 echo "Failed";
				 echo $btn_nut;
			 }	 
	 } else if ($pomp_tank == 'pomp_tank_OFF') {
 	 	$query4 = "UPDATE kontrol SET pomp_tank = $off_pomp_tank";
	 	$statement4 = $conn->prepare($query4); 	 
	 	$statement4->execute(
	 	array('pomp_tank' => $_POST["pomp_tank"]));
	 	$btn_pomp_tank = $statement4->rowCount();
	 		if($btn_pomp_tank > 0)
			 {
				 echo "Success..!";
			 }
	 			else
			 {
				 echo "Failed";
			 }	 
 	 }
	 
 }
}
catch(PDOException $error)
{
 echo $error->getMessage();
}
?>