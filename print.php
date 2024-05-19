<?php 
    echo "1. First";   // Using echo
    print "\n2. Second"; // Using print

    $array = array('first' => '1. First', 'second' => '2. Second');
    print_r($array);    // Using print_r

    $variable = "3.Third";
    var_dump($variable); // Using var_dump

    $formattedString = sprintf("4. %s", "Fourth");
    echo $formattedString; // Using sprintf

    $fifth = "fifth";
    printf("\n5. %s", $fifth); // Using printf

    error_log("\n6. Sixth"); // Using error_log
?>
