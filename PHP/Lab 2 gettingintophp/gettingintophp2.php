<?php
    // Define the amount
    $amount = 80000;

    // Define the VAT rate
    $vatRate = 0.15;

    // Calculate the VAT
    $vat = $amount * $vatRate;

    // Display the result
    echo "The VAT over the amount of BDT" . $amount . " is: BDT" . $vat . "<br>";
?>