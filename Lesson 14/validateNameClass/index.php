<?php 
function checkNameClass($str){
    $regex = '/(^[C|A|P][0-9]{4}[G|H|I|K|L|M]$)/';
    if(preg_match($regex,$str)){
        echo $str.": is correct format <br />";
    }else{
        echo $str.": is not correct format <br/>";
    }
}
checkNameClass("C000G");
checkNameClass("C0000G");
checkNameClass("M0318G");
checkNameClass("P0323A");