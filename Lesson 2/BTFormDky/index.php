<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $ac = $_POST["acount"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        if(empty($ac)){
            echo "Acount is required!!";
        }
        else if(empty($email)){
            echo "Email is required!!";
        }
        else if(empty($phone)) {
            echo "Phone is required!!";
        }
        else{
            echo "";
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo("$email is a valid email address");
        } else {
            echo("$email is not a valid email address");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký người dùng</title>
</head>
<body>
    <form method="post"> 
    <fieldset>
    <legend>Trang đăng ký người dùng</legend>
    <table>
    <tr>
        <td>Tên người dùng:</td>
        <td><input type="text" name="acount"></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>Điện thoại:</td>
        <td><input type="text" name="phone"></td>
    </tr>
    <tr>
        <td>
        <input type="submit">
        </td>
    </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>