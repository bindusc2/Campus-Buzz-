<?php
session_start();

if (!isset($_SESSION['faculty_id'])) {
    header("Location: faculty_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Faculty Dashboard - Campus Buzz</title>
</head>
<body>

<h1>Campus Buzz</h1>

<h2>Faculty Dashboard</h2>

<p>
    Welcome, 
    <b><?php echo $_SESSION['faculty_name']; ?></b>
</p>

<hr>

<h3>Faculty Actions</h3>

<a href="add_notice.php">
    Send Notification
</a>

<br><br>

<a href="view_notices.php">
    View Faculty Notices
</a>

<br><br>

<a href="logout.php">
    Logout
</a>

</body>
</html>