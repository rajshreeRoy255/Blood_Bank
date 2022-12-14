<?php
include('../Includes/connect.php') ;
include('../functions/common_function.php');
session_start();

if((!isset($_SESSION['username'])) OR $_SESSION['usertype']==2 OR $_SESSION['usertype']==3 ){
  echo"<script>window.open('../index.php','_self')</script>";
}
?>

<!-- dasboard active nav link code  -->
<!--  -->
<!-- dasboard active nav link code  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <!-- boostrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Bungee+Shade&display=swap" rel="stylesheet">

    <!-- alertifyJS -->

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!-- alertifyJS -->
    <!-- custom css file -->
    <!-- <link rel="stylesheet" href="./css/stylePatient.css"> -->
    <style>
/* animate */
.animate h5{
    letter-spacing: 10px;
    -webkit-text-stroke: 1px white;
    color: transparent;
    background-image: linear-gradient(#fff,#fff);
    background-repeat: no-repeat;
    background-clip: text;
    -webkit-background-clip: text ;
    background-position: -2000px 5px;
    animation:backcolor 4s linear infinite alternate;
    text-align: center;
    font-weight: bold;
    font-family:  cursive;
    
    /* padding-top: 300px; */
} 
@keyframes backcolor{
    100%{
        background-position: 0 0;
    }
} 
/* animate */




      .custom-nav{
    margin: 10px 0px;
    /* font-size: 20px; */
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    
    /* background-color: red; */
    
  }
  .custom-nav:hover{
    background-color: #7f8c8d;
     transition: 2s ease-in-out;
}
.active{
  background-color:#7f8c8d; 
}
.custom-nav i{
  margin: 0px 5px;
}
      
        .imageTag{
           width: 80px;
           height: 90px;
           object-fit: contain;
        }
        body{
            overflow-x: hidden;
        }
        .checkImage{
          object-fit: contain;
            /* display: block; */
            /* margin: auto; */
            padding: 10px 0px;
            /* border: 2px solid red; */
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid animate text-center m-auto w-50">
   <h5>Blood Bank Management System</h5>
  </div>
</nav>



<!-- second child -->
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <ul class="navbar-nav me-auto">
    <!-- <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li> -->



        <!--chech if user is login username exist -->
        <?php  
        if(!isset($_SESSION['username'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='Patient_dashboard.php'>Welcome Admin</a>
        </li> ";
        }else{
            echo"<li class='nav-item'>
            <a class='nav-link' href='Patient_dashboard.php'>Welcome ".$_SESSION['username']."</a>
          </li> ";
        }
        
        ?>
        <!-- php code end for login username -->


    
        <!-- php code end for login -->
    </ul>
</nav>

<!-- third child -->
<!-- <div class="bg-light bg-secondary">
    <h3 class="text-center"> Admin </h3>
    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, a architecto</p>
</div> -->
<!-- fourth child -->

<div class="row">
    <div class="col-md-2">
        <ul class="navbar-nav bg-dark text-center"style="height:100vh;">
        <li class="nav-item bg-success">
          <a class="nav-link text-light" aria-current="page" href="#"><h4>Your Profile</h4></a>
        </li>

        <!-- fetching image from database -->
       
        <!-- php code ended here -->
        <!-- <li class="nav-item ">
          <img src="../images/ice2.jpg" alt="" class="imageTag" width="200px">
        </li> -->

        <!-- dashboard -->
       <?php if((isset($_GET['my_blood_his'])) OR (isset($_GET['new_blood_rqt'])) OR (isset($_GET['patient_profile_update']))){
         echo "<li class='nav-item'>
         <a class='nav-link custom-nav text-light mt-2 ' aria-current='page' href='Patient_dashboard.php'><i class='fa fa-tachometer' aria-hidden='true'></i>Dashboard</a>
       </li>";
       }else{
        echo "<li class='nav-item'>
        <a class='nav-link active custom-nav text-light mt-2 ' aria-current='page' href='Patient_dashboard.php'><i class='fa fa-tachometer' aria-hidden='true'></i>Dashboard</a>
      </li>";
       }
       
       ?>
        <?php 
        if(isset($_GET['new_blood_rqt'])){
          echo "<li class='nav-item'>
          <a class='nav-link active custom-nav text-light ' aria-current='page' href='Patient_dashboard.php?new_blood_rqt'><i class='fa fa-tint' aria-hidden='true'></i>Request Blood</a>
        </li>";
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link  custom-nav text-light ' aria-current='page' href='Patient_dashboard.php?new_blood_rqt'><i class='fa fa-tint' aria-hidden='true'></i>Request Blood</a>
        </li>";
        }
        ?>


        <!--request history  -->
      <?php 
       if(isset($_GET['my_blood_his'])){
       echo "<li class='nav-item'>
       <a class='nav-link custom-nav active text-light ' aria-current='page' href='Patient_dashboard.php?my_blood_his'><i class='fa fa-history' aria-hidden='true'></i>Request History</a>
     </li>";
      }else{
        echo "<li class='nav-item'>
        <a class='nav-link custom-nav text-light ' aria-current='page' href='Patient_dashboard.php?my_blood_his'><i class='fa fa-history' aria-hidden='true'></i>Request History</a>
      </li>";
      }
      ?>

        <!-- profile -->
<?php if(isset($_GET['patient_profile_update'])){
     echo "<li class='nav-item'>
     <a class='nav-link active custom-nav text-light ' aria-current='page' href='Patient_dashboard.php?patient_profile_update'><i class='fa fa-users' aria-hidden='true'></i>Profile</a>
   </li>";
    }else{
      echo"<li class='nav-item'>
      <a class='nav-link  custom-nav text-light ' aria-current='page' href='Patient_dashboard.php?patient_profile_update'><i class='fa fa-users' aria-hidden='true'></i>Profile</a>
    </li>";
    }
    
    ?>
        <!-- profile -->

        
        <!-- <li class="nav-item">
          <a class="nav-link active custom-nav text-light" aria-current="page" href="Patient_dashboard.php?patient_profile_update"><i class="fa fa-users" aria-hidden="true"></i>Profile</a>
        </li> -->
        <li class="nav-item ">
          <a class="nav-link custom-nav text-light" aria-current="page" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a>
        </li>
        </ul>
         
    </div>
    <div class="col-md-10 text-center">
    <?php 
     
     patient_dashboard();
    // edit account check
    if(isset($_GET['my_blood_his'])){
      include('./try_history.php');
    }
    if(isset($_GET['new_blood_rqt'])){
      include('./rqst_form.php');
    }
    // request history
    if(isset($_GET['request_history'])){
      include('./try_history2.php');
    }
    if(isset($_GET['patient_profile_update'])){
      include('patient_profile_update.php');
    }
    // if(isset($_GET['available_apples_count'])){
    //   include('available_apples_count.php');
    // }
  
    // code ends
    ?>
    </div>
</div>

<!-- last child -->

<!-- alertify JS -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
  <?php if(isset($_SESSION['message'])) {?>

 
   alertify.set('notifier','position', 'top-right');
 alertify.success('<?= $_SESSION['message'];?>');
</script>
<?php 
unset($_SESSION['message']);
} ?>
<!-- alertify JS -->





  <!-- boostrap js link   -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>


