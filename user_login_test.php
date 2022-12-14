<?php
include('./Includes/connect.php') ;
session_start();
if(isset($_POST['login_submit'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
    $user_type=$_POST['user_type'];

    $select="SELECT * FROM all_users WHERE username='$user_username' &&  password='$user_password' &&  user_type='$user_type'";
    $SQL=mysqli_query($con,$select);
    $nRow=mysqli_num_rows($SQL);

    if($nRow>0){
        // echo"<script>alert('Successfully Login');</script>";
        $_SESSION['message']="Successfully Login";
        $_SESSION['username']=$user_username;
        $_SESSION['usertype']=$user_type;
        
        if($user_type==1){
            echo"<script>window.open('./Patients/Patient_dashboard.php','_self')</script>";
        }elseif($user_type==2){
            echo"<script>window.open('./Donor/Donor_dashboard.php','_self')</script>";
    
        }elseif($user_type==3){
            echo"<script>window.open('./Admin/dashboard.php','_self')</script>";
        }else{
            echo"<script>alert('not selected your role');</script>";
        }

    }else{
        $_SESSION['message']="Invalid Credential";
        // echo"<script>alert('invalid credential');</script>";
        echo"<script>window.open('index.php','_self')</script>";
    }


}