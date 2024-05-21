<?php
    $fruits = array("Apple","Orange","PineApple","Grapes");
    echo $fruits[1]."\n";;
    echo count($fruits)."\n";
    array_push($fruits,"lemon");
    print_r ($fruits);
    sort($fruits);

    for ($i=0;$i<sizeof($fruits);$i++){
        echo "The ".$i," is ".$fruits[$i]."\n" ;
    }

    $array = [1, 2, 3, 4, 5];
    array_splice($array, 1, 2);
    print_r($array); // Output: [1, 4, 5]

    array_splice($array, 1, 2, ['a', 'b']);
    print_r($array);

    $tasks = ["laundry" => "Daniel" , "trash" => "nolan"];
    echo $tasks["trash"];
    echo count($tasks)."\n";
    //can't push to list only works for Array
    $tasks["dusting"]="Austin";
    print_r($tasks);

?>