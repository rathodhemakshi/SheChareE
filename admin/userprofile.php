<?php

include('../code/conn.php');
// session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS||User Profile</title>
    <link rel="shortcut icon" href="../icone/pads_logo2.png" type="image/x-icon">


    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

</head>
<body class="">
	<?php include('include/sidebar.php');?>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<?php include('include/header.php');?>

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">User Profile</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin-profile.php">User Profile</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
          
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>User Profile</h5>
                    </div>
                    <div class="card-body">
                        <h5>View User Profile</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6"> 
    
                                <form method="post" enctype="multipart/form-data">
                                  <?php
                                  $uid=$_GET['uid'];
                                      $sql="SELECT * FROM `login` where id='$uid'";
                                      $result=$con-> query($sql);
                                      while ($row=$result-> fetch_assoc())
                                      {

    
                                  ?>
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Name</label>
                                        <input type="text"  name="name" value="<?= $row['name']?>" class="form-control">
                                        
                                    </div>
                                      
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact Number</label>
                                        <input type="text" value="<?= $row['contactno']?>"  name="contact" class="form-control" >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" value="<?= $row['email']?>"  name="email" class="form-control" >
                                        
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date</label>
                                        <input type="text" value="<?= $row['date']?>"  name="date" class="form-control" >
                                        
                                    </div>
                                
                                    <button type="submit" class="btn  btn-primary" name="update" onclick="window.print()">Print</button>

                                    <?php } ?>
                                </form>
                            </div>
                           
                        </div>
                     
                   
                    </div>
                </div>
          
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>


    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>




</body>

</html>
