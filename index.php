<?php 
    echo "Cow & Bull game";
    echo "<hr>";

    // initialize the count for cow
	$cow = 0;

	// initialize count for bull
	$bull = 0;

	// first array. this is assumed to be a computer generated random number
    $gen_num = [1,2,3,5,4];

    // this is assumed to be a user generated number that will be compared with the computer generated number
    $number = [1,0,2,4,5];

    	// count the number of elements in the computer generated array
	    $count = count($gen_num);
	    for ($i=0; $i < $count; $i++) { 
	    	// compare each element in both arrays with each other
	    	if ($gen_num[$i] == $number[$i]) {
	    		// if the 
	    		$cow++;
	    	}
	    	elseif(in_array($number[$i], $gen_num))	{
	    		$bull++;
	    	}
	    }
    
    echo "Cow = " .$cow;
    echo "<br>";
    echo "Bull = " .$bull;
?>