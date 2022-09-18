<?php
session_start();
unset($_SESSION['cart']);
//unset($_SESSION['username']);
//session_destroy();
header("location:ShowAll.php");
?>