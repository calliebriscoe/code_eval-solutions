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
//this function will find primes and add them to an array to sum
function sumPrimes($num){

    //setting up variables for loop
    $sumArray = [];
    $i = 1;
    $count = 0;

    //loops through every number from $count to $num
    while($count < $num){

        //ask if it is prime using isPrime function
        if(isPrime($i) == 'yes'){

            //adds $i to array if it is prime and increases $count
            array_push($sumArray, $i);
            $count++;
        }
        //increases $i for a new number
        $i++;
    }
    //sums the array SumArray for the answer
    $answer = array_sum($sumArray);

    return $answer;
};


$num = 1000;
$sum = sumPrimes($num);
echo $sum;
exit(0);

?>
