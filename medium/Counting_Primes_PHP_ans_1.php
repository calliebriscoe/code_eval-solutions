<?php
//this function will check if a number is prime or not
//found function online, to make it work I change the boolean to yes and no
function isPrime($num) {
    //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
    if($num == 1){
        return 'no';
    }
    //2 is prime (the only even number that is prime)
    if($num == 2){
        return 'yes';
    }
    /**
     * if the number is divisible by two, then it's not prime and it's no longer
     * needed to check other even numbers
     */
    if($num % 2 == 0) {
        return 'no';
    }

    /**
     * Checks the odd numbers. If any of them is a factor, then it returns false.
     * The sqrt can be an aproximation, hence just for the sake of
     * security, one rounds it to the next highest integer value.
     */
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0){
            return 'no';
        }
    }

    return 'yes';
}

function countPrime($num, $max){
    // to have a count of the primes
    $count = 0;

    /**
    *loop through numbers counting from $num + 1(the +1 is the because it is            *between not including) and up to the $max adding to $count if $num prime
    */
    for($num + 1; $num <= $max; $num++){
        if(isPrime($num) == 'yes'){
            $count++;
            }
    }
    //returns the $count of primes
    return $count;
};

//the orginial arguement
$fh = fopen($argv[1], "r");

//Will loop thru the code will the arguement is true
while (true == ($test = fgets($fh))) {

	//breaks the elements into variables to use while searching for a ",".
    list($num, $max) = explode(',', $test);

	//fixing the numbers to match integar
	$num = intval($num);
	$max = intval($max);

	//calls countPrime function
	$answer = countPrime($num, $max);

	//returns the answer
	echo $answer . PHP_EOL;
};

fclose($fh);
exit(0);
# break loop if $test is an empty line
# $test represents the test case, do something with it
?>
