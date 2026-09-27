<?php
include "db.php";

$result = $conn->query("SELECT * FROM notices ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Faculty Notices - Campus Buzz</title>
</head>
<body>

<h1>Campus Buzz</h1>
<h2>Faculty Notices</h2>

<?php
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
?>

        <h3><?php echo $row['title']; ?></h3>

        <p><?php echo $row['message']; ?></p>

        <p>
            <b>Category:</b>
            <?php echo $row['category']; ?>
        </p>

        <p>
            <b>Created:</b>
            <?php echo $row['created_at']; ?>
        </p>
        <a href="delete_notice.php?id=<?php echo $row['id']; ?>"
           onclick="return confirm('Are you sure you want to delete this notice?');">
            Delete
        </a>

        <hr>

<?php
    }

} else {
    echo "<p>No notices available.</p>";
}
?>

<br>
<a href="add_notice.php">Create New Notice</a>
<br><br>

<a href="index.php">Back to Home</a>

</body>
</html>