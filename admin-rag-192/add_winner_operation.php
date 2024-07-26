<?php
session_start();
require_once "config.php";


if(isset($_POST['submit'])){

	 $winner_name=trim($_POST['w_name']);
	 $winner_roll_no=trim($_POST['ragp_roll']);
	 $winner_class=trim($_POST['w_class']);
	 $winner_board=trim($_POST['w_board']);
	

	if($winner_name!="" && $winner_roll_no!="" && $winner_class!="" && $winner_board!=""){

		$sql="INSERT INTO `winner_list`(`reg_id`, `winner_name`, `winner_class`, `winner_board`) VALUES ('$winner_roll_no','$winner_name','$winner_class','$winner_board')";
		$query=mysqli_query($conn,$sql);
		if($query){


		          $_SESSION['msg']="Winner Added Successfully";
                 header('Location:winner_list_form.php');
             }else{
             	 $_SESSION['msg2']="Winner Not Added Successfully";
                 header('Location:winner_list_form.php');
             }


	}else{

		 $_SESSION['msg2']="Winner Not Added Successfully";
         header('Location:winner_list_form.php');
	}
	
} 

?>
