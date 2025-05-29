<?php
// session_start();
    include("../code/conn.php");
    
                                    if(isset($_POST['submit']))
                                    {
                                    
                                        extract($_POST);

                                        $img=$_FILES['img']['tmp_name'];
                                        $path="uploads/".$_FILES['img']['name'];
                                            if(move_uploaded_file($img,$path))
                                            {

                                                $sql1="INSERT INTO `review` (`name`,`image`,`description`,`profession`) VALUES ('$uname','$path','$review','$pro');";

                                                $qry1=mysqli_query($con,$sql1) or die("Query error");
                                                echo "<script>alert('Insert successfully..');</script>";
                                            }
                                            else
                                            {
                                                echo "<script>alert('not selected image');</script>";
                                            }
                                    }
 ?>
    



<html>

<head>
    <title>SPMS|| User Review</title>
    <link rel="shortcut icon" href="../icone/pads_logo2.png" type="image/x-icon">

    <link rel="stylesheet" href="../admin/assets/css/style.css">
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
                            <h5 class="m-b-10">User Review</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="category.php">User Review</a></li>
                            
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
                        <h5>User Review</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
   
                                <form method="post"enctype="multipart/form-data">
                                	
                                    <?php
                                    if($_SESSION['uid']==""){
                                        echo "<script>window.location='../index.php'</script>";
                                    }
                                        // $id=$_GET['id'];
                                        $uid=$_SESSION['uid'];
                                        $sql="SELECT * FROM `login` where`id`='$uid'";
                                        $result=$con-> query($sql);
                                        while ($row=$result-> fetch_assoc()){
                                        
                                    ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Name</label>
                                        <input type="text"placeholder="Enter User Name" value="<?=$row['name'];?>" name="uname" class="form-control" required="true">
                                    </div>
                                    <?php
                                }
                                ?>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Review</label>
                                        <input type="text"placeholder="Enter User Reviwe"  name="review" class="form-control" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Profession</label>
                                        <input type="text"placeholder="Enter User Review"  name="pro" class="form-control" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label for="file">Choose Image</label>
                                        <input type="file" class="form-control-file" id="file" name="img">
                                    </div>
                                    
                                    <input type="submit" class="btn  btn-primary" name="submit" value="Add">
                                    
                                </form>
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
