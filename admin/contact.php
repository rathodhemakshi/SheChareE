<?php
include('../code/conn.php');
// session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS||Contact</title>
   

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
                            <h5 class="m-b-10">Admin Contact</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin-profile.php">Admin Contact</a></li>
                            
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
                        <h5>Admin Contact</h5>
                    </div>
                    <div class="card-body">
                        <h5>Admin Contact</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
    
                                <form method="post" enctype="multipart/form-data">
                                  
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text"  name="name" class="form-control">
                                        
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email1</label>
                                        <input type="email"  name="email1" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email2</label>
                                        <input type="email"  name="email2" class="form-control" >
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact Number1</label>
                                        <input type="text"   name="contact1" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact Number2</label>
                                        <input type="text"   name="contact2" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text"  name="address" class="form-control" >
                                    </div>
                                
                                    <button type="submit" class="btn  btn-primary" name="submit">Add</button>

                                    <?php
                                    if(isset($_POST['submit']))
                                    {
                                        extract($_POST);
                                    
                                        $sql1="INSERT INTO `contact` (`name`,`emailhi`,`email_he`,`contactNo1`,`contactNo2`,`address`) VALUES('$name','$email1','$email2','$contact1','$contact2','$address')";

                                        $qry=mysqli_query($con,$sql1) or die("Query error");
                                        echo "<script>alert('Insert successfully..');</script>";
                                    }
                                    if(isset($_GET['del']))
                                        {
                                                $sql1="DELETE FROM contact WHERE id = '".$_GET['cid']."'";
                                                $qry1=mysqli_query($con,$sql1) or die("Query error");
                                        }

                                    ?>
                                

                                </form>
                            </div>
                           
                        </div>
                        <div class="card">
                    <div class="card-header">
                        <h5>Contact Us</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Email1</th>
                                            <th class="text-center">Email2</th>
                                            <th class="text-center">Contact No1</th>
                                            <th class="text-center">Contact No1</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                </thead>
                                <?php
                                    $sql="SELECT * from contact";
                                    $result=$con-> query($sql);
                                    $count=1;
                                    if ($result-> num_rows > 0){
                                      while ($row=$result-> fetch_assoc()) {


                                    ?>
                                <tbody>
                                    
                                        <tr>
                                            <td class="text-center"><?=$count?></td>
                                            <td class="text-center"><?=$row['name']?></td>
                                            <td class="text-center"><?=$row['emailhi']?></td>
                                            <td class="text-center"><?=$row['email_he']?></td>
                                            <td class="text-center"><?=$row['contactNo1']?></td>
                                            <td class="text-center"><?=$row['contactNo2']?></td>
                                            <td class="text-center"><?=$row['address']?></td>
                                            <td>
                                            <a href="edit-contact.php?cid=<?php echo $row['id']?>" class="btn  btn-icon btn-primary"><i class="feather icon-edit"></i></a>

                                            <a href="contact.php?cid=<?php echo $row['id']?>&del=delete" class="btn  btn-icon btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="feather icon-delete"></i></a>
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
