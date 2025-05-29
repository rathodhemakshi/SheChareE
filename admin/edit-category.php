<?php
include('../code/conn.php');
// session_start();

if(isset($_POST['update']))
{
    extract($_POST);
    if($_GET['catid']==""){
        echo "<script>window.location='../index.php'</script>";
    }
    $catid=$_GET['catid'];
    $sql="UPDATE category SET category_name='$category' WHERE category_id='$catid'";
    $qry=mysqli_query($con,$sql);
    if($qry){
        echo "<script>alert(' Category Updated successfully...')</script>";
        echo "<script>window.location='edit-category.php?catid=".$catid."'</script>";
    }
    else{
        echo "<script>alert('query error..')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS||Update Category</title>
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
                            <h5 class="m-b-10">Update Category</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="category.php">Update Category</a></li>
                            
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
                        <h5>Update Category</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

   

    <?php
    if($_GET['catid']==""){
        echo "<script>window.location='../index.php'</script>";
    }
    $catid=$_GET['catid'];
    $sql="SELECT * FROM category WHERE category_id=$catid";
    $qry=mysqli_query($con,$sql) or die("Query error");
    $row=mysqli_fetch_assoc($qry);
    ?>
  
                                <form method="post">

                                
                                <div class="form-group">
                                        <!-- <label for="exampleInputEmail1">Caregory Id</label> -->
                                        <input type="text" value="<?php echo $row['category_id']?>"  name="id" class="form-control" required hidden>
                                    </div>
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" value="<?php echo$row['category_name']?>"  name="category" class="form-control" required>
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
