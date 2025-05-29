<?php
    include("../code/conn.php");
    // session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS|| Service</title>
   
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
                            <h5 class="m-b-10">Service</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="subcategory.php">Service</a></li>
                            
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
                        <h5>Service</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
   
                                <form method="post"  enctype="multipart/form-data">
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Service Name</label>
                                        
                                        <input type="text" placeholder="Enter Product Name"  name="s_name" class="form-control" required>
                                    
                                    </div>

                                      <div class="form-group">

                                        <label for="exampleInputEmail1">Description</label>
                                        <input type="text" placeholder="Enter Description"  name="desc" class="form-control" required>
                                        <br>
                                        
                                        <label for="file">Choose Image</label>
                                        <input type="file" class="form-control-file" id="file" name="img">
                                        
                                    </div>
                                
                                    <button type="submit" class="btn  btn-primary" name="submit">Add Service</button>

                                    <?php
                                    if(isset($_POST['submit']))
                                    {
                                        
                                        extract($_POST);

                                            $img=$_FILES['img']['tmp_name'];
                                            $path="uploads/".$_FILES['img']['name'];
                                            if(move_uploaded_file($img,$path))
                                            {

                                                $sql="INSERT INTO `service` (`name`,`image`,`description`) VALUES ( '$s_name','$path','$desc');";
                                                $qry=mysqli_query($con,$sql) or die("Query error");
                                                echo "<script>alert(' Service Insert successfully..');</script>";
                                                
                                            }else
                                            {
                                                     echo "<script>alert('not selected image');</script>";
                                            }
                                            

                                            // $img=$_POST['img'];

                                    }
                                    ?>
                                    <?php
                                        if(isset($_GET['del']))
                                        {
                                            $sql="DELETE FROM `service` WHERE id = '".$_GET['sid']."'";
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
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            
                                        </tr>
                                </thead>
                                <?php
                                    $sql="SELECT * from `service`";
                                    $result=$con-> query($sql);
                                    $count=1;
                                    if ($result-> num_rows > 0){
                                      while ($row=$result-> fetch_assoc()) {


                                    ?>
                                <tbody>
                                    
                                        <tr>
                                            <td><?=$count?></td>
                                            <td><img height='80px' src='<?=$row["image"]?>'></td>
                                            <td><?=$row["name"]?></td>
                                            <td><?=$row["description"]?></td>

                                            <td>
                                            <a href="edit-service.php?sid=<?php echo $row['id']?>" class="btn  btn-icon btn-primary"><i class="feather icon-edit"></i></a>
                                            <a href="service.php?sid=<?php echo $row['id']?>&del=delete" class="btn  btn-icon btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="feather icon-delete"></i></a>
                                            </td>

                                        </tr>
                                        <?php
                                                $count=$count+1;
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
