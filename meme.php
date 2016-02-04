
	<?php
		$filename = "memedata.txt";
		$_data = $_REQUEST["memes"]; 
		echo $_data;

		file_put_contents($filename, $_data);
	?>
