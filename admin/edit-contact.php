<?php
include('../code/conn.php');
// session_start();



if(isset($_POST['update']))
{
    extract($_POST);
    if($_GET['cid']==""){
        echo "<script>window.location='../index.php'</script>";
    }
    $cid=$_GET['cid'];
    $sql="UPDATE `contact` SET `name`='$name' WHERE id='$cid'";
    $qry=mysqli_query($con,$sql);
    if($qry){
        echo "<script>alert('Updated successfully...')</script>";
        echo "<script>window.location='edit-contact.php?cid=".$cid."'</script>";
    }
    else{
        echo "<script>alert('query error..')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS||Update Contact</title>
   

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
                            <h5 class="m-b-10">Update Contact</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin-profile.php">Update Contact</a></li>
                            
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
                        <h5>Update Contact</h5>
                    </div>
                    <div class="card-body">
                        <h5>Update Contact</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
    
                                <form method="post" enctype="multipart/form-data">
                                  
                                	
    <?php
    if($_GET['cid']==""){
        echo "<script>window.location='index.php'</script>";
    }
    $cid=$_GET['cid'];
    $sql1="SELECT * FROM `contact` WHERE `id`='$cid'";
    $qry1=mysqli_query($con,$sql1) or die("Query error");
    $row=mysqli_fetch_assoc($qry1);
    ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text"  name="name" value="<?=$row['name'];?>" class="form-control">
                                        
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email1</label>
                                        <input type="email"  name="email" value="<?=$row['emailhi'];?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email2</label>
                                        <input type="email" value="<?=$row['email_he'];?>"  name="email" class="form-control" >
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact Number1</label>
                                        <input type="text" value="<?= $row['contactNo1'];?>"  name="contact1" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact Number2</label>
                                        <input type="text" value="<?= $row['contactNo2'];?>"  name="contact2" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" value="<?=$row['address'];?>"  name="address" class="form-control" >
                                    </div>
                                
                                    <button type="submit" class="btn  btn-primary" name="update">Update</button>

                                

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
