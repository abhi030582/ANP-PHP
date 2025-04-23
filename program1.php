<?php

    $amount = 321;
    $hundreds = (int)($amount/ 100);
    $amount %= 100;

    $fifties =(int)($amount/ 50);
    $amount %= 50;

    $tens = (int)($amount/ 10);
    $amount %= 10;

    echo "<h3>Conversion Result:</h3>";
    echo "100s: $hundreds<br>";
    echo "50s: $fifties<br>";
    echo "10s: $tens<br>";
    echo "Remaining amount (less than 10): $amount";

    ?>