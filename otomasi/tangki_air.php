<!DOCTYPE html>
<html>
 
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="style-kontrol.css"/>
</head>
 
<body>
    <input id="toggle-on + pomp_tank" class="toggle toggle-left + pomp_tank" type="radio" name="pomp_tank" class="btn1" value="pomp_tank_ON" >
    <label for="toggle-on + pomp_tank" class="btnpomp_tank">ON</label>
    <input id="toggle-off + pomp_tank" class="toggle toggle-right + pomp_tank" type="radio" name="pomp_tank" class="btn2" value="pomp_tank_OFF" checked>
    <label for="toggle-off + pomp_tank" class="btnpomp_tank">OFF</label>
    <br/>
    <h3 id="pomp_tank"></h3>
    <br/>
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var pomp_tank = $(this).val();
                $.ajax({
                    url: "update_manual.php",
                    method: "POST",
                    data: {
                        pomp_tank: pomp_tank
                    },
                    success: function(data) {
                        $('#pomp_tank').html(data);
                    }
                });
            });
        });
    </script>
</body>
 
</html>