<?php
    $intVar = 42;
    $floatVar = 3.14;
    $stringVar = "Hello, World!";
    $boolVar = true;

    $arrayVar = [1, 2, 3, "four", "five"];
    $assocArrayVar = ["first" => 1, "second" => 2, "third" => 3];

    echo "Int =$intVar\n";
    echo "float = $floatVar\n";
    echo "string = $stringVar\n";
    echo "string = $boolVar\n";
    echo "array = ";
    print_r($arrayVar);
    echo "dictionary = ";
    print_r($assocArrayVar);
?> 