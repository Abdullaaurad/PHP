<?php
    $a = 1;
    echo !($a) ;// This will output "" (empty string) because !($a) is false.
                //false is displayed as an empty string in PHP

    $c = 0;
    echo !($c)."\n";

    $a = 10;
    $b = 20;

    if($a==10 && $b==10){
        echo "a=10 and b=10";
    }
    elseif($a==10 || $b==10){
        echo "a=10 or b=10";
    }
    else{
        echo "a!=10 and b!=10";
    }
?> 