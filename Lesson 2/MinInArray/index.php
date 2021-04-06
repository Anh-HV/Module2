<?php
$arr = [2, 3, 4, 5, 1, 2, 3, 2, 1];
function checkmin($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    var_dump($arr);
    echo "<br/>";
    echo "Min: " . $min;
}
checkmin($arr);
echo "<br/>";
echo "Min: " . min($arr);
