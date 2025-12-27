<?php
session_start();
if(isset($_SESSION['login'])){
    unset($_SESSION['login']);
    unset($_SESSION['info']);
    $_SESSION['message'] = "Logged Out";
}
header('Location: index.php');
?>