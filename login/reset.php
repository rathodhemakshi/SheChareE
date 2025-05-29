<?php
// Include Database Connection
include("../code/conn.php");

if (isset($_POST['insert'])) {
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['confirm_pass'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if user exists
        $query = "SELECT * FROM `login` WHERE `email` = '$email' AND `contactno` = '$mobile'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            // Update password in the database
            $update_query = "UPDATE `login` SET `password` = '$password' WHERE `email` = '$email'";
            if (mysqli_query($con, $update_query)) {
                echo "<script>alert('Password Reset Successfully!'); window.location.href='index.php';</script>";
            } else {
                echo "<script>alert('Error updating password. Please try again!');</script>";
            }
        } else {
            echo "<script>alert('No user found with this email and mobile number.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPMS || Reset Password</title>
    <link rel="stylesheet" href="../admin/assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<div class="auth-wrapper">
    <div class="auth-content text-center">
        <h4>SheCare Essential Management System<hr /><span style="color:#fff;" class="shadow">Reset Password</span></h4>
        <hr />
        <div class="card borderless">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <form method="post">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" placeholder="Email" name="email" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" placeholder="New Password" name="pass" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_pass" required>
                            </div>
                            <button class="btn btn-block btn-primary mb-4" type="submit" name="insert">Reset</button>
                            <hr>
                        </div>
                    </form>
                    <div class="registration">
                        <a class="badge badge-primary btn-primary mb-3" href="index.php" style="color:#fff">Login</a>
                    </div>
                    <i class="fa fa-home" aria-hidden="true"><a href="../index.php">Back Home</a></i>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../admin/assets/js/vendor-all.min.js"></script>
<script src="../admin/assets/js/plugins/bootstrap.min.js"></script>
</body>
</html>
