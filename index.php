<?php

error_reporting(0);
include("code/conn.php");
$uid=$_SESSION['uid'];
?>
<html>
    <head>
        
<meta charset="utf-8">
    <title>Home-Sanitary Pads Management System</title>
    <link rel="shortcut icon" href="icone/pads_logo2.png" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="favicon.ico" rel="icon">
    </head>
<body>
     <?php include('include/header.php'); ?>
     <?php
        $index='acitve';
      include('include/primary_header.php');

       ?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/c1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Comfort & Hygiene</h4>
                            <h1 class="display-3 text-white mb-md-4">Menstural Hyginene Pads</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/c2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Comfort & Hygiene</h4>
                            <h1 class="display-3 text-white mb-md-4">Quality You Can Trust, Comfort You Can Feel</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> -->
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img class="w-100" src="img/c3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Comfort & Hygiene</h4>
                            <h1 class="display-3 text-white mb-md-4">Your Comfort, Our Commitment</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Comfort & Soft Menstural Hyginene Pads</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">A trusted name for decades, Procter & Gamble continues to successfully enrich the lives of women around the world. </h5>
                    <p>We aspire to make your life better by challenging convention, leading innovation, and helping shape culture. Feel our presence in your kitchens, living rooms, washrooms, and play areas through a wide array of quality products. And as we continue to grow, we further strive to deepen our roots of purpose. ALWAYS is a testimony to that effort.</p>
                    <!-- <a href="" class="btn btn-secondary mt-2">Learn More</a> -->
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/c3.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>Functions of sanitary napkins are to absorb and retain menstrual fluid and isolate menstrual fluids from the body. Important/desired properties are no leakage, no unaesthetic appearance or colour, no odour, no noise, stay in place, comfortable to wear,hygiene.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Absorbency</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Leak protection</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Comfort & Hygiene</h5>
                    <!-- <a href="" class="btn btn-primary mt-2">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Promotion Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/promotion2.jpeg" style="object-fit: cover;">
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/Lgjn3A4Uyas?si=RibnuAbJ2xOcfpzx" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                <h1 style="color:white;">About</h1>    
                <p style="color:white; font-size:18px; line-height:27px;">A sanitary  pad is an absorbent item worn by woman while she is menstruating , absorbtion on any other situation where it is necessary to absorb flow of blood. Usually the pads are manufactured in high cost machine only. The cost of such machine is about 75 lakhs to 2.5 crores. These machines are generally run by multinational companies only. Now the quality pads can be manufactured at home by using the newly invented sanitary pads manufacturing machine at the low cost.</p>
                    <!-- <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                        style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">$199</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Chocolate Ice Cream</h3>
                    <p class="text-white mb-4">Lorem justo clita dolor ipsum ut sed eos, ipsum et dolor kasd sit ea
                        justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                    <a href="" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Best Services We Provide For Our Clients</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <?php
                            $sql="SELECT * from `service`";
                            $result=$con-> query($sql);
                            if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) 
                            {
                                    $name=$row['name'];
                                    $image=$row['image'];
                                    $description=$row['description'];
                                    $sid=$row['id'];

                        ?>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="admin/<?=$image;?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4  pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><?=$name;?></h5>
                                <p><?=$description;?></p>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">Sanitary Pads Made From Our Very Own Organic Cotton</h1>
            </div>
        </div>
        <div class="row m-0 portfolio-container">
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/p1.jpeg" alt="p1">
                    <a class="portfolio-btn" href="img/p1.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/p2.jpeg" alt="p2">
                    <a class="portfolio-btn" href="img/p2.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/p4.jpeg" alt="p4">
                    <a class="portfolio-btn" href="img/p4.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/p3.jpeg" alt="p3">
                    <a class="portfolio-btn" href="img/p3.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/p5.jpeg" alt="p5">
                    <a class="portfolio-btn" href="img/p5.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/p6.jpeg" alt="p6">
                    <a class="portfolio-btn" href="img/p6.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Best Prices We Offer For  Sanitary Pads</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel product-carousel">
                            <?php
                            $sql="SELECT * from `products`";
                            $result=$con-> query($sql);
                            if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) 
                            {
                                    $productName=$row['productName'];
                                    $productPrice=$row['productPrice'];
                                    $productImage=$row['productImage'];
                                    $pid=$row['id'];

                            ?>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0"><i class="fa-solid fa-indian-rupee-sign"></i><?= $productPrice;?></h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="admin/<?=$productImage;?>" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4"><?= $productName;?></h5>
                            <a href="add_cart.php?id=<?= $id;?>&qty=1" class="btn btn-sm btn-secondary btn-add mb-2"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
                            <a href="cart.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Swift and Safe Delivery Services</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/t1.jpeg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Anmol Thakkar</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://x.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://api.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/t2.jpeg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Yush Awidra</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://x.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://api.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/t3.jpeg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Richa Singh</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://x.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://api.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/t4.jpeg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Vimal Tiwari</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://x.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://api.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Clients Say About Our Comfortable Pads</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <?php
                            $sql="SELECT * from `review`";
                            $result=$con-> query($sql);
                            if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) 
                            {
                                    $name=$row['name'];
                                    $image=$row['image'];
                                    $description=$row['description'];
                                    $profession=$row['profession'];
                                    $id=$row['id'];

                            ?>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4"><?=$description;?></h4>
                            <img class="img-fluid mx-auto mb-3" src="user/<?=$image;?>" alt="">
                            <h5 class="font-weight-bold m-0"><?=$name;?></h5>
                            <span><?=$profession;?></span>
                        </div>
                            <?php
                            }
                        }
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

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