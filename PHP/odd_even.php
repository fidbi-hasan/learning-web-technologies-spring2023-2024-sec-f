<?php

    # Write a PHP script to find whether a given number is odd or even
    # number / 2 -> reminder: 0 -> even
    # number / 2 -> reminder: 1 -> odd

    $number = 31;

    if($number % 2 == 0)
    {
        echo "$number is even";
    }
    else 
    {
        echo "$number is odd";
    }

?>