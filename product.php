<?php 
    // session_start();
    include("code/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Products-Sanitary Pads Management System</title>
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
      
     <?php include('include/header.php'); ?>
     <?php include('include/primary_header.php'); ?>


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Product</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Product</p>
            </div>
        </div>
        <form action="product.php">
        <input type="text" list="browsers"  name="search" placeholder="Searching...." style="margin-left:500px; width:300px; border-radius:15px; border:none;">
        <datalist id="browsers">

        <?php
        
        
        
                
        $sql="SELECT * from `products`";
        $result=$con-> query($sql);
    
          while ($row=$result-> fetch_assoc()) 
          {
            echo '<option value="'.$row['productName'].'">';
          }
        ?>

        
 


</datalist>   
    </form>
        <?php
// $searchQuery = "";
// if (isset($_GET['search'])) {
//     $searchQuery = $_GET['search'];
//     $sql = "SELECT * FROM `products` WHERE `productName`='$produtcName'";
//     $stmt = $conn->prepare($sql);
//     $param = "%$searchQuery%";
//     $stmt->bind_param("ss", $param, $param);
//     $stmt->execute();
//     $result = $stmt->get_result();
// } else {
//     $result = null;
// }
        ?>

    </div>
    <!-- Header End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Best Prices We Offer For  Sanitary Pads
                    </h1>
                </div>
            </div>
            <div class="row">
                <?php

                
                    $sql="SELECT * from `products`";
                    $result=$con-> query($sql);
                    if ($result-> num_rows > 0){
                      while ($row=$result-> fetch_assoc()) 
                      {
                            $productName=$row['productName'];
                            $productPrice=$row['productPrice'];
                            $productImage=$row['productImage'];
                            $id=$row['id'];

                ?>
                
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0"><i class="fa-solid fa-indian-rupee-sign"></i><?= $productPrice;?></h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="admin/<?=$productImage;?>" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4"><?= $productName;?></h5>
                        <a href="add_cart.php?id=<?= $id; ?>&qty=1" class="btn btn-sm btn-secondary btn-add"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
    
                <?php
                    }
                      }
                      ?>
            </div>
            
        </div>
    </div>
    <!-- Products End -->

    <?php  include ('include\footer.php')?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


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