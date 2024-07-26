<?php
session_start();

require_once "config.php"; 


	if(isset($_GET['id'])) {     

        
        $id=$_GET['id'];
     

		$sql="SELECT * FROM `winner_list` WHERE `id`='$id'";
		$query=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($query);
		if($num<0){
			header('Location:winner_list.php');
		}
		$row=mysqli_fetch_array($query);

		if($row['print_status']==0){

			$sql2="UPDATE `winner_list` SET `print_status`='1' WHERE `id`='$id'";
			$query2=mysqli_query($conn,$sql2);
			header('Location:staff_id_generate/newcard.php?id='.$row['id'].'');
		
		}
		else{
			$status=$row['print_status'];
			$new_status=$status+1;
			$sql3="UPDATE `winner_list` SET `print_status`='$new_status' WHERE `id`='$id'";
			$query3=mysqli_query($conn,$sql3);
			header('Location:staff_id_generate/newcard.php?id='.$row['id'].'');

		}
        
        

}	                                    	


?> 