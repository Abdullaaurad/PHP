<?php
$grade = 'B';

switch ($grade) {
    case 'A':
        echo "Excellent!";
        break;
    case 'B':
    case 'C':
        echo "Well done!";
        break;
    case 'D':
        echo "You passed.";
        break;
    case 'F':
        echo "Better try again.";
        break;
    default:
        echo "Invalid grade.";
}
?>
