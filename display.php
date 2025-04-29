<?php
include 'connect.php'; // Ensure this file contains the correct connection variable $con
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <title>crud operation</title>
</head>
<body>

<div class="container">
  <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
     </button>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Mobile</th>
      <th scope="col">password</th>
      <th scope="col">Oparation</th>
    </tr>
  </thead>
  <tbody>



    <?php
       $sql="Select * from `crud`";
       $result=mysqli_query($conn,$sql);
       if($result){
              while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $password=$row['password'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$password.'</td>
                <td>
                     <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                     <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                </td>
                 </tr>';
              }
       }
    ?>
    
  </tbody>
</table>


</div>
    
</body>
</html>