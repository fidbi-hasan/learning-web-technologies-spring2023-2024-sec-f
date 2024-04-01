<?php

    # Write a PHP script to print all the odd numbers between 10 to 100

    for ($i = 10; $i <= 100; $i++)
    {
        if ($i % 2 == 0)
        {
            continue;
        }
        else 
        {
            echo "$i ";
        }
    }

?>
