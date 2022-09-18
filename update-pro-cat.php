 <?php
session_start();
$id=$_POST['code'];
$qty=$_POST['quantity'];
echo $id;
$_SESSION['cart'][$id]=$qty;
// header("location: view-cart.php");
?>
