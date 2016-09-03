<?php 

			$filename = 'rpi_log.txt';
			$file = fopen($filename, 'a');
			
			$done = false;

			if(isset($_GET["name"]) && isset($_GET["address"]) && isset($_GET["timestamp"]) ){

				fwrite($file, $_GET["name"] . "|" . $_GET["address"] . "|" . $_GET["timestamp"] . "\n");
				fclose($file);
				$done = true;

			}

?>			

<!DOCTYPE html>
<html>

	<head>

	</head>

	<body>


		<?php
	
			if($done == true){

				echo("Marty ! ça fonctionne Marty !");
				echo("<p>".$_GET["name"]. "</p>");
				echo("<p>".$_GET["address"]. "</p>");
				echo("<p>".$_GET["timestamp"]. "</p>");

			}else{

				echo("At least a parameter is not set.");

			}

		?>
	
	</body>

</html>