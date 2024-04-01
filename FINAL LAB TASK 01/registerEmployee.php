<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Employee</title>
</head>
<body>
    <h1>Register new employee</h1>
    <a href="index.php">Home</a> |
    <a href="adminDashboard.php">Back to dashboard</a>
    <hr>

    <form method="post" action="registerEmployeeCheck.php">
        <fieldset>
            <legend>Employee Registration</legend>

            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label for="contactNumber">Contact Number:</label></td>
                    <td><input type="tel" name="contactNumber"></td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="confirmPassword">Confirm password:</label></td>
                    <td><input type="password" name="confirmPassword"></td>
                </tr>
            </table>
            <input type="submit" value="Register" name="employeeRegisterSubmit">
        </fieldset>
    </form>
</body>
</html>