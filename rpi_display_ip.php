<?php

	$display = function($string){

		if($string != ""){

			list($name, $address, $time) = split("\|", $string);
			return($address.":".$name."(".$time .")");

		}else{

			return($string);

		}
		
	};

	$fileName="rpi_log.txt";

	$linecount = 0;

	$handle = fopen($fileName, "r");

	while(!feof($handle)){
		
		$line = fgets($handle);
  		$linecount++;
	
	}

	$linecount--;

	fclose($handle);

?>

<!DOCTYPE html>

<html>

	<head>

	</head>

	<body>

		<?php

			if($linecount <= 20){

				$file = fopen($fileName,"r");

				while(! feof($file)){

  					echo $display(fgets($file)). "<br />";
  
  				}

				fclose($file);			

		
			}else{

				$file20 = fopen($fileName,"r");
				$ammoutOfRead = 0;

				while(! feof($file20)){


					if($ammoutOfRead >= $linecount - 20){

						echo $display(fgets($file20)). "<br />";
  						//echo("test : ". $ammoutOfRead . ".");

  					}else{

  						fgets($file20);
  						//echo("test : ". $ammoutOfRead . ".");

  					}
  					
					$ammoutOfRead = $ammoutOfRead + 1;
  				
  				}

				fclose($file20);		
			
			}

		?>

	</body>

</html>