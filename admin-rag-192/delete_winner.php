<?php
session_start();
require_once "config.php"; 



if(isset($_GET['id'])) {     

        
        $id=$_GET['id'];
     

	$sql="DELETE FROM `winner_list` WHERE `id`='$id'";
	$query=mysqli_query($conn,$sql);
	

	if($query){

		$_SESSION['msg']="Deleted Successfully";
		header('Location:winner_list.php');
	}
	else{
		$_SESSION['msg2']="Not Deleted";
		header('Location:winner_list.php');

	}
        
        

}	                                    	



?> 