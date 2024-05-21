
<?php
    $a = 4;
    $result = match($a){
        1 => "Result is 1",
        4,2 => "Result is 2",
        3 => "Result is 3",
        default => "default"
    };
    echo $result;

    //won't work for different datatype has to be the same
    echo "\n";
    $a = "4";
    $result = match($a){
        "1" => "Result is 1",
        "4","2" => "Result is 2",
        "3" => "Result is 3"
    };
    echo $result;
?>