<?php  include('../Includes/connect.php'); ?>
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
    <style>
        .conta_Width{
            /* border: 2px solid red; */
            width: 100%;
            margin-left: 80px;
        }
        .text-left{
            /* border: 2px solid blue; */
            width: 30%;
            color: grey;
        }
        .pending{
            color: #f1c40f;
        }
        .approved{
            color: #16a085;
        }
        .rejected{
            color: #e74c3c;
        }
        .card-height{
            height: 68px;
        }
    </style>

    <?php
$sesion_userName=$_SESSION['username'];
// echo  $sesion_userName;   
echo "<br>";
$session_select="SELECT * FROM `all_users` WHERE username='$sesion_userName'";
$run=mysqli_query($con,$session_select);
$fetch=mysqli_fetch_array($run);

$session_ID=$fetch['id'];
// echo  $session_ID;

// pending
$pending_request="SELECT * FROM `blood_rqst` WHERE status='pending' AND user_id ='$session_ID'";
    $data = mysqli_query($con, $pending_request);
    $pendingREQ = mysqli_num_rows($data);
    // echo  $pendingREQ;
// pending

// approved
$accepted_request="SELECT * FROM `blood_rqst` WHERE status='accepted' AND user_id ='$session_ID'";
    $data2 = mysqli_query($con, $accepted_request);
    $acceptedREQ = mysqli_num_rows($data2);
    // echo $acceptedREQ;
// approved

// rejected
$rejected_request="SELECT * FROM `blood_rqst` WHERE status='rejected' AND user_id ='$session_ID'";
$data3 = mysqli_query($con, $rejected_request);
$rejectedREQ = mysqli_num_rows($data3);
// echo $rejectedREQ;
// rejected

    ?>

</head>
<body>
<h3 class="text-left">Dashboard</h3><hr>
    <div class="container-fluid conta_Width p-0">
        
        <div class="row ">
<!--request -->
<div class="col-md-3 mt-4 mx-2 ">
            <div class="card border-0" style="width: 18rem;">
    <div class="card-body border border-warning rounded card-height">
    <h5 class="card-title pending">Pending Request: <?php echo $pendingREQ;?></h5>
  </div>
</div>
</div> <div class="col-md-3 mt-4 mx-2 ">
            <div class="card border-0" style="width: 18rem;">
    <div class="card-body border border-success rounded card-height">
    <h5 class="card-title approved">Approved Request: <?php echo $acceptedREQ; ?></h5>
  </div>
</div>
</div> <div class="col-md-3 mt-4 mx-2 ">
            <div class="card border-0" style="width: 18rem;">
    <div class="card-body border border-danger rounded card-height">
    <h5 class="card-title rejected">Rejected Request: <?php echo $rejectedREQ;?></h5>
  </div>
</div>
</div>
<!--request -->


<!-- row end -->
        </div>
    </div>

    <!-- boostrap js link   -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>