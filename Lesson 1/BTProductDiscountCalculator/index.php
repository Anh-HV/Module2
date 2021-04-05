
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
</head>
<style>
</style>
<body>
    <form method="post" action="display_discount.php">
    <table >
        <tr>
            <td>Product Description: </td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>List Price: </td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Discount Percent: </td>
            <td><input type="text" name="discountPercent"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>