<?php
include('../Includes/connect.php') ;
session_start();

if(isset($_POST['request_submit'])){
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
$insert="INSERT INTO `blood_rqst`(`user_id`, `usertype`, `quantity`, `blood_group`, `status`, `date`) VALUES ('$user_id','$user_type','$user_quantity','$blood_group','$status',NOW())";
$runsql=mysqli_query($con,$insert);
if($runsql){
// try
$_SESSION['message']="Request Sent Successfully";
header("location:Patient_dashboard.php?new_blood_rqt");
// try

    // echo"<script>alert('Successful');</script>";
    // echo"<script>window.open('Patient_dashboard.php?new_blood_rqt','_self')</script>";
}else{
    echo"<script>alert('Error occured');</script>";
}

}

}
?>
