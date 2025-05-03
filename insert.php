<!DOCTYPE html>
<html>
<head>
    <title>Add Book Review</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            margin: 40px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

<h2>Add Book Review</h2>

<form method="POST" action="">
    <label>Book ID:</label>
    <input type="number" name="bookId" required>

    <label>Rating (1 to 5):</label>
    <input type="number" name="rating" min="1" max="5" required>

    <label>Comment:</label>
    <textarea name="comment" rows="4" required></textarea>

    <input type="submit" name="submit" value="Add Review">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = 'localhost';
    $db   = 'bookstore';
    $user = 'root';
    $pass = 'Anudip@123';

    $bookId = $_POST['bookId'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $created =null;
    $updated = null;

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO reviews (bookId, rating, comment,createdAt,updatedAt) 
        VALUES (:bookId, :rating, :comment,:created,:updated)";


        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':bookId' => $bookId,
            ':rating' => $rating,
            ':comment' => $comment
        ]);

        echo "<div class='message success'>Review added successfully!</div>";
    } catch (PDOException $e) {
        echo "<div class='message error'>Error: " . $e->getMessage() . "</div>";
    }
}
?>

</body>
</html>
