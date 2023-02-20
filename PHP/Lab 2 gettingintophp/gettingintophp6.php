<?php
    // Define the array
    $numbers = array(1, 3, 5, 7, 9, 11);

    // Define the element we are searching for
    $searchElement = 7;

    // Flag to indicate whether the element is found or not
    $found = false;

    // Loop through the array to search for the element
    foreach($numbers as $number) {
        if($number == $searchElement) {
            $found = true;
            break;
        }
    }

    // Display the result
    if($found) {
        echo "The element " . $searchElement . " is found in the array.<br>";
    } else {
        echo "The element " . $searchElement . " is not found in the array.<br>";
    }
?>