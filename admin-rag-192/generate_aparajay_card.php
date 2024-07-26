  <?php
   ob_start();	
    ob_clean();	 
    session_start();
	//$page_url =('http://rag.sanmarg.in/print-student-data.php?id='.$last_id.''); // to grab the current url
	//$html = file_get_contents($page_url);


include('common-header.php');

require('vendor2/autoload.php');


require 'lib/mpdf/mpdf.php';
//require 'lib/mpdf/Mpdf.php';


require 'lib/PHPMailer/class.phpmailer.php';
require 'lib/PHPMailer/class.smtp.php';
require 'lib/PHPMailer/PHPMailerAutoload.php';
include('config.php');


	if(isset($_GET['id'])){

	    $last_id=$_GET['id'];

      

		
		$sql="SELECT * FROM `aparajay_student_data` WHERE `reg_id` ='$last_id'";
		
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);


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
												
												   <span class="eng-label" style="text-align: center;align-content: center;align-items: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RAM AWATAR GUPT HINDI PROTSAHAN - 2023</span><br/>
												   <span class="hindi-label" style="text-align: center;align-content: center;align-items: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;राम अवतार गुप्त हिंदी प्रोत्साहन– 2023</h1></h1></th></tr>
				                                     <br>  <br>  								  
												   
												<tr><th colspan="2"><h4>
												  <span class="eng-label" style="text-align: center;align-content: center;align-items: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration Confirmation Form</span>
												  <span class="hindi-label" style="text-align: center;align-content: center;align-items: center;">(स्वीकृत प्रपत्र)</span><br/><span class="eng-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unique Roll Number:<span class="high-light">SA-'.$boardName.'-'.$row["reg_id"].'</span></span><br><span class="hindi-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     (यूनिक रोल नंबर)</span></h4></th></tr>
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
												
												
												<tr><td><span class="hindi-label">पाठ्येतर गतिविधियां</span></td><td rowspan="2"><span class="eng-label">'.$ankur.'</span></td></tr>
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
						

				           //  $page_url =('http://rag.sanmarg.in/print-student-data.php?id='.$last_id.''); // to grab the current url
				            
						  //  $html = file_get_contents($page_url);	

							$mpdf=new \Mpdf\Mpdf();
							$mpdf->WriteHTML($html);

							 $dir = 'aparajay_upload/'.$last_id.'/registration-data';

							 // $file='uploads/'.$last_id.'/pdf_file/file'.$last_id.'.pdf';

							 $file='aparajay_upload/file'.$last_id.'.pdf';
                             // $replacement = ['Protected Phone'];
                             // $destination='upload/file'.$last_id.'.pdf';

							$mpdf->Output($file,'F');
						    $emailAttachment=$mpdf->Output($file,$replacement,'S');
							//D
							//I
							//F
							//S 


							// $filePath = Yii::getAlias('@backend') . '/web/uploads/candidate_file/test1.pdf';
							// $mpdf = new Mpdf();
							// $destination = Yii::getAlias('@backend') . '/web/uploads/candidate_file/tesssssst1.pdf';
							// $search = ['0857598878'];
							
							// $mpdf->OverWrite($filePath, $replacement, 'F', $destination);



							// 

							 //$_SESSION['msg']="Registration card generated successfully";
        //                      header('Location:https://ragp.sanmarg.in/admin-rag-192/export_data.php');

                     
							 

	}else{
		
	  

         $_SESSION['msg2']="Registration card not generated";
         header('Location:export_aparajay_data.php');
		
	}



						
?>

 <div id="page-wrapper" class="my-5" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                    
				         <div class="row my-4">
				         



				         


				                       
				                <div class="row d-flex col-md-12">
				                                    

				                                    <h3>Click Here For Download The Pdf file<a href="aparajay_upload/<?php echo 'file'.$last_id.'.pdf';?>" target="_blank">Click to Open</a></h3>
				                 </div>



				                      
				        </div>
                      </div>
                  </div>
        </div>  
        </div>
<?php
include('common-footer.php');
 ob_end_flush();
	
?>