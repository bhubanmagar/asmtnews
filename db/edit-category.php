<--edit the content  of table-->

<?php 
if(!isset($_POST['category'])){
 die("cannot edit the record");

}else{
 $c = $_POST['category'];
 $i = $_POST['iconclass'];
 $id =$_POST['id'];
 include('connect.php');
 $query ="UPDATE  category set title ='$c', iconimage='$i' where id ='$id' ";
 if ( mysqli_query ($conn,$query)){
  header('location:../category.php?errmsg=sucefuly updated');
 }else{
  header('location:../category.php?errmsg='.mysqli_error($conn));
 }
}


?>