<?php
function fact($num) {
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    echo $result;
}
$num =6;
fact($num);


function pow($base, $expo) {
    $result = 1;
    for ($i = 1; $i <= $expo; $i++) {
        $result *= $base;
    }
    return $result;
}


$base = 3;
$exponent = 2;
echo pow($base, $expo);

function outer() {
    $inner = function() {
        echo "Inner via closure\n";
    };
    $inner(); // Call it directly
}
outer();


function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 5;
echo ("Factorial". $number);

$today = date("l"); 
echo "Today is: $today";
?>




?>
