<?php
include('./Includes/connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- boostrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<!-- alertifyJS -->

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!-- alertifyJS -->

    <link rel="stylesheet" href="style33.css">
    <style>
      .s-icon i{
    background-color: #e74c3c;
    font-size: 20px;
    color: white;
    padding: 13px;
    margin: 0px 10px;
    border-radius: 50%;
    box-shadow: 10px 1px 20px 3px grey;
}

      .custom-des{
        /* border: 2px solid red; */
        margin: auto;
        width: 70%;
      }
      .custom-inline{
        /* border: 2px solid red; */
        display: inline;
      }
      .h1-design{
    font-family: 'DM Serif Display', serif;
}
      .navbar-custom{
        /* border: 2px solid red; */
        position: fixed;
        top: 0%;
        width: 100%;
      }
      .second_conatiner{
        /* border: 2px solid green; */
        margin-top: 0px;
      }
      .second_up{
        /* border: 2px solid red; */
        margin-bottom: 5px;
        /* margin-bottom: 50px; */
      }
      #second-nav{
        width: 100%;
        height: 30%;
      }
      .custom_image_size{
        width: 90%;
        height: 70vh;
        /* object-fit: contain; */
      }
    </style>
</head>
<body>
    <div class="comtainer p-0">
    <nav class="navbar navbar-expand-lg bg-success  px-0 mb-0 sticky-top navbar-custom">
  <div class="container-fluid">
  <img src="./images/apples.png" alt=""width="50px">
    <a class="navbar-brand ms-3 me-5 text-light logo" href="#"><span style="color: #e74c3c;">B</span>lood-<span style="color: #e74c3c;">B</span>ank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mx-3">
          <a class="nav-link active anchor" aria-current="page" href="#"><i class="fa fa-home mx-2"></i>Home</a></a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active anchor" aria-current="page" href="#section2"><i class="fa fa-tint mx-2" aria-hidden="true"></i>About</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active anchor" aria-current="page" href="#section3"><i class="fa fa-volume-control-phone mx-2" aria-hidden="true"></i>Contact</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link anchor" href="#" data-bs-toggle="modal" data-bs-target="#mymodal1"><i class="fa fa-envelope-open-o mx-2" aria-hidden="true"></i>Register</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link anchor" href="#" data-bs-toggle="modal" data-bs-target="#mymodal2"><i class="fa fa-sign-in mx-2" aria-hidden="true"></i>Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- modals start for registration -->
<div class="modal" tabindex="-1" id="mymodal1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h2 class="text-center"><span style="color: #e74c3c;">N</span>ew-User <span style="color: #e74c3c;">R</span>egistration</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- <p>Modal body text goes here.</p> -->
            <form action="user_registration_test.php" method="POST" enctype="multipart/form-data">
            <!-- user field -->
                        <div class="form-outline  mb-4">
                            <label for="user_username" class="form-label">Name</label>
                            <input type="text" id="user_username" class="form-control" placeholder="Enter your name" autocomplete="off" required="required" name="user_username">
                        </div>
                        <!-- Age -->
                        <div class="form-outline mb-4">
                            <label for="user_age" class="form-label">Age</label>
                            <input type="number" id="user_age" class="form-control" placeholder="Enter your age" autocomplete="off" required="required" name="user_age">
                        </div>
                            <!-- Blood-group -->
                            <div class="form-outline mb-4">
                        <label for="user_blood_grp" class="form-label">Blood-group</label>
                        <select class="form-select" aria-label="Default select example" name="blood_grp">
                            <option value="not selected">Select Blood-group</option>
                            <option value="1">A+ </option>
                            <option value="2">A- </option>
                            <option value="3">AB+</option>
                            <option value="4">AB-</option>
                            <option value="5">B+ </option>
                            <option value="6">B- </option>
                            <option value="7">O+ </option>
                            <option value="8">O- </option>
                        </select>
                        </div>
                        <!-- disease -->
                        <div class="form-outline  mb-4">
                            <label for="user_disease" class="form-label">Disease</label>
                            <input type="text" id="user_disease" class="form-control" placeholder="Enter disease" autocomplete="off" required="required" name="user_disease">
                        </div>
                        <!-- password -->
                        <div class="form-outline mb-4">
                            <label for="user_password" class="form-label">Password</label>
                            <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password">
                        </div>
                        <!-- c_password -->
                        <div class="form-outline mb-4">
                            <label for="user_c_password" class="form-label">Confirm Password</label>
                            <input type="password" id="user_c_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="c_password">
                        </div>
                        <!-- Role -->
                        <div class="form-outline mb-4">
                        <label for="user_role" class="form-label">Role</label>
                        <select class="form-select" aria-label="Default select example" name="user_role">
                            <option value="Select Your Role">Select Your Role</option>
                            <option value="1">Patient</option>
                            <option value="2">Donor</option>
                        </select>
                        </div>
                     <!-- Phone -->
                     <div class="form-outline mb-4">
                            <label for="user_phone" class="form-label">Phone</label>
                            <input type="number" id="user_phone" class="form-control" placeholder="Enter your phone number" autocomplete="off" required="required" name="user_phone">
                        </div>
                     <!-- Address -->
                     <div class="form-outline mb-4">
                            <label for="user_address" class="form-label">Address</label>
                            <input type="text" id="user_address" class="form-control" placeholder="Enter your address" autocomplete="off" required="required" name="user_address">
                        </div>
            
                        <!-- image -->
                        <div class="form-outline mb-4">
            <input type="file" class="form-control m-auto" name="user_image">
        </div>
                        <!-- button -->
                        <div class="form-outline mb-4">
                            <input type="submit" value="Register" class="btn btn-success" name="user_register">
                        </div>

                    </form>
      </div>
    </div>
  </div>
</div>

<!-- model for login -->


<div class="modal" tabindex="-1" id="mymodal2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h2 class="text-center"><span style="color: #e74c3c;">L</span>ogin</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- <p>Modal body text goes here.</p> -->
            <form action="user_login_test.php" method="POST" enctype="multipart/form-data">
            <!-- user field -->
                        <div class="form-outline  mb-4">
                            <label for="user_username" class="form-label">Username</label>
                            <input type="text" id="user_username" class="form-control" placeholder="Enter your name" autocomplete="off" required="required" name="user_username">
                        </div>
                        
                        <!-- password -->
                        <div class="form-outline mb-4">
                            <label for="user_password" class="form-label">Password</label>
                            <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password">
                        </div>
                        <!-- Role -->
                        <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Usertype</label>
                        <select class="form-select" aria-label="Default select example" name="user_type">
                            <option value="0">Select Your Role</option>
                            <option value="1">Patient</option>
                            <option value="2">Donor</option>
                            <option value="3">Admin</option>
                        </select>
                        </div>
                    
                        <!-- button -->
                        <div class="form-outline mb-4">
                            <input type="submit" value="Login" class="btn btn-success" name="login_submit">
                        </div>

                    </form>
                            </div>
                            </div>
                        </div>
                    </div>

<!-- model for login ends -->

<section id="second-nav mt-2">
                                <div class="container-fluid second_up p-0">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./all_images/b2.jpg" class="d-block w-100 custom_image_size" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Just Donate Blood</h5>
        <p>Your little effort can give other second chance to live life</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./all_images/b3.jpg" class="d-block w-100 custom_image_size" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Just Donate Blood</h5>
        <p>Your blood is precious: Donate, save a life & make it Divine.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./all_images/b4.webp" class="d-block w-100 custom_image_size" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Just Donate Blood</h5>
        <p>Donating blood is simple, painless and noble</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                                </div>
                            </section>
                            

                            <!-- third section -->
<div>
  <section id="section2">
  <div class="container second_conatiner mt-2 mb-5 ">
                              <h1 class="m-auto text-center h1-design"><span style="color: #e74c3c;">A</span>bout</h1><hr>
                                <div class="row  mb-5">
                                    <div class="col-md-4">
                                        <img src="./all_images/blood.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6 mx-4 mb-3">
                                        <p>BLOOD BANK MANAGEMENT is a software application to maintain day to daytransactions in a blood bank. This software help to register all the donors, Bloodcollection details, blood issued details etc.</p>

                                       <p>This system is mainly based on collection, storage and usage of blood in needysituations. City life is turning hectic as we move in 21st century. Day by day all thenewspapers that were filled with motivating articles and some important news isnow filled with either Bollywood stuffs or some kinds of crime, bomb blasts becoming one of the main events. Hence the need of blood is the crucial subject ofconsideration.</p>
                                       <div class="row ">
                                        <div class="col-md-6">
                                            <img src="./all_images/b2.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                        <img src="./all_images/b3.jpg" alt="" class="img-fluid">
                                        </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
  </section>
</div>
                          
                

<!-- contact section starts -->
<section id="section3">
<section id="contact  mb-5 w-50 m-auto">
<div class="container  mb-5 custom-des">
<h1 class="m-auto text-center h1-design"><span style="color: #e74c3c;">C</span>ontact</h1><hr>
  <div class="row">
    <div class="col-md-4 s-icon text-center"> <i class="fa fa-map-marker"></i> <h5 class="custom-inline">24x7 Helpdesk:</h5><p>+91-26788786</p></div>
    <div class="col-md-4 s-icon text-center"> <i class="fa fa-envelope"></i><h5 class="custom-inline">Email:</h5><p>bloodBank@gov.inhelpdesk-ors@gov.in</p></div>
    <div class="col-md-4 s-icon text-center"> <i class="fa fa-phone"></i> <h5 class="custom-inline">Call:</h5><p>+91-26788786</p></div>
  </div>
</div>
</section>
</section>

<!-- contact section ends -->




<!-- container end -->
    </div>
    <!-- container end -->

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
    <script>
    var typed = new Typed('#ani', {
  strings: ["PROGRAMMER.", "FULL-STACK.","DEVELOPER."],
  typeSpeed: 30,
  backSpeed: 30,
  loop: true,
});
</script>
<script src="js/tilt.jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</body>
</html>