<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <a href="index.php">Home</a> |
    <a href="employeeDashboard.php">Back to dashboard</a>
    <hr>

    <form method="post" action="addProductCheck.php">
        <fieldset>
            <legend>Add a new product</legend>

            <table>
                <tr>
                    <td><label for="productName">Product name:</label></td>
                    <td><input type="text" name="productName"></td>
                </tr>
                <tr>
                    <td><label for="quantity">Contact Number:</label></td>
                    <td><input type="number" name="quantity"></td>
                </tr>
                <tr>
                    <td><label for="productPrice">Product Price</label></td>
                    <td><input type="text" name="productPrice"></td>
                </tr>
            </table>
            <input type="submit" value="Add" name="addProductSubmit">
        </fieldset>
    </form>
</body>
</html>