<?php
    $str = "abcsasaaaa";

    function checkchart($str,$x) {
        $count=0;
        $i=0;
        while($i<strlen($str)){
            if(substr($str,$i,1) == $x) { 
                $count++;
            }
            ++$i;
        }
        echo $count;
    }
checkchart($str,"a");
