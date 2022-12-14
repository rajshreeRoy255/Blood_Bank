<?php  include('../Includes/connect.php') ;

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
</style>
</head>
<body>
    <div class="container text-center main-container mt-0 width-container">
    <h1>New Donation</h1><hr>
                <?php  
                $let_status="pending";
                $query ="SELECT all_users.username,all_users.disease,all_users.images,donation_tbl.qty,donation_tbl.donation_id,donation_tbl.date,blood_stock_available.blood_grp FROM all_users JOIN donation_tbl ON all_users.id = donation_tbl.user_id JOIN blood_stock_available ON donation_tbl.bld_group=blood_stock_available.stk_id WHERE donation_tbl.status ='pending';";
                $data = mysqli_query($con, $query);
                

                $row_num = mysqli_num_rows($data);
                if($row_num>0){
// try
echo"
<table border='2px' cellspadding='10px' cellspacing='0' class='table table-border text-center m-auto shadow-lg rounded mt-0 table-hover width-table'>
    <thead class='table-dark'>
        <tr>
            <th>Serial No.</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Blood Group</th>
            <th>Quantity</th>
            <th>Disease</th>
            <th>Date</th>
            <th colspan='2'>Actions</th>
        </tr>
    </thead>
    <tbody>";
// try

                    $numb=1;
                    while ($row = mysqli_fetch_array($data)) {
                        $donation_unique_id= $row['donation_id'];
                        $username= $row['username'];
                        $blood_grp= $row['blood_grp'];
                        $quantity= $row['qty'];
                        $disease= $row['disease'];
                        $images= $row['images'];
                        $date= $row['date'];
                        
                        
                        
                        ?>
                    
                    <tr>
                    <td><?php echo $numb?></td>
                    <td><?php echo $username?></td>
                    <td><img src="../all_users/image_of_PND/<?php echo $images?>" alt="" width="30px"></td>
                    <td><?php echo $blood_grp?></td>
                    <td><?php echo $quantity?> ml</td>
                    <td><?php echo $disease?></td>
                    <td><?php echo $date?></td>
                    <td><a href="../Donor/accept_donation.php?acc_donation_ID=<?php echo $donation_unique_id; ?>" class="text-decoration-none btn btn-success">Accept</a></td>
                <td><a href="../Donor/reject_donation.php?rej_donation_ID=<?php echo $donation_unique_id; ?>" class="text-decoration-none btn btn-danger">Reject</a></td>
                    
                </tr>

                <?php $numb++; ?>
              <?php } 
              }else{
                echo "<h1 class='text-danger text-center mt-5 m-auto'>No data available</h1>";
              }
             
                ?>

            </tbody>
        </table>
    </div>

    <!-- boostrap js link   -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>