<?php
include('../Includes/connect.php') ;

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
    <!-- custom css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- form start -->
    <form action="reqst_form2_test.php" method="POST" enctype="multipart/form-data">
    <div class="container-fluid my-3 mb-4">
        <!-- message -->
        <?php  
        if(isset($_SESSION['message'])){
          echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
         ".$_SESSION['message']."
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div> ";
        unset($_SESSION['message']);
        }
        
        ?>


      
        <!-- message -->
    


        <h2 class="text-center border_bottom">Blood Request Form</h2><hr>
     
            <div class="row d-flex align-item-center justify-content-center shadow-lg">
                <div class="col-lg-12 col-xl-6">
                    <form action="" method="POST" enctype="multipart/form-data">
                       
                        <!-- blood Quantity -->
                        <div class="form-outline mb-4 mt-3">
                            <label for="user_quantity" class="form-label">QUANTITY (IN ML)</label>
                            <input type="number" id="user_quantity" class="form-control" placeholder="Enter quantity" autocomplete="off" required="required" name="user_quantity">
                        </div>

                         <!-- Role -->
                        <div class="form-outline mb-4">
                        <label for="user_blood_grp" class="form-label">BLOOD GROUP</label>
                        <select class="form-select" aria-label="Default select example" name="blood_group">
                            <option value="0">Select Blood Group</option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">AB+</option>
                            <option value="4">AB-</option>
                            <option value="5">B+</option>
                            <option value="6">B-</option>
                            <option value="7">O+</option>
                            <option value="8">O-</option>
                        </select>
                        </div>
                        <!-- button -->
                        <div class="form-outline mb-4">
                            <input type="submit" value="Send Request" class="btn btn-outline-dark" name="request_submit">
                        </div>

                    </form>
                </div>
            </div>

    </div>
    </form>
    <!-- form ends -->
    <!-- boostrap js link   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>