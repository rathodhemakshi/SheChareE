
<?php 
// include('../code/conn.php');
if ($_SESSION['role']=="admin") {
	// code...
	echo "<script>window.location='../admin/dashboard.php';</script>";
}elseif ($_SESSION['role']=="") {
	// code...
		echo "<script>window.location='../';</script>";
}

 ?><header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
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
				</div>
				
			
	</header>