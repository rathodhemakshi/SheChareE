<?php
// session_start();
include("code/conn.php");


$id=$_GET['id'];


function removeFromCart($product_id) {
    if(isset($_SESSION['cartbox'][$product_id])) {
        unset($_SESSION['cartbox'][$product_id]);
    }
}
removeFromCart($id);
echo "<script>window.location.href='cart.php';</script>"; 
?>