<?php 
function checkFormatPhone($str){
    $regex = '/^\(\+[0-9]{2}\)\-\([0][0-9]{9}\)/';
    if(preg_match($regex,$str)){
        echo $str.": is correct format <br />";
    }else{
        echo $str.": is not correct format <br/>";
    }
}
checkFormatPhone('(+84)-(0978489648)');
checkFormatPhone('(+a4)-(0978489648)');
checkFormatPhone('-(0978489648)');


