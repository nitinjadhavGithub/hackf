<?php 

	$file=$argv[1];
	$source=file($file);
	$pointer=0;
	$lab=file_get_contents("w1.txt");
	$wordLists=split("\n", $lab);

	foreach ($source as $key => $value) {
		$word[]=preg_replace('@\n@','',$value);
	}

	echo $startWord=$word[0];
	echo "  ";
	echo $endWord=$word[1];

	$op=check_eaquality($startWord,$endWord);	
	

	function check_eaquality($startWord,$endWord,$pointer)
	{	
		
		if($startWord == $endWord)
		{	
			echo $pointer." ".$startWord." equal ".$endWord."  \n"; 
			exit;

		}else{
				
			
			$pointer++;
			$op=check_eaquality($startWord,$endWord,$pointer);

		}	
	}	




	

?>