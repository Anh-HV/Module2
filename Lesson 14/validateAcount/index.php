<?php 

function checkAccount($str) {
    $regex = '/^[a-z0-9_]{6,}$/';
    if(preg_match($regex,$str)){
        echo $str.": is correct format <br />";
    }else{
        echo $str.": is not correct format <br/>";
    }
}
checkAccount("123abc_");
checkAccount("_abc123");
checkAccount("________");
checkAccount("@");