<?php
    $number = -5.2;
    echo "Absolute value of $number = " . abs($number);

    echo "\n2 to the power 3 = " . pow(2, 3);

    echo "\nRandom number between 1 and 100 = " . rand(1, 100);

    $num = 25;
    echo "\nSquare root of $num = " . sqrt($num);

    $floatNum = 4.567;
    echo "\n$floatNum rounded = " . round($floatNum);

    echo "\n$floatNum rounded up = " . ceil($floatNum);

    echo "\n$floatNum rounded down = " . floor($floatNum);

    $numbers = [1, 2, 3, 4, 5];
    echo "\nMaximum value = " . max($numbers);
    echo "\nMinimum value = " . min($numbers);

    $angle = pi() / 4; // 45 degrees in radians
    echo "\nSine of 45 degrees = " . sin($angle);
    echo "\nCosine of 45 degrees = " . cos($angle);
    echo "\nTangent of 45 degrees = " . tan($angle);

    echo "\nPI value = " . pi();

    $expNum = 1;
    echo "\ne to the power of $expNum = " . exp($expNum);

    $logNum = 10;
    echo "\nNatural logarithm of $logNum = " . log($logNum);
    echo "\nBase-10 logarithm of $logNum = " . log10($logNum);

    $side1 = 3;
    $side2 = 4;
    echo "\nHypotenuse of a right triangle with sides $side1 and $side2 = " . hypot($side1, $side2);
?>
