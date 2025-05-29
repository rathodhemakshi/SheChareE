<?php
// session_start();
    include("../code/conn.php");
    

?>

<html>

<head>
    <title>SPMS|| Dashboard</title>
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
                            <h5 class="m-b-10">Category</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="category.php">Category</a></li>
                            
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
                    <!-- <div class="card-header">
                        <h5>Category</h5>
                    </div> -->
                    <div class="card-body">
                        <div class="row">
                            <?php
                                    if(isset($_GET['del']))
                                        {
                                                $sql1="DELETE FROM category WHERE category_id = '".$_GET['catid']."'";
                                                $qry1=mysqli_query($con,$sql1) or die("Query error");
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
                        <h5>Categories</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Category</th>
                                            <th class="text-center">Creation date</th>
                                            <th class="text-center">Last Updated</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                </thead>
                                    <?php
                                    $sql="SELECT * from category";
                                    $result=$con-> query($sql);
                                    $count=1;
                                    if ($result-> num_rows > 0){
                                      while ($row=$result-> fetch_assoc()) {


                                    ?>
                                <tbody>
                                    
                                        <tr>
                                            <td class="text-center"><?=$count?></td>
                                            <td class="text-center"><?=$row["category_name"]?></td>
                                            <td class="text-center"><?=$row["creationDate"]?></td>
                                            <td class="text-center"><?=$row["updationDate"]?></td>
                                            <td class="text-center">
                                            <a href="edit-category.php?catid=<?php echo $row['category_id']?>" class="btn btn-icon btn-primary btn-xs"><i class="feather icon-edit"></i></a>
                                            <a href="category.php?catid=<?php echo $row['category_id']?>&del=delete" class="btn  btn-icon btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="feather icon-delete"></i></a></td>

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
