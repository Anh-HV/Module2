<?php 
$arr = [1,2,1,2,3,3,4,4,5,6];

function checknum($arr) {
    $count=0;
    $i=0;
    for($x=0;$x<count($arr);$x++){
    while($i<count($arr)){
        if($arr[$i]== $x) { 
            $count++;
        }
        ++$i;
    }
    echo $count;
}
}
checknum($arr);