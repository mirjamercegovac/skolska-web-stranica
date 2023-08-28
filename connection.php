<?php 

    $conn = mysqli_connect("localhost", "root", "", "logindb");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }

?>