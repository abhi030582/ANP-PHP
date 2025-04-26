<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    Enter first number: <input type="number" name="num1" required><br><br>
    Enter second number: <input type="number" name="num2" required><br><br>
    <input type="submit" name="cal" value="Add">
    <input type="submit" name="cal" value="Subtract">
    <input type="submit" name="cal" value="Multiply">
</form>

<?php
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    $operation = $_POST['cal'];

    if ($operation == "Add") {
        $result = $num1 + $num2;
        echo "<h3>Result: $result</h3>";
    } elseif ($operation == "Subtract") {
        $result = $num1 - $num2;
        echo "<h3>Result: $result</h3>";
    } elseif ($operation == "Multiply") {
        $result = $num1 * $num2;
        echo "<h3>Result: $result</h3>";
    } else {
        echo "<h3>Invalid Operation</h3>";
    }

?>

</body>
</html>
