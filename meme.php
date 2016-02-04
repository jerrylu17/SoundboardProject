<?php
	$filename = "memedata.txt";
	$rqst = $_REQUEST["rqst"];
	$data = $_REQUEST["memes"];
	if($rqst == 'load'){
		if (file_exists($filename)){
			echo file_get_contents($filename);
		}
		else{
			echo $data;
		}
	}
	else if($rqst == 'save'){
		file_put_contents($filename, $data);
		echo $data;
	}
?>