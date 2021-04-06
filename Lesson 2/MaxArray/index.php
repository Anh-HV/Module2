<?php
$arr = [
    [1, 2, 3, 4, 5, 6],
    [-5, 2, 1, 32, 6, 4],
    [1, 2, 5, 19, 22, 44],
];
$max = $arr[0][0];
for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j <= 5; $j++) {
        if ($arr[$i][$j] > $max) {
            $max = $arr[$i][$j];
        }
    }
}
var_dump($arr);
echo "Max: " . $max;
