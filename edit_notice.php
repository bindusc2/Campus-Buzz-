<?php

include "db.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $result = $conn->query("SELECT * FROM notices WHERE id = $id");
    $notice = $result->fetch_assoc();

}

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $category = $_POST['category'];

    $sql = "UPDATE notices 
            SET title='$title',
                message='$message',
                category='$category'
            WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: view_notices.php");
        exit();
    } else {
        echo "Error updating notice: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Notice - Campus Buzz</title>
</head>

<body>

<h1>Campus Buzz</h1>
<h2>Edit Faculty Notice</h2>

<form method="POST">

    <input type="hidden" name="id"
           value="<?php echo $notice['id']; ?>">

    <label>Title:</label><br>
    <input type="text" name="title"
           value="<?php echo $notice['title']; ?>"
           required>
    <br><br>

    <label>Message:</label><br>
    <textarea name="message" required><?php echo $notice['message']; ?></textarea>
    <br><br>

    <label>Category:</label><br>
    <input type="text" name="category"
           value="<?php echo $notice['category']; ?>"
           required>
    <br><br>

    <button type="submit" name="update">
        Update Notice
    </button>

</form>

<br>

<a href="view_notices.php">Back to Faculty Notices</a>

</body>
</html>