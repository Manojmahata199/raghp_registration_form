<?php
include('../database.php');
ini_set('upload_max_filesize', '5M');
$school=urldecode($_GET['school']);
//$school=addslashes($school);
$sql="select * from school_list where school_name='$school'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if(!isset($row['school_address'])){
	$address="&nbsp;";
}
else{
	$address=$row['school_address'];
}
echo $address;