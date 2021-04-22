<?php 
class DivedZero extends Exception
{
    public function __toString()
    {
        return "Can't dived by Zero";
    }
}
function dived($numerator,$denominator){
    if($denominator ===0){
        throw new DivedZero();
    }
    return $numerator / $denominator;
}
try {
    $result = dived(100, 5);
    echo $result ."<br />";
    $result = dived(100, 0);
    echo $result;
} catch (DivedZero $e) {
    echo 'Có lỗi xảy ra: '. $e;
}