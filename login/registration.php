<?php
	include("../code/conn.php");
	// session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>SPMS | User Regsitrations</title>
	<link rel="stylesheet" href="../admin/assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style.css">


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
				<h4>SheCare Essential Management System<hr /><span style="color:#fff;" class="shadow"> User Registration</span></h4>
				<hr />
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<form method="post">
						
					<div class="card-body">
				
				
						<div class="form-group mb-3">
							
							<input type="text" class="form-control" placeholder="Full Name" name="uname" required="required" autofocus>
						</div>
						<div class="form-group mb-4">
							
							<input type="email" class="form-control" placeholder="Email ID" id="email" onBlur="userAvailability()" name="email" required="required">
		             <span id="user-availability-status1" style="font-size:12px;"></span>
						</div>
						<div class="form-group mb-3">
							
							<input type="text" class="form-control" maxlength="10" name="conno" placeholder="Contact no" required="required" autofocus>
						</div>
						<div class="form-group mb-3">
							
							<input type="password" class="form-control" placeholder="Password" required="required" name="pass"><br >
						</div>
<!-- 
						<div class="form-group mb-4 " style="margin-right:140px;">
							<input type="radio" value="user" id="user" name="rr"> User        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" value="vendor" id="vendor" name="rr"> Admin
						</div> -->

						<button class="btn btn-block btn-primary mb-4"  type="submit" name="insert">Register</button>
						<hr>
						
					</div>

					<?php 
					
					if(isset($_POST['insert']))
					{
						extract($_POST);
						
						// echo "<script>alert('$uname $email $conno $pass');</script>";

						$sql="INSERT INTO `login`(`name`,`email`,`contactno`,`password`,`role`) VALUES('$uname','$email','$conno','$pass','user');";

						$qry=mysqli_query($con,$sql) or die("Query error");
						if($qry)
						{
							echo "<script>alert('inserted...');</script>";
						}
					}

					
					?>
					<div class="registration">
		                <a class="badge badge-primary  btn-primary mb-3" href="index.php"  style="color:#fff">
		                    Login
		                </a>
		            </div>
				</form>
					 <i class="fa fa-home" aria-hidden="true"><a class="" href="../index.php">
		                    Back Home
		                </a></i>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="../admin/assets/js/vendor-all.min.js"></script>
<script src="../admin/assets/js/plugins/bootstrap.min.js"></script>



</body>

</html>
