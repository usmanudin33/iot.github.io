<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
include 'db.php';
date_default_timezone_set('Asia/Jakarta');
$timestamp = date('Y-m-d H:i:s');


// define variables and set to empty values
$nut_Err = $ph_Err=$debit_air_Err=$cahaya_Err=$tinggi_air_Err=$suhu_Err ="";
$nutrisi = $ph=$debit_air=$cahaya=$tinggi_air=$suhu="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["nutrisi"])) {
    $nut_Err = " is required";
  } else {
    $nutrisi = test_input($_POST["nutrisi"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1234567890]*$/",$nutrisi)) {
      $nut_Err = "Only number";
    }
  }
  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ph"])) {
    $ph_Err = " is required";
  } else {
    $ph = test_input($_POST["ph"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1234567890]*$/",$ph)) {
      $ph_Err = "Only number";
    }
  }
  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["debit_air"])) {
    $debit_air_Err = " is required";
  } else {
    $debit_air = test_input($_POST["debit_air"]);
   
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1234567890]*$/",$debit_air)) {
      $debit_air_Err = "Only number";
    }
  }
  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["cahaya"])) {
    $cahaya_Err = " is required";
  } else {
    $cahaya = test_input($_POST["cahaya"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1234567890]*$/",$cahaya)) {
      $cahaya_Err = "Only number";
    }
  }
  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["tinggi_air"])) {
    $tinggi_air_Err = " is required";
  } else {
    $tinggi_air = test_input($_POST["tinggi_air"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1234567890]*$/",$tinggi_air)) {
      $tinggi_air_Err = "Only number";
    }
  }
  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["suhu"])) {
    $suhu_Err = " is required";
  } else {
    $suhu= test_input($_POST["suhu"]);
    
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1234567890]*$/",$suhu)) {
      $suhu_Err = "Only number";
    }
  }
  
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=float], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2 align="center">Percobaan Data Dummy Otomatisasi</h2>
<p align="center">data yang diinput merupakan sample</p>

<div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="row">
    <div class="col-25">
      <label for="nutrisi">Nutrisi</label>
    </div>
    <div class="col-75">
      <input type="float" id="nutrisi" name="nutrisi" placeholder="Masukan nilai nutrisi" value="<?php echo $nutrisi;?>">
  		<span class="error">* <?php echo $nut_Err;?></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="ph">ph</label>
    </div>
    <div class="col-75">
      <input type="float" id="ph" name="ph" placeholder="Masukan nilai ph" value="<?php echo $ph;?>">
  		<span class="error">* <?php echo $ph_Err;?></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="debit_air">Water flow</label>
    </div>
    <div class="col-75">
      <input type="float" id="debit_air" name="debit_air" placeholder="Masukan nilai Waterflow" value="<?php echo $debit_air;?>">
  		<span class="error">* <?php echo $debit_air_Err;?></span>
    </div>
    </div>

    <div class="row">
    <div class="col-25">
      <label for="cahaya">Cahaya</label>
    </div>
    <div class="col-75">
      <input type="float" id="cahaya" name="cahaya" placeholder="Masukan nilai Water Cahaya" value="<?php echo $cahaya;?>">
  		<span class="error">* <?php echo $cahaya_Err;?></span>
    </div>
    </div>

    <div class="row">
    <div class="col-25">
      <label for="tinggi_air">Water Level</label>
    </div>
    <div class="col-75">
      <input type="float" id="tinggi_air" name="tinggi_air" placeholder="Masukan nilai Water Cahaya" value="<?php echo $tinggi_air;?>">
  		<span class="error">* <?php echo $tinggi_air_Err;?></span>
    </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="Suhu">Suhu</label>
      </div>
    <div class="col-75">
      <input type="float" id="suhu" name="suhu" placeholder="Masukan nilai Suhu" value="<?php echo $suhu;?>">
  		<span class="error">* <?php echo $suhu_Err;?></span>
    </div>
    </div>
    
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
 
  </form>
</div>

</body>
</html>


<?php
/*
echo $nutrisi;
echo "<br>";
echo $ph;
echo "<br>";
echo $debit_air;
echo "<br>";
echo $cahaya;
echo "<br>";
echo $tinggi_air;
echo "<br>";
echo $suhu;
echo "<br>";
*/


$query="INSERT INTO ab_mix(nutrisi, `waktu`)VALUES($nutrisi,NOW())";
$query1="INSERT INTO asam_basa(ph_air, `waktu`)VALUES('$ph', '$timestamp')";
$query2="INSERT INTO `debit`(`debit_air`, `waktu`)VALUES($debit_air, NOW())";
$query3="INSERT INTO `cahaya`(`matahari`, `waktu`)VALUES($cahaya, NOW())";
$query4="INSERT INTO `tinggi_air`(`ketinggian`, `waktu`)VALUES($tinggi_air, NOW())";
$query5="INSERT INTO `suhu`(`suhu`, `waktu`)VALUES($suhu, NOW())";




if ($conn->query($query) === TRUE) {
            echo "<script> alert('data nutrisi masuk') </script>";
        } else {
            //echo "Error: " . $query . "<br>" . $conn->error;
        }


if ($conn->query($query1) === TRUE) {
            echo "<script> alert('data ph masuk')</script>";
        } else {
           // echo "Error: " . $query1 . "<br>" . $conn->error;
        }

if ($conn->query($query2) === TRUE) {
            echo "<script> alert('data aliran air masuk')</script>";
        } else {
          //  echo "Error: " . $query2 . "<br>" . $conn->error;
        }

if ($conn->query($query3) === TRUE) {
            echo "<script> alert('data cahaya masuk')</script>";
        } else {
           // echo "Error: " . $query3 . "<br>" . $conn->error;
        }


if ($conn->query($query4) === TRUE) {
            echo "<script> alert('data tinggi air masuk')</script>";
        } else {
           // echo "Error: " . $query4 . "<br>" . $conn->error;
        }

if ($conn->query($query5) === TRUE) {
            echo "<script> alert('data suhu masuk')</script>";
        } else {
           // echo "Error: " . $query5 . "<br>" . $conn->error;
        }



?>

</body>
</html>