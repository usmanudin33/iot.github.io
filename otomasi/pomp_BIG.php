<!DOCTYPE html>
<html>
 
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="style-kontrol.css"/>
</head>
 
<body>
    <input id="toggle-on + pomp_BIG" class="toggle toggle-left + pomp_BIG" type="radio" name="pomp_BIG" class="btn1" value="pomp_BIG_ON" >
    <label for="toggle-on + pomp_BIG" class="btnpomp_BIG">ON</label>
    <input id="toggle-off + pomp_BIG" class="toggle toggle-right + pomp_BIG" type="radio" name="pomp_BIG" class="btn2" value="pomp_BIG_OFF" checked>
    <label for="toggle-off + pomp_BIG" class="btnpomp_BIG">OFF</label>
    <br/>
    <h3 id="pomp_BIG"></h3>
    <br/>
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var pomp_BIG = $(this).val();
                $.ajax({
                    url: "update_manual.php",
                    method: "POST",
                    data: {
                        pomp_BIG: pomp_BIG
                    },
                    success: function(data) {
                        $('#pomp_BIG').html(data);
                    }
                });
            });
        });
    </script>
</body>
 
</html>