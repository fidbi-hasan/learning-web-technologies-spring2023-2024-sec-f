<?php

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if ($username == "" || $password == "")
    {
        echo "<p>Input fields cannot be empty</p>";
        echo "<hr>";
        echo "<a href='adminLogin.php'>Back to login</a>";
    }
    else 
    {
        if ($username == $password)
        {
            header("Location: adminDashboard.php");
        }
        else 
        {
            echo "<p>Username and password does not match!</p>";
            echo "<hr>";
            echo "<a href='adminLogin.php'>Back to login</a>";
        }
    }

?>