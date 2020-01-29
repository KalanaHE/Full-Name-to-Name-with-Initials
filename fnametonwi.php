
<?php
	
	// Feel free to edit and use
	//© Kalana Hettiarachchi
	//https://www.linkedin.com/in/kalanahe/ 

	$str=$_POST['fname'];

	$splittedword=explode(" ", $str); //Splits the string by spaces

	$wordcount = str_word_count($str);


	$x=0;

	function initials($str) {
	    $uppercase = '';
	    foreach (explode(' ', $str) as $splittedword)
	        $uppercase .= strtoupper($splittedword[0]);
	    return $uppercase;
	}

	$k = "";
	$firstletterucased = "";

	for($x=0; $x< $wordcount; $x++){

		
	  
	  if(($x+1)==$wordcount){

	      $firstletterucased = ucfirst($splittedword[$x]);
	    }
	  else{
	  	  $k .= " ";
	      $k .= initials($splittedword[$x]);
	      
	    }

	  
	  
	}

	 $h = $firstletterucased;
     $h .= $k;

     echo $h;

?>