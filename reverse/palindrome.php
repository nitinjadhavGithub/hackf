<?php 
	
	$file=$argv[1];
	$source=file($file);
	$check = 0;
	$counter=0;
	$pointer=0;
	foreach ($source as $key => $value) {
		$org_num=$value;
		$rev_num=(int)strrev($value);
		$op=check_palindrome($org_num,$rev_num,$pointer);
	}


	function check_palindrome($org_num,$rev_num,$pointer)
	{	
		
		if($org_num == $rev_num)
		{	
			//print_r(array("status"=>"palindrome","palindromeNumber" =>$org_num,"steps"=>$pointer));
			echo $pointer." ".$org_num." \n"; 
		}else{
			
			$total=$org_num+$rev_num;
			$org_num=$total;	
			$rev_num=(int)strrev($org_num);
			$pointer++;
			$op=check_palindrome($org_num,$rev_num,$pointer);

		}	
	}




?>