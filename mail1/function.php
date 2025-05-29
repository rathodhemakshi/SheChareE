
<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function send_mail($receiver_email,$name,$sub,$msg) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        
        $mail->Username   = 'ladylike0508@gmail.com';
        $mail->Password   = 'kqey sqkh qvbv nntx';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('ladylike0508@gmail.com', $name);
        $mail->addAddress($receiver_email);
        $mail->isHTML(true);
      $mail->Subject = $sub;
        $mail->Body    = $msg;

        if ($mail->send()) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        echo 'Error sending OTP: ' . $e->getMessage();
        return false;
    }
}
?>
