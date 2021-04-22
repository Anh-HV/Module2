<?php
    session_start();
    function binarySearch(array $numbers, int $needle): bool { 
        $low = 0; 
        $high = count($numbers) - 1; 
        while ($low <= $high) { 
          $mid = (int) (($low + $high) / 2); 
    
          if ($numbers[$mid] > $needle) { 
              $high = $mid - 1;
          } else if ($numbers[$mid] < $needle) { 
              $low = $mid + 1;
          } else {
              return TRUE;
          }
        }
        return FALSE; 
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
    <form action="" method="get">
    <!-- <input type ="number" name="number" placeholder="Element in array"> -->
    <input type ="number" name="num" placeholder="Value">
    <input type="submit">  
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        $_SESSION["arr"]=range(0,20);
        $number1 = $_GET['num'];
    }
        echo "<pre >";
        print_r($_SESSION["arr"]);
        if (binarySearch($_SESSION["arr"],$number1))
        {
            echo $number1. " Have in array";
        }else{
            echo $number1. " Don't Have in array";
        } 
    ?>
</body>
</html>
