<?php
/* This function will take in three inputs and output a string based on the inputs
* $x: the first divider, if true will return "F"
* $y: the second divider, if true will return "B"
* $n: number to count to from 0
*/
//the orginial arguement
$fh = fopen($argv[1], "r");

//Will loop thru the code will the arguement is true
while (true == ($test = fgets($fh))) {

	//breaks the elements into variables to use.
    list($x, $y, $n) = explode(' ', $test);

	//set up the variable for use
	$answer = '';

	//loop through depending on $n times
	for($i = 1; $i <= $n; $i++){

		//if it  is dividable by either
		if($i % $x == 0 || $i % $y == 0){

		//if $i is dividable by $x include an F
		if($i % $x == 0) {
			$answer = $answer . 'F';
		};

		//if $i is dividable by $y include an B
	    if($i % $y == 0) {
			$answer = $answer . 'B';
	    };

		//else return the value of $i
		}else{
			$answer = $answer . $i;
		};

		//adds a space between the results
		$answer = $answer . ' ';
	};


	//removes the last space added at the end
	$answer = rtrim($answer);

	//returns the answer
	echo $answer . "\n";
};

fclose($fh);
# break loop if $test is an empty line
# $test represents the test case, do something with it
?>
