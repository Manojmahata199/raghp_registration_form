<?php

ob_start();
session_start();


include('database.php');
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$today_date=date('Y-m-d');

$sql_code="SELECT * FROM `rgb_cupon` WHERE `srt_date`='$today_date'";
$query_code=mysqli_query($conn,$sql_code);
if($row_code=mysqli_num_rows($query_code)>0){
    $result_code=mysqli_fetch_assoc($query_code);
    $today_cupon_code=$result_code['code'];
	if(isset($_POST['submit']) && isset($today_cupon_code)){

		 $stu_email=$_POST['stu_email'];
	     $stu_reg_id=$_POST['stu_reg_id'];
	     $stu_code=$_POST['stu_code'];

	    if($stu_code==$today_cupon_code){

			    if($stu_email=="" || $stu_reg_id=="" || $stu_code==""){

			        $_SESSION['msg']="Please enter valid login info!";
			    	header('location:studentlogin.php');
			    }
			    else{

			        $stu_email=$_POST['stu_email'];
				    $stu_reg_id=$_POST['stu_reg_id'];


				    $sql="SELECT * FROM `student_data` WHERE `student_email`='$stu_email' and `reg_id`='$stu_reg_id'";

				    $query=mysqli_query($conn,$sql);
				    $row=mysqli_num_rows($query);
				    $res=mysqli_fetch_assoc($query);

				    if($row>0){

				    	if($stu_reg_id!=$res['reg_id'])
				    	{
		                    $_SESSION['msg']="Please enter valid unique roll number!";
				    	    header('location:studentlogin.php');

				    	}else{


					    	$_SESSION['id']=$res['id'];
					    	$_SESSION['reg_id']=$res['reg_id'];
					    	$_SESSION['student_email']=$res['student_email'];
					    	$_SESSION['fname']=$res['fname'];
					    	$_SESSION['lname']=$res['lname'];
					    	$_SESSION['student_mobile']=$res['student_mobile'];
					    	$_SESSION['boardexam']=$res['boardexam'];

					    	$_SESSION['msg']="Please check your login info, if it is not correct? Then login with right Email ID & Unique Roll Number or contacts with Sanmarg Pvt. Ltd.";
				    	    header('location:upload_marksheet2024.php');
			    	    }  

				    }else{

			            $_SESSION['msg']="Please enter your registered email id!";
			    	    header('location:studentlogin.php');



				    }
			    }
		}else{

			$_SESSION['msg']="The code is invalid and please see today's code in Sanmarg Newspaper!";
			header('location:studentlogin.php');
		}
	}
}else{
   $_SESSION['msg']="The code is invalid and please see today's code in Sanmarg Newspaper!";
   header('location:studentlogin.php');
}






 ?>