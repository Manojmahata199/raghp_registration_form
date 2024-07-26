<?php
session_start();
ob_start();
require_once "config.php";

require('vendor2/autoload.php');


require 'lib/mpdf/mpdf.php';
//require 'lib/mpdf/Mpdf.php';


require 'lib/PHPMailer/class.phpmailer.php';
require 'lib/PHPMailer/class.smtp.php';
require 'lib/PHPMailer/PHPMailerAutoload.php';
//send email to verified 
//if student record delete button is submitted
if(isset($_POST['bulk_delete_submit'])){
//if id arrray is not empty
if(!empty($_POST['checked_id'])){
//Get all the selected ids and convert it to a string
$idStr=implode(',',$_POST['checked_id']);
//Delete records from the database
$delete="DELETE FROM `student_data` WHERE `id` IN ($idStr)";
//If delete is successful
if($result = mysqli_query($conn, $delete)){
	$statusMsg='Selected students have been deleted successfully';
}
else{
	$statusMsg='Some problem occured please try again';
}

}
else{
	
	$statusMsg='Select atleast one record';
	
}	
}
//if school record delete button is submitted
if(isset($_POST['bulk_schdelete_submit'])){
//if id arrray is not empty
if(!empty($_POST['checked_id'])){
//Get all the selected ids and convert it to a string
$idStr=implode(',',$_POST['checked_id']);
//Delete records from the database
$delete="DELETE FROM `school_list` WHERE `id` IN ($idStr)";
//If delete is successful
if($result = mysqli_query($conn, $delete)){
	$statusMsg='Selected school have been deleted successfully';
}
else{
	$statusMsg='Some problem occured please try again';
}

}
else{
	
	$statusMsg='Select atleast one record';
	
}	
}
//Insert New School name and School Address
if(isset($_POST['add-school-submit'])){
//if id arrray is not empty
if(!empty($_POST['school-name'])&& !empty($_POST['school-address']) ){


$schoolname=$_POST['school-name'];
$school_address=$_POST['school-address'];
$location=$_POST['location'];
$boardexam=$_POST['boardexam'];


//Insert School record to the database
$insert="insert into `school_list`(`id`,`school_name`,`school_address`,`school_location`, `board`) values 
(default,'$schoolname', '$school_address','$location', '$boardexam');";
//If insert is successful
if($result = mysqli_query($conn, $insert)){
	$statusMsg='School Record is inserted successfully';
}
else{
	$statusMsg='Some problem occured please try again';
}

}
else{
	
	$statusMsg='Select atleast one record';
	
}		
	
}	

// bulk verify
if(isset($_POST['bulk_verify_submit'])){
//if id arrray is not empty
if(!empty($_POST['checked_id'])){
//Get all the selected ids and convert it to a string
$idStr=implode(',',$_POST['checked_id']);
//Udate records from the database
$verify="UPDATE `student_data` SET `verified` ='yes' WHERE `id` IN ($idStr)";
//If update is successful
if($result = mysqli_query($conn, $verify)){
	$statusMsg='Selected students documents have been verified successfully';
}
else{
	$statusMsg='Some problem occured please try again';
}

}
else{
	
	$statusMsg='Select atleast one record';
	
}	
	
	
	
}
// bulk not verify
if(isset($_POST['bulk_notverify_submit'])){
	//if id arrray is not empty
if(!empty($_POST['checked_id'])){
//Get all the selected ids and convert it to a string
$idStr=implode(',',$_POST['checked_id']);
//Udate records from the database
$verify="UPDATE `student_data` SET `verified` ='no' WHERE `id` IN ($idStr)";
// If update is successful
if($result = mysqli_query($conn, $verify)){
	$statusMsg='Selected students marked not verified successfully';
}
else{
	$statusMsg='Some problem occured please try again';
}

}
else{
	
	$statusMsg='Select atleast one record';
	
}	
}


// bulk certificate print
// email to verified student
if(isset($_POST['bulk_print_submit'])){
//if id arrray is not empty

	if(isset($_POST['page'])){
    $page=$_POST['page'];

  }
  else{
    $page=1;
  }


    if(!empty($_POST['checked_id'])){
    //Get all the selected ids and convert it to a string
			  $idStr=implode(',',$_POST['checked_id']);
			  $length=strlen($idStr);
			  $all_val=explode(',', $idStr);


			    for($i=0;$i<=$length;$i++){
			      $scan_id=$all_val[$i];
			    
				    $sql="SELECT * FROM `winner_list` WHERE `id`='$scan_id'";
				    
			  
					  if($result = mysqli_query($conn, $sql)){


				    	  if(mysqli_num_rows($result) > 0){


				    		    while($row = mysqli_fetch_assoc($result)){

 

				    		    	$html='<!doctype html>
															<html>

                               <head>
															<meta charset="utf-8">
															<!-- <link rel="shortcut icon" type="image/x-icon" ng-href="favicon.ico"> -->
															<meta name="viewport" content="width=297mm, minimum-scale=1.0, initial-scale=1.0, user-scalable=no" />
															<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Open+Sans|Roboto&display=swap" rel="stylesheet">
															<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
															
                              
															<style type="text/css">


															@charset "utf-8";

															 @font-face {
																    font-family: "Kruti Dev";
																    src: url("http://localhost/ragp_2024/admin-rag-192/Krutidev/Kruti Dev 010 Regular.ttf");
																    font-weight: 300;
																}
																@font-face {
																    font-family: "mangal";
																	  font-style: normal;
																	  font-weight: normal;
																    src: url("http://localhost/ragp_2024/admin-rag-192/Mangal/Mangal Regular.ttf");
																    format("truetype");
																}

															/* CSS Document */


															body{
																font-family:freeserif;
															}

															.hindi-label{
																
																text-align:center; 
																font-family: freeserif;
																 
															}
															
															body{
															  height:297mm;
															  width:210mm;
															  
															}
															#main_div{
															  position: absolute;
															  top: 0px;
															  left:0px;
															  height:297mm;
															  width:210mm;
															  background-image: url("assets/img/certificate_kolkata_2024.jpg");
															  background-position: center;
															  background-repeat: no-repeat;
															  background-size: cover;
															}
															#back_img{
															  position: fixed;
															  top: -100%;
															  height:297mm;
															  width:210mm;
															}
															#roll_no{
															  position: fixed;
															  font-size:18px;
															  font-weight:bold;
															  margin-left: 102px;
															  padding-top: 98px;
															  font-weight:bold;
															  width:185px;
															  text-align:left;
															  
															}
															#name{
															  position: fixed;
															  width:345px;
															  text-align:center;
															  font-size:25px;
															  font-weight:bold;
															  margin-left: 308px;
															  margin-top: 555px;
															  
															 
															  
															  
															}
															#class_div{

															  width:100%;
															  position: fixed;
															  display:flex;
															  text-align:left;
															  margin-top: 25px;
															  
															  

															  
															}
															
															#board{
															  width:210px;
															  font-size:25px;
															  font-weight:bold;
															  margin-left:202px;
															  z-index: +1;															  
															  text-align:center;
															  position: fixed;
															  
															  
															}

															</style>

															  
															</head>
															<body>
															  <div id="main_div">
															    
															        <div  id="roll_no"><span class="hindi-label">'.$row['reg_id'].'</span></div>

															        <div id="name"><span class="hindi-label">'.$row['winner_name'].'</span></div>
															        
															        <div id="class_div">
															         
															          <div  id="board">
															             <span class="hindi-label">'.$row['winner_board'].'</span>
															           </div>
															        </div>
															        
															                                
															  </div>
															</body>
															</html>';

					         

												$mpdf=new \Mpdf\Mpdf();
												$mpdf = new \Mpdf\Mpdf([
											    'format' => 'A4',
											    // 'orientation' => 'V',
											    0,    // margin_left
											    0,    // margin right
											    0,    // margin top
											    0,    // margin bottom
											    0,    // margin header
											    0     // margin footer
											]);

										
								
											 $file='certificate_list/RAGP CERTIFICATE-'.$row['reg_id'].'.pdf';
											 // $stylesheet = file_get_contents('mpdf.css'); // external css
			                 // $mpdf->WriteHTML($stylesheet,1);
			                 $mpdf->WriteHTML($html);
			                 // $mpdf->WriteHTML($html,2);
			               
			                 print_r($mpdf->Output());
			                 die;


											  $mpdf->Output($file,'F');
										    // $emailAttachment=$mpdf->Output($file, 'S');

                        $print_time=$row['print_status']+1;
										    $sql_update="UPDATE `winner_list` SET `print_status`='$print_time' WHERE `id`='$scan_id'";
										    $query_update=mysqli_query($conn, $sql_update);


							          $_SESSION['msg']="Certificate are printed";
			    	            header("location: winner_list.php?page=".$page."");
				    		    }
				    	  }


				    }else{
			    	  	$_SESSION['msg2']="Some problem occured please try again later";
			  	      header("location: winner_list.php?page=".$page."");
				    }
				  }

		}else{
  	  	$_SESSION['msg2']="Please select atleast one";
	      header("location: winner_list.php?page=".$page."");
	  }
}

// email to verified student
if(isset($_POST['bulk_email_submit'])){
//if id arrray is not empty


    if(!empty($_POST['checked_id'])){
    //Get all the selected ids and convert it to a string
    $idStr=implode(',',$_POST['checked_id']);
    $length=strlen($idStr);
    $all_val=explode(',', $idStr);


    for($i=0;$i<=$length;$i++){
      $scan_id=$all_val[$i];
    
	    //Email student from the database
	     $sql="SELECT * from `student_data` WHERE `id`='$scan_id'";
	    // $result = mysqli_query($conn, $sql);
	    // $row = mysqli_fetch_assoc($result);
        // echo "<pre>";
	    // print_r($row);
	
	
	    
		if($result = mysqli_query($conn, $sql)){


	    	if (mysqli_num_rows($result) > 0){


	    		while($row = mysqli_fetch_assoc($result)){

	    		    
	    		      $stu_id=$row['id'];
	    		      $namefor_pdf="".$row['fname']." ".$row['lname']."";
	    		    

				          	
								$sql="SELECT * FROM `student_data` WHERE `id` ='$stu_id'";
								$result=mysqli_query($conn,$sql);
								$row2=mysqli_fetch_assoc($result);



								if($row==""){
									exit;
								}


								
								$boardName=$row['boardexam'];
								


								if($row['school_name'] =="others")
								{ 
									$schoolName = $row['other_school_name'];
									$schoolAddress = $row['other_school_address'];
								}
								else
								{ 
									
									$schoolName = $row['school_name'];
									$schoolAddress = $row['school_address'];
								}


								if($row["category"] == "Aparajay")
								{ 
								 $category="Yes"; 
								} else { 
								 $category="No"; 
								}

								if($row["disorder"] == "Physically Challenged")
	                            { 
	                             $disorder_name=$row["phy_disorder_name"]; 
	                            }else { 
	                             $disorder_name=$row["mental_disorder_name"]; 
	                            }


								if($row["ankur"] =="")
								{ 
									$ankur="No"; 
								} else { 
									$ankur="Yes"; 
								}
								
								if($row["disorder_file"] != "") 
						        { 
									$aparajay="Aparajay Documents"; 
								}
								 if($row["hname_file"] != "") 
								{ 
									$hname_file="Hindi Correct File Name";
								}
								if($row["marksheet_one"] != "") 
								{ 
									$stu_nine_sheet="Student Class 9th Marksheet";
								}
								if($row["marksheet_eleven"] != "") 
								{ 
									$stu_eleven_marksheet="Student Class 11th Marksheet";
								}
								if($row["admit_card_file"] != "") 
								{ 
									$admit_card="Admit Card";
							    }
							    if($row["ankur_activity_file"] != "")
							    {
									$ankur_activ="Ankur Activity"; 
							    }
							    if($row["marksheet_file"] != "") 
							    { 
									$board_mark="Board Marksheet"; 
								}
								


							$html='<!doctype html>
	                                <html lang="en">
	                                <head>
	                                  <meta charset="utf-8">
	                                  <!-- <link rel="shortcut icon" type="image/x-icon" ng-href="favicon.ico"> -->
	                                  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no" />
	                                  <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Open+Sans|Roboto&display=swap" rel="stylesheet">
	                                  <link rel="stylesheet" type="text/css" href="css/email-style.css" />
	                                  <title>Student Registration Form 2022</title> 
	                                   <!-- add icon link -->
	                                    <link rel = "icon" href ="images/new-sign-up.png" type = "image/x-icon">

	                            <!-- Font Icon -->    
	                            <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
	                            <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel = "Stylesheet" type="text/css" />
	                            <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
	                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	                            <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
	                                
	                            <!-- Main css -->
	                            <link rel="stylesheet" href="css/style.css">
	                             <link rel="stylesheet" href="css/email-style.css">
	                             
	                              <link rel="stylesheet" type="text/css" href="css/email-style.css" />

	                            
	                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type = "text/javascript"></script>
	                            <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type = "text/javascript"></script>
	                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	                            <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
	                                 rel = "stylesheet">
	                              <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
	                              <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

	                              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


	                            <!-- CSS only -->
	                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	                        <!-- JavaScript Bundle with Popper -->
	                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	                        <script type="text/javascript" src="js2/jquery-3.6.0.min.js"></script>
	                        
	                        
	                //      <link rel="stylesheet" href="https://amsul.ca/pickadate.js/css/main.css">
	                //         <link rel="stylesheet" href="https://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.css" id="theme_base">
	                //         <link rel="stylesheet" href="https://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.date.css" id="theme_date">
	                //         <link rel="stylesheet" href="https://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.time.css" id="theme_time">
	                          
	                                </head>
	                                <body>
	                                  <div class="pdfsection-mail col-md-12" style="border: 4px solid black;margin-left:16px; background-color: #fee588;margin-top:10px;margin-bottom:10px;">
	                                    <table>
	                                    
	                                        <tr>


	                                            <td valign="top">
	                                                <img id="pdf-left-logo" src="images/RAGLOGO_2022.png" width="150" height="400">
	                                            </td>



	                                            <td valign="top">
	                                                <table id="pdf-reg-email" class="pdf-email">
	                                                <thead>
	                                                 
	                                                
	                                            
	                                                <tr><th colspan="2"><h1><br> 
	                                                
	                                                   <span class="eng-label" style="text-align: center;align-content: center;align-items: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RAM AWATAR GUPT HINDI PROTSAHAN - 2024</span><br/>
	                                                   <span class="hindi-label" style="text-align: center;align-content: center;align-items: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;राम अवतार गुप्त हिंदी प्रोत्साहन– 2024</h1></h1></th></tr>
	                                                     <br>  <br>                                   
	                                                   
	                                                <tr><th colspan="2"><h4>
	                                                  <span class="eng-label" style="text-align: center;align-content: center;align-items: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration Confirmation Form</span>
	                                                  <span class="hindi-label" style="text-align: center;align-content: center;align-items: center;">(स्वीकृत प्रपत्र)</span><br/><span class="eng-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unique Roll Number:<span class="high-light">RAGHP-'.$boardName.'-'.$row["reg_id"].'</span></span><br><span class="hindi-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     (यूनिक रोल नंबर)</span></h4></th></tr>
	                                                <br>  <br>  <br>  
	                                                   
	                                                
	                                                </thead>
	                                                <tbody>
	                                                <tr><td><span class="hindi-label">रजिस्ट्रेशन (परीक्षा क्षेत्र)</span></td><td rowspan="2"><span class="eng-label">'.$row["reg_location"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Registering For</span></td></tr>
	                                                <tr><td><span class="hindi-label">स्टूडेंट केटेगरी</span></td><td rowspan="2"><span class="eng-label">'.$row["category"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Student Category</span></td></tr>
	                                                <tr><td><span class="hindi-label">पूरा नाम (अंग्रेजी)</span></td><td rowspan="2"><span class="eng-label">'.$row["fname"].' '.$row["lname"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Full Name in (English)</span></td></tr>
	                                                <tr><td><span class="hindi-label">पूरा नाम (हिंदी)</span></td><td rowspan="2"><span class="hindi-label">'.$row["hname"].' '.$row["hlname"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Full Name in (Hindi)</span></td></tr>
	                                                <tr><td><span class="hindi-label">लिंग</span></td><td rowspan="2"><span class="eng-label">'.$row["student_gender"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Gender</span></td></tr>
	                                                <tr><td><span class="hindi-label">जन्म तिथि</span></td><td rowspan="2"><span class="eng-label">'.$row["student_dob"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Date of Birth</span></td></tr>
	                                                <tr><td><span class="hindi-label">ई-मेल</span></td><td rowspan="2"><span class="eng-label">'.$row["student_email"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Email ID</span></td></tr>
	                                                <tr><td><span class="hindi-label">मोबाइल नंबर</span></td><td rowspan="2"><span class="eng-label">'.$row["student_mobile"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Mobile Number</span></td></tr>
	                                                <tr><td><span class="hindi-label">बोर्ड परीक्षा</span></td><td rowspan="2"><span class="eng-label">'.$boardName.'</span></td></tr>
	                                                <tr><td><span class="eng-label">Board exam appeared for</span></td></tr>
	                                                <tr><td><span class="hindi-label">बोर्ड रोल नंबर</span></td><td rowspan="2"><span class="eng-label">'.$row["board_roll_no"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Board Roll Number</span></td></tr>
	                                                 <tr><td><span class="hindi-label">कक्षा*</span></td><td rowspan="2"><span class="eng-label">'.$row["class"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Class</span></td></tr>
	                                                 <tr><td><span class="hindi-label">आपके विद्यालय का पठन माध्यम*</span></td><td rowspan="2"><span class="eng-label">'.$row["school_medium"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">medium of instruction in your school</span></td></tr>
	                                                <tr><td><span class="hindi-label">स्कूल का पूरा नाम</span></td><td rowspan="2"><span class="eng-label">'.$schoolName.'</span></td></tr>
	                                                <tr><td><span class="eng-label">School Full Name</span></td></tr>
	                                                <tr><td><span class="hindi-label">स्कूल का पता</span></td><td rowspan="2"><span class="eng-label">'.$schoolAddress.'</span></td></tr>
	                                                <tr><td><span class="eng-label">School Address</span><hr></td></tr>
	                                                 <tr><td><span class="hindi-label">हिंदी शिक्षक का नाम*</span></td><td rowspan="2"><span class="eng-label">'.$row["hnd_tech_name"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Hindi Teacher Name</span></td></tr>

	                                                <tr><td><span class="hindi-label">हिंदी शिक्षक मोबाइल नंबर</span></td><td rowspan="2"><span class="eng-label">'.$row["hnd_tech_mob"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Hindi Teacher Mobile Number</span></td></tr>
	                                                <tr><td><span class="hindi-label">अभिभावक का नाम</span></td><td rowspan="2"><span class="eng-label">'.$row["parent_name"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Parent / Guardian name</span></td></tr>
	                                                <tr><td><span class="hindi-label">अभिभावक का फोन नंबर</span></td><td rowspan="2"><span class="eng-label">'.$row["parent_mobile"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Parent / Guardian Mobile Number</span></td></tr>
	                                                <tr><td><span class="hindi-label">अभिभावक का ई-मेल</span></td><td rowspan="2"><span class="eng-label">'.$row["parent_email"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Parent / Guardian Email ID</span></td></tr>
	                                                <tr><td><span class="hindi-label">घर का पता</span></td><td rowspan="2"><span class="eng-label">'.$row["home_address"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Home Address</span></td></tr>
	                                                <tr><td><span class="hindi-label">शहर</span></td><td rowspan="2"><span class="eng-label">'.$row["city"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">City</span></td></tr>
	                                                <tr><td><span class="hindi-label">राज्य</span></td><td rowspan="2"><span class="eng-label">'.$row["state"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">State</span></td></tr>
	                                                <tr><td><span class="hindi-label">पिन कोड</span></td><td rowspan="2"><span class="eng-label">'.$row["pincode"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Pincode</span></td></tr>
	                                                <tr><td><span class="hindi-label">प्री-बोर्ड / सिलेक्शन परीक्षा में हिंदी में प्राप्त अंक</span></td><td rowspan="2"><span class="eng-label">'.$row["current_year_preboards"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Pre-Board / Selection Marks in Hindi Subject</span></td></tr>
	                                                <tr><td><span class="hindi-label">कक्षा 10 में राम अवतार गुप्त पुरस्कार प्राप्त हुआ</span></td><td rowspan="2"><span class="eng-label">'.$row["rag_participated_chk"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Received Ram Awatar Gupt Pratibha Puraskar in class 10</span></td></tr>
	                                                <tr><td><span class="hindi-label">पाठ्येतर गतिविधियां</span></td><td rowspan="2"><span class="eng-label">'.$row["ankur"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Extra Curricular Activity</span></td></tr>
	                                                <tr><td><span class="hindi-label">विकार प्रकार</span></td><td rowspan="2"><span class="eng-label">'.$row["disorder"].'</span></td></tr>
	                                                <tr><td><span class="eng-label">Challenge Type</span></td></tr>
	                                                <tr><td><span class="hindi-label">विकार नाम</span></td><td rowspan="2"><span class="eng-label">'.$disorder_name.'</span></td></tr>
	                                                <tr><td><span class="eng-label">Challenge Name</span><hr></td></tr>
	                                                <tr><td><span class="hindi-label">अपलोड किए गए दस्तावेज</span></td><td rowspan="2"><span class="eng-label">

	                                                         '.$aparajay.'<br/>
	                                                         '.$hname_file.'<br/>
	                                                         '.$stu_nine_sheet.'<br/>
	                                                         '.$stu_eleven_marksheet.'<br/>
	                                                         '.$admit_card.'<br/>
	                                                         '.$ankur_activ.'<br/>                          
	                                                         '.$board_mark.'<br/>
	                
	                                                        </span></td></tr>
	                                                        <tr><td><span class="eng-label">Relevant Documents Uploaded</span></td></tr>    
	                                                </tbody>        
	                                                </table>                
	                                            </td>
	                                            <td valign="top">
	                                                <img id="pdf-right-logo" src="images/RAGLOGO_2022.png" width="150" height="150">
	                                            </td>


	                                        </tr>
	                                    </table>
	                                  </div>
	                                </body>
	                                </html>';

					         

								$mpdf=new \Mpdf\Mpdf();
								$mpdf->WriteHTML($html);

								 

								 $file='uploads/file'.$row['id'].'.pdf';


								$mpdf->output($file,'F');
							    $emailAttachment=$mpdf->Output($file, 'S');
								
							
	    
	    		    
						    		
								  

						          $name=$row['fname']." ".$row['lname'];
								  $stuemail=$row['student_email'];
								  $boardexam=$row['boardexam'];
								  $registrationId="G-".$row['boardexam']."-".$row['reg_id']."";
								  
								 

								  $mail = new PHPMailer(true);
								  $mail->isSMTP(); 
								 


								   $mail->Host = 'smtp.gmail.com';   
						            $mail->Debugoutput = 'html';
						            $mail->SMTPAuth = true;  


								 $mail->Username = '##############';                
						         $mail->Password = '###########';                           
						         $mail->SMTPSecure = 'tls';                          
						         $mail->CharSet = "UTF-8";
						         $mail->Port = 587;

						          $mail->From = '###########';
						          $mail->FromName = 'Ram Awatar Gupt Hindi Protsahan-2024';


						          
						          $mail->addAddress($stuemail, 'Raghp Registered User 2024');                     
						          $mail->addReplyTo('########', 'RAGHP 2024 Information');  


						          $mail->isHTML(true); 
						          $mail->WordWrap = 50;  


						          $mail->Subject = 'Registration Confirmation mail';
								  
						          $msgBody=file_get_contents('welcome-email.html');

						        


						          $msgBody=file_get_contents('welcome-email.html');
						          $msgBody=str_ireplace("EMAILLOGO", 'images/RAGLOGO_2022.png', $msgBody);
						          $msgBody=str_ireplace("REGNAME", $name, $msgBody);
						          $msgBody=str_ireplace("REGNUMBER",$registrationId,$msgBody);
						          $msgBody=str_ireplace("STUEMAIL",$stuemail,$msgBody);
						           
						           
						           
						            $mail->AddStringAttachment($emailAttachment,'ragp-form-2024.pdf','base64','application/pdf');	


						          
						           $mail->Body=$msgBody;

						           $mail->SMTPOptions = array(
						                  'ssl' => array(
						                      'verify_peer' => false,
						                      'verify_peer_name' => false,
						                      'allow_self_signed' => true
						                  )
						              );
						              
						              
						              
						              
						    		if(!$mail->send()) {
						        		$statusMsg= 'Message could not be sent.';
						        		$_SESSION['msg2']="Message could not be sent.";
						        		
						        			
						    		} else {
						       		    $statusMsg= 'Email has been sent successfully';
						       		    $_SESSION['msg']="Email has been sent successfully";
						       			
						    		}
	    		
	    		    }
	    	
				    }
				    else{
		  	
				    	$statusMsg='Some problem occured please try again';
				    	$_SESSION['msg2']="Some problem occured please try again";
				    	
				    }	

		
		    }
		    else{
    	
		    	$statusMsg='Some problem occured please try again';
		    	$_SESSION['msg2']="Some problem occured please try again";
		    	
		    }
		}
		
		


	}
  else{
    	
    	$statusMsg='Some problem occured please try again';
    	$_SESSION['msg2']="Some problem occured please try again";
    	header("location: mail-verified.php");
        exit;
  }
  header("location: mail-verified.php");
	exit;

}
	
			










// email to verified for aparajay student student
if(isset($_POST['bulk_aparajay_email_submit'])){
//if id arrray is not empty
    if(!empty($_POST['checked_id'])){
	    //Get all the selected ids and convert it to a string
	    $idStr=implode(',',$_POST['checked_id']);
	    //Email student from the database
	    $sql="SELECT * from `aparajay_student_data` WHERE `id` IN ($idStr)";
	    //If selected successful
		if($result = mysqli_query($conn, $sql)){
	    	if (mysqli_num_rows($result) > 0){
	    		while($row = mysqli_fetch_assoc($result)){
    		    
    		      $stu_id=$row['id'];
    		      $namefor_pdf="".$row['fname']." ".$row['lname']."";
    		    
    		       

				      // 	include('database.php');
							$sql="SELECT * FROM `aparajay_student_data` WHERE `id` ='$stu_id'";
							$result=mysqli_query($conn,$sql);
							$row2=mysqli_fetch_assoc($result);


							 if($row==""){
								exit;
							}


							//Storing values
							$boardName=$row['boardexam'];
							/*** get school name*/


							if($row['school_name'] =="others")
							{ 
								$schoolName = $row['other_school_name'];
								$schoolAddress = $row['other_school_address'];
							}
							else
							{ 
								
								$schoolName = $row['school_name'];
								$schoolAddress = $row['school_address'];
							}


							if($row["category"] == "Aparajay")
							{ 
							 $category="Yes"; 
							} else { 
							 $category="No"; 
							}

							if($row["disorder"] == "Physically Challenged")
							{ 
							 $disorder_name=$row["phy_disorder_name"]; 
							}else { 
							 $disorder_name=$row["mental_disorder_name"]; 
							}






							if($row["ankur"] =="")
							{ 
								$ankur="No"; 
							} else { 
								$ankur="Yes"; 
							}
							
							if($row["disorder_file"] != "") 
					        { 
								$aparajay="Aparajay Documents"; 
							}
							 if($row["hname_file"] != "") 
							{ 
								$hname_file="Hindi Correct File Name";
							}
							if($row["marksheet_one"] != "") 
							{ 
								$stu_nine_sheet="Student Class 9th Marksheet";
							}
							if($row["marksheet_eleven"] != "") 
							{ 
								$stu_eleven_marksheet="Student Class 11th Marksheet";
							}
							if($row["admit_card_file"] != "") 
							{ 
								$admit_card="Admit Card";
						    }
						    if($row["ankur_activity_file"] != "")
						    {
								$ankur_activ="Ankur Activity"; 
						    }
						    if($row["marksheet_file"] != "") 
						    { 
								$board_mark="Board Marksheet"; 
							}
		


						$html='
								<!doctype html>
								<html lang="en">
								<head>
								  <meta charset="utf-8">
								  <!-- <link rel="shortcut icon" type="image/x-icon" ng-href="favicon.ico"> -->
								  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no" />
								  <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Open+Sans|Roboto&display=swap" rel="stylesheet">
								  <link rel="stylesheet" type="text/css" href="css/email-style.css" />
								  <title>Student Registration Form 2022</title> 
								   <!-- add icon link -->
				                    <link rel = "icon" href ="images/new-sign-up.png" type = "image/x-icon">

						    <!-- Font Icon -->	  
							<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
							<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel = "Stylesheet" type="text/css" />
							<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
							<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
							<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
							<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
						    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
								
						    <!-- Main css -->
						    <link rel="stylesheet" href="css/style.css">
						     <link rel="stylesheet" href="css/email-style.css">
						     
						      <link rel="stylesheet" type="text/css" href="css/email-style.css" />

						    
							<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type = "text/javascript"></script>
							<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type = "text/javascript"></script>
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
						    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
							<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
						         rel = "stylesheet">
						      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
						      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

						      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


							<!-- CSS only -->
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

						<script type="text/javascript" src="js2/jquery-3.6.0.min.js"></script>
						
						
				// 		<link rel="stylesheet" href="https://amsul.ca/pickadate.js/css/main.css">
				//         <link rel="stylesheet" href="https://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.css" id="theme_base">
				//         <link rel="stylesheet" href="https://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.date.css" id="theme_date">
				//         <link rel="stylesheet" href="https://amsul.ca/pickadate.js/vendor/pickadate/lib/themes/default.time.css" id="theme_time">
				          
								</head>
								<body>
								  <div class="pdfsection-mail col-md-12" style="border: 4px solid black;margin-left:16px; background-color: #fee588;margin-top:10px;margin-bottom:10px;">
									<table>
									
										<tr>


											<td valign="top">
												<img id="pdf-left-logo" src="images/RAGLOGO_2022.png" width="150" height="400">
											</td>



											<td valign="top">
												<table id="pdf-reg-email" class="pdf-email">
												<thead>
												 
												
											
												<tr><th colspan="2"><h1><br> 
												
												   <span class="eng-label" style="text-align: center;align-content: center;align-items: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RAM AWATAR GUPT HINDI PROTSAHAN - 2024</span><br/>
												   <span class="hindi-label" style="text-align: center;align-content: center;align-items: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;राम अवतार गुप्त हिंदी प्रोत्साहन– 2024</h1></h1></th></tr>
				                                     <br>  <br>  								  
												   
												<tr><th colspan="2"><h4>
												  <span class="eng-label" style="text-align: center;align-content: center;align-items: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration Confirmation Form</span>
												  <span class="hindi-label" style="text-align: center;align-content: center;align-items: center;">(स्वीकृत प्रपत्र)</span><br/><span class="eng-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unique Roll Number:<span class="high-light">SA-'.$boardName.'-'.$row["reg_id"].'</span></span><br><span class="hindi-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     (यूनिक रोल नंबर)</span></h4></th></tr>
										        <br>  <br>  <br>  
				    						       
										        
										        </thead>
												<tbody>
												<tr><td><span class="hindi-label">रजिस्ट्रेशन (परीक्षा क्षेत्र)</span></td><td rowspan="2"><span class="eng-label">'.$row["reg_location"].'</span></td></tr>
												<tr><td><span class="eng-label">Registering For</span></td></tr>
												<tr><td><span class="hindi-label">पूरा नाम (अंग्रेजी)</span></td><td rowspan="2"><span class="eng-label">'.$row["fname"].' '.$row["lname"].'</span></td></tr>
												<tr><td><span class="eng-label">Full Name in (English)</span></td></tr>
												<tr><td><span class="hindi-label">पूरा नाम (हिंदी)</span></td><td rowspan="2"><span class="hindi-label">'.$row["hname"].' '.$row["hlname"].'</span></td></tr>
												<tr><td><span class="eng-label">Full Name in (Hindi)</span></td></tr>
												<tr><td><span class="hindi-label">लिंग</span></td><td rowspan="2"><span class="eng-label">'.$row["student_gender"].'</span></td></tr>
												<tr><td><span class="eng-label">Gender</span></td></tr>
												<tr><td><span class="hindi-label">जन्म तिथि</span></td><td rowspan="2"><span class="eng-label">'.$row["student_dob"].'</span></td></tr>
												<tr><td><span class="eng-label">Date of Birth</span></td></tr>
												<tr><td><span class="hindi-label">ई-मेल</span></td><td rowspan="2"><span class="eng-label">'.$row["student_email"].'</span></td></tr>
												<tr><td><span class="eng-label">Email ID</span></td></tr>
												<tr><td><span class="hindi-label">मोबाइल नंबर</span></td><td rowspan="2"><span class="eng-label">'.$row["student_mobile"].'</span></td></tr>
												<tr><td><span class="eng-label">Mobile Number</span></td></tr>
												<tr><td><span class="hindi-label">बोर्ड परीक्षा</span></td><td rowspan="2"><span class="eng-label">'.$boardName.'</span></td></tr>
												<tr><td><span class="eng-label">Board exam appeared for</span></td></tr>
												<tr><td><span class="hindi-label">बोर्ड रोल नंबर</span></td><td rowspan="2"><span class="eng-label">'.$row["board_roll_no"].'</span></td></tr>
												<tr><td><span class="eng-label">Board Roll Number</span></td></tr>


												 <tr><td><span class="hindi-label">कक्षा*</span></td><td rowspan="2"><span class="eng-label">'.$row["class"].'</span></td></tr>
												<tr><td><span class="eng-label">Class</span></td></tr>
												
												 <tr><td><span class="hindi-label">आपके विद्यालय का पठन माध्यम*</span></td><td rowspan="2"><span class="eng-label">'.$row["school_medium"].'</span></td></tr>
												<tr><td><span class="eng-label">medium of instruction in your school</span></td></tr>


												<tr><td><span class="hindi-label">स्कूल का पूरा नाम</span></td><td rowspan="2"><span class="eng-label">'.$schoolName.'</span></td></tr>
												<tr><td><span class="eng-label">School Full Name</span></td></tr>
												<tr><td><span class="hindi-label">स्कूल का पता</span></td><td rowspan="2"><span class="eng-label">'.$schoolAddress.'</span></td></tr>
												<tr><td><span class="eng-label">School Address</span><hr></td></tr>



												 <tr><td><span class="hindi-label">हिंदी शिक्षक का नाम*</span></td><td rowspan="2"><span class="eng-label">'.$row["hnd_tech_name"].'</span></td></tr>
												<tr><td><span class="eng-label">Hindi Teacher Name</span></td></tr>

												<tr><td><span class="hindi-label">हिंदी शिक्षक मोबाइल नंबर</span></td><td rowspan="2"><span class="eng-label">'.$row["hnd_tech_mob"].'</span></td></tr>
												<tr><td><span class="eng-label">Hindi Teacher Mobile Number</span></td></tr>


												
												<tr><td><span class="hindi-label">अभिभावक का नाम</span></td><td rowspan="2"><span class="eng-label">'.$row["parent_name"].'</span></td></tr>
												<tr><td><span class="eng-label">Parent / Guardian name</span></td></tr>
												<tr><td><span class="hindi-label">अभिभावक का फोन नंबर</span></td><td rowspan="2"><span class="eng-label">'.$row["parent_mobile"].'</span></td></tr>
												<tr><td><span class="eng-label">Parent / Guardian Mobile Number</span></td></tr>
												
												<tr><td><span class="hindi-label">अभिभावक का ई-मेल</span></td><td rowspan="2"><span class="eng-label">'.$row["parent_email"].'</span></td></tr>
												<tr><td><span class="eng-label">Parent / Guardian Email ID</span></td></tr>
												<tr><td><span class="hindi-label">अभिभावक का पता</span></td><td rowspan="2"><span class="eng-label">'.$row["home_address"].'</span></td></tr>
												<tr><td><span class="eng-label">Parent / Guardian Address</span></td></tr>
												<tr><td><span class="hindi-label">शहर</span></td><td rowspan="2"><span class="eng-label">'.$row["city"].'</span></td></tr>
												<tr><td><span class="eng-label">City</span></td></tr>
												<tr><td><span class="hindi-label">राज्य</span></td><td rowspan="2"><span class="eng-label">'.$row["state"].'</span></td></tr>
												<tr><td><span class="eng-label">State</span></td></tr>
												<tr><td><span class="hindi-label">पिन कोड</span></td><td rowspan="2"><span class="eng-label">'.$row["pincode"].'</span></td></tr>
												<tr><td><span class="eng-label">Pincode</span></td></tr>
												
												<tr><td><span class="hindi-label">प्री-बोर्ड / सिलेक्शन परीक्षा में हिंदी में प्राप्त अंक</span></td><td rowspan="2"><span class="eng-label">'.$row["current_year_preboards"].'</span></td></tr>
												<tr><td><span class="eng-label">Pre-Board / Selection Marks in Hindi Subject</span></td></tr>
												<tr><td><span class="hindi-label">कक्षा 10 में राम अवतार गुप्त पुरस्कार प्राप्त हुआ</span></td><td rowspan="2"><span class="eng-label">'.$row["rag_participated_chk"].'</span></td></tr>
												<tr><td><span class="eng-label">Received Ram Awatar Gupt Pratibha Puraskar in class 10</span></td></tr>
												
												
												<tr><td><span class="hindi-label">पाठ्येतर गतिविधियां</span></td><td rowspan="2"><span class="eng-label">'.$row["ankur"].'</span></td></tr>
												<tr><td><span class="eng-label">Extra Curricular Activity</span></td></tr>

												<tr><td><span class="hindi-label">विकार प्रकार</span></td><td rowspan="2"><span class="eng-label">'.$row["disorder"].'</span></td></tr>
												<tr><td><span class="eng-label">Disorder Type</span></td></tr>

												<tr><td><span class="hindi-label">विकार नाम</span></td><td rowspan="2"><span class="eng-label">'.$disorder_name.'</span></td></tr>
												<tr><td><span class="eng-label">Disorder Name</span><hr></td></tr>


												


												
												
												<tr><td><span class="hindi-label">अपलोड किए गए दस्तावेज</span></td><td rowspan="2"><span class="eng-label">

													     
													     '.$hname_file.'<br/>
								                         '.$stu_nine_sheet.'<br/>
								                         '.$stu_eleven_marksheet.'<br/>
													     '.$admit_card.'<br/>
								                         '.$ankur_activ.'<br/> 							
														 '.$board_mark.'<br/>
														 


														</span></td></tr>

												        <tr><td><span class="eng-label">Relevant Documents Uploaded</span></td></tr>	
												</tbody>		
												</table>				
											</td>



											<td valign="top">
												<img id="pdf-right-logo" src="images/RAGLOGO_2022.png" width="150" height="150">
											</td>


										</tr>
									</table>
								  </div>
								</body>
								</html>';
						

				          

							$mpdf=new \Mpdf\Mpdf();
							$mpdf->WriteHTML($html);

							 

							 $file='aparajay_upload/file'.$row['id'].'.pdf';


							$mpdf->output($file,'F');
						    $emailAttachment=$mpdf->Output($file, 'S');
							
    
    		    
					    		//email part 
							  

					          $name=$row['fname']." ".$row['lname'];
							  $stuemail=$row['student_email'];
							  $boardexam=$row['boardexam'];
							  $registrationId="SA-".$row['boardexam']."-".$row['reg_id']."";
							  //$emailAttachment="../uploads/file".$row['id'].".pdf";
							  //$class=substr($row['class'], -2);
							 

							  $mail = new PHPMailer(true);
							   $mail->isSMTP(); 
							  //  $mail->SMTPDebug =3; 


							   $mail->Host = 'smtp.gmail.com';   // Specify main and backup SMTP servers
					            $mail->Debugoutput = 'html';
					            $mail->SMTPAuth = true;  


							 $mail->Username = '#########';                 // SMTP username
					         $mail->Password = '###########';                           // SMTP password
					         $mail->SMTPSecure = 'tls';                           // Enable encryption, 'ssl' also accepted
					         $mail->CharSet = "UTF-8";
					         $mail->Port = 587;

					          $mail->From = '############';
					          $mail->FromName = 'Ram Awatar Gupt Hindi Protsahan-2024';




					          // $mail->setFrom('manojmahata.mid@gmail.com', 'RamAvtar Gupt Pratibha Purskar 2020');
					          $mail->addAddress($stuemail, 'Raghp Welcome User 2024');                     
					          $mail->addReplyTo('############', 'RAGHP 2024 Information');  


					          $mail->isHTML(true); 
					          $mail->WordWrap = 50;  


					          $mail->Subject = 'Welcome Student to Raghp 2024';
							  // Convert HTML into a basic plain-text alternative body
					          $msgBody=file_get_contents('welcome-email_two.html');
					          $msgBody=str_ireplace("EMAILLOGO", 'images/RAGLOGO_2022.png', $msgBody);
					          $msgBody=str_ireplace("REGNAME", $name, $msgBody);
					          $msgBody=str_ireplace("REGNUMBER",$registrationId,$msgBody);
					           $msgBody=str_ireplace("STUEMAIL",$stuemail,$msgBody);
					           // $mail->AddEmbeddedImage('images/RAGLOGO_2022.png','LOGO');
					           
					           
					           
					            $mail->AddStringAttachment($emailAttachment,'ragp-form-2024.pdf','base64','application/pdf');	


					          // $mail->msgHTML($msgBody, dirname(__FILE__));

					           $mail->Body=$msgBody;

					           $mail->SMTPOptions = array(
					                  'ssl' => array(
					                      'verify_peer' => false,
					                      'verify_peer_name' => false,
					                      'allow_self_signed' => true
					                  )
					              );
					              
					              
					              
					              
					    		if(!$mail->send()) {
					        	    $statusMsg= 'Message could not be sent.';
					        	    $_SESSION['msg2']="Message could not be sent.";
					        		header("location:aparajay_mail_verified.php");
                                    exit;

					        			
					    		} else {
					       				$statusMsg= 'Email has been sent successfully';
					       				$_SESSION['msg']="Email has been sent successfully";
					       				header("location:aparajay_mail_verified.php");
                                        exit;

					    		}
    		
    		
    		     }	
	
	         }
	    }
    else{
    	
    	$statusMsg='Some problem occured please try again';
    	$_SESSION['msg2']="Some problem occured please try again";
    	header("location:aparajay_mail_verified.php");
        exit;
    }

}
else{
	
	$statusMsg='Select atleast one record';
	$_SESSION['msg2']="Select atleast one record";
	header("location:aparajay_mail_verified.php");
    exit;
	
}		

	
}			






// bulk qualify
if(isset($_POST['bulk_qualify_submit'])){
	//if id arrray is not empty
if(!empty($_POST['checked_id'])){
//Get all the selected ids and convert it to a string
$idStr=implode(',',$_POST['checked_id']);
//Udate records from the database
$verify="UPDATE `student_data` SET `qualified` ='yes' WHERE `id` IN ($idStr)";
//If update is successful
if($result = mysqli_query($conn, $verify)){
	$statusMsg='Selected students documents have been qualified successfully';
}
else{
	$statusMsg='Some problem occured please try again';
}

}
else{
	
	$statusMsg='Select atleast one record';
	
}	
	
	
	
}
// bulk disqualify
if(isset($_POST['bulk_disqualify_submit'])){
	//if id arrray is not empty
if(!empty($_POST['checked_id'])){
//Get all the selected ids and convert it to a string
$idStr=implode(',',$_POST['checked_id']);
//Udate records from the database
$verify="UPDATE `student_data` SET `qualified` ='no' WHERE `id` IN ($idStr)";
//If update is successful
if($result = mysqli_query($conn, $verify)){
	$statusMsg='Selected students documents have been qualified successfully';
}
else{
	$statusMsg='Some problem occured please try again';
}

}
else{
	
	$statusMsg='Select atleast one record';
	
}	
}

?>