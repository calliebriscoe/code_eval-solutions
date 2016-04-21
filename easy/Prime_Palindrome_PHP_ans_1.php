<?php
//this function will check if a string is a palindrome
function isPalindrome($num){

   //find the length of the string rounded down by half
   $length = strlen($num);
   $count = floor($length/2);

   //view each value as an indivdual number
   $num_str = str_split($num);

   //loops throught half the string length
   for($i = 0; $i <= $count; $i++){

       //if the corosponding number does not match
       if($num_str[$i] !== $num_str[$length-$i-1]){
           return 'no';
       }
   }
     return 'yes';
}

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

function previousPrimePalindrome($num){
    // to have a ceiling and a response
    $PrimePal = 'no';
    $answer = 0;

    //loop through numbers counting down to prime and palindrome yes
    while($PrimePal == 'no'){
        if(isPalindrome($num) == 'yes' && isPrime($num) == 'yes'){

            //change the while loop and give the answer
            $PrimePal = 'yes';
            $answer = $num;
            }
      //if not a match to continue counting down
      $num--;
    }
    return $answer;
};


$num = 1000;
$prime = previousPrimePalindrome($num);
echo $prime;
exit(0);

?>
