<?php

    $intArr = array(1776, 420, 1984, 1999, 123, 456, 567);
    foreach ($intArr as &$value) {
        if($value % 2 == 0) {
            echo $value . "\n";
        }
    }
    //EXPLANATION: initialize a new array named intArr and assign the listed values. loop the array using a for loop, and in each iteration of the loop, chech if the value is divisble by 2 using the modulus operator. if so, print it.
?>
