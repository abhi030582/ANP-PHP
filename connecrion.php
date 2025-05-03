<!DOCTYPE html>
<html>
<head>
    <title>Book Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 40px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .review-table {
            margin: auto;
            width: 80%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .review-table th, .review-table td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        .review-table th {
            background-color: black;
            color: white;
        }

        .review-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .review-table tr:hover {
            background-color: #e6f7ff;
        }
    </style>
</head>
<body>

<h1>Book Reviews</h1>

<table class="review-table">
    <tr>
        <th>ID</th>
        <th>Book ID</th>
        <th>Rating</th>
        <th>Comment</th>
    </tr>

    <?php
    $host = 'localhost';
    $db   = 'bookstore';
    $user = 'root';
    $pass = 'Anudip@123';

    $dsn = "mysql:host=$host;dbname=$db";
    try {
        $pdo = new PDO($dsn, $user, $pass);
        $stmt = $pdo->query("SELECT * FROM reviews");

        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["bookId"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["rating"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["comment"]) . "</td>";
            echo "</tr>";
        }

    } catch (PDOException $e) {
        echo "<tr><td colspan='4'>Connection failed: " . $e->getMessage() . "</td></tr>";
    }
    ?>
</table>

</body>
</html>
