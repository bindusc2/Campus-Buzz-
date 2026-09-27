<?php
include "db.php";

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $message = $_POST['message'];
    $category = $_POST['category'];

    $sql = "INSERT INTO notices (title, message, category)
            VALUES ('$title', '$message', '$category')";
            
            if ($conn->query($sql) === TRUE) {
    header("Location: view_notices.php");
    exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Notice - Campus Buzz</title>
</head>
<body>

<h1>Campus Buzz</h1>
<h2>Create Notice</h2>

<form method="POST">

    <label>Notice Title:</label><br>
    <input type="text" name="title" required>
    <br><br>

    <label>Notice Message:</label><br>
    <textarea name="message" rows="5" cols="40" required></textarea>
    <br><br>

    <label>Category:</label><br>
    <input type="text" name="category" required>
    <br><br>

    <input type="submit" name="submit" value="Create Notice">

</form>

<br>

<a href="index.php">Back to Home</a>

</body>
</html>