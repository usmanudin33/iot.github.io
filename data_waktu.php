<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../user.css">
<head>
	<title></title>
</head>
<script type="text/javascript" src="../tampil.js"></script>
<script src="../jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				setInterval(function(){get_data()},500);
				function get_data()
				{ 
					jQuery.ajax({
						type:"GET",
						url: "../read_waktu_server.php",
						data:"",
						beforeSend: function() {
						},
						complete: function() {
						},
						success:function(hasil) {
							$("#waktu_s").html(hasil);
						}
					});
				}
			});
		</script>
<body>
<?php $waktu_server ='<div id="waktu_s"></div>';
 echo $waktu_server; ?>
</body>
</html>

