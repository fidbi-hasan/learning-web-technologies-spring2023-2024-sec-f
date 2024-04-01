<?php

    $productName = $_REQUEST['productName'];
    $quantity = $_REQUEST['quantity'];
    $productPrice = $_REQUEST['productPrice'];

    if ($productName == "" || $quantity == "" || $productPrice == "")
    {
        echo "<p>input fields cannot be empty!</p>";
        echo "<hr>";
        echo "<a href='addProduct.php'>Back to add product page</a>";
    }
    else 
    {
        echo "<p>Product added.</p>";
    }

?>