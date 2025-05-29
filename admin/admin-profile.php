<?php
include('../code/conn.php');
// session_start();

if($_SESSION['uid']==""){
    echo "<script>window.location='../index.php'</script>";
}
$uid=$_SESSION['uid'];
        $ss="SELECT `id`, `name`, `email`, `contactno`, `password`, `role`, `date`, `image`, `address` FROM `login` WHERE id='$uid';";

        $r=mysqli_query($con,$ss) or die("Query error");
        $c_f=mysqli_fetch_assoc($r);
        extract($c_f);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS||Admin Profile</title>
   

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
                            <h5 class="m-b-10">Admin Profile</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin-profile.php">Admin Profile</a></li>
                            
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
                        <h5>Admin Profile</h5>
                    </div>
                    <div class="card-body">
                        <h5>View and Update Your Profile</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
    
                                <form method="post" enctype="multipart/form-data">
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin userName(used for login)</label>
                                        <input type="text"  name="name" class="form-control" value="<?= $name; ?>"="<?= $name; ?>">
                                        
                                    </div>
                                      
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact Number</label>
                                        <input type="text" value="<?= $contactno; ?>"  name="contact" class="form-control" >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" value="<?= $email; ?>"  name="email" class="form-control" >
                                        
                                    </div>

                                    <div class="form-group">   
                                        <label for="file">Choose Image</label>
                                        <input type="file" class="form-control-file" id="file" name="file">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" value="<?= $address; ?>"  name="address" class="form-control" >
                                        
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="exampleInputPassword1">Reg. Date</label>
                                        <input type="text" value="<?= $name; ?>"  name="regdate" class="form-control" readonly>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Profile Last Updation Date</label>
                                        <input type="text" value="<?= $name; ?>"  name="updatedate" class="form-control" readonly>
                                    </div> -->
                                
                                    <button type="submit" class="btn  btn-primary" name="update">Update</button>

                                    <?php
                                        if(isset($_POST['update']))
                                        {
                                            extract($_POST);
                                            $uid=$_SESSION['uid'];
                                            $img=$_FILES['file']['tmp_name'];
                                            $path="uploads/".$_FILES['file']['name'];
                                            if(move_uploaded_file($img,$path))
                                            {
                                                $sql="UPDATE `login` SET `name`='$name',`contactno`='$contact',
                                                `email`='$email',`image`='$path',`address`='$address' WHERE `id`=$uid";
                                            }
                                            else{
                                                $sql="UPDATE `login` SET `name`='$name',`contactno`='$contact',
                                                `email`='$email',`address`='$address' WHERE `id`=$uid";   
                                            }

                                            $qry=mysqli_query($con,$sql);
                                            if($qry){
                                                echo "<script>alert('Admin Profile Update successfully...')</script>";
                                                echo "<script>window.location='admin-profile.php?id=".$uid."'</script>";
                                            }
                                            else{
                                                echo "<script>alert('query error..')</script>";
                                            }
                                        }
                                    ?>
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
