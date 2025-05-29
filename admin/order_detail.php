<?php
    include("../code/conn.php");
    // session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS|| Order_Detail</title>
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
                            <h5 class="m-b-10">Order Detail</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="subcategory.php">Order Detail</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
          
            <!-- [ form-element ] start -->
        <div class="row">
                        <form method="post">
                            <style>
                                .card-box .card{
                                    width: 980px;
                                    height:500px;
                                }
                            </style>
                            <div class="col-xl-12 card-box">
                <div class="card">
                    <div class="card-header" >
                        <h5>Order Detail</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <!-- <label for="">Name</label>"> -->
                            <table class="table table-striped"> 
                                 <thead>
                                    <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Product Image</th>
                                            <th>Customer</th>
                                            <th>Contact</th>
                                            <th>OrderDate</th>
                                            <th>Payment Method</th>
                                            <th>Order Status</th>
                                            <th>Payment Status</th>
                                             <!-- <th>Action</th>  -->
                                         </tr>
                                </thead> 
                                <?php
                                $id=$_GET['id']; 
                                if(!$_GET['id']){
                                    echo "<script>window.location='../index.php'</script>";
                                }
                                $sql="SELECT * from orders where id='$id'";
                                $result=$con-> query($sql);
                                $count=0; 
                                if ($result-> num_rows > 0){
                                  while ($row=$result-> fetch_assoc()) {
                                    $count++; 
                              ?>
                            
                                <tbody>
                                
                                <?php
                                    if(!isset($_GET['p_id'])){
                                        echo 'hyy';
                                    }
                                    else{
                                    
                                        $pid=$_GET['p_id'];
                                        if(!$_GET['p_id']){
                                            echo "<script>window.location='../index.php'</script>";
                                        }
                                        $sql1="SELECT * from `orders` where p_id='$pid'";
                                        $qry=mysqli_query($con,$sql1);
                                        $row1=mysqli_fetch_array($qry);

                                        $product="SELECT * from `products` where id='$pid'";
                                        $pqr=mysqli_query($con,$product);
                                        $prow=mysqli_fetch_array($pqr);
                                    
                                ?>
                                        <tr>
                                            <td><?=$count;?> </td>
                                            <td><img height='80px' src="<?=$prow['productImage'];?>"></td>
                                            <td><?=$pid;?></td>
                                            <td><?=$row['contactno'];?></td>
                                            <td><?=$row["order_date"]?></td>
                                            <td><?=$row["pay_method"]?></td>
                                            <td><?=$row["order_status"]?></td>
                                            <td><?=$row["pay_status"]?></td>
                                            <td>
                                            

                                        </tr>
                                   <?php
                                  }
                                }
                                ?>
                                </tbody>
                            </table>
                            <br><br><br><br><br><br>
                            <a href="order.php" class="btn btn-primary "><b>Back</b></a>
                            <a href="../status.php?confrom=<?=$_GET['id'];?>" class="btn btn-primary ml-2"><b>Confrom</b></a>
                            <a href="../status.php?cancle=<?=$_GET['id'];?>" class="btn btn-primary ml-2"><b>Cancle</b></a>
                        </div>
                    </div>
                </div>
            </div>
                           
                 <?php
                                       }
                                       ?>       
                                       </div>
                   
                    </div>
                </div>
          
            </div>
            <!-- [ form-element ] end -->
                                    </form>
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
