<?php
//Database Connection
$conn = new mysqli('localhost', 'root', '', 'cafe');
if (!$conn) {
    die(mysqli_error($conn)); //Checking Connection
}
?>