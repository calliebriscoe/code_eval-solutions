<?php

//the orginial arguement
$fh = fopen($argv[1], "r");

//Will loop thru the code will the arguement is true
while (true == ($test = fgets($fh))) {

	//simple PHP equation to change uppercase to lowercase
    $answer = strtolower($test);

	//returns the answer
	echo $answer . PHP_EOL;
};

fclose($fh);
exit(0);
# break loop if $test is an empty line
# $test represents the test case, do something with it
?>
