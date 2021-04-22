<?php
function bubbleSort($list){
    for($i=0;$i<count($list);$i++){
        for($j=0;$j<count($list)-$i-1;$j++){
            if($list[$j]>$list[$j+1]){
                $temp = $list[$j+1];
                $list[$j+1]=$list[$j];
                $list[$j]=$temp;
            }
        }
    }
    for($i=0;$i<count($list);$i++){
        echo $list[$i] . " ";
    }
}
$arr =[2,3,2,5,6,1,-2,3,14,12];
bubbleSort($arr);