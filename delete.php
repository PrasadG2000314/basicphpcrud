<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:display.php'); // Redirect to display.php after deletion
    }else{
        die(mysqli_error($con));
    }
}
?>