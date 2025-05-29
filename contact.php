<?php
 include("code/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact-Sanitary Pads Management System</title>
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
            <h1 class="text-white display-3 mt-lg-5">Contact</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    
    <style>
    .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }

        .header h1 {
            font-size: 35px;
            color: black;
        }

        .contact-container {
            text-align: center;
            padding: 50px 20px;
        }

        .contact-heading {
            font-size: 14px;
            color: #f55d7a;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .main-heading {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .contact-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .contact-card {
            margin-top: 80px;
            border: 1px solid #ffdddd;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .icon {
            background-color:#F195B2;
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            position: relative;
            bottom: 74px;
            margin-bottom: 0px;
        }

        .icon img {
            width: 100px;
            height: 100px;
        }

        .contact-card h2 {
            font-size: 25px;
            margin-bottom: 10px;
            color: #333;
            margin-top: -30px;
        }

        .contact-card p {
            font-size: 17px;
            color: #666;
            margin: 5px 0;
        }

        .badge {
            background-color: #ffdddd;
            color:#F195B2;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 18px;
            display: inline-block;
            margin-bottom: 10px;
        }
        .location{
            margin-top: 30px;
            text-align: center;
            margin-bottom: 20px;
        }
        iframe{
            border-radius: 5px;
        }
    </style>
    <div class="header">
        <!-- <span class="badge">CAR TYPES</span> -->
        <h1 id="caption">Contact Us</h1>
    </div>
    <?php
                                
                                $sql="SELECT * from `contact`";
                                $result=$con-> query($sql);
                                if ($result-> num_rows > 0){
                                  while ($row=$result-> fetch_assoc()) 
                                  {
                                        $emailhi=$row['emailhi'];
                                        $email_he=$row['email_he'];
                                        $address=$row['address'];
                                        $contactNo1=$row['contactNo1'];
                                        $contactNo2=$row['contactNo2'];
                                        $id=$row['id'];
            
                        
                        ?>
    <div class="contact-container">
        <div class="contact-grid">
            <div class="contact-card">
                <div class="icon">
                    <img src="img/location.svg" alt="Location Icon">
                </div>
                <h2>Our Location</h2>
                <p><?=$address;?></p>
            </div>
            <div class="contact-card">
                <div class="icon">
                    <img src="img/email.svg" alt="Email Icon">
                </div>
                <h2>Email Address</h2>
                <p><?=$emailhi;?></p>
                <p><?=$email_he;?></p>

            </div>
            <div class="contact-card">
                <div class="icon">
                    <img src="img/phone.svg" alt="Phone Icon">
                </div>
                <h2>Phone Number</h2>
                <p>Emergency Cases</p>
                <p>+91 <?=$contactNo1;?></p>
                <p>+91 <?=$contactNo2;?></p>
            </div>
        </div>
        <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10496.469094975217!2d71.66874499059209!3d21.544427587738088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be20985a25fa1bf%3A0xc77c0a2815e412c5!2sMangadh%2C%20Gujarat%20364275!5e0!3m2!1sen!2sin!4v1740832541086!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>

            <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Contact Us For Any Query</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <!-- <div id="success"></div> -->
                        <form method="post"  >
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name" name="name"/>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" name="g" id="email" placeholder="Your Email" />
                                    <p class="help-block text-danger"></p>
                                </div>

                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4"  name="sub"id="subject" placeholder="Subject" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" name="msg"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div>
                                <input class="btn btn-primary btn-block py-3 px-5" name="btn" type="submit" value="Send Message"/>                                
   
                            </div>
                            <?php
                                  }
                                }
                                ?>
        </form>
                        <?php 
  
  require 'mail1/function.php';
    
  if (isset($_POST['btn'])) {
    # code...
    extract($_POST);
           $mail_sent = send_mail($g,$name,$sub,$msg);
  
              if ($mail_sent) {
  
                  echo "<script>
                  alert('send success');
                  </script>";
              } else {
                  $errorMsgLogin = "Failed to send OTP. Please try again later.";
              }
  }
   ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact End -->

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