<?php

    $arr = [
        [1, 2, 3, 'A'],
        [1, 2, 'B', 'C'],
        [1, 'D', 'E', 'F']
    ];


    for ($i = 0; $i <= 2; $i++)
    {
        for ($j = 0; $j <= 3; $j++)
        {
            echo $arr[$i][$j] . " ";
        }

        echo "\n";
    }

    echo "\n";

    for ($i = 0; $i <= 2; $i++)
    {
        for ($j = 0; $j <= 2 - $i; $j++)
        {
            echo $arr[$i][$j] . " ";

        }

        echo "\n";

    }

    for ($i = 0; $i <= 2; $i++)
    {

        for ($k = 3 - $i; $k <= 3; $k++)
        {
            echo $arr[$i][$k] . " "; // A 
        }

        echo "\n";
    }

    

?>