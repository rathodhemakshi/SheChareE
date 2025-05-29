<?php
// session_start();
    include("../code/conn.php");
    

?>

<html>

<head>
    <title>SPMS||Gallary</title>
    <link rel="stylesheet" href="../admin/assets/css/style.css">
    <link rel="shortcut icon" href="../icone/pads_logo2.png" type="image/x-icon">

    <!-- <link href="../img/favicon.ico" rel="icon"> -->

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
                            <h5 class="m-b-10">Gallary</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="category.php">Gallary</a></li>
                            
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
                        <h5>Gallary</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
   
                                <form method="post"enctype="multipart/form-data">
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text"placeholder="Enter User Name"  name="name" class="form-control" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label for="file">Choose Image</label>
                                        <input type="file" class="form-control-file" id="file" name="img">
                                    </div>
                                    
                                    <button type="submit" class="btn  btn-primary" name="submit">Add</button>
                                    <?php
                                    if(isset($_POST['submit']))
                                    {
                                        
                                        extract($_POST);


                                        $img=$_FILES['img']['tmp_name'];
                                        $path="uploads/".$_FILES['img']['name'];
                                            if(move_uploaded_file($img,$path))
                                            {

                                                $sql="INSERT INTO `gallary` (`name`,`image`) VALUES ( '$name', '$path');";

                                            $qry=mysqli_query($con,$sql) or die("Query error");
                                            echo "<script>alert('Insert successfully..');</script>";
                                            echo "<script>alert('successfully ');</script>";
                                            }else{
                                            echo "<script>alert('not selected image');</script>";
                                            }
                                        
                                    }
                                    ?>
                                    
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
