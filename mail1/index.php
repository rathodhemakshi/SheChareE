<!DOCTYPE html>
<html>
<head>
  <title>
    demo page
  </title>
</head>
<body>



  <form method="post">
    

    <input type="gmail" name="g">

    <br><br>
    <input type="submit" name="btn">
  </form>

<?php 

  
require 'function.php';
  
if (isset($_POST['btn'])) {
  # code...
  extract($_POST);
         $mail_sent = send_mail($g);

            if ($mail_sent) {

                echo "<script>
                alert('send success');
                </script>";
            } else {
                $errorMsgLogin = "Failed to send OTP. Please try again later.";
            }
}
 ?>
</body>
</html>