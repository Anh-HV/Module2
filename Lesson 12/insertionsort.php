<?php
function insertionSort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        $check = $list[$i];
        $j = $i - 1;
        while ($j >= 0 && $list[$j] > $check) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $check;
    }
    return $list;
}

$arr = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
print_r(insertionSort($arr));