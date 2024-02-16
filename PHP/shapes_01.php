<?php

    # print the following shapes

    /*
        *
        **
        ***
    */

    for ($i = 1; $i <= 3; $i++)
    {
        for ($j = 1; $j <= $i; $j++)
        {
            echo "*";       
        }

        echo "\n";
    }

?>