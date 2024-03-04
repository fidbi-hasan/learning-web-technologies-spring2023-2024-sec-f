<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <section style = "display: flex; justify-content: space-between;">

        <h1 style = "color: green">XCompany</h1>

        <div style = "margin: auto 0;">
            <a href="index.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="registration.php">Registration</a>
        </div>
    </section>                                 
    <hr>

    <!-- Registration form -->

    <form action="" style = "width: 400px; margin: 30px auto;">
        
        <fieldset>
            <legend>Registration</legend>
            Name:             <input type="text" name="name"><br><br>
        
            Email:            <input type="email" name="email"><br><br>
        
            Username:         <input type="text" name="username"><br><br>
        
            password:         <input type="password" name="password"><br><br>
        
            Confirm Password: <input type="password" name="password"><br><br>
            
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender"> Male
                <input type="radio" name="gender"> Female
                <input type="radio" name="gender"> Other
            </fieldset>

            <br>

            <fieldset>
                <legend>Date of Birth</legend>
                <input type="date" name="dob"> <i>(dd/mm/yyyy)</i><br>
            </fieldset>

            <br>

            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>
        
    </form>

    <hr>
    <p style = "text-align: center;">Copyright &copy; 2024</p>
</body>
</html>