<?php
include('../Includes/connect.php');
@session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container text-center main-container mt-0 width-container">
        <h1>My Blood Request History</h1><hr>
        
                <?php  

// starts

            $session_name=$_SESSION['username'];

            $session_id="SELECT * FROM all_users WHERE username='$session_name'";
            $data=mysqli_query($con,$session_id);
            $fetch_id=mysqli_fetch_array($data);
            $session_fetch_id= $fetch_id['id'];
            // $session_fetch_id= 1;

            // echo $session_fetch_id;
            $selectSQL="SELECT all_users.username,all_users.disease,blood_rqst.quantity,blood_rqst.status,blood_rqst.date,blood_stock_available.blood_grp FROM all_users JOIN blood_rqst ON all_users.id=blood_rqst.user_id JOIN blood_stock_available ON blood_rqst.blood_group=blood_stock_available.stk_id WHERE all_users.id ='$session_fetch_id'";
            $runSQL=mysqli_query($con,$selectSQL);
            $numb=1;


// ends
                

                $row_num = mysqli_num_rows($runSQL);
                if($row_num>0){
                    echo "<table border='2px' cellspadding='10px' cellspacing='0' class='table table-border text-center m-auto shadow-lg rounded mt-0 table-hover width-table'>
                    <thead class='table-dark'>
                        <tr>
                            <th>Serial No.</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Blood-group</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>";
                    while ($row = mysqli_fetch_array($runSQL)) {
                        $username= $row['username'];
                        $blood_grp= $row['blood_grp'];
                        $status= $row['status'];
                        $quantity= $row['quantity'];
                        $date= $row['date'];
                        
                        
                        
                        ?>
                    
                    <tr>
                    <td><?php echo $numb?></td>
                    <td><?php echo $username?></td>
                    <td><?php echo $date?></td>
                    <td><?php echo $blood_grp?></td>
                    <td><?php echo $quantity?> ml</td>
                    <td><?php echo $status?></td>
                    
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

</body>
</html>