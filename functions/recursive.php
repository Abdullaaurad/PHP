<?php 
echo "Start \n";

function factorial($num) {
    if ($num == 0) {
        return 1;
    }
    return (factorial($num - 1))* $num;
}

echo "After function \n";

echo "Calling function \n";
echo "Result of 5 = " . factorial(5) . "\n"; 
echo "Result of 6 = " . factorial(6) . "\n";
echo "Result of 7 = " . factorial(7) . "\n"; 
?>
