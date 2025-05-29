<?php 
	// include("code/conn.php");
	// session_start();

 ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPMS||User Profile</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
	<!-- vendor profile -->
	<?php
		if($_SESSION['uid']==""){
			echo "<script>window.location='../index.php'</script>";

		}
		
		$uid=$_SESSION['uid'];
	
		
		$sql1="SELECT * FROM `login` where id='$uid';";
		$qry1=mysqli_query($con,$sql1);
		$row=mysqli_fetch_assoc($qry1);
	 ?>

	<!-- vendor profile -->
				<div class="">
					<div class="main-menu-header">

						<img class="img-radius" src="<?= $row['image']?>" alt="User-Profile-Image">
						<div class="user-details">
								
							<span><?= $row['name']?></span>
							<div id="more-details"><?= $row['email']?></div>
						</div>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>User Side</label>
					</li>
					<li class="nav-item">
					    <a href="profile.php" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-user"></i></i></span><span class="pcoded-mtext">Profile</span></a>
					</li>
					
					<li class="nav-item">
					    <a href="user-review.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Review</span></a>
					</li>

					<li class="nav-item">
					    <a href="view_order.php" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-cart-shopping"></i></span><span class="pcoded-mtext">Order</span></a>
					</li>

					<li class="nav-item">
					    <a href="payment.php" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-money-check-dollar"></i></span><span class="pcoded-mtext">Payment</span></a>
					</li>
					
					<li class="nav-item">
					    <a href="setting.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-settings m-r-5"></i></span><span class="pcoded-mtext">Setting</span></a>
					</li>

					<li class="nav-item">
					    <a href="logout.php" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-right-from-bracket"></i></span><span class="pcoded-mtext">Logout</span></a>
					</li>

				</ul>
				
		
				
			</div>
		</div>
	</nav>