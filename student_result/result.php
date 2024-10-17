<?php

$total = 40+55+65+70+80;
echo "Total Marks:$total.<br/>";
$mark=70;
$avg = ($total / 5);
echo "Average Marks: $avg.<br/>";
echo "Grade: ";
switch (true) {
    case ($mark <= 100 && $mark >= 80):
        echo "A+";
        break;
    case ($mark <= 79 && $mark >= 70):
        echo "A";
        break;
    case ($mark <= 69 && $mark >= 60):
        echo "A-";
        break;
    case ($mark <= 59 && $mark >= 50):
        echo "B";
        break;
    case ($mark <= 49 && $mark >= 40):
        echo "C";
        break;
    case ($mark <= 39 && $mark >= 30):
        echo "D";
        break;
    default:
        echo "F";
}

