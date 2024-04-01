<?php

    $name = $_REQUEST['name'];
    $contactNumber = $_REQUEST['contactNumber'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];

    if ($name == "" || $contactNumber == "" || $username == "" || $password == "" || $confirmPassword == "")
    {
        echo "<p>input fields cannot be empty!</p>";
        echo "<hr>";
        echo "<a href='registerEmployee.php'>Back to register</a>";
    }
    else 
    {
        if ($password == $confirmPassword)
        {
            echo "<p>Employee added successfully!</p>";
            echo "<hr>";
            echo "<a href='adminDashboard.php'>Back to admin dashboard</a> |"; 
            echo "<a href='employeeList.php'>Employee List</a>";
        }
        else 
        {
            echo "<p>Password and confirm password does not match!</p>";
            echo "<hr>";
            echo "<a href='registerEmployee.php'>Back to register</a>";
        } 
    }

?>