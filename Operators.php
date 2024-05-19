<?php
    $a=20;
    $b=10;
    $sum = $a + $b;
    $difference = $a - $b;
    $product = $a * $b;
    $quotient = $a / $b;
    $modulus = $a % $b;  // 2

    $exp = $a ** 2;
    $a += 5;

    echo "a+b = $sum\n";
    echo "a-b = $difference\n";
    echo "a*b = $product\n";
    echo "a/b = $quotient\n";
    echo "a%b = $modulus\n";
    echo "a**2 = $exp\n";

    //! comparison operator 
    $a == $b;  // true if $a is equal to $b
    $a === $b;  // true if $a is equal to $b and they are of the same type
    $a != $b;  // true if $a is not equal to $b
    $a !== $b;  // true if $a is not equal to $b or they are not of the same type
?>