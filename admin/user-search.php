<?php

include('../code/conn.php');
// session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS|| Users Search</title>
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
                            <li class="breadcrumb-item"><a href="user-search.php">Users Search</a></li>
                            
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
                       <h5>Users Search</h5>
                        <hr>
                       <div class="card-body">
<form  method="post">                                
<div class="row">
<div class="col-2">Search</div>
<div class="col-4">
<input class="form-control" type="search" name="search" placeholder="Search By Mobile Number/Name/Email" required="true"></div>
</div>



<div class="row" style="margin-top:1%;">
<div class="col-6" align="center"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
</div>

</form>

                <?php
                    if(isset($_POST['submit']))
                    {
                        $search=$_POST['search'];
                
                ?>
                </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
  
<br>
     <h4 align="center" style="color:#2c3e50">Search agianst: <?= $search;?></h4>
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
                                <tbody>
                                    <?php
                                        $sql="SELECT * from `login` where  `role`='user' AND (contactNo like '%$search%'|| name like '%$search%'|| email like '%$search%')";
                                        $result=$con-> query($sql);
                                        if ($result-> num_rows > 0){
                                        while ($row=$result-> fetch_assoc()) {
                                            $cnt++;
                                    ?>
                                    <?php
                                        if(isset($_GET['del']))
                                        {
                                                $sql1="DELETE FROM `login` WHERE id = '".$_GET['uid']."'";
                                                $qry1=mysqli_query($con,$sql1) or die("Query error");
                                        }
                                    ?>
                                        <tr>
                                            <td><?=$cnt?></td>
                                            <td><?=$row["name"]?></td>
                                            <td><?=$row["email"]?></td>
                                            <td><?=$row["contactno"]?></td>
                                            <td><?=$row["date"]?></td>

<td><a href="userprofile.php?uid=<?= $row['id']?>"  title="View Details">
<button type="button" class="btn btn-primary">View Detials</button>
                                            </a>
<a href="user-search.php?uid=<?= $row['id']?>&del=delete" onclick="return confirm('Are you sure you want to delete?')" title="Delete">
<button type="button" class="btn btn-danger">Delete</button></a>

                                        </td>
                                            

                                        </tr>
                                            <tr>
 <tr>
<!-- <td colspan="6" style="color:red; font-size:16px;">No record found</td> -->
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
<?php }?>

