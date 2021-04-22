<?php
echo 'k';
function selectionSort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] < $list[$i]) {
                $min = $j;
            }
        }
        $list = swapPosition($list, $i, $min);
    }
    return $list;
}

function swapPosition($list1, $left, $right)
{
    $backold = $list1[$right];
    $list1[$right] = $list1[$left];
    $list1[$left] = $backold;
    return $list1;
}
$arr = [1,9,4.5,6.6,5.7,-4.5];
var_dump(selectionSort($arr));