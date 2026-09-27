<?php

$conn = mysqli_connect("127.0.0.1", "root", "BINDU", "campus_buzz");

if (!$conn) {
    die("Database failed: " . mysqli_connect_error());
}

?>