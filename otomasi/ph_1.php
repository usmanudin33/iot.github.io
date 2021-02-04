<!DOCTYPE html>
<html>
 
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="style-kontrol.css"/>
</head>
 
<body>
    <div id="ph_Up ">
    <input id="toggle-on + ph_a" class="toggle toggle-left + ph_a" type="radio" name="ph_a" class="btn1" value="ph_a_ON" >
    <label for="toggle-on + ph_a" class="btnph_a">ON</label>
    <input id="toggle-off + ph_a" class="toggle toggle-right + ph_a" type="radio" name="ph_a" class="btn2" value="ph_a_OFF" checked>
    <label for="toggle-off + ph_a" class="btnph_a">OFF</label>
    <br/>
    <h3 id="ph_a"></h3>
    <br/>
    </div>
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var ph_a = $(this).val();
                $.ajax({
                    url: "update_manual.php",
                    method: "POST",
                    data: {
                        ph_a: ph_a
                    },
                    success: function(data) {
                        $('#ph_a').html(data);
                    }
                });
            });
        });
    </script>
</body>
 
</html>