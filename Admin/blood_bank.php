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
    <style>
        .widthConataiNer{
            /* border: 2px solid red; */
            width: 60%;
        }
    </style>
</head>
<body>
<div class="container  text-center main-container mt-0 widthConataiNer">
        <h1>Blood Bank</h1><hr>
        
                <?php  

// starts

         
            $selectSQL="SELECT * FROM `blood_stock_available`";
            $runSQL=mysqli_query($con,$selectSQL);
            $numb=1;


// ends
                

                $row_num = mysqli_num_rows($runSQL);
                if($row_num>0){
                    echo "<table class='table table-border text-center m-auto shadow-lg rounded mt-0 table-hover width-table'>
                    <thead class='table-dark'>
                        <tr>
                   
                            <th>Blood Group</th>
                            <th>Quantity</th>
                            
                        </tr>
                    </thead>
                    <tbody>";
                    while ($row = mysqli_fetch_array($runSQL)) {
                        $blood_grp= $row['blood_grp'];
                        $stock_quantity= $row['stk_qty'];
                       
                        
                        
                        ?>
                    
                    <tr>
                  
                    <td><?php echo $blood_grp?></td>
                    <td><?php echo $stock_quantity?> ml</td>
                    
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