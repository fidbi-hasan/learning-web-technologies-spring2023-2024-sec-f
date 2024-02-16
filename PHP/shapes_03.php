<?php

    # print the following shape
    /*
        1 2 3 
        1 2
        1
    */

    
    for ($i = 3; $i >= 1; $i--)
    {
        for ($j = 1; $j <= $i; $j++)
        {
            echo "$j ";
        }

        echo "\n";
    }

?>