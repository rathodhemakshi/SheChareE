<?php
include('code/conn.php');

if(isset($_GET['confrom'])){
    $confrom=$_GET['confrom'];

    $upt="UPDATE orders set order_status='Confirm' where id=$confrom";
    $qry=mysqli_query($con,$upt);
    if($qry){
        echo "<script>alert('Order Confrom'); 
        window.location='admin/order.php?id=".$confrom."'</script>";
    }
    else{
        echo "<script>alert('nott...')</script>";
    }
}

if(isset($_GET['cancle'])){
    $cancle=$_GET['cancle'];

    $upt="UPDATE orders set order_status='Cancle' where id=$cancle";
    $qry=mysqli_query($con,$upt);
    if($qry){
        echo "<script>alert('Order Cancle'); 
        window.location='admin/order.php?id=".$cancle."'</script>";
    }
    else{
        echo "<script>alert('nott...')</script>";
    }
}
if(isset($_GET['oid'])){
    $oid=$_GET['oid'];

    $upt="UPDATE orders set pay_status='success' where id=$oid";
    $qry=mysqli_query($con,$upt);
    if($qry){
        $uid=$_SESSION['uid'];
        echo "<script>alert('Payment Success'); 
        window.location='bill.php?uid=".$uid."'</script>";
    }
    else{
        echo "<script>alert('nott...')</script>";
    }
}

?>