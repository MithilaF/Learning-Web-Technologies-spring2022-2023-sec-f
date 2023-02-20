<?php
    // Define the numbers
    $num1 = 10;
    $num2 = 15;
    $num3 = 20;

    // Determine the largest number
    if($num1 > $num2 && $num1 > $num3) {
        echo "The largest number is " . $num1 . "<br>";
    } else if($num2 > $num1 && $num2 > $num3) {
        echo "The largest number is " . $num2 . "<br>";
    } else {
        echo "The largest number is " . $num3 . "<br>";
    }
?>