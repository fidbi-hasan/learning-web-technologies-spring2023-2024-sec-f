<!DOCTYPE html>
<html lang="en">
<head>
    <title>System Admin</title>
</head>
<body>
    <h1>System Admin</h1>
    <hr>

    <form method="post" action="adminLoginCheck.php">
        <fieldset>
            <legend>Admin Login</legend>

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
            <input type="submit" value="Login" name="adminLoginSubmit">
        </fieldset>
        <br>
        <a href="index.php">Back to homepage</a>
    </form>
</body>
</html>