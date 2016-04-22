<?php
/**
*this function will make a multiplication tables based on the first and last *number given
*/
function makeMultiTable($min, $max){

    //set the variables to do two loops
    $rowStart = $min;
    $rowEnd = $max;
    $columnStart = $min;
    $columnEnd = $max;

    //loops through from the $start to the $end by increasing by 1
    for($rowStart; $rowStart <= $rowEnd; $rowStart++){

        //loops through from the $min to the $max by increasing by 1
        for($columnStart; $columnStart <= $columnEnd; $columnStart++){

        //finds the $mutliplicable for the table
        $mutliplicable = $rowStart * $columnStart;

        //pads the numbers based on string length
        echo sprintf("%4d", $mutliplicable);

        }

    //reset the $min for the loop to repeat and adds a new line
    $columnStart = $min;
    echo PHP_EOL;

    }

};

//start and finish values
$min = 1;
$max = 12;

//call the function makeMultiTable
$mutliTable = makeMultiTable($min, $max);
exit(0);

?>
