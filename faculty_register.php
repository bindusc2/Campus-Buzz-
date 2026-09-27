<?php
include "db.php";

if (isset($_POST['register'])) {

    $name = $_POST['faculty_name'];
    $faculty_id = $_POST['faculty_id'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $faculty_id;

    $sql = "INSERT INTO faculty 
            (username, faculty_name, faculty_id, department, email, password)
            VALUES 
            ('$username', '$name', '$faculty_id', '$department', '$email', '$password')";

   if ($conn->query($sql) === TRUE) {
    header("Location: faculty_login.php");
    exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Faculty Registration</title>
</head>
<body>

<h1>Faculty Registration</h1>

<form method="POST">

    <label>Faculty Name:</label><br>
    <input type="text" name="faculty_name" required>
    <br><br>

    <label>Faculty ID:</label><br>
    <input type="text" name="faculty_id" required>
    <br><br>

    <label>Department:</label><br>
    <input type="text" name="department" required>
    <br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required>
    <br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" name="register" value="Register">

</form>

<br>

<a href="index.php">Back to Home</a>

</body>
</html>
