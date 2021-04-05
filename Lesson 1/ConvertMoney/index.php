<?php 
    $rate = 23000;
    if($_SERVER["REQUEST_METHOD"] =="POST") {
        $usd = $_POST["usd"];

        $result = $usd * $rate;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng chuyển đổi tiền tệ</title>
</head>
<body>
    <form method="post">
        <fieldset>
        <legend>Ứng dụng chuyển đổi tiền tệ</legend>
        <table>
            <tr>
                <td><input type="number" placeholder="USD" name="usd"></td>
                <td>:USD</td>
            </tr>
            <tr>
                <td>Tỉ giá (rate): <?php echo $rate ?> VND</td>
                <td></td>
            </tr>
            <tr>
            <td><input type="submit" value="submit"></td>
            </tr>
        </table>
        </fieldset>
        <?php echo $result." VND"; ?>
    </form>
</body>
</html>