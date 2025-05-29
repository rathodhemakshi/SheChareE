<?php
include('code/conn.php');
// error_reporting(0);
if($_SESSION['role']=="")
{
    echo "<script>alert('Login first..');
        window.location='login/index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PADS - Sanitary Pads Management System</title>
    <link rel="shortcut icon" href="icone/pads_logo2.png" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
        
     <?php include('include/header.php');


      ?>
     <?php include('include/primary_header.php'); ?>
    
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Cart</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Cart</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                <thead class="thead-primary">
					<tr class="text-center">
						    <th>Remove</th>
						    <th>Image</th>
						    <th>Product name</th>
						    <th>Price</th>
						    <th>Quantity</th>
						    <th>Total</th>
					</tr>
                    <tbody>
                   




<?php 

$total_price=0;
$total=0;

$charge=0;
          foreach($_SESSION['cartbox'] as $product_id => $quantity) 
          {
                    //  $product_id=$_SESSION['id'];
                     $sql="SELECT * from `products` where `id`='$product_id'";
                      $result=$con-> query($sql);

                      $row=$result-> fetch_assoc();
                      $total_price+=$row['productPrice']*$quantity;
                      $total=$row['shippingCharge']+$total_price;
                      $p_id=$row['p_id'];
                      $charge=$row['shippingCharge'];


                    //   $_SESSION['image']=$image;

echo '
   <tr class="text-center">
                    <td class="product-remove text-center"><a href="remove_cart.php?id='.$product_id.'">
                                <i class="fa-regular fa-trash-can"></i></a>
                                </td>
                    
                    <td class="image-prod">
                                    <div class="img" style="background-image:url(admin/'.$row['productImage'].');">
                                    </div>
                                </td>
                    
                    <td class="product-name">
                      <h3>'.$row['productName'].'</h3>
                      <p class="text-center">Freedom Heavy Flow Pads</p>
                    </td>
                    
                    <td class="price">'.$row['productPrice'].'</td>
                    
                    <td class="quantity">
                      <div class="input-group mb-3">
                        <input type="text" name="quantity" class="quantity form-control input-number" value="'.$quantity.'" min="1" max="100">
                      </div>
                    </td>
                    
                    <td class="total">'.($row['productPrice']*$quantity).'</td>
                  </tr>

';
      }

 ?>
                              
                    </tbody>
				</thead>
                </table>
            </div>
        </div>
    </div>

    <form method="post" enctype="multipart/form-data">
    <div class="container cart-table">
        <div class="row">
                            <?php
                                      $uid=$_SESSION['uid'];
                                      $sql1="SELECT * FROM `login` where`id`='$uid'";
                                      $result=$con-> query($sql1);
                                      while ($row=$result-> fetch_assoc())
                                      {

                                       // $_SESSION['pid']=$row['id'];
                                  ?>
            <div class="row align-items-end col-md-6">
            <div class="col-md-6">
                <h3 class="mb-4">Billing Detalis</h3>
              <div class="form-group">
                  <label for="firstname">Firt Name</label>
                <input type="text"name="name" value="<?=$row['name'];?>" class="form-control" placeholder="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="lastname">Phone</label>
                <input type="text" class="form-control" name="phone" value="<?=$row['contactno'];?>"placeholder="" required>
              </div>
          </div>
              
              <!-- <div class="w-100"></div> -->
              <div class="col-md-12">
                  <div class="form-group">
                  <label for="streetaddress">Address</label>
                <input type="text" name="address"class="form-control"value="<?=$row['address'];?>" placeholder="House number and street name" required>
              </div>
              </div>

              <div class="col-md-12">
                  <div class="form-group">
                  <label for="streetaddress">Price</label>
                <input type="text" name="total"class="form-control"value="<?=$total;?>" placeholder="House number and street name" required>
              </div>
              </div>

              
                <input type="text" name="p_id"class="form-control"value="<?=$product_id;?>" placeholder="p_id" readonly hidden>
              
              <!-- <div class="w-100"></div>
              
              
              <div class="w-100"></div> -->
              
            <div class="col-md-12">
              <div class="form-group">
                  <label for="emailaddress">Email Address</label>
                <input type="text" name="email" value="<?=$row['email'];?>"class="form-control" placeholder="" required>
              </div>
          </div>
          <!-- <div class="w-100"></div> -->
          <div class="col-md-12">
              <div class="form-group mt-4">
                        
            </div>
          </div>
          </div>


          <div class="col-xl-5">
            <div class="row mt-5 pt-3">
                <div class="col-md-12 d-flex total-box mb-5">
                    <div class="cart-detail cart-total p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Cart Total</h3>
                        <p class="d-flex">
                            <?php
                                 //$pro_id=$_SESSION['pid'];
                                 
                            ?>
                                  <span class="c-total">Subtotal</span>
                                  <span><i class="fa-solid fa-indian-rupee-sign"></i> <?= $total_price;?></span>
                              </p>
                              <p class="d-flex">
                                  <span>Delivery</span>
                                  <span><i class="fa-solid fa-indian-rupee-sign"></i><?= $charge;?></span>
                              </p>
                              <hr>
                              <p class="d-flex total-price">
                                  <span>Total</span>
                                  <span><i class="fa-solid fa-indian-rupee-sign"></i><?=$total;?></span>
                              </p>
                        </div>
                </div>
                
                <div class="col-md-12 total-box">
                    <div class="cart-detail p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Payment Method</h3>
                                  
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2" value="cash"> Cash on Delivery</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-md-12">
                                          <div class="radio">
                                             <label><input type="radio" name="optradio" class="mr-2" value="online"> Online</label>
                                          </div>
                                      </div>
                                  </div>
                                  <button type="submit" class="btn  btn-primary" name="submit">Place an order</button>
                                    <?php
                                        if(isset($_POST['submit'])){
                                            
                                            extract($_POST);
                                             $sql1="INSERT INTO `orders`(`user_id`,`p_id`,`name`,`address`,`contactno`,`email`,`quantity`,`total`,`pay_method`)VALUES('$uid','$p_id','$name','$address','$phone','$email','$quantity','$total','$optradio')";

                                             $qry1=mysqli_query($con,$sql1) or die("Query error");
                                            echo "<script>alert('Insert successfully..');</script>";

                                            
                                            if($optradio=="cash"){
                                                echo "<script>window.location='user/view_order.php'</script>";
                                            }
                                            else{
                                                echo "<script>window.location='user/payment.php'</script>";
                                            }
                                            
                                        }
                                    ?>
                              </div>
                </div>
            </div>
        </div>
    
        </div>
        <?php
                    }
                        ?>
                                    </div>
    </form>

    <?php  include ('include\footer.php')?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
