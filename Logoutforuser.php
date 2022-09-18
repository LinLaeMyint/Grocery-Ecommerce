<?php
session_start();
unset($_SESSION['cart']);
unset($_SESSION['username']);
//session_destroy();
header("Location:UserLogin.php");
?>
