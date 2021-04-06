<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $op = $_POST["op"];
        $result;
        if($op=="-"&& $b==0){
            $result= "Error";
        }
        else{
            switch($op) {
                case "+":$result= $a+$b;
                break;
                case "-":$result= $a-$b;
                break;
                case "*":$result= $a*$b;
                break;
                case "/":$result= $a/$b;
                break;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    fieldset{
        width: 400px;
        height:120px;

    }
</style>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Calculator</legend>
            <table>
            <tr>
                <td>First operand:</td>
                <td><input type="number" name="a"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <select name="op">
                        <option value="+" name="+">+</option>
                        <option value="-" name="-">-</option>
                        <option value="*" name="*">*</option>
                        <option value="/" name="/">/</option>
                    </select>
                </td>             
            </tr>
            <tr>
                <td>Second operand:</td>
                <td><input type="number" name="b"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="submit">   
                </td>
            </tr>
            </table>
        </fieldset>
    </form>
    <?php 
        echo"Result=".$result;
    ?>
</body>
</html>