<?php
class InvalidAgeException extends Exception {
    function getError()
    {
        return $this->getMessage();
    }
}
function validateAge($age) {
    if (!is_numeric($age)) {
        throw new InvalidAgeException("Age must be a number.");
    }
    if ($age < 0) {
        throw new InvalidAgeException("Age cannot be negative.");
    }
    if ($age > 130) {
        throw new InvalidAgeException("Invalid Age group.");
    }
    echo "Valid age: $age years\n";
}
try {
    $age = 150;  
    validateAge($age);
} catch (InvalidAgeException $e) {
    echo "Invalid Age Error: " . $e->getError();
} catch (Exception $e) {
    echo "General Error: " . $e->getMessage();
}
?>
