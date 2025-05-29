<?php
 include("code/conn.php");
$i=$_GET['id'];
 $q=$_GET['qty'];



addToCart($i,$q);

function addToCart($product_id,$quantity) {
    if(isset($_SESSION['cartbox'][$product_id])) {

        $_SESSION['cartbox'][$product_id] += $quantity;
        echo "old";
    } else {
        $_SESSION['cartbox'][$product_id] = $quantity;
        echo "new";
    }
}
echo "<script>window.location.href='cart.php';</script>"; 
?>