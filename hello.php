<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
</head>
<body>
   <h1 align='center'>PHP Demo Application</h1>
   
   <?php
   $msg ="This is for testing";
   print($msg);
   $a = 10;
   $b = 20;
   print($a +$b);
   print(var_dump($a));
   print(var_dump($b));
$num1 = 10;
$num2 = 20;
$num3 = 30;
$num4 = 40;
$num5 = 50;
$sum = $num1 + $num2 + $num3 + $num4 + $num5;
$average = $sum / 5;
echo "The average of the 5 numbers is: " . $average;
   ?>
</body>
</html>