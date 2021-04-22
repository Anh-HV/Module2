<?php 

$number = [1,3,4,2,1,1];

function countElement($number,$value)
{
    $count = 0;
    $i=0;
    while($i<count($number)){
        if($number[$i] == $value){
            $count++;
        }
        $i++;
    }
    return $value." Repeat = ".$count;
}
echo "<pre>";
print_r($number);
echo countElement($number,1);