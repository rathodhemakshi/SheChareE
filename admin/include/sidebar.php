<?php 
	// include("../code/conn.php");
	// session_start();

 ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS||Admin Profile</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
		
		<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
	<!-- admin profile -->
	 <?php
	 if($_SESSION['uid']==""){
		echo "<script>window.location='../index.php'</script>";
		}
		$uid=$_SESSION['uid'];
		$sql1="SELECT * FROM `login` where id=$uid;";
		$qry1=mysqli_query($con,$sql1);
		$row=mysqli_fetch_assoc($qry1);

	 ?>

	<!-- admin profile -->
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" width="50%" height="50px" src="<?= $row['image']?>" alt="User-Profile-Image">
						<div class="user-details">
						
							<span><?= $row['name']?></span>
							<div id="more-details"><?= $row['email']?><i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="admin-profile.php"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="setting.php"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="logout.php"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Admin Management</label>
					</li>
					<li class="nav-item">
					    <a href="dashboard.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					
					<li class="nav-item">
					    <a href="category.php" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-layer-group"></i></span><span class="pcoded-mtext">Add Category</span></a>
					</li>
					<li class="nav-item">
					    <a href="product.php" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-hand-holding-heart"></i></span><span class="pcoded-mtext">Add Products</span></a>
					</li>
					<li class="nav-item">
					    <a href="admin-gallary.php" class="nav-link "><span class="pcoded-micon"><i class="fa-regular fa-image"></i></span><span class="pcoded-mtext">Gallary</span></a>
					</li>
					<li class="nav-item">
					    <a href="service.php" class="nav-link "><span class="pcoded-micon"><i class="fa-regular fa-comment"></i></span><span class="pcoded-mtext">Service</span></a>
					</li>
					<li class="nav-item">
					    <a href="contact.php" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-square-phone"></i></span><span class="pcoded-mtext">Contact</span></a>
					</li>
					<li class="nav-item">
					    <a href="manage-users.php" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-user-tie"></i></span><span class="pcoded-mtext">Manage Users</span></a>
					</li>
					<li class="nav-item">
					    <a href="order.php" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-cart-shopping"></i></span><span class="pcoded-mtext">Order</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Reports</label>
					</li>
					<li class="nav-item">
					    <a href="user-report.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">User Reports</span></a>
					</li>
					
					<li class="nav-item pcoded-menu-caption">
						<label>Search</label>
					</li>
					<li class="nav-item">
					    <a href="user-search.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-search"></i></span><span class="pcoded-mtext">User Search</span></a>
					</li>
					<!-- <li class="nav-item">
					    <a href="complaint-search.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-search"></i></span><span class="pcoded-mtext">Search Complaint</span></a>
					</li> -->
					

				</ul>
				
		
				
			</div>
		</div>
	</nav>
	</html>