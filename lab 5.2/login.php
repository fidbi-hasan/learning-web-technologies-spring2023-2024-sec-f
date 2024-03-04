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

    <form action="" style = "width: 400px; margin: 30px auto 190px auto;">
        <fieldset>
            <legend>LOGIN</legend>
            User Name :<input type="text" name="text"><br><br>
            Password: <input type="password" name="password">

            <hr>

            <input type="checkbox" name=""> Remember Me <br><br>

            <input type="submit" value="Submit">
            <a href="forgotPassword.php">Forgot Password</a>
            <br><br>
        </fieldset>
    </form>

    <hr>
    <p style = "text-align: center;">Copyright &copy; 2024</p>
</body>
</html>