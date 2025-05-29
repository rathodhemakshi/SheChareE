<?php
    include("../code/conn.php");
    // session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS|| Products</title>
   
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
                            <h5 class="m-b-10">Products</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="subcategory.php">Products</a></li>
                            
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
                    
                    <!-- <div class="card-body">/ -->
                        <div class="row">
                            <div class="col-md-10">
   
                                <form method="post"  enctype="multipart/form-data">
                                	
                                    <?php
                                        if(isset($_GET['del']))
                                        {
                                            $sql="DELETE FROM products WHERE id = '".$_GET['pid']."'";
                                            $qry=mysqli_query($con,$sql) or die("Query error");
                                        }
                                    ?>
                                </form>
                            </div>
                           
                        </div>
                     <hr>
            <div class="row">
                            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Products Items</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Product Image</th>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                            <th>Category_name</th>
                                            <th>Price</th>
                                            <th>Creation date</th>
                                            <th>Last Updated</th>
                                            <th>Action</th>
                                        </tr>
                                </thead>
                                <?php

                                    $sql="SELECT `id`, `productName`, `productPrice`, `productDescription`, `productImage`, `shippingCharge`, `category_id`, `postingTime`, `updationTime` FROM `products`";

                                    $qry=mysqli_query($con,$sql) or die("Query error");    
                                    $count=0;   
                                ?> 
                                <tbody>
                                    
                                    <?php 

                                    while($row=mysqli_fetch_assoc($qry))
                                    {
                                        $count++;

                                        $sql2="SELECT `category_id`, `category_name`, `creationDate`, `updationDate` FROM `category` WHERE category_id='{$row['category_id']}';";

                                    $qry2=mysqli_query($con,$sql2) or die("Query error");
                                    $c_f=mysqli_fetch_assoc($qry2);

                                     ?>
                                        <tr>
                                            <td><?=$count?></td>
                                            <td><img height='80px' src='<?=$row["productImage"]?>'></td>
                                            <td><?=$row["productName"]?></td>
                                            <td><?=$row["productDescription"]?></td>
                                            <td><?=$c_f["category_name"]?></td>
                                            <td><?=$row["productPrice"]?></td>
                                            <td><?=$row["postingTime"]?></td>
                                            <td><?=$row["updationTime"]?></td>
                                            <td>
                                            <a href="edit-product.php?pid=<?= $row['id']?>" class="btn  btn-icon btn-primary"><i class="feather icon-edit"></i></a>
                                            <a href="product.php?pid=<?= $row['id']?>&del=delete" class="btn  btn-icon btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="feather icon-delete"></i></a>
                                            </td>

                                        </tr>
                                        <?php } ?>
                                   
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
