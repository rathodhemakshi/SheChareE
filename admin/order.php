<?php
// session_start();
include('../code/conn.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS|| Manage Users</title>
    <link rel="shortcut icon" href="../icone/pads_logo2.png" type="image/x-icon">


    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
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
                            <h5 class="m-b-10">Order</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="manage-users.php">Order</a></li>
                            
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
                        <h5>View and Update Orders Details</h5>
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
                                            <th>More Details</th>
                                                                            
                                        </tr>
                                </thead>
    <?php
          include("../code/conn.php");
      $sql="SELECT * from orders";
      $qry=mysqli_query($con,$sql);

       
      if($qry-> num_rows > 0)
    {
        while ($row=mysqli_fetch_array($qry)) 
        {           
                    $payment=$row['pay_status'];
                    $p_id=$row['p_id'];
                    $pro="SELECT * from `products` where id='$p_id'";
                    $pqr=mysqli_query($con,$pro);
                    $prow=mysqli_fetch_array($pqr);



        ?>
            <tr>
          <td><?=$row["id"]?></td>
          <td><img height='80px' src="<?=$prow['productImage'];?>"></td>
          <td><?=$row["name"]?></td>
          <td><?=$row["contactno"]?></td>
          <td><?=$row["order_date"]?></td>
          <td><?=$row["pay_method"]?></td>
          
                        <?php

                                if($row['order_status']=='Confirm'){
                        
                                echo' <td><a class="btn bg-success p-1 pl-3 pr-3" style="border-radius:20px; color:white;"><b>Confirm</b></a></td>';
                                }
                                else if($row['order_status']=='Cancle'){
                            
                                    echo '<td><a class="btn  btn-danger p-1 pl-3 pr-4 text-center"style="border-radius:20px; color:white;"> <b>Cancle </b></a></td>';
                                }       
                                else {
                                    echo '<td><a class="btn bg-warning p-1 pl-3 pr-3" style="border-radius:12px; color:white;"><b>InProcess</b></a></td>';
                                }
                                if($payment=='success'){
                                echo '
                                    <td><a class="btn bg-success p-1 pl-3 pr-3" style="border-radius:14px; color:white;"><b>Paid</b></a></td>
                                    
                                ';
                                }
                                else{
                                    echo '
                                    
                                    <td><a class="btn btn-danger p-1 pl-3 pr-3" style="border-radius:14px; color:white;"><b>Unpaid</b></a></td>
                                    ';
                                }
                        ?>
                        
                            
                                <td><a class="btn btn-primary openPopup" data-href="" href="order_detail.php?id=<?= $row['id']?>&p_id=<?=$row['p_id'];?>"><b>View</b></a></td>


                                </tr>
    <?php
        }
    }
    ?>
                                </tbody>
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
