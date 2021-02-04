
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style-kontrol.css"/>
    <style type="text/css">
      .column {
        float: left;
        width: 14%;
        padding: 10px;
        height: auto; /* Should be removed. Only for demonstration */
      }
      .column_waktu {
        width: 60%;
        padding: 10px;
      }
      .column_jadwal {
        width: 27%;
        padding: 10px;
        height: auto; /* Should be removed. Only for demonstration */
      }


      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
       {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

html {
  font-family: "Lucida Sans", sans-serif;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
 </style>
</head>
<body>
  <div class="column">
    <strong>Kontrol Otomatis</strong><br><br>
    <input id="toggle-on" class="toggle toggle-left" type="radio" name="tombol_auto" class="btn1" value="ON" >
    <label for="toggle-on" class="btn">ON</label>
    <input id="toggle-off" class="toggle toggle-right" type="radio" name="tombol_auto" class="btn2" value="OFF" checked>
    <label for="toggle-off" class="btn">OFF</label>
  </div>
<Manual id="Manual">
<div class="row">
</div>
  <div class="row">
    <div class="column">
      <strong>Kontrol Nutrisi</strong><br><br>
     <?php  include 'nutrisi_a.php'; ?>
    </div>
    <div class="column" align="center">
      <strong style="text-align: center;">pH UP</strong><br><br>
      <?php include 'ph_1.php'; ?>
    </div>
    <div class="column" align="center">
      <strong style="text-align: center;">pH DOWN</strong><br><br>
     <?php include 'ph_2.php'; ?>
    </div>
    <div class="column">
      <strong>Kontrol Lampu</strong><br><br>
     <?php include 'lampu.php'; ?>
    </div>
    <div class="column">
      <strong>Kontrol Kran</strong><br><br>
    <?php include 'pomp_BIG.php'; ?>

    </div>
    <div class="column">
      <strong>Kontrol Pompa</strong><br><br>
     <?php include 'tangki_air.php'; ?>
    </div>
  </div>
</Manual>

<Auto hidden="true">
<div class="row">
  <div class="col-6 menu ">
    <h2>Atur Jadwal Siram</h2>
      <form action="auto_data.php" method="POST">
         <ul>
          <li>
            <label for="siram_on"><strong>Penyiraman Aktif</strong></label><br>
            <input type="datetime-local" id="siram_on" name="siram_on" required="true" style="width: 100%; height: 50px;  background-color: #33b5e5; border-color: white; color: white; text-align: center;"><br>
          </li>
          <li>
            <label for="siram_off"><strong>Penyiraman dihentikan</strong></label><br>
            <input type="datetime-local" id="siram_off" name="siram_off" required="true" style="width: 100%; height: 50px;  background-color: #33b5e5; border-color: white; color: white; text-align: center;"><br>
          </li>
            <input type="submit" style="width: 15%; height: 10%; float: right;" align="right" value="Atur" class="button button2">
        </ul>
      </form>
  </div>
    <div class="col-3 menu">
      <?php include 'auto_data.php'; ?>
    </div>
</div>
</Auto>

    <br/>
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var tombol_auto = $(this).val();
                $.ajax({
                    url: "update_manual.php",
                    method: "POST",
                    data: {
                        tombol_auto: tombol_auto
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#toggle-on").click(function(){
            $("Manual").hide();
            $("Auto").show();
          });
          $("#toggle-off").click(function(){
            $("Manual").show();
            $("Auto").hide();
          });
        });
</script>

</body>
 
</html>