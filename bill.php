<?php
	include("code/conn.php");
	// session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>SPMS|| Billing Report</title>
	<link rel="stylesheet" href="admin/assets/css/style.css">

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
				<h4>SheCare Essential Management System<hr /><span style="color:#fff;" class="shadow"> Billing Report</span></h4>
				<hr />
		<div class="card borderless "style="width:500px; margin-left:-60px;">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<form method="post">
					<style>
					.lbl{
						margin-right:20px;
					}
					.form-control{
								display: inline;
								width: 300px;
								height: calc(1.5em + 1.25rem + 4px);
								padding: 0.625rem 1.1875rem;
								font-size: 0.875rem;
								font-weight: 400;
								line-height: 1.5;
								color: #495057;
								background-color: #fff;
								background-clip: padding-box;
								border: 2px solid rgba(0, 0, 0, 0.15);
								border-radius: 0;
								transition: border-color 0.15s ease-in-out, box-shadow 15s ease-in-out;
					}
				</style>
						<?php
							$id=$_GET['uid'];
							$sql="SELECT * from orders where user_id='$id'";
							$qry=mysqli_query($con,$sql);
							$row=mysqli_fetch_array($qry);

						?>
						
					<div class="card-body">
				
				
						<div class="form-group mb-4">
							<label for="" class="lbl">Name</label>
							  <input type="text" class="form-control" value="<?=$row['name'];?>" name="uname" required="required" autofocus>
						</div>

						<div class="form-group mb-4">
							<label for="" class="lbl">Address</label>
							  <input type="text" class="form-control mr-3" value="<?=$row['address'];?>" name="add" required="required" autofocus>
						</div>

						<div class="form-group mb-4">
							<label for="" class="lbl">Email</label>
							<input type="email" class="form-control" value="<?=$row['email'];?>" id="email" onBlur="userAvailability()" name="email" required="required">
		             		<span id="user-availability-status1" style="font-size:12px;"></span>
						</div>

						<div class="form-group mb-3">
							<label for="" class="lbl">Contact</label>
							<input type="text" class="form-control mr-3"value="<?=$row['contactno'];?>" maxlength="10" name="conno" required="required" autofocus>
						</div>

						 <?php
							$p_id=$row['p_id'];
							$sql1="SELECT * from products where id='$p_id'";
							$qry1=mysqli_query($con,$sql1);
							$row1=mysqli_fetch_array($qry1);
						?> 
						<div class="form-group mb-3">
							<label for="" class="lbl">Product</label>
							<input type="text" class="form-control mr-3" value="<?=$row1['productName'];?>"maxlength="10" name="product" required="required" autofocus>
						</div>

						<div class="form-group mb-3">
							<label for="" class="lbl">Date</label>
							<input type="text" class="form-control ml-2" value="<?=$row['order_date'];?>" placeholder="" required="required" name="date"><br >
						</div>

						<div class="form-group mb-3">
							<label for="" class="lbl">Total</label>
							<input type="text" class="form-control ml-2"value="<?=$row['total'];?>" maxlength="10" name="total" required="required" autofocus>
						</div>
						<a href="" onclick="window.print()" class="btn btn-primary pl-4 pr-4" style="color:white;">Print</a>
						<hr>
						
					</div>
					<i class="fa fa-home mb-3" aria-hidden="true"><a class="" href="index.php">
		                    Back Home
		                </a></i>
				</form>
					 
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="../admin/assets/js/vendor-all.min.js"></script>
<script src="../admin/assets/js/plugins/bootstrap.min.js"></script>



</body>

</html>
