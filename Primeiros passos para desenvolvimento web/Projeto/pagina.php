<html>
	<head>
		<title>Meu primeiro site em PHP!</title> 
	</head>
	
	<script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
	
	<style type ="text/css">
		.linha{
			font-weight: bold;
			color: blue;
			padding-left: 10px;
			line-height: 50px;
		}
	</style>
	
	<body>
		<!-- essa tag abaixo é a tag usada para avisar o arquivo que estou usando a linguagem PHP -->
		<?php
			for($i = 0; $i<10; $i++){
				print("<span class=\"linha\">Linha número ". $i . "</span><br/>");
			}
		?>
	</body>
	
	<script type="text/javascript">
		$(document).ready(funtion() {
			alert("Ihuuuu");
		});
	</script>
	
</html>