<?php 
session_start();
displayCart();
function displayCart() 
	{
          foreach($_SESSION['cartbox'] as $product_id => $quantity) 
          {
        		echo "<BR>".$quantity." ".$product_id ;
        		echo "<a href='remove_cart.php?id=".$product_id."' >remove</a>";
		  }
	}
?>

