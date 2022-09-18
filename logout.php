<?php
session_start();
//unset($_SESSION['cart']);
unset($_SESSION['adminusername']);
// session_destroy();
header("Location:NewLogin.php");
?>
