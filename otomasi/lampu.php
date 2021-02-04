<!DOCTYPE html>
<html>
 
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="style-kontrol.css"/>
</head>
 
<body>
    <input id="toggle-on + lampu" class="toggle toggle-left + lampu" type="radio" name="lampu" class="btn1" value="lampu_ON" >
    <label for="toggle-on + lampu" class="btnlampu">ON</label>
    <input id="toggle-off + lampu" class="toggle toggle-right + lampu" type="radio" name="lampu" class="btn2" value="lampu_OFF" checked>
    <label for="toggle-off + lampu" class="btnlampu">OFF</label>
    <br/>
    <h3 id="lampu"></h3>
    <br/>
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var lampu = $(this).val();
                $.ajax({
                    url: "update_manual.php",
                    method: "POST",
                    data: {
                        lampu: lampu
                    },
                    success: function(data) {
                        $('#lampu').html(data);
                    }
                });
            });
        });
    </script>
</body>
 
</html>