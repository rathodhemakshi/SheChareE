<?php

include('../code/conn.php');
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS|| Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="../icone/pads_logo2.png" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="favicon.ico" rel="icon">

    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
<?php include('include/sidebar.php');?>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<?php include('include/header.php');?>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- table card-1 start -->
            <div class="col-md-12 col-xl-4">
         
                <!-- widget primary card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                        <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div class="col-sm-9">
                            

                            <h4></h4>
                            <a href="manage-users.php"><h6>Total Users</h6></a>
                            <?php
                                $sql="SELECT * from `login` where `role`='user'";
                                $result=$con-> query($sql); 
                                $count=0;
                                if ($result-> num_rows > 0){
                                    while ($row=$result-> fetch_assoc()) {
                            
                                        $count=$count+1;
                                    }
                                }
                                echo $count;
                            ?>
                        </div>
                    </div>
                </div>
                <!-- widget primary card end -->
            </div>
            <!-- table card-1 end -->
            <!-- table card-2 start -->
            <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <div class="card flat-card bg-warning" style="height: 150px; ">
                    <div class="row-table "style="background-color:#fff; border-radius: 10px;">
                        <div class="col-sm-3 card-body">
                        <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <div class="col-sm-9">
                            

                            <h4></h4>
                            <a href="total-category.php"><h6>Total Category</h6></a>
                            <?php
                       
                       $sql="SELECT * from category";
                       $result=$con-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
              <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                        <i class="fa-solid fa-hand-holding-heart"></i>                                      </div>
                        <div class="col-sm-9">
                           
                            <h4></h4>
                            <a href="total-product.php"><h6>Total Products</h6></a>
                            <?php
                                $sql="SELECT * from products";
                                $result=$con-> query($sql);
                                $count=0;
                                if ($result-> num_rows > 0){
                                    while ($row=$result-> fetch_assoc()) {
                            
                                        $count=$count+1;
                                    }
                                }
                                echo $count;
                            ?>
                        
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-2 end -->
           
              <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                        <i class="fa-solid fa-cart-shopping"></i>                       
                    </div>
                        <div class="col-sm-9">
  
                            <h4></h4>
                            <a href="order.php"><h6>Total Order</h6></a>
                            <?php
                                $sql="SELECT * from `orders`";
                                $result=$con-> query($sql); 
                                $count=0;
                                if ($result-> num_rows > 0){
                                    while ($row=$result-> fetch_assoc()) {
                            
                                        $count=$count+1;
                                    }
                                }
                                echo $count;
                            ?>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
              <div class="col-md-12 col-xl-4" style="border-radius: 10px;">
                
                <!-- widget-success-card start -->
                <!-- <div class="card flat-card bg-danger "style="height: 150px; ">
                    <div class="row-table "style="background-color:#fff; border-radius: 10px;">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
  
                            <h4></h4>
                            <a href="notprocess-complaint.php"><h6>Pending Order</h6></a>
                        </div>
                    </div>
                </div> -->
                <!-- widget-success-card end -->
            </div>
              
              <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <!-- <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
  
                            <h4></h4>
                            <a href="closed-complaint.php"><h6>Closed Order</h6></a>
                        </div>
                    </div>
                </div> -->
                
                <!-- widget-success-card end -->
            </div>
     
            </div>
        
        
            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
</body>

</html>
