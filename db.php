 <?php
 $servername = "156.67.213.192";		//example = localhost or 192.168.0.0
    $username = "u5364860_usman";		//example = root
    $password = "Margonda100";	
    $dbname = "u5364860_greenhouse-tp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $d = date("Y-m-d");
    $t = date("H:i:s");
    $date = new Datetime();
 ?>