<?php
include('../code/conn.php');
// session_start();



if(isset($_POST['update']))
{
    extract($_POST);
    if($_GET['pid']==""){
        echo "<script>window.location='../index.php'</script>";
    }
    $pid=$_GET['pid'];
    $sql="UPDATE `products` SET `productName`='$product' WHERE id='$pid'";
    $qry=mysqli_query($con,$sql);
    if($qry){
        echo "<script>alert('Product Updated successfully...')</script>";
        echo "<script>window.location='edit-product.php?pid=".$pid."'</script>";
    }
    else{
        echo "<script>alert('query error..')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS||Edit Product</title>
   

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="../icone/pads_logo2.png" type="image/x-icon">

    
    

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
                            <h5 class="m-b-10">Edit Product</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="subcategory.php">Edit Product</a></li>
                            
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
                        <h5>Edit Product</h5>
                    </div>
                    <div class="card-body">
                        <h5>View and Edit Product</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
  
                                <form method="post">

    <?php
    if($_GET['pid']==""){
        echo "<script>window.location='../index.php'</script>";
    }
    $pid=$_GET['pid'];
    $sql1="SELECT * FROM products WHERE id='$pid'";
    $qry1=mysqli_query($con,$sql1) or die("Query error");
    $row=mysqli_fetch_assoc($qry1);
    ?>
                                    

                                    <br />
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        
                                        <select name="category" class="form-control" required>
                                        <option value>select category</option>
                                        <?php

                                        $sql="SELECT * from category";
                                        $result = $con-> query($sql);


                                        if ($result-> num_rows > 0){
                                            while($row1 = $result-> fetch_assoc()){
                                            echo"<option value='".$row1['category_id']."'>".$row1['category_name'] ."</option>";
                                            }
                                        }
                                        ?>
                                        </select>
                                        
                                    </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input type="text" value="<?= $row['productName']?>"  name="product" class="form-control" required>

                                    </div>
                                       
                                
                                    <button type="submit" class="btn  btn-primary" name="update">Submit</button>
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
