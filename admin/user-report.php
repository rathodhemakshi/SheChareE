<?php

include('../code/conn.php');
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS|| Users Report</title>
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
                            <h5 class="m-b-10">Users Report</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="between-date-userreport.php">Between Dates Users Report</a></li>
                            
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
                       <h5>Users Report</h5>
                        <hr>
                       <div class="card-body">
<form  method="post">                                
<div class="row">
<div class="col-2">From Date</div>
<div class="col-4"><input type="date"  name="fromdate" class="form-control" required></div>
</div>

<div class="row" style="margin-top:1%;">
<div class="col-2">To Date</div>
<div class="col-4"><input type="date"  name="todate" class="form-control" required></div>
</div>

<div class="row" style="margin-top:1%;">
<div class="col-6" align="center"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
</div>

</form>
                            </div>
                      <div class="row">
                            <div class="col-xl-12">
                <div class="card">
 <?php if (isset($_POST['submit'])) { 
            $fdate=$_POST['fromdate'];
            $tdate=$_POST['todate'];
?>
  
<br>
     <h4 align="center" style="color:#2c3e50">Orders Report Form <?= $fdate;?> To <?= $tdate;?></h4>
<hr />
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
                                      
                                    $sql="SELECT * from `login`  where `date` between '$fdate' and '$tdate' and `role`='user'";
                                    $result=$con-> query($sql);
                                        if ($result-> num_rows > 0){
                                        while ($row=$result-> fetch_assoc()) {
                                            $cnt++;

                                ?>
                                <?php
                                        if(isset($_GET['del']))
                                        {
                                                $sql1="DELETE FROM `login` WHERE id = '".$_GET['id']."'";
                                                $qry1=mysqli_query($con,$sql1) or die("Query error");
                                        }
                                    ?>
                                <tbody>
  
                                        <tr>
                                           <td><?=$cnt?></td>
                                           <td><?=$row["name"]?></td>
                                           <td><?=$row["email"]?></td>
                                           <td><?=$row["contactno"]?></td>
                                           <td><?=$row["date"]?></td>

<td><a href="userprofile.php?uid=<?= $row['id']?>" title="View Details">
<button type="button" class="btn btn-primary">View Detials</button>
                                            </a>
<a href="user-report.php?uid=<?= $row['id']?>&del=delete" title="Delete" onclick="return confirm('Are you sure you want to delete?')">
<button type="button" class="btn btn-danger">Delete</button></a>

                                        </td>
                                            
                                        <?php } ?> 
                                        </tr>
                                        <?php  } } ?>
                                   
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
