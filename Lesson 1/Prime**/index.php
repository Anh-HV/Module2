<?php
function isPrime($num) {
    if($num==1) return true;
    else{
    for($i=2; $i<$num; $i++) {
        if($num%$i==0) return false;
        else return true;
    }
    }
}
$result=[];
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $num = $_POST["number"];
    for($i=0; $i<$num; $i++) {
        if(isPrime($i)){
            array_push($result,$i);
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
<body>
    <form action="" method="post">
        <fieldset>
        <legend>Prime</legend>
        <span>Nhap so bat ky:</span> <input type="number" name="number">
        <input type="submit" value="submit">
        </fieldset>    
    </form>
    <?php
        for($i=0;$i<count($result);$i++) {
            echo $result[$i]."<br/>";
        }
    ?>
</body>
</html>