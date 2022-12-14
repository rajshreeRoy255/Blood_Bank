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
    // 1
    // pending request
    $pending_request="SELECT * FROM `blood_rqst` WHERE status='pending'";
    $data = mysqli_query($con, $pending_request);
    $pendingREQ = mysqli_num_rows($data);
    // echo $pendingREQ;
    // pending request

    // Approved request
    $accepted_request="SELECT * FROM `blood_rqst` WHERE status='accepted'";
    $data2 = mysqli_query($con, $accepted_request);
    $acceptedREQ = mysqli_num_rows($data2);
    // echo $acceptedREQ;
    // Approved request
    
    // rejected request
    $rejected_request="SELECT * FROM `blood_rqst` WHERE status='rejected'";
    $data3 = mysqli_query($con, $rejected_request);
    $rejectedREQ = mysqli_num_rows($data3);
    // echo $rejectedREQ;
    // rejected request


    // 2
    // pending donation
    $donation_pending="SELECT * FROM `donation_tbl` WHERE status='pending'";
    $run = mysqli_query($con, $donation_pending);
    $donation_pending = mysqli_num_rows($run);
    //  echo $donation_pending;
    // pending donation
    // pending donation
    $accepted_pending="SELECT * FROM `donation_tbl` WHERE status='accepted'";
    $run2 = mysqli_query($con, $accepted_pending);
    $donation_pending_A = mysqli_num_rows($run2);
    //  echo $donation_pending_A;
    // pending donation
    // pending donation
    $donation_rejected="SELECT * FROM `donation_tbl` WHERE status='rejected'";
    $run3 = mysqli_query($con, $donation_rejected);
    $donation_rej= mysqli_num_rows($run3);
    //  echo $donation_rej;
    // pending donation

    ?>

</head>
<body>
<h3 class="text-left mt-2">Dashboard</h3><hr>
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
<!-- donation -->
<div class="col-md-3 mt-4 mx-2 ">
            <div class="card border-0" style="width: 18rem;">
    <div class="card-body border border-warning rounded card-height">
    <h5 class="card-title pending">Donation Pending: <?php echo $donation_pending; ?></h5>
  </div>
</div>
</div> <div class="col-md-3 mt-4 mx-2 ">
            <div class="card border-0" style="width: 18rem;">
    <div class="card-body border border-success rounded card-height">
    <h5 class="card-title approved">Donation Approved: <?php echo $donation_pending_A; ?></h5>
  </div>
</div>
</div> <div class="col-md-3 mt-4 mx-2 ">
            <div class="card border-0" style="width: 18rem;">
    <div class="card-body border border-danger rounded card-height">
    <h5 class="card-title rejected">Donation Rejected: <?php echo $donation_rej; ?></h5>
  </div>
</div>
</div>
<!-- donation -->

<!-- row end -->
        </div>
    </div>

    <!-- boostrap js link   -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>