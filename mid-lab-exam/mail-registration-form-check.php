<?php

    $firstName = $_REQUEST['first-name'];
    $lastName = $_REQUEST['last-name'];
    $dob = $_REQUEST['dob'];
    
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
    }

    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirm-password'];

    $firstName_wordCount = count(explode(' ', $firstName));
    $lastName_wordCount = count(explode(' ', $lastName));

    if (isset($_REQUEST['register-submit']))
    {
        if ($firstName == '' || $lastName == '' || $dob == '' || $gender == '' || $phone == '' || $email == '' || $password == '' || $confirmPassword == '')
        {
            echo "<h3>Input fields cannot be empty!</h3>";
            echo "<h4><a href='mail-registration-form.php'>Back to registration page</a></h4>";
        }

        else
        {
            if ($firstName[0] >= 'a' && $firstName[0] <= 'z' && $lastName[0] >= 'a' && $lastName[0] <= 'z')
            {
                if ($firstName_wordCount < 2 || $lastName_wordCount < 2)
                {
                    echo "<h3>Name fields must contain at least 2 words</h3>";
                }
            }

            else 
            {
                echo "<h3>Name fields can only contain letters, dot(.), and dash(-)!</h3>";
            }
        }
            
    }



?>