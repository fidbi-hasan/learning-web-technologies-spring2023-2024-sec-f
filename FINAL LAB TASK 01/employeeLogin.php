<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee</title>
</head>
<body>
    <h1>Employee</h1>
    <hr>

    <form method="post" action="employeeLoginCheck.php">
        <fieldset>
            <legend>Employee Login</legend>

            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <input type="submit" value="Login" name="employeeLoginSubmit">
        </fieldset>
        <br>
        <a href="index.php">Back to homepage</a>
    </form>
</body>
</html>