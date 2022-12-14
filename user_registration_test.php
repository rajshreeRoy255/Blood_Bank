<?php
include('./Includes/connect.php');

if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_type=$_POST['user_role'];
    $user_password=$_POST['user_password'];
    $c_password=$_POST['c_password'];
    $user_address=$_POST['user_address'];
    $user_disease=$_POST['user_disease'];
    $blood_grp=$_POST['blood_grp'];
    $user_phone=$_POST['user_phone'];
    $user_age=$_POST['user_age'];

    // images
    $img_name=$_FILES['user_image']['name'];
    $img_tmp_name=$_FILES['user_image']['tmp_name'];
    // images 

    if ($user_password== $c_password){
        $select="SELECT * FROM all_users WHERE username='$user_username' &&  password='$user_password'";
        $runselect=mysqli_query($con,$select);
        $numROW=mysqli_num_rows($runselect);
        if($numROW>0){
            echo"<script>alert('username or email already exist');</script>"; 
          }else{
        //   insert into database
        move_uploaded_file($img_tmp_name,"./all_users/image_of_PND/$img_name");
        // move_uploaded_file($img_tmp_name,"./users/images/$img_name");

        $insert_query ="INSERT INTO `all_users`(`username`, `images`, `user_type`, `password`, `age`, `disease`, `phone`, `address`) VALUES('$user_username','$img_name','$user_type','$user_password','$user_age','$user_disease','$user_phone','$user_address')";
        // INSERT INTO `all_users`(`id`, `username`, `images`, `user_type`, `password`, `age`, `blood_group`, `disease`, `phone`, `address`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')

        $runsql=mysqli_query($con,$insert_query);
        if($runsql){
            echo"<script>alert('Registration Successful');</script>";
            echo"<script>window.open('index.php','_self')</script>";
            
        }else{
            echo"<script>alert('Error occured');</script>";
            echo"<script>window.open('index.php','_self')</script>";
        }
          }


}else{
    echo"<script>alert(' Not ok Password');</script>";
}

// role condition starts**********************************          *************************************

    // if($user_type==1){
    //     echo"<script>window.open('./Patients/Patient_dashboard.php','_self')</script>";
    // }elseif($user_type==2){
    //     echo"<script>window.open('./Donor/Donor_dashboard.php','_self')</script>";

    // }elseif($user_type==3){
    //     echo"<script>window.open('./Admin/dashboard.php','_self')</script>";
    // }else{
    //     echo"<script>alert('not selected your role');</script>";
    // }
// role condition ends**********************************          *************************************

}
?>