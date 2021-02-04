<!DOCTYPE html>
<html>
 
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="style-kontrol.css"/>
</head>
 
<body>
    <input id="toggle-on + ph_b" class="toggle toggle-left + ph_b" type="radio" name="ph_b" class="btn1" value="ph_b_ON" >
    <label for="toggle-on + ph_b" class="btnph_b">ON</label>
    <input id="toggle-off + ph_b" class="toggle toggle-right + ph_b" type="radio" name="ph_b" class="btn2" value="ph_b_OFF" checked>
    <label for="toggle-off + ph_b" class="btnph_b">OFF</label>
    <br/>
    <h3 id="ph_b"></h3>
    <br/>
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var ph_b = $(this).val();
                $.ajax({
                    url: "update_manual.php",
                    method: "POST",
                    data: {
                        ph_b: ph_b
                    },
                    success: function(data) {
                        $('#ph_b').html(data);
                    }
                });
            });
        });
    </script>
</body>
 
</html>