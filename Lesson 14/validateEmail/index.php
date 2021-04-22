<?php 
$regexp = '/^\w+\w*@\w+(\.\w+)$/';

function validEmail($str)
{
    $regexp = '/^\w+\w*@\w+(\.\w+)$/';
    if (preg_match($regexp, $str)) {
        echo($str." :Is validate Email<br/>");
    } else {
        echo($str." :Is not validate Email <br /> ");
    }
}
validEmail('a@gmail.com');
validEmail('@gmail.com');
validEmail('aab@yahoo.com');
validEmail('@#abc@gmail.com');
