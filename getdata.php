<?php
include 'config.php';

$upload_image=$_FILES["myimage"]["name"];

$folder="image/";

move_uploaded_file($_FILES["myimage"]["tmp_name"],"$folder".$_FILES["myimage"]["name"]);

mysqli_query($link,"INSERT INTO tbl_image(imagename,imagepath) values('".$upload_image."','".$folder."')");

 include 'view.php';
?>
