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
        <h1>Request History</h1><hr>
        
                <?php  

// starts

         
            $selectSQL="SELECT all_users.username,all_users.disease,all_users.images,blood_rqst.quantity,blood_rqst.status,blood_rqst.date,blood_stock_available.blood_grp,blood_rqst.rqst_id,blood_rqst.usertype FROM all_users JOIN blood_rqst ON all_users.id=blood_rqst.user_id JOIN blood_stock_available ON blood_rqst.blood_group=blood_stock_available.stk_id WHERE blood_rqst.status ='rejected' OR blood_rqst.status ='accepted' ";
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
                            <th>User Type</th>
                            <th>Date</th>
                            <th>Blood-group</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>";
                    while ($row = mysqli_fetch_array($runSQL)) {

                        $usertype= $row['usertype'];
                        if ($usertype==1){
                            $usertype="Patient";
                        }else{
                            $usertype="Donor";
                        }

                        $username= $row['username'];
                        $blood_grp= $row['blood_grp'];
                        $status= $row['status'];
                        $quantity= $row['quantity'];
                        $date= $row['date'];
                        
                        
                        
                        ?>
                    
                    <tr>
                    <td><?php echo $numb?></td>
                    <td><?php echo $username?></td>
                    <td><?php echo $usertype?></td>
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