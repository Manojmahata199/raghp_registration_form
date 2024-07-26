<?php
include('../config.php');
ini_set('upload_max_filesize', '5M');
$id=urldecode($_GET['vstuid']);
$sql="UPDATE student_data SET verified ='yes' WHERE id=$id";
$result=mysqli_query($link,$sql);
if($result){
	$resultp="Yeah your student is valid";
}
else{
	$resultp="Oops Some error try Again";
}
echo $resultp;