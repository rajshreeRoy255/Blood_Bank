<?php  include('../Includes/connect.php');
session_start();
$donation_UNIQUE_ID = $_GET['acc_donation_ID'];
// echo $donation_UNIQUE_ID;

// selecting from donation table
$selecT="SELECT * FROM `donation_tbl` WHERE donation_id='$donation_UNIQUE_ID '";
$data = mysqli_query($con,$selecT);
if($data){
    $row = mysqli_fetch_array($data);
    $donate_quantity=$row['qty'];
    $donate_blood_grp_id=$row['bld_group'];


// selecting from blood stock available
$select_blood="SELECT * FROM `blood_stock_available` WHERE stk_id='$donate_blood_grp_id'";
$res=mysqli_query($con,$select_blood);
$fetch_blood_details=mysqli_fetch_array($res);

$blood_group_name=$fetch_blood_details['blood_grp'];
$blood_group_quantity=$fetch_blood_details['stk_qty'];
$bld_ID=$fetch_blood_details['stk_id'];

// status
$status_donate_update="accepted";

// condition checking
if($blood_group_quantity>$donate_quantity){
    $blood_group_quantity+=$donate_quantity;
    $new_update_bld_STOCK= $blood_group_quantity;
    $new_update_bld_STOCK;

    // 1)))update stock table
    $update_bld_grp_tbl="UPDATE blood_stock_available SET stk_qty = '$blood_group_quantity' WHERE stk_id = '$bld_ID' ";
    $update_query=mysqli_query($con,$update_bld_grp_tbl);
    
    // 2)))updatind donation tbl
$update_donation_tbl="UPDATE donation_tbl SET `status` = '$status_donate_update' WHERE donation_id = '$donation_UNIQUE_ID'";
$update_donation_done=mysqli_query($con,$update_donation_tbl);
if($update_donation_done){
    // echo"<script>alert('Donation accepted successfully');</script>";
    $_SESSION['message']="Donation Approved Successfully ".$donate_quantity." ml has been added to the stock";
      echo"<script>window.open('../Admin/dashboard.php?new_donation','_self')</script>";
}else{
    echo"<script>alert('sorry');</script>";
      echo"<script>window.open('../Admin/dashboard.php?new_donation','_self')</script>";
}


}else{
    $blood_group_quantity+=$donate_quantity;
    $new_update_bld_STOCK = $blood_group_quantity;
    $new_update_bld_STOCK;

     // 1)))update stock table
     $update_bld_grp_tbl="UPDATE blood_stock_available SET stk_qty = '$blood_group_quantity' WHERE stk_id = '$bld_ID' ";
     $update_query=mysqli_query($con,$update_bld_grp_tbl);
     
     // 2)))updatind donation tbl
 $update_donation_tbl="UPDATE donation_tbl SET `status` = '$status_donate_update' WHERE donation_id = '$donation_UNIQUE_ID'";
 $update_donation_done=mysqli_query($con,$update_donation_tbl);
 if($update_donation_done){
    $_SESSION['message']="Donation Approved Successfully";
       echo"<script>window.open('../Admin/dashboard.php?new_donation','_self')</script>";
 }else{
     echo"<script>alert('sorry');</script>";
       echo"<script>window.open('../Admin/dashboard.php?new_donation','_self')</script>";
 }

    
}


}
?>