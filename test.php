<?php

$conn = mysqli_connect("127.0.0.1", "root", "BINDU", "campus_buzz");

if ($conn) {
    echo "MySQL connection successful!";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}

?>