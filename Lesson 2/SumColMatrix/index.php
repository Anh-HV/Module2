<?php
$arr = [
    [1, 2, 3],
    [3, 4, 5],
    [6, 7, 8]
];
$sum = 0;
for ($i = 0; $i <= 2; $i++) {
    $sum += $arr[1][$i];
    echo $arr[1][$i];
}
echo $sum;
