<?php
$arr1 = [1,2,3,4];
$arr2 = [5,6,7,8];
$arr3 =[];
for($i=0;$i<count($arr1);$i++) {
    array_push($arr3,$arr1[$i]);
}
for($i=0;$i<count($arr2);$i++) {
    array_push($arr3,$arr2[$i]);
}
for($i=0;$i<count($arr3);$i++) {
    echo $arr3[$i]." ";
}