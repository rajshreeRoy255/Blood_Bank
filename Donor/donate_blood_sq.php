<?php
include('../Includes/connect.php') ;
session_start();

if(isset($_POST['donate_submit'])){
    // user name fetch from database
    $username= $_SESSION['username'];
    $select="SELECT * FROM `all_users` WHERE username='$username'";
    $data=mysqli_query($con,$select);
    $row=mysqli_num_rows($data);
    $fetch_user_data=mysqli_fetch_array($data);


// fetching user details from database
   $user_id=  $fetch_user_data ['id'];
   $user_type=  $fetch_user_data ['user_type'];
   $status="pending";


// fetching from blood request form
if($row>0){
    $user_quantity=$_POST['user_quantity'];
    $blood_group=$_POST['blood_group'];

// insert into new blood rqst tbl
$insert="INSERT INTO `donation_tbl`(`user_id`, `qty`, `bld_group`, `status`, `date`) VALUES ('$user_id','$user_quantity','$blood_group','$status',NOW())";

// INSERT INTO `donation_tbl`(`donation_id`, `user_id`, `qty`, `bld_group`, `status`, `date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
$runsql=mysqli_query($con,$insert);
if($runsql){
    $_SESSION['message']="Request Sent Successfully.";
    echo"<script>window.open('Donor_dashboard.php?donate_blood','_self')</script>";
}else{
    echo"<script>alert('Error occured');</script>";
}

}

}
?>
