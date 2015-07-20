<?php
	$file=$argv[1];
	$source=file($file);
	$count=count($source);
	$i=0;
	print_r($source);
	for($i==0; $i < $count ; $i++ ) {
		for ($j=$i+1 ; $j < $count ; $j++) { 
			if($i != $j){	
				//echo $i."==>".$j; 
				$op[$i."_".$j]=$source[$i]+$source[$j];	
			}
		}
		
	}

	 //print_r($op);
	 
	 foreach ($op as $key => $value) {
	 	$op_pos[$key]=preg_replace('@\D+@',"",$value);
	 }
	 //print_r($op_pos);




	 $j=array_search(min($op_pos), $op_pos);
	 //print_r($j);
	 //echo $op_pos[$j];
	 //echo "\n";

	 foreach ($op_pos as $key => $value) {
	 	if($value == $op_pos[$j])
	 	{
	 		$final_op[$key]=$value;
	 	}	
	 }

	 //print_r($final_op);

	 foreach ($final_op as $key => $value) {
	 	$keys=explode('_', $key);
	 	echo preg_replace('@\n@',"",$source[$keys[0]])."=>".preg_replace('@\n@',"",$source[$keys[1]])."  ==  ".$value."\n";

	 }

	 	
	 

?>