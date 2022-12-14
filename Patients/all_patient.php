<?php  include('../Includes/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Patients</title>
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
    <div class="container  text-center main-container mt-0 width-container">
        <h1>All Patients</h1>
      

<?php 
   $query = "SELECT * FROM `all_users` WHERE user_type=1";
   $data = mysqli_query($con, $query);
   $row_num = mysqli_num_rows($data);    
   $numb=1;
   if ($row_num>0) {
    echo"<table class='table table-border text-center m-auto shadow-lg rounded mt-0 table-hover width-table'>
    <thead class='table-dark'>
        <tr>
            <th>Serial No.</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Age</th>
            
            <th>Disease</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>";
    while ($row = mysqli_fetch_array($data)) {
        $image= $row['images'];
        ?>
        <tr>
            <td><?php echo $numb?></td>
            <td><?php echo $row['username']; ?></td>
            <td><img src="../all_users/image_of_PND/<?php echo $image; ?>" alt="" width="35px"></td>
            <td><?php echo $row['age']; ?></td>
           
            <td><?php echo $row['disease']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>
            
          <?php $numb++; ?>

        </tr>
<?php }



}else{
    echo "<h1 class='text-danger text-center mt-5 m-auto'>No data available</h1>";
}
   ?>
    
           
                <!-- <tr>
                    <td>Alia</td>
                    <td>Alia</td>
                    <td>22</td>
                    <td>B+</td>
                    <td>fever</td>
                    <td>67890</td>
                    <td>panbazar</td>
                </tr> -->
            </tbody>
        </table>
    </div>
    <!-- boostrap js link   -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>