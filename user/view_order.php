<?php
// session_start();
include('../code/conn.php');
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS||View Order</title>
   
    <link rel="shortcut icon" href="../icone/pads_logo2.png" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">
    
 <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>   

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
                            <h5 class="m-b-10">View Order</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="manage-users.php">View Order</a></li>
                            
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
                 
                    <div class="card-body">
                        <h5>View Orders Details</h5>
                        <hr>
                       
                      <div class="row">
                            <div class="col-xl-12">
                <div class="card">
                   
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Image</th>
                                            <th>Customer</th>
                                            <th>Contact</th>
                                            <th>OrderDate</th>
                                            <th>Payment Method</th>
                                            <th>Order Status</th>
                                            <th>Payment Status</th>
                                                                            
                                        </tr>
                                </thead>
        <?php
            if($_SESSION['uid']==""){
                echo "<script>window.location='../index.php'</script>";
            }
          $uid=$_SESSION['uid'];
          $sql="SELECT * from orders where `user_id`=$uid";
          $qry=mysqli_query($con,$sql);
          
      
      if ($qry-> num_rows > 0)
      {
         while ($row=mysqli_fetch_array($qry)) 
         {
            $p_id=$row['p_id'];
            $product="SELECT * from `products` where id='$p_id'";
            $pqr=mysqli_query($con,$product);
            $prow=mysqli_fetch_array($pqr);
    ?>
       <tr>
          <td><?=$row["id"]?></td>
          <td><img height='80px' src="../admin/<?=$prow['productImage'];?>"></td>
          <td><?=$row["name"]?></td>
          <td><?=$row["contactno"]?></td>
          <td><?=$row["order_date"]?></td>
          <td><?=$row["pay_method"]?></td>
          <td><?=$row["order_status"]?></td>

        </tr>
        <?php
        }
    }
    ?>               
                                <!-- </tbody> -->
         </table>
      
                        </div>
                    </div>
                </div>
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
