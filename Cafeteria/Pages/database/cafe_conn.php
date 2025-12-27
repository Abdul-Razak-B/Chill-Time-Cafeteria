<?php
    //Connection - Chill Time Cafeteria Management System
    $conn=new mysqli('localhost', 'root', '', 'cafe');
    if (!$conn) {
        die(mysqli_error($conn));
    }
?>