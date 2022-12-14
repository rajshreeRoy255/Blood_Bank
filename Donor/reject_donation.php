<?php  include('../Includes/connect.php');
session_start();
$requested_Donation_id = $_GET['rej_donation_ID'];

// statusUpdate
$status_donate_update="rejected";

// updating blood request table
$update_donate_tbl="UPDATE donation_tbl SET `status` = '$status_donate_update' WHERE donation_id = '$requested_Donation_id'";
$run_update=mysqli_query($con,$update_donate_tbl);
// echo"<script>alert('rejected donation');</script>";
$_SESSION['message']="Donation rejected";
      echo"<script>window.open('../Admin/dashboard.php?new_donation','_self')</script>";

?>