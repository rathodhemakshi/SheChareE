<?php
include("../code/conn.php");
// session_start();
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>SPMS ||login</title>
	<link rel="stylesheet" href="../admin/assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style.css">

	
</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<h4>SheCare Essential Management System<hr /><span style="color:#fff;" class="shadow">Login</span></h4>
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<form method="post">
						
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<hr>
						<div class="form-group mb-3">
							
							<input type="text" name="uname" id="username" class="form-control" onBlur="emailAvailability()"  placeholder="Username">
						</div>
						<div class="form-group mb-4">
							
							<input type="password" name="pass" class="form-control"  placeholder="Enter Password">
						</div>
						
						<button class="btn btn-block btn-primary mb-4"  type="submit" name="login">Signin</button>
						<hr>
						<p class="mb-2 text-muted">Forgot password? <a href="reset.php" class="f-w-400">Reset</a></p>

								<div class="registration">
		                Don't have an account yet?<br/><br/>
		                <a class="badge badge-primary" href="registration.php" style="color:#fff">
		                    Create an account
		                </a>
		            </div>
		          
					</div></form>
		
		                <i class="fa fa-home" aria-hidden="true"><a class="" href="../index.php">
		                    Back Home
		                </a></i>
		            
				</div>
				<?php
					if(isset($_POST['login']))
					{
						extract($_POST);
						$sql="SELECT * FROM `login` where name='$uname' and password='$pass';";
						$qry=mysqli_query($con,$sql) or die("Query error");
						$total=mysqli_num_rows($qry);
				
						$row=mysqli_fetch_assoc($qry);
				
						if($total>0)
						{
							$_SESSION['uid']=$row['id'];
								if($row['role']=="admin")
								{
									$_SESSION['role']="admin";
									echo "<script>window.location.href='../admin/dashboard.php';</script>";
								}
								else
								{
									$_SESSION['role']="user";
									echo "<script>window.location.href='../index.php';</script>";
								}
								
						}
					
						else
								{
									echo "<script>alert('not ava...');</script>";
												
								}
					}
				
				?>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="../admin/assets/js/vendor-all.min.js"></script>
<script src="../admin/assets/js/plugins/bootstrap.min.js"></script>





</body>

</html>
