<?php
class InvalidAgeException extends Exception {
    function getError()
    {
        return $this->getMessage();
    }
}
function validateAge($num) {
    if ($num < 0) {
        throw new InvalidAgeException("number is negative.");
    }
    else
    {
        echo "number is positive";
    }
   
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
