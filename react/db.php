<?php
$conn = new mysqli("localhost", "root", "Anudip@123", "react_php_auth");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
