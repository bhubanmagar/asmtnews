<?php

if(isset($_POST['title'])
&& isset($_POST['content'] )
&& isset($_POST['category'])){
 
 $title =$_POST['title'];
 $content=$_POST['content'];
 $category=$_POST['category'];

$file =$_FILES['image']['tmp_name'];
$target ='../img/'.$_FILES['image']['name'];
 
move_uploaded_file($file,$target);

/*
$image=$_FILES['image'];
$imageType =$_FILES['image']['type'];
$imageSize= $_FILES['image']['size'];
*/

}else{
 $msg = "all file are required";
}
?>