<?php
session_start();
include "db.php";

if (isset($_POST['login'])) {

    $faculty_id = $_POST['faculty_id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM faculty WHERE faculty_id='$faculty_id' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $faculty = $result->fetch_assoc();

        $_SESSION['faculty_id'] = $faculty['faculty_id'];
        $_SESSION['faculty_name'] = $faculty['faculty_name'];

        header("Location: faculty_dashboard.php");
        exit();

    } else {
        echo "Invalid Faculty ID or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Faculty Login - Campus Buzz</title>
</head>
<body>

<h1>Campus Buzz</h1>
<h2>Faculty Login</h2>

<form method="POST">

    <label>Faculty ID:</label><br>
    <input type="text" name="faculty_id" required>
    <br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" name="login" value="Login">

</form>

<br>

<a href="faculty_register.php">New Faculty? Register</a>

</body>
</html>