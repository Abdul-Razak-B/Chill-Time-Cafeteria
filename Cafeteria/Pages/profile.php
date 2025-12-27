<?php
session_start();
if (!isset($_SESSION['login']) || !$_SESSION['login'] ) {
    header("Location: index.php?message=".urlencode('please login first'));
    exit();
}
?>