<?php

    # Write a PHP script to search an element from an array

    $arr = [10, 20, 30, 40, 50];

    $searchElement = 5;

    for ($i = 0; $i <= 5; $i++)
    {
        if ($searchElement == $arr[$i])
        {
            echo "Search element found at index $i";
            break;
        }
        else
        {
            continue;
        }
        echo "element could not found!";
        break;
    }

    

?>