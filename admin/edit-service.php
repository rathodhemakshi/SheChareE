<?php
include('../code/conn.php');
// session_start();

if(isset($_POST['update']))
{
    extract($_POST);
    if($_GET['sid']==""){
        echo "<script>window.location='../index.php'</script>";
    }
    $sid=$_GET['sid'];
    $sql="UPDATE `service` SET `name`='$name' ,`description`='$desc' WHERE id='$sid'";
    $qry=mysqli_query($con,$sql);
    if($qry){
        echo "<script>alert('Updated successfully...')</script>";
        echo "<script>window.location='edit-service.php?sid=".$sid."'</script>";
    }
    else{
        echo "<script>alert('query error..')</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS||Update Service</title>
   

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
                            <h5 class="m-b-10">Update Service</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="category.php">Update Service</a></li>
                            
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
                        <h5>Update Service</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

   

    <?php
    $sid=$_GET['sid'];
    $sql="SELECT * FROM `service` WHERE id=$sid";
    $qry=mysqli_query($con,$sql) or die("Query error");
    $row=mysqli_fetch_assoc($qry);
    ?>
  
                                <form method="post">
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Name</label>
                                        <input type="text" value="<?=$row['name']?>"name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <input type="text" value="<?=$row['description']?>"name="desc" class="form-control" required>
                                    </div>
                                    
                                       
                                
                                    <input type="submit" class="btn  btn-primary" name="update"/>
                                    

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
