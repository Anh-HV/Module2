<?php 
$array = [5,2,1,4,6,2];

function findMin($arr)
{
    $min = $arr[0];

    for ( $i= 1; $i<count($arr) ; $i++)
    {
        if($arr[$i]<$min)
        {
            $min = $arr[$i];
        }
    }
    return "Min in array = ".$min."<br />";
}
function findMax($arr)
{
    $max = $arr[0];

    for ( $i= 1; $i<count($arr) ; $i++)
    {
        if($arr[$i]>$max)
        {
            $max = $arr[$i];
        }
    }
    return "Min in array = ".$max."<br />";
}
echo"<pre>";
print_r($array);
echo findMin($array);
echo findMax($array);