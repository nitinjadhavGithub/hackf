<?php 
	$file=$argv[1];
	$source=file($file);

	foreach ($source as $key => $value) {
		if(($value%2 == 0) || ($value%3 == 0) || ($value%5== 0) || ($value%7 == 0))
		{
			echo $value;
		}	
	}




?>