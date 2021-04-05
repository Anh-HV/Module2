<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
</head>
<style>
    span{
        margin-right: 0 auto;
    }
</style>
<body>
    <form method="POST"> 
        <table>
            <tr>
                <td><span>Lượng tiền đầu tư ban đầu:</span></td>
                <td><input type="number" name="amount"> <br /></td>
            </tr>
            <tr>
                <td><span>Lãi suất năm:</span></td>
                <td><input type="number" name="interest"> <br /></td>
            </tr>
            <tr>
                <td><span>Số năm đầu tư:</span></td>
                <td><input type="number" name="year"> <br /></td>
            </tr>
            <tr style="text-align:center"> 
                <td colspan="3">
                <input type="submit" Value="Result">
                </td>
            </tr>
        </table>
        <?php
            if($_SERVER["REQUEST_METHOD"] =="POST"){
                $amount = +$_POST["amount"];
                $intersest = +$_POST["interest"];
                $year = +$_POST["year"];
                echo "Gia tri tuong lai:".($amount+($amount*$intersest))*$year;       
            }
        ?>
    </form>
</body>
</html>