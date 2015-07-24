<?php
 $weatherData=file('weather.dat');
 
 unset($weatherData[0]);
 unset($weatherData[1]);
 

  foreach($weatherData as $key=>$val){
  	
	$valArr =  explode(' ',$val);
	foreach($valArr as $k=>$v){	 
	 if(!isset($v) || empty($v)){
	 	unset($valArr[$k]);
	 }		
	}

	$setValues=array_slice($valArr,0,3);
	$maxTemp = preg_replace('@\D+@',"",$setValues[1]);
	$minTemp = preg_replace('@\D+@',"",$setValues[2]);
	 
	 $finalData[$setValues[0]] = preg_replace('@\D+@',"",$maxTemp-$minTemp);
  }
  	
  	array_pop($finalData);
 	
 	$smallest_difference=min($finalData);
 	
 	foreach ($finalData as $keys => $values) {
 		if($values == $smallest_difference)
 		{
 			$op[$keys]=$values;
 			echo $keys."<br />";
 		}	
 	}

 	

 
?>