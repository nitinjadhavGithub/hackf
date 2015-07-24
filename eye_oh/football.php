<?php

 $footballData=file('football.dat');
 
 unset($footballData[0]);
   
  foreach($footballData as $key=>$val){

	$valArr =  explode(' ',$val);
	
	echo '<pre>';
 	$counter=array_search('-', $valArr);
	
	 $goalScored = preg_replace('@\D+@',"",$valArr[$counter-2]);
	 $goalScoredAgainst = preg_replace('@\D+@',"",$valArr[$counter+2]);
	 
	 $diff = abs($goalScored-$goalScoredAgainst);
	 	 
	 $finalData[$valArr[5]] = preg_replace('@\D+@',"",$diff);
  }
  

$team=array_search(min($finalData), $finalData);
echo $team;
 
?>