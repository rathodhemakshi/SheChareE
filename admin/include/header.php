<?php 

if ($_SESSION['role']=="user") {
	// code...
	echo "<script>window.location='../user/profile.php';</script>";
}elseif ($_SESSION['role']=="") {
	// code...
		echo "<script>window.location='../';</script>";
}
elseif($_SESSION['role']=="")
{

		echo "<script>window.location='../';</script>";
}

$order="SELECT * from `orders` where order_status=''";
$o1=mysqli_query($con,$order);
$update=0;
while($orow=mysqli_fetch_array($o1)){
	$update=$update+1;
}
 ?>
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="dashboard.php" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<strong>SheCare Essentail</strong>
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
				
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">
									<i class="icon feather icon-bell"></i>
						
									<span class="badge badge-pill badge-danger"><?=$update;?></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
									
										<h6 class="d-inline-block m-b-0"> User Notifications</h6>
										
									</div>
									<ul class="noti-body">
										<?php
										$order="SELECT * from `orders` where order_status=''";
										$o1=mysqli_query($con,$order);
										
										
										
										
										while($orow=mysqli_fetch_array($o1)){
											$uid=$orow['user_id'];
											$user="SELECT * from `login`where id='$uid'";
											$u1=mysqli_query($con,$user);
											$urow=mysqli_fetch_array($u1);
											$p_id=$orow['p_id'];
											$pro="SELECT * from `products` where id='$p_id'";
											$p1=mysqli_query($con,$pro);

											?>
											<li class="notification">
											<a href="order_detail.php?id=<?= $orow['id']?>&p_id=<?=$p_id;?>" class="">
											<div class="media ">

												<img class="img-radius" src="../user/<?=$urow['image'];?>" alt="image" style="height:40px; width:40px;">
												<div class="media-body">

													<p><strong></strong><span class="n-time text-muted"></p>
													<h5 class="text-left"><?=$urow['name'];?></h5>
												</div>
											</div>
										
										</a>
										</li>
									
										<?php
										}
										?>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="../user/<?=$urow['image'];?>" style="height:40px; width:40px;" class="img-radius" alt="User-Profile-Image">

										<span></span>
										<a href="logout.php" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="admin-profile.php" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="setting.php" class="dropdown-item"><i class="feather icon-mail"></i> Settings</a></li>
										<li><a href="logout.php" class="dropdown-item"><i class="feather icon-lock"></i> Logout</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>