<?php
// session_start();
include('../code/conn.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS|| Manage Users</title>
    <link rel="shortcut icon" href="../icone/pads_logo2.png" type="image/x-icon">

   

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
 <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>   

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
                            <h5 class="m-b-10">Manage Users</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="manage-users.php">Manage Users</a></li>
                            
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
                 
                    <div class="card-body">
                        <h5>View and Update Users Details</h5>
                        <hr>
                       
                      <div class="row">
                            <div class="col-xl-12">
                <div class="card">
                   
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email </th>
                                            <th>Contact no</th>
                                            <th>Reg. Date </th>
                                            <th>Action</th>
                                        
                                        </tr>
                                </thead>
                                <?php
                                     $sql="SELECT * from `login`where `role`='user'";
                                     $result=$con-> query($sql);
                                     $count=1;
                                     if ($result-> num_rows > 0){
                                       while ($row=$result-> fetch_assoc()) {
                                ?>
                                 <?php
                                        if(isset($_GET['del']))
                                        {
                                                $sql1="DELETE FROM `login` WHERE id = '".$_GET['uid']."'";
                                                $qry1=mysqli_query($con,$sql1) or die("Query error");
                                        }
                                    ?>
                                <tbody>
  
                                        <tr>
                                            <td class="text-center"><?=$count?></td>
                                            <td class="text-center"><?=$row['name']?></td>
                                            <td class="text-center"><?=$row['email']?></td>
                                            <td class="text-center"><?=$row['contactno']?></td>
                                            <td class="text-center"><?=$row['date']?></td>
                                            

<td><a href="userprofile.php?uid=<?= $row['id']?>" title="View Details" class="btn btn-primary  btn-xs">View Detials</a>
<a href="manage-users.php?u id=<?= $row['id']?>&del=delete" title="Delete" onclick="return confirm('Are you sure you want to delete?')" title="Delete" class="btn btn-danger">Delete</a>

<!-- <a href="user/view_order.php"  class="btn btn-info  btn-xs">Order_Detalis</a> -->
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
