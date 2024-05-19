<?php 
    echo "Start \n";

    function factorial($num){
        $Result = 1;
        for ($i=2 ; $i<=$num; $i++){
            $Result = $Result * $i;
        }
        echo "Result of $num = $Result\n";
    }
    
    echo "After function \n";

    echo "calling function \n";
    factorial(5);
    factorial(6);
    factorial(7);
?>
