<?php
include 'connect.php'; // connect.php has $conn not $con
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
 

    $sql="update `crud` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    
    $result = mysqli_query($conn, $sql); // Use $conn here
    if($result){
        // echo "Updated successfully";
        header('location:display.php'); // Redirect to display.php after update
    } else {
        die(mysqli_error($conn));
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container my-5">
    <form method ="POST" action="">

  <div class="form-group mb-3">
    <label >name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?> required>
  </div>
  <div class="form-group mb-3">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"  value=<?php echo $email;?> required>
  </div>
  <div class="form-group mb-3">
    <label >mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off" value=<?php echo $mobile;?> required>
  </div>
  <div class="form-group mb-3">
    <label >password</label>
    <input type="text" class="form-control" placeholder="Enter your pssword" name="password" autocomplete="off" value=<?php echo $password;?> required>
  </div>
   
  
  
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>

</form>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>