<?php
function symbol($score) {
    if ($score >= 90) {
        echo "Grade: A\n";
    } elseif ($score >= 80) {
        echo "Grade: B\n";
    } elseif ($score >= 70) {
        echo "Grade: C\n";
    } elseif ($score >= 60) {
        echo "Grade: D\n";
    } else {
        echo "Grade: F\n";
    }
}

symbol(23);
symbol(45);
symbol(67);
symbol(81);
symbol(99);

?>
