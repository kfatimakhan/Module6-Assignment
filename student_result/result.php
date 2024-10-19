<?php

function calculateResult($sub1,$sub2,$sub3,$sub4,$sub5) {
    global $total;
    $total = $sub1+$sub2+$sub3+$sub4+$sub5;
    echo "Total Marks: $total.<br/>";
}


calculateResult(60,70,80,90,40);

$averageMarks = $total / 5;
echo "Average Marks: $averageMarks.<br/>";


switch (true) {
    case ($averageMarks <= 100 && $averageMarks >= 80):
        echo "Grade: A+";
        break;
    case ($averageMarks <= 79 && $averageMarks >= 70):
        echo "Grade: A";
        break;
    case ($averageMarks <= 69 && $averageMarks >= 60):
        echo "Grade: A-";
        break;
    case ($averageMarks <= 59 && $averageMarks >= 50):
        echo "Grade: B";
        break;
    case ($averageMarks <= 49 && $averageMarks >= 40):
        echo "Grade: C";
        break;
    case ($averageMarks <= 39 && $averageMarks >= 30):
        echo "Grade: D";
        break;
    case ($averageMarks <= 33 && $averageMarks > 0):
        echo "Grade: F";
        break;
    default:
        echo "Mark range is invalid.";
}


