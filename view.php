<?php
 include 'config.php';
$select_path="select * from tbl_image";

$var=mysqli_query($link,$select_path);

while($row=mysqli_fetch_assoc($var))
{
 $image_name=$row['imagename'];
 $image_path=$row['imagepath'];
 echo "<img src=".$image_path."/".$image_name." width=500 height=500>";
}
?>
