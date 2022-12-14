<?php  include('../Includes/connect.php');
session_start();
$requested_id = $_GET['accept_order_ID'];
// echo $id;

$select = "SELECT * FROM blood_rqst WHERE rqst_id = '$requested_id'";
$data = mysqli_query($con,$select);
if($data){
    $row = mysqli_fetch_array($data);
    $req_quantity=$row['quantity'];
    $req_blood_grp_id=$row['blood_group'];
    // echo $req_blood_grp_id;
    
// selecting from blood stock available
$select_blood="SELECT * FROM `blood_stock_available` WHERE stk_id='$req_blood_grp_id'";
$res=mysqli_query($con,$select_blood);
$fetch_blood_details=mysqli_fetch_array($res);

$blood_group_name=$fetch_blood_details['blood_grp'];
$blood_group_quantity=$fetch_blood_details['stk_qty'];
$bld_ID=$fetch_blood_details['stk_id'];

// status
$status_rsqt_update="accepted";

// condition function
if($blood_group_quantity>=$req_quantity){
    $blood_group_quantity-=$req_quantity;
   
// 1.)udpating blood_stock_available tbl
$update_bld_grp_tbl="UPDATE blood_stock_available SET stk_qty = '$blood_group_quantity' WHERE stk_id = '$bld_ID' ";
$update_query=mysqli_query($con,$update_bld_grp_tbl);


// updating blood request table
$update_rqst_tbl="UPDATE blood_rqst SET `status` = '$status_rsqt_update' WHERE rqst_id = '$requested_id'";
$up_RES=mysqli_query($con,$update_rqst_tbl);
$_SESSION['message']="Approved blood request successfully";
// echo"<script>alert('Accepted user blood request successfully');</script>";
echo"<script>window.open('./dashboard.php?new_blood_rqt','_self')</script>";
// UPDATE `blood_rqst` SET `rqst_id`='[value-1]',`user_id`='[value-2]',`usertype`='[value-3]',`quantity`='[value-4]',`blood_group`='[value-5]',`status`='[value-6]',`date`='[value-7]' WHERE 1


}else{
    $_SESSION['message']="Stock does not have enough blood to approve.Available quantity :".$blood_group_quantity." ml";
    // echo"<script>alert('sorry :( Limited stock is available..');</script>";
    echo"<script>window.open('./dashboard.php?new_blood_rqt','_self')</script>";

}

}

?>