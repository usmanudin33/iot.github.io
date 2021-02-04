<!DOCTYPE html>
<html>
 
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="style-kontrol.css"/>
</head>
 
<body>
    <input id="toggle-on + nutrisi" class="toggle toggle-left + nutrisi" type="radio" name="nut_a" class="btn1" value="NUT_ON" >
    <label for="toggle-on + nutrisi" class="btnnut">ON</label>
    <input id="toggle-off + nutrisi" class="toggle toggle-right + nutrisi" type="radio" name="nut_a" class="btn2" value="NUT_OFF" checked>
    <label for="toggle-off + nutrisi" class="btnnut">OFF</label>
    <br/>
    <h3 id="nutrisi"></h3>
    <br/>
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var nut_a = $(this).val();
                $.ajax({
                    url: "update_manual.php",
                    method: "POST",
                    data: {
                        nut_a: nut_a
                    },
                    success: function(data) {
                        $('#nutrisi').html(data);
                    }
                });
            });
        });
    </script>
</body>
 
</html>