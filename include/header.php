<?php
    // session_start();
    error_reporting(0);
    // include("code/conn.php");
    // if($_SESSION['uid']==""){
    //     echo "<script>window.location='index.php'</script>";
    // }
    $uid=$_SESSION['uid'];
    $sql="SELECT * from `login` where `id`='$uid'";
    $qry=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($qry);
    // $pic=$row['image'];
    $pic= !empty($row['image']) ? $row['image'] : 'uploads/user.png';
    
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
    <!-- <link href="scss/style.css" rel="stylesheet"> -->
</head>

<!-- Topbar Start -->
<div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <!-- <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="#">Help</a> -->
                        <?php
                       if(!isset($uid))
                       { ?>
                            <span class="text-white">|</span>

                            <a class="text-white pl-3" href="login/index.php">Signin </a>

                            <span class="text-white ml-3">|</span>

                      <?php } ?>

                        
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="https://x.com/?lang=en">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="https://api.linkedin.com/login">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.youtube.com/">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <?php
                        if(isset($uid)){
                            ?>
                            
                        <a class="text-white pl-3" href="cart.php">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>

                        <div class="dropdown drp-user">  
                            <?php
                            if($_SESSION['role']=='admin')  
                            {
                            ?>
                                    <a href="#" data-toggle="dropdown" class="text-white px-3">
                                        <img src="admin/<?= $pic;?>" class="img-radius" alt="User-Profile-Image" style="height:30px; width:30px; border-radius:50%;">
                                    </a>
                                    <?php } 
                                    else{
                                    ?>
                                        <a href="#" data-toggle="dropdown" class="text-white px-3">
                                        <img src="user/<?= $pic;?>" class="img-radius" alt="User-Profile-Image" style="height:30px; width:30px; border-radius:50%;">
                                    </a>
                                    <?php }?>
									<ul class="pro-body dropdown-menu">
                                        
										<li><a href="user/profile.php"class="dropdown-item "><i class="fa-solid fa-user mr-2"></i> Profile</a></li>

										<li><a href="include/logout.php" class="dropdown-item"><i class="fa-solid fa-right-from-bracket mr-2"></i> Logout</a>
                                    </li>
									</ul>
                                
							</div>
						</div>
                            <?php }
                            ?>


                        
                    
							
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->