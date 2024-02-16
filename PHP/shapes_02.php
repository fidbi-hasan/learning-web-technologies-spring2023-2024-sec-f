<?php

    # print the following shape
    /*
        A
        B C
        D E F
    */

    $char = chr(65); # A

    for ($i = 1; $i <= 3; $i++)
    {
        for ($j = 1; $j <= $i; $j++)
        {
            echo "$char ";
            $char++;
        }

        echo "\n";
    }

?>