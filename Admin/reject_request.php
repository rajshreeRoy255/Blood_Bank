<?php  include('../Includes/connect.php');
session_start();
$requested_id = $_GET['reject_order_ID'];

// statusUpdate
$status_rsqt_update="rejected";

// updating blood request table
$update_rqst_tbl="UPDATE blood_rqst SET `status` = '$status_rsqt_update' WHERE rqst_id = '$requested_id'";
$up_RES=mysqli_query($con,$update_rqst_tbl);
// echo"<script>alert('Rejected order request');</script>";
$_SESSION['message']="Rejected order request";
echo"<script>window.open('./dashboard.php?new_blood_rqt','_self')</script>";

?>