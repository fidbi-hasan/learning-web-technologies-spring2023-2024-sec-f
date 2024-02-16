<?php

    # Write a PHP script to find the largest number from three given numbers
    
    $num1 = 90;
    $num2 = 60;
    $num3 = 70;

    if ($num1 > $num2)
    {
        if ($num1 > $num3 || $num1 == $num3)
        {
            echo "$num1 is the largest";
        }
        else 
        {
            echo "$num3 is largest";
        }
    }
    else if ($num1 < $num2)
    {
        if ($num2 > $num3 || $num2 == $num3)
        {
            echo "$num2 is largest"; 
        }
        else 
        {
            echo "$num3 is largest";
        }
    }

?>