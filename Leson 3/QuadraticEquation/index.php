<?php include("QuadraticEquation.php") ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
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
    form {
        width: 250px;
    }

    input {
        width: 25px;
    }
</style>

<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Phương trình bậc hai</legend>
            <input type="number" name="a">x&sup2; + <input type="number" name="b">x+<input type="number" name="c"> = 0
            <br /><br />
            <input type="submit" style="width: 100px;">
        </fieldset>
    </form>
    <?php
    $del = new QuadraticEquation($a, $b, $c);
    echo $del->getter();
    echo "<br/>";
    echo $del ->getDelta();
    echo "<br/>";
    if($del->getDelta() <0){
        echo "Phuong trinh vo nghiem";
    }
    else{
        echo"Phuong trinh co 2 nghiem <br/>";
        echo"x&#8321; = ".$del->getRoot1()." x&#8322; = " .$del->getRoot2();
    }
    ?>
</body>

</html>