<?php
for($i=0;$i<=5;$i++){
    for($j=0;$j<=10;$j++){
        echo"* &nbsp;";
    }
    echo"<br/>";
}
echo"<br/>";
for($i=0;$i<=7;$i++) {
    for($j=0;$j<=$i;$j++){
        echo"* &nbsp;";
    }
    echo"<br/>";
}
echo"<br/>";
for($i=7;$i>=0;$i--) {
    for($j=0;$j<=$i;$j++){
        echo"* &nbsp;";
    }
    echo"<br/>";
}
echo"<br/>";
for($i=1;$i<=7;$i++) {
    for($j=1;$j<=7+1-$i;$j++){
        echo" &nbsp;";
    }
    for($j=1;$j<=2*$i-1;$j++){
        echo"*";
    }
    echo"<br/>";
}