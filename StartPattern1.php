<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align='center'>Start Pattern Example</h1>
<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>
<h1 align='center'>Second Pattern example</h1>
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?> 
<h1 align='center'>Third Start Pattern</h1>
<?php
for ($i = 7; $i >= 1; $i--) {
  
    for ($k = 1; $k <= 7 - $i; $k++) {
        echo "&nbsp;&nbsp;";
    }

    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>

<?php
$str = "PHP,Java,Python,C++";
$arr = explode(",", $str);
print_r($arr);
?>


</body>
</html>
