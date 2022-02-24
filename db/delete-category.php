<?php
  if(isset($_GET['id'])){
   $id =$_GET['id'];
   $query = "DELETE FROM  category WHERE id= '$id' ";
   include('connect.php');
   if(mysqli_query($conn,$query)){
    header("location:../category.php?msg=sucessfully deleted");

   }else {
    header("location:../category.php?errmsg=".mysqli_error($conn));
   }
  } ?>