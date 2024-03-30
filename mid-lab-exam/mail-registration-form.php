<!-- TOPIC 1 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mail Registration Form</title>
</head>
<body>
    <form method="post" action="mail-registration-form-check.php">
        <fieldset>
            <legend>Registration</legend>

            <table>
                <tr>
                    <td><label for="first-name">First Name:</label></td>
                    <td><input type="text" name="first-name"></td>
                </tr>
                <tr>
                    <td><label for="last-name">Last Name:</label></td>
                    <td><input type="text" name="last-name"></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth:</label></td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </td>
                </tr>
                <tr>
                    <td><label for="phone">Phone:</label></td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="confirm-password">Confirm Password:</label></td>
                    <td><input type="password" name="confirm-password"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="register-submit" value="Register"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>