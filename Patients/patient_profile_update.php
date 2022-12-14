<?php  include('../Includes/connect.php') ;
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- boostrap CSS link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap" rel="stylesheet">
    <!-- custom css file -->
    <link rel="stylesheet" href="style.css">
    <style>
    .width-container{
        width: 100%;
        /* border: 2px solid red; */
        margin-top: -50%;
    }
    .width-table{
        width: 80%;
        /* border: 2px solid red;  */
    }
    .row-width{
        /* border: 2px solid red; */
        width: 70%;
        margin-left: 150px;
        box-shadow: 15px 10px 15px #95a5a6;
        /* font-family: 'DM Serif Display', serif; */
    }
    .button-width{
        /* border: 2px solid red; */
        margin-top: 0px;
        width: 100%;
        font-family: 'DM Serif Display', serif;
    }
    .button_shadow{
        box-shadow: 15px 10px 15px #95a5a6;
    }
</style>
</head>
<body>
    <?php 
    $old_session_UserName= $_SESSION['username'];
    $select = "SELECT * FROM all_users WHERE username = '$old_session_UserName'";
    $data = mysqli_query($con,$select);
    $row = mysqli_fetch_array($data);
    $old_session_ID=$row['id'];
    // echo $old_session_ID;
    ?>
    <form action="" method ="POST">
    <div class="container text-center main-container mt-0 width-container">
        <h1>Pofile Update</h1><hr>
        <div class="row row-width">
            <div class="col-md-6">
            <div class="form-outline  mb-4">
                            <label for="user_username" class="form-label">NAME</label>
                            <input type="text" id="user_username" class="form-control"autocomplete="off" required="required" name="user_username" placeholder="Enter your username" value="<?php echo $row['username'];?>">
                        </div>
                        </div>

     <!-- disease -->
     <div class="col-md-6">
            <div class="form-outline  mb-4">
                            <label for="user_disease" class="form-label">Disease</label>
                            <input type="text" id="user_disease" class="form-control"autocomplete="off" required="required" name="user_disease" placeholder="Enter your username" value="<?php echo $row['disease'];?>" >
                        </div>
                        </div>

                        <!-- age -->
                        <div class="col-md-6">
                        <div class="form-outline mb-4">
                            <label for="user_age" class="form-label">AGE</label>
                            <input type="number" id="user_age" class="form-control" placeholder="Enter your age" autocomplete="off" required="required" name="user_age" value="<?php echo $row['age'];?>">
                        </div>
                        </div>
                    <!-- phone number -->
                        <div class="col-md-6">
                        <div class="form-outline  mb-4">
                            <label for="user_contact" class="form-label">CONTACT NUMBER</label>
                            <input type="number" id="user_contact" class="form-control" placeholder="Your Contact Number" autocomplete="off" required="required" name="user_contact" value="<?php echo $row['phone'];?>">
                        </div>
                        </div>
                        <!-- address -->
                        <div class="col-md-6">
                        <div class="form-outline  mb-4">
                            <label for="user_address" class="form-label">ADDRESS</label>
                            <input type="text" id="user_address" class="form-control" placeholder="Enter your address" autocomplete="off" required="required" name="user_address" value="<?php echo $row['address'];?>">
                        </div>
                        </div>
                          <!-- button -->
                        <div class="col-md-6 mb-4 button-width">
                        <div class="pt-2">
                            <input type="submit" value="UPDATE" class="btn btn-info py-2 px-3 button_shadow " name="update_profile">
                        </div>
                        </div>
                        
            <!-- row ends -->
             </div>
    </div>
    </form>
    <?php
    if(isset($_POST['update_profile'])){
        $New_name = $_POST['user_username'];
        $disease = $_POST['user_disease'];
        $age = $_POST['user_age'];
        $contact = $_POST['user_contact'];
        $address =   $_POST['user_address'];
        $query= "UPDATE `all_users` SET `username`= '$New_name',`disease`= '$disease', `age` = '$age', `phone` = '$contact', `address` ='$address' WHERE `id` = '$old_session_ID' ";
        // UPDATE `all_users` SET `id`='[value-1]',`username`='[value-2]',`images`='[value-3]',`user_type`='[value-4]',`password`='[value-5]',`age`='[value-6]',`disease`='[value-7]',`phone`='[value-8]',`address`='[value-9]' WHERE 1
        $data  =mysqli_query ($con,$query);
        if($data){
            
            echo"<script>window.open('Patient_dashboard.php?patient_profile_update','_self')</script>";
            session_start();
            $_SESSION['username']=$New_name;
        }
    }
    ?>

    <!-- boostrap js link   -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>