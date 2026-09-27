<?php

include "db.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM notices WHERE id = $id";

    if ($conn->query($sql)) {
        header("Location: view_notices.php");
        exit();
    } else {
        echo "Error deleting notice: " . $conn->error;
    }

} else {
    echo "No notice selected.";
}

?>