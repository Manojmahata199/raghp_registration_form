<?php
// Start user session.
ob_start();

session_start();

//ob_clean();
// //header('Content-type: application/pdf');
// header('Content-Disposition: inline; filename="file"');
// header('Content-Transfer-Encoding: binary');
// header('Accept-Ranges: bytes');


ini_set('max_execution_time', 20000);
ini_set('max_input_time', 20000);
include('database.php');
require('vendor2/autoload.php');


require 'lib/mpdf/mpdf.php';
//require 'lib/mpdf/Mpdf.php';


require 'lib/PHPMailer/class.phpmailer.php';
require 'lib/PHPMailer/class.smtp.php';
require 'lib/PHPMailer/PHPMailerAutoload.php';


// Report all errors
error_reporting(0);
//testing input variables
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 $success=0;



//  $sql_valiadtion="select * from `aparajay_student_data`";
//  $result_for_validate=mysqli_query($conn,$sql_valiadtion);
//  $result_valiadtion=mysqli_fetch_assoc($result_for_validate);

//  $board_roll_no_validate=$result_valiadtion['board_roll_no'];
//  $email_validate=$result_valiadtion['student_email'];


//for registration id
function getRegistrationId($conn){ 
  $sqlGetStdList="select * from `student_data`";
  $result=mysqli_query($conn,$sqlGetStdList);
  $row=mysqli_num_rows($result);
  $row++;
  $regId=$row;
  $regId=str_pad($regId,7,"0",STR_PAD_LEFT);
  return $regId;
}


//CLIENT IP ADDRESS
function get_client_ip() {
     $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}




// define variables and set to empty values
$regId = $location = $boardexam = $stucategory = $fname = $lname = $hname = $hlname = $isHindiNameCorrect = $ankur_option = $yuva_option = "";
$stugender = $studob = $stuemail = $stumobile = $boardrollno = $schoolname = $otherschoolname = $otherschooladdress = "";
$schoolmedium = $parentname = $parentmobile = $emergencyno = $parentemail = $address= $city = $state = $pincode = $family_annual_income = "";
$facebook_handle = $twitter_handle = $ragaward_source = $ragaward_source_other = $sanmarg_reader = $hawker_name = $hawker_telephone = "";
$rag_pariksha_participated = $rag_pariksha_rollno = $rag_pariksha_marks = $rag_participated_chk = "";
$admitCardFileName= $ip = $formdatetime = $studentPhotoFileName = $ankur_activity_textwork = $ankurActivityFileName = "";
$class=$last_year_marks1=$last_year_marks2=$last_year_marks3=$current_year_marks1=$current_year_marks2=$current_year_preboards= $disorder ="";
$phy_disorder_name=$mental_disorder_name= $disorder_detail = $disorderFileName =$hindiNameFileName=$allActivityFileName="";
$display_msg=$last_id=$error_msg=$schooladdress=$marksheet_one=$marksheet_eleven=$relationship=$members_name=$duplicate_msg=$custom_hindi_name="";




// Current request method



// if ($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST['submit'])){

    //assigning values  
    $registrationId=getRegistrationId($conn);





    // location value to store in table 
    if(isset($_POST['location'])){   
      
          
        $location=test_input($_POST['location']);
         
     }


    //other variable 
    if(isset($_POST['boardexam'])){  
      $boardexam=test_input($_POST['boardexam']);
    }
  $stucategory=test_input($_POST['category']);
  $disorder=test_input($_POST['disorder']);
  $phy_disorder_name=test_input($_POST['phy_disorder_name']);  
  $mental_disorder_name=test_input($_POST['mental_disorder_name']); 
  $disorder_detail=test_input($_POST['disorder_detail']);
  $fname=test_input($_POST['fname']);  
  $lname=test_input($_POST['lname']);
  $hname=test_input($_POST['hname']);
  $hlname=test_input($_POST['hlname']);


  if(isset($_POST['radHindiName'])){
  $isHindiNameCorrect =test_input($_POST['radHindiName']);
  }


  if(isset($_POST['gender'])){
  $stugender=test_input($_POST['gender']);
  }


  $studob=test_input($_POST['studob']);
  $stuemail=test_input($_POST['stuemail']);
  $stumobile=test_input($_POST['stumobile']);
  
  $boardrollno=test_input($_POST['boardrollnumber']);
  $board_roll_no_stu_validate = str_replace(' ','',$boardrollno);

  if(isset($_POST['schoolname'])){
  $schoolname=test_input($_POST['schoolname']);
  }



  if(isset($_POST['school_address'])){
  $schooladdress=test_input($_POST['school_address']);
  }


  if(isset($_POST['other_school_name'])){
  $otherschoolname=test_input($_POST['other_school_name']);
  }


  if(isset($_POST['other_school_address'])){
  $otherschooladdress=test_input($_POST['other_school_address']);
  }



  if(isset($_POST['school_medium'])){
  $schoolmedium=test_input($_POST['school_medium']);
  }



  if(isset($_POST['parent_name'])){
  $parentname=test_input($_POST['parent_name']);
  }




  $parentmobile=test_input($_POST['parentmobile']);
  $emergencyno=test_input($_POST['emergency_landline']);
  $parentemail=test_input($_POST['parent_email']);
  $address=test_input($_POST['home_address']);
  $city=test_input($_POST['city']);
  $state=test_input($_POST['state']);
  $pincode=test_input($_POST['pincode']);
  $family_annual_income=test_input($_POST['family_income']);
  $facebook_handle = test_input($_POST['facebook_handle']);
  $twitter_handle = test_input($_POST['twitter_handle']);
  $ragaward_source=test_input($_POST['ragaward_source']);
  $ragaward_source_other=test_input($_POST['ragaward_source_other']);
  $sanmarg_reader=test_input($_POST['sanmarg_reader']);
  $hawker_name=test_input($_POST['hawker_name']);
  $hawker_telephone=test_input($_POST['hawker_telephone']);
  $rag_pariksha_participated=test_input($_POST['rag_pariksha_participated']);  
  $rag_pariksha_rollno=test_input($_POST['rag_pariksha_rollno']);
  $rag_pariksha_marks=test_input($_POST['rag_pariksha_marks']);



  if(isset($_POST['rag_participated_chk'])){ 
  $rag_participated_chk=test_input($_POST['rag_participated_chk']); 
  }




  $ankur_option=test_input($_POST['ankur']);
  $yuva_option=test_input($_POST['yuva']);
  $ankur_activity_textwork=test_input($_POST['ankur_activity_textwork']);
  $class=test_input($_POST['stuclass']);
  $last_year_marks1=test_input($_POST['last_year_marks1']);
  $last_year_marks2=test_input($_POST['last_year_marks2']);
  $last_year_marks3=test_input($_POST['last_year_marks3']);
  $current_year_marks1=test_input($_POST['current_year_marks1']);
  $current_year_marks2=test_input($_POST['current_year_marks2']);
  $current_year_preboards=test_input($_POST['current_year_preboards']); 

  // relationship// members_name
  $relationship=test_input($_POST['relationship']);
  
  $members_name=test_input($_POST['members_name']);

  $disorderFileName=$_FILES["disorder_file"]["name"];
  $studentPhotoFileName=$_FILES["student_photo_file"]["name"];
  $admitCardFileName=$_FILES["admit_card_file"]["name"];

  $marksheet_one=$_FILES["marksheet_one"]["name"];
  $marksheet_eleven=$_FILES["marksheet_eleven"]["name"];


  $hindiNameFileName=$_FILES["hname_file"]["name"];
  $ankurActivityFileName=$_FILES["ankur_activity_file"]["name"]; 
  $allActivityFileName=$_FILES["all_activity_file"]["name"];



  // $submit_type=$_POST['submit_type'];
  // $extempore_date=$_POST['extempore_date_checkbox'];  
  $ip=get_client_ip();
  date_default_timezone_set("Asia/Calcutta");
  $formdatetime=date('Y-m-d H:i:s');
  $hnd_tech_name=$_POST['hindi_Teacher_name'];
  $hnd_tech_mob=$_POST['hindi_teacher_mobile'];
  $term_condition=$_POST['term_condition'];
  $custom_hindi_name_submitted=$_POST['custom_hindi_name'];
  $custom_hindi_name_one = str_replace("'","",$custom_hindi_name_submitted);
  $custom_hindi_name = str_replace('"','',$custom_hindi_name_one);
 
  
  
}//END OF FIRST IF CONDITION SERVER REQUEST=POST



if(isset($_POST['submit'])){
  //check for duplicate records-(before insertion)  
  // Attempt insert query execution
// school_address

 $sql_valiadtion="select * from `student_data` WHERE `board_roll_no`='$board_roll_no_stu_validate' and `boardexam`='$boardexam'";
 $result_for_validate=mysqli_query($conn,$sql_valiadtion);
 $result_valiadtion=mysqli_fetch_assoc($result_for_validate);

 $board_roll_no_validate=$result_valiadtion['board_roll_no'];
 $email_validate=$result_valiadtion['student_email'];
 $board_valiadte=$result_valiadtion['boardexam'];

   if($board_roll_no_validate==$board_roll_no_stu_validate  && $board_valiadte==$boardexam){
    
          $duplicate_msg="Student You Have Already Registered With us.You Can Not Do Registration Again.Contact Us For Any Changes In Your Details"; 

    
  }else{





                  $sql = "INSERT INTO `student_data`(`form_date_time`, `reg_id`, `ip_address`, `reg_location`, `boardexam`, `category`, `disorder`, `phy_disorder_name`, `mental_disorder_name`, `disorder_detail`,
                  `disorder_file`, `fname`, `lname`, `hname`, `hlname`,`custom_hindi_name`, `student_photo_file`, `hname_correct`, `hname_file`, `student_gender`, `student_dob`, `student_email`, `student_mobile`, `board_roll_no`,
                  `admit_card_file`,`school_name`,`school_address`, `other_school_name`, `other_school_address`, `school_medium`, `class`, `last_year_marks1`, `last_year_marks2`,`current_year_marks1`,
                  `current_year_marks2`, `current_year_preboards`,`marksheet_one`,`marksheet_eleven`, `parent_name`, `parent_mobile`, `emergency_landline`, `parent_email`, `home_address`, `city`, `state`, `pincode`, `family_income`,`relationship`,`members_name`,`facebook_handle`, `twitter_handle`,
                  `ragaward_source`, `ragaward_source_other`, `sanmarg_reader`,`rag_participated_chk`, `ankur`, `ankur_activity_textwork`, 
                  `ankur_activity_file`,`hnd_tech_name`,`hnd_tech_mob`,`term_condition`)


                        VALUES ('$formdatetime','$registrationId','$ip', '$location', '$boardexam', '$stucategory','$disorder','$phy_disorder_name','$mental_disorder_name','$disorder_detail','$disorderFileName', '$fname',
                        '$lname','$hname','$hlname','$custom_hindi_name','$studentPhotoFileName','$isHindiNameCorrect','$hindiNameFileName','$stugender','$studob','$stuemail','$stumobile','$board_roll_no_stu_validate','$admitCardFileName','$schoolname',
                        '$schooladdress',
                        '$otherschoolname','$otherschooladdress','$schoolmedium','$class','$last_year_marks1','$last_year_marks2','$current_year_marks1','$current_year_marks2','$current_year_preboards','$marksheet_one','$marksheet_eleven','$parentname',
                        '$parentmobile','$emergencyno','$parentemail','$address','$city','$state','$pincode','$family_annual_income','$relationship','$members_name','$facebook_handle','$twitter_handle','$ragaward_source','$ragaward_source_other',
                        '$sanmarg_reader','$rag_participated_chk','$ankur_option',
                        '$ankur_activity_textwork','$ankurActivityFileName','$hnd_tech_name','$hnd_tech_mob','$term_condition')";  



                  $result=mysqli_query($conn,$sql);



                  
                  
                  
                  $last_id = mysqli_insert_id($conn);


                  if($result) {
                            $display_msg="Student You Have Already Registered.Contact Us For Any Change In Your Details"; 
                    }



                 //File upload code starts here
                    if($last_id)
                    {
                        //disorder image upload
                        if($_FILES['disorder_file'] && $stucategory=="Aparajay")
                        {
                            if (!file_exists('$target_dir'.$last_id.'/disorder-img/')) {
                                mkdir('uploads/'.$last_id.'/disorder-img/', 0777, true);
                                }
                            $target_dir = "uploads/".$last_id."/disorder-img/";
                            $target_file = $target_dir.$_FILES["disorder_file"]["name"];
                            $uploadOk = 1;


                            
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


                            // Check if image file is a actual image or fake image
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "pdf" && $imageFileType != "jfif") {

                                    $error_msg="Uploaded Disorder File is an Invalid";
                                    $uploadOk = 0;
                            }
                            // Check file size
                            if ($_FILES["disorder_file"]["size"] > 1000000) {
                                $error_msg= "Sorry, your Disorder File is too large.";
                                $uploadOk = 0;
                            }
                            if($uploadOk ==0){
                               $error_msg="Your Disorder File was not uploaded";
                            }
                            else
                            {
                                if($uploadOk ==1)
                                {
                                    move_uploaded_file($_FILES["disorder_file"]["tmp_name"], $target_file);
                                }
                            }
                        }
                        //student Photo upload
                        // if($_FILES['student_photo_file'])
                        // {
                        //  if (!file_exists('$target_dir'.$last_id.'/student-photo/'))
                        //  {
                  //            mkdir('uploads/'.$last_id.'/student-photo/', 0777, true);
                        //  }
                        //  $target_dir = "uploads/"."/".$last_id."/student-photo/";
                        //  $target_file = $target_dir.$_FILES["student_photo_file"]["name"];
                        //  $uploadOk = 1;
                        //  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        //  // Check if image file is a actual image or fake image
                        //  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                  //        && $imageFileType != "pdf" ){
                        //  $error_msg="Uploaded Photogragh File is not an image or pdf";
                        //  $uploadOk = 0;
                        //  }
                        //  // Check file size
                        //  if ($_FILES["student_photo_file"]["size"] > 1000000) {
                  //            $error_msg= "Sorry, your Photogragh File is too large.";
                  //            $uploadOk = 0;
                        //  }
                        //  if($uploadOk ==0){
                        //  $error_msg="Your Photogragh File was not uploaded";
                        //  }
                        //  else
                        //  {
                        //      if($uploadOk ==1)
                        //      {
                        //          move_uploaded_file($_FILES["student_photo_file"]["tmp_name"], $target_file);
                        //      }
                        //  }
                        // }
                        //student Photo upload
                        if($_FILES['student_photo_file'])
                        {
                            if (!file_exists('$target_dir'.$last_id.'/student-photo/'))
                            {
                                mkdir('uploads/'.$last_id.'/student-photo/', 0777, true);
                            }
                            $target_dir = "uploads/".$last_id."/student-photo/";
                            $target_file = $target_dir.$_FILES["student_photo_file"]["name"];
                            $uploadOk = 1;


                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                            // Check if image file is a actual image or fake image
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "pdf" && $imageFileType != "jfif"){
                                    $error_msg="Uploaded Photogragh File is not an image or pdf";
                                    $uploadOk = 0;
                            }


                            // Check file size
                            if ($_FILES["student_photo_file"]["size"] > 1000000) {
                                $error_msg= "Sorry, your Photogragh File is too large.";
                                $uploadOk = 0;
                            }
                            if($uploadOk ==0){
                                 $error_msg="Your Photogragh File was not uploaded";
                            }
                            else
                            {
                                if($uploadOk ==1)
                                {
                                    move_uploaded_file($_FILES["student_photo_file"]["tmp_name"], $target_file);
                                }
                            }
                        }
                        //admit card upload
                        if($_FILES['admit_card_file'])
                        {
                            if (!file_exists('$target_dir'.$last_id.'/admit-card/'))
                            {
                                mkdir('uploads/'.$last_id.'/admit-card/', 0777, true);
                            }
                            $target_dir = "uploads/".$last_id."/admit-card/";
                            $target_file = $target_dir.$_FILES["admit_card_file"]["name"];
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // Check if image file is a actual image or fake image
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "pdf" && $imageFileType != "jfif") 
                            {
                                $error_msg="Uploaded Admit Card File is not an image type is invalid";
                                $uploadOk = 0;
                            }
                            // Check file size
                            if ($_FILES["admit_card_file"]["size"] > 1000000)
                            {
                                $error_msg= "Sorry, your Admit Card File is too large.";
                                $uploadOk = 0;
                            }
                            if($uploadOk ==0)
                            {
                                $error_msg="Your Admit Card File was not uploaded";
                            }
                            else
                            {
                                if($uploadOk ==1)
                                {
                                    move_uploaded_file($_FILES["admit_card_file"]["tmp_name"], $target_file);
                                }
                            }
                        }
                        //hindi name correct image upload
                        if($_FILES['hname_file'] && $isHindiNameCorrect=="No" )
                        {
                            if (!file_exists('$target_dir'.$last_id.'/hindi-name/'))
                            {
                                mkdir('uploads/'.$last_id.'/hindi-name/', 0777, true);
                            }
                            $target_dir = "uploads/".$last_id."/hindi-name/";
                            $target_file = $target_dir.$_FILES["hname_file"]["name"];
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // Check if image file is a actual image or fake image
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "pdf" && $imageFileType != "jfif")
                            {
                                $error_msg="Uploaded Scanned Hindi Name File is not an image";
                                $uploadOk = 0;
                            }
                            // Check file size
                            if ($_FILES["hname_file"]["size"] > 1000000)
                            {
                                $error_msg= "Sorry, your Scanned Hindi Name File is too large.";
                                $uploadOk = 0;
                            }
                            if($uploadOk ==0)
                            {
                                $error_msg="Your Scanned Hindi Name File was not uploaded";
                            }
                            else
                            {
                                if($uploadOk ==1)
                                {
                                    move_uploaded_file($_FILES["hname_file"]["tmp_name"], $target_file);
                                }
                            }
                        }


                        //class 9th marksheet
                        if($_FILES['marksheet_one'])
                        {
                            if (!file_exists('$target_dir'.$last_id.'/nine_marksheet/'))
                            {
                                mkdir('uploads/'.$last_id.'/nine_marksheet/', 0777, true);
                            }
                            $target_dir = "uploads/".$last_id."/nine_marksheet/";
                            $target_file = $target_dir.$_FILES["marksheet_one"]["name"];
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // Check if image file is a actual image or fake image
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "pdf" && $imageFileType != "jfif")
                            {
                                $error_msg="Uploaded Scanned Class 9th Marksheet File is not an image";
                                $uploadOk = 0;
                            }
                            // Check file size
                            if ($_FILES["marksheet_one"]["size"] > 1000000)
                            {
                                $error_msg= "Sorry, your Scanned Class 9th Marksheet File is too large.";
                                $uploadOk = 0;
                            }
                            if($uploadOk ==0)
                            {
                                $error_msg="Your Scanned Class 9th Marksheet File was not uploaded";
                            }
                            else
                            {
                                if($uploadOk ==1)
                                {
                                    move_uploaded_file($_FILES["marksheet_one"]["tmp_name"], $target_file);
                                }
                            }
                        }


                        //class 11 th marksheet
                        if($_FILES['marksheet_eleven'])
                        {
                            if (!file_exists('$target_dir'.$last_id.'/marksheet_eleven/'))
                            {
                                mkdir('uploads/'.$last_id.'/marksheet_eleven/', 0777, true);
                            }
                            $target_dir = "uploads/".$last_id."/marksheet_eleven/";
                            $target_file = $target_dir.$_FILES["marksheet_eleven"]["name"];
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // Check if image file is a actual image or fake image
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "pdf" && $imageFileType != "jfif")
                            {
                                $error_msg="Uploaded Scanned Class 11th Marksheet File is not an image";
                                $uploadOk = 0;
                            }
                            // Check file size
                            if ($_FILES["marksheet_eleven"]["size"] > 1000000)
                            {
                                $error_msg= "Sorry, your Scanned Class 11th Marksheet File is too large.";
                                $uploadOk = 0;
                            }
                            if($uploadOk ==0)
                            {
                                $error_msg="Your Scanned Class 11th Marksheet File was not uploaded";
                            }
                            else
                            {
                                if($uploadOk ==1)
                                {
                                    move_uploaded_file($_FILES["marksheet_eleven"]["tmp_name"], $target_file);
                                }
                            }
                        }



                        //exceptional work in hindi field image upload
                        if($_FILES['ankur_activity_file'] && $ankur_activity_textwork !== "")
                        {
                            if (!file_exists('$target_dir'.$last_id.'/ankur-activity/')) {
                                 mkdir('uploads/'.$last_id.'/ankur-activity/', 0777, true);
                            }
                            $target_dir = "uploads/".$last_id."/ankur-activity/";
                            $target_file = $target_dir.$_FILES["ankur_activity_file"]["name"];
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // Check if image file is a actual image or fake image
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "pdf" && $imageFileType != "jfif")
                            {
                                $error_msg="Uploaded First Activity File is not an image";
                                $uploadOk = 0;
                            }
                            // Check file size
                            if ($_FILES["ankur_activity_file"]["size"] > 1000000) {
                                $error_msg= "Sorry, your First Activity File is too large.";
                                $uploadOk = 0;
                            }
                            if($uploadOk ==0)
                            {
                                $error_msg="Your First Activity File was not uploaded";
                            }
                            else
                            {
                                if($uploadOk ==1){
                                  move_uploaded_file($_FILES["ankur_activity_file"]["tmp_name"], $target_file);
                                }
                            }
                        }
                        //all activity scan copy file
                        if($_FILES['all_activity_file'] && $ankur_activity_textwork !== ""){
                            if (!file_exists('$target_dir'.$last_id.'/all-activity/')) {
                                mkdir('uploads/'.$last_id.'/all-activity/', 0777, true);
                            }
                                $target_dir = "uploads/".$last_id."/all-activity/";
                                $target_file = $target_dir.$_FILES["all_activity_file"]["name"];
                                $uploadOk = 1;
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                // Check if image file is a actual image or fake image
                                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "pdf" && $imageFileType != "jfif"){
                                $error_msg="Uploaded All Activity file is not an image";
                                $uploadOk = 0;
                                }
                                // Check file size
                                if ($_FILES["all_activity_file"]["size"] > 1000000) {
                                    $error_msg= "Sorry, your All Activity file is too large.";
                                    $uploadOk = 0;
                                }
                                if($uploadOk ==0){
                                    $error_msg="Your All Activity file was not uploaded";
                                }
                                else
                                {
                                    if($uploadOk ==1)
                                    {
                                        move_uploaded_file($_FILES["all_activity_file"]["tmp_name"], $target_file); 
                                    }
                                }
                        }
                        //all activity scan copy file
                        
                        





                        $timezone=date_default_timezone_set("Asia/Calcutta");
                        $printed_date = date('Y-m-d H:i:s');


                        // //email part 


                       $name=$fname." ".$lname;
                        
                        ob_start(); 
                        ob_clean();       
                        //$page_url =('http://rag.sanmarg.in/print-student-data.php?id='.$last_id.''); // to grab the current url
                        //$html = file_get_contents($page_url);

                            include('database.php');
                            $sql="SELECT * FROM `student_data` WHERE `id` = ".$last_id;
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


                             if($custom_hindi_name==""){

                                $hin_name=''.$row["hname"].' '.$row["hlname"].'';

                            }else{
                                
                                $hin_name=$row['custom_hindi_name'];

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
                                                <tr><td><span class="hindi-label">पूरा नाम (हिंदी)</span></td><td rowspan="2"><span class="hindi-label">'.$hin_name.'</span></td></tr>
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

                             $dir = 'uploads/'.$last_id.'/registration-data';

                             // $file='uploads/'.$last_id.'/pdf_file/file'.$last_id.'.pdf';

                             $file='uploads/file'.$last_id.'.pdf';


                            $mpdf->output($file,'F');
                            $emailAttachment=$mpdf->Output($file, 'S');
                            //D
                            //I
                            //F
                            //S
                         

                             $mail = new PHPMailer;

                            $mail->isSMTP();  
                            $mail->SMTPDebug =3;                                       // Set mailer to use SMTP
                            $mail->Host = 'smtp.gmail.com';   // Specify main and backup SMTP servers
                            $mail->Debugoutput = 'html';
                            $mail->SMTPAuth = true;                               // Enable SMTP authentication
                            $mail->Username = '###########';                 // SMTP username
                            $mail->Password = '###########';                           // SMTP password
                            $mail->SMTPSecure = 'tls';                           // Enable encryption, 'ssl' also accepted
                            $mail->CharSet = "UTF-8";
                            $mail->Port = 587;
                            $mail->From = '###########';
                            $mail->FromName = 'Ram Awatar Gupt Hindi Protsahan-2024';
                            $mail->addAddress($stuemail, 'Raghp Registered User 2024');     // Add a recipient
                            $mail->addReplyTo('############', 'Information');
                            $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
                            $mail->isHTML(true);                                     // Set email format to HTML
                            $mail->Subject = 'Registration Confirmation mail';
                            // $mail->AddEmbeddedImage('images/RAGLOGO_2022.png','LOGO');
                            $Body=file_get_contents('registration-email_two.html');
                           
                            $Body=str_ireplace("REGNAME", $name, $Body);
                            $Body=str_ireplace("REGNUMBER", 'RAGHP-'.$boardexam.'-'.$registrationId, $Body);
                            $Body=str_ireplace("RAGP_ID", $registrationId, $Body);
                            $Body=str_ireplace("USER_MAIL", $stuemail, $Body);  
                            $mail->Body=$Body;

                            $mail->AddStringAttachment($emailAttachment,'ragp-form-2024.pdf','base64','application/pdf');         

                            $mail->SMTPOptions = array(
                                  'ssl' => array(
                                      'verify_peer' => false,
                                      'verify_peer_name' => false,
                                      'allow_self_signed' => true
                                  )
                              );

                            if(!$mail->send()) {
                                $display_msg= 'रजिस्ट्रेशन के लिए धन्यवाद छात्र<br>Thank You Student For Registration ';
                                $success=1;
                            } else {
                                $display_msg= 'रजिस्ट्रेशन के लिए आपका धन्यवाद, इसकी पुष्टि के लिए आपको ईमेल भेज दिया गया है|<br>Thank you for registering, a confirmation Email has been sent to you.';
                                $success=1;
                            }
                            ob_end_clean();
                            //............. end....

                    }

                }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>RAGHP Registration Form 2024</title>
    <!-- add icon link -->
        <link rel = "icon" href ="images/RAGLOGO_2022.png" type = "image/x-icon">

    <!-- Icons font CSS-->
    <link href="form-2024/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="form-2024/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="form-2024/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="form-2024/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="form-2024/css/main.css" rel="stylesheet" media="all">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="page-wrapper bg-blue p-t-50 p-b-50 font-robo">
        <div class="wrapper wrapper--w1000">
            <div class="card card-1">
                <div class="card-heading">
                    <img src="images/Header_Banner1.webp" id="top_img" style="background-size: cover;background-repeat: no-repeat;background-position: center;">
                </div>
                <div class="card-body">
                    <div class="navbar my-3" style="margin-top: 10PX;margin-bottom: 10PX;">
                 
                 
                        <h3 class="section-heading text-center" style="padding-top: 5PX;padding-bottom: 5PX;">रजिस्ट्रशन फॉर्म  2024- प्रथम चरण</h3>
                  
                    </div>
                   <!--  <div class="form-group top-section2" id="fill_section">            
                        <h4 class="mandatory-heading"><b>छात्र, कृपया सभी अनिवार्य क्षेत्र (<span class="req-col main-req-col">*</span>) भरें ।<br /><span class="mandatory-heading">REQUESTING STUDENTS TO FILL ALL MANDATORY (<span class="main-req-col req-col">*</span>) FIELDS.</span></b></h4>
                    </div> -->

                    <?php if($display_msg){ ?>
                    <div class="alert alert-success py-3 my-2">         
                        <h4 class="text-center text-dark"><?php echo $display_msg; ?></h4>
                       
                    </div>
                    <?php } ?>

                    <?php if($duplicate_msg){ ?>
                    <div class="alert alert-danger py-3 my-2">         
                        <h4 class="text-center text-dark"><?php echo $duplicate_msg; ?></h4>
                        
                    </div>
                    <?php } ?>


                    
                

                    
                    <form id="rag2020-form"  method="post" autocomplete="on" enctype="multipart/form-data">
                        

                        <section id="Step-1" class="section1">
                            <h3 class="section-heading sub-heading text-left py-3 text-light"><span class="heading1-hindi">छात्र जानकारी</span> / <span class="heading1-eng">STUDENT INFORMATION</span></h3>

                            <div class="row row-space">
                                <!-- FOR NAME IN ENGLISH FIELD -->
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="fname"><span class="label-hindi">नाम (अंग्रेजी)</span><span class="req-col text-danger">*</span><br><span class="label-eng">Name (English)</span></label>
                                        
                                        <input class="input--style-1 text_field" type="text" id="fname" name="fname" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="lname"><span class="label-hindi">उपनाम (अंग्रेजी)</span><span class="req-col text-danger">*</span><br><span class="label-eng">Surname (English)</span></label>
                                       
                                        <input class="input--style-1" type="text" id="lname"  name="lname" placeholder="Enter Surname">
                                    </div>
                                </div>
                            </div>
                            <!-- FOR NAME IN HINDI FIELD -->

                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="hname"><span class="label-hindi">नाम (हिंदी)</span><span class="req-col text-danger">*</span><br><span class="label-eng">Name (Hindi)</span></label>
                                        
                                        <input class="input--style-1" style="background-color:grey;color:white;" type="text" id="hname" name="hname" readonly>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="hlname"><span class="label-hindi">उपनाम (हिंदी)</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Surname (Hindi)</span></label>
                                       
                                        <input class="input--style-1" style="background-color:grey;color:white;" type="text" id="hlname" name="hlname" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                           <span  class="radio-label label_radio"><span class="label-hindi">क्या आपके नाम की हिंदी वर्तनी सही है ?</span><span class="req-col text-danger">*</span><br><span class="label-eng">Is the Hindi spelling of your name correct?</span></span>

                                           
                                            <div class="full">

                                                <div class="form-row" style="display:flex;">
                                                    <div class="form-radio-item mx-4" style="margin-right:20px;">
                                                        <span style="display:flex;">
                                                            <input type="radio" name="radHindiName" id="rad_hindi_name_yes"  class="radhname"  value="Yes" style="font-size: 6px;">
                                                            <label for="rad_hindi_name_yes"><span class="label-hindi">&nbsp;हाँ</span>&nbsp;/&nbsp;<span class="label-eng">Yes</span></label>                                  
                                                            
                                                                
                                                        </span>
                                                    </div>
                                                    <div class="form-radio-item mx-4">
                                                        <span style="display:flex;">
                                                            <input type="radio" name="radHindiName" id="rad_hindi_name_no" class="radhname" value="No" style="font-size: 6px;">                                      
                                                            <label for="rad_hindi_name_no"><span class="label-hindi">&nbsp;नहीं</span>&nbsp;/&nbsp;<span class="label-eng">No</span></label>                                   
                                                        </span>                                    
                                                    </div>
                                                </div>
                                            </div>
                                           
                                     </div>
                                </div>

                            </div>


                          


                            
                            <div class="row row-space" id="hindi_name_file">
                                <div class="col-2">
                                    <div class="input-file">
                                        <label for="hname_file" class="label_file">
                                            <span class="para-hindi">कृपया आप अपने नाम की सटीक हिंदी वर्तनी की स्कैन्ड कॉपी या फोटो खींच कर अपलोड करें<span class="req-col text-danger">*</span> (फ़ाइल प्रारूप और आकार - *.pdf, * .jpg, * .png,*.jpeg, अधिकतम 1 एमबी)</span><br>
                                            <span class="para-eng">Please upload a scanned copy/picture of your name written clearly in Hindi on a white paper<span class="req-col text-danger">*</span> (File format & size - *.pdf, *.jpg, *.png,*.jpeg, max. 1 MB)</span>
                                        </label>
                                            

                                        <input type="file" id="hname_file" name="hname_file" class="form-control-file" accept="image/jpeg,image/jpg,image/png,application/pdf" placeholder="">
                                    </div>

                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="custom_hindi_name"><span class="label-hindi">कृपया अपना सही हिंदी नाम दर्ज करें (हिंदी)</span><span class="req-col text-danger">*</span><br><span class="label-eng">Please Enter Your Right Hindi Name (Hindi)</span></label>
                                        
                                        <input class="input--style-1" type="text" id="custom_hindi_name" name="custom_hindi_name">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="Step-2" class="section2">
                            <div class="row row-space">
                                
                                <div class="col-2">
                                    <div class="input-group">
                                        <span class="full label_radio"><span class="label-hindi">लिंग</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Gender</span></span>
                                        <div class="full">

                                            <div class="form-row" style="display:flex;padding-left: 5px;">
                                                <div class="form-radio-item" style="margin-right:20px;">

                                                    <span style="display:flex;">
                                                        <input type="radio" name="gender" id="rad_gender_male"  class="gender" value="Male" style="font-size: 6px;">
                                                        <label for="rad_gender_male"><span class="label-hindi">&nbsp;पुरुष</span><br><span class="label-eng">Male</span></label>                                  
                                                                    
                                                                        
                                                    </span>

                                                </div>
                                                <div class="form-radio-item" style="margin-right:20px;">

                                                     <span style="display:flex;">
                                                        <input type="radio" name="gender" id="rad_gender_female" class="gender" value="Female" style="font-size: 6px;">
                                                        <label for="rad_gender_female"><span class="label-hindi">&nbsp;महिला</span><br><span class="label-eng">Female</span></label>                                  
                                                                    
                                                                        
                                                    </span>
                                        
                                                </div>
                                                <div class="form-radio-item">

                                                     <span style="display:flex;">
                                                        <input type="radio" name="gender" id="rad_gender_other" class="gender" value="Other" style="font-size: 6px;">
                                                        <label for="rad_gender_other"><span class="label-hindi">&nbsp;अन्य</span><br><span class="label-eng">Others</span></label>                                  
                                                                    
                                                                        
                                                    </span>

                                    
                                                </div>
                                            </div>
                                        </div>  

                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="dp1"><span class="label-hindi">जन्म तिथि</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Date of Birth (Day-Month-Year)</span></label>
                                        <input class="input--style-1 js-datepicker" data-date-format='dd-mm-yy' name="studob" placeholder="Enter Date of Birth" id="dp1" min="2003-01-01" max="2010-12-31">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="stuemail"><span class="label-hindi">ई-मेल  (सभी संपर्क इसी पर होंगे)</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Email ID (on which all communication will be done)</span></label>
                                       
                                        <input type="email" name="stuemail" id="stuemail" class="input--style-1"  placeholder="example@gmail.com">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="stumobile"><span class="label-hindi">मोबाइल नंबर (सभी संपर्क इसी पर होंगे)</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Mobile Number (on which all communication will be done)</span></label>
                                       
                                        <input type="number" name="stumobile" id="stumobile" pattern="[0-9]{10}" maxlength="10" class="input--style-1" pattern="[0-9]{10}" maxlength="10" placeholder="Enter Mobile Number">
                                    </div>
                                </div>

                            </div>

                            <!-- GUARDIAN ADDRESS -->
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-textarea">

                                        <label for="home_address">
                                          <span class="label-hindi">घर का पता</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Residential Address</span>
                                        </label>

                                       <textarea  rows="3" cols="28" maxlength="200" class="input--style-1 text_area" id="home_address" name="home_address" placeholder="Enter Address"></textarea>
  
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">

                                        <label for="state"><span class="label-hindi">राज्य</span><span class="req-col text-danger">*</span><br /><span class="label-eng">State</span></label> 

                                         <div class="form-select">
                                            <select name="state" id="state" class="state">

                                               <option  selected="selected" value="">अपना राज्य चुनें / Select Your State</option>                                
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>

                                            </select>
                                            <!-- <div class="select-dropdown"></div> -->
                                        </div>


                                    </div>
                                </div>
                               
                            </div>
                            <div class="row row-space">

                                <div class="col-2">
                                    <div class="input-group">

                                       <label for="city"><span class="label-hindi">शहर</span><span class="req-col text-danger">*</span><br /><span class="label-eng">City</span></label>

                                       <input type="text" id="city" name="city" placeholder="Enter City" class="input--style-1">

                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="pincode"><span class="label-hindi">पिन कोड</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Pincode</span></label>

                                        <input type="number" id="pincode" name="pincode" class="input--style-1" placeholder="Enter Pincode" maxlength="6">
                                    </div>
                                </div>
                            </div>


                    </section>













                        <!-- SECTION 3 --> 
                    <section id="Step-3" class="section3">

                            <h3 class="section-heading sub-heading text-left py-3 text-light"><span class="heading1-hindi">स्कूल व परीक्षा की जानकारी</span> / <span class="heading1-eng">SCHOOL & EXAM DETAILS</span></h3>
                            <div class="row row-space">
                                <!-- FOR NAME IN ENGLISH FIELD -->
                                <div class="col-2">
                                    <div class="input-group">
                                        <span class="label_radio"><span class="label-hindi">कक्षा</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Class</span></span>
                                        <div class="full">

                                            <div class="form-row" style="display:flex;">
                                                <div class="form-radio-item mx-4" style="margin-right:20px;">


                                                    <span style="display:flex;">
                                                        <input type="radio" name="stuclass" id="class-10"  class="stuclass" value="Class-10">
                                                        <label for="class-10"><span class="label-hindi">१०वी</span><br><span class="label-eng">Class10</span></label>                                  
                                                                        
                                                    </span>

                                                        
                                                </div>
                                                <div class="form-radio-item mx-4">
                                                    <span style="display:flex;">
                                                        <input type="radio" name="stuclass" id="class-12" class="stuclass" value="Class-12" >
                                                        <label for="class-12"><span class="label-hindi">१२वी</span><br><span class="label-eng">Class12</span></label>                                  
                                                                    
                                                                        
                                                    </span>      
                                                                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-file">
                                        <label for="admit_card_file" class="label_file"><span class="label-hindi">कृपया अपने बोर्ड प्रवेश पत्र की स्कैन्ड कॉपी या चित्र अपलोड करें (फ़ाइल प्रारूप और आकार - * .pdf, * .jpg, * .png,*.jpeg, अधिकतम 1 एमबी)</span><span class="req-col text-danger">*</span><br><span class="label-eng">Upload a scanned copy/picture of your Board Admit Card (File format & size - *.pdf, *.jpg, *.png,*.jpeg,  max. 1 MB)</span></label>

                                        <input type="file" id="admit_card_file" name="admit_card_file" class="form-control-file" accept="image/jpeg,image/jpg,image/png,application/pdf" placeholder="">

                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="boardexam"><span class="label-hindi"> बोर्ड परीक्षा</span><span class="req-col text-danger">*</span><br><span class="label-eng">Board Exam Appeared For</span></label>
 
                                        <div class="form-select">
                                            <select name="boardexam" class="" id="boardexam">
                                               
                                                <option selected value="">अपनी बोर्ड परीक्षा का चयन करें / Select Your Board Exam</option>
                                                <?php
                                                  $sqlUserType="select * from `env_board_dtl` order by `board_name` asc";
                                                  $resultUT=mysqli_query($conn,$sqlUserType);

                                                  while($row=mysqli_fetch_assoc($resultUT)){
                                                ?>
                                                  <option value="<?php echo $row['board_name']; ?>"><?php echo $row['board_name']; ?></option>
                                                <?php
                                                  }
                                                ?>
                                            </select>
                                            <!-- <div class="select-dropdown"></div> -->
                                        </div>
                                    </div>         
                                </div>   
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="boardrollnumber"><span class="label-hindi">बोर्ड क्रमांक नंबर</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Board Roll Number</span></label>

                                        
                                        <input type="text" id="boardrollnumber" name="boardrollnumber" class="input--style-1" placeholder="Enter Board Roll Number">
                                    </div>
                                </div>
                            </div>


                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="location"><span class="label-hindi">वह स्थान चुनें जहां आप कार्यक्रम में शामिल होना चाहते हैं</span><span class="req-col text-danger">*</span><br><span class="label-eng">Choose the location at which you would like to attend the event</span></label>
                                        <!-- rs-select2 js-select-simple select--no-search -->
                                        <div class="form-select">
                                            <select name="location" id="location" class="">
                                               <option  selected value="">स्थान चुनें / Select The Location</option>
                                                
                                                <?php
                                                  $sqlUserType="select * from `env_locations` order by `id` asc";
                                                  $resultUT=mysqli_query($conn,$sqlUserType);
                                                  while($row2=mysqli_fetch_assoc($resultUT)){
                                                     
                                                ?>
                                                    <option value="<?php echo $row2['location_name']; ?>"><?php echo $row2['location_name']; ?></option>
                                                <?php
                                                }
                                                
                                                ?>
                                            </select>
                                            <!-- <div class="select-dropdown"></div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="school_medium"><span class="label-hindi">आपके विद्यालय का पठन माध्यम क्या है</span><span class="req-col text-danger">*</span><br /><span class="label-eng">What is the medium of instruction in your school</span></label>
 
                                        <div class="form-select">
                                            <select id="school_medium" name="school_medium" class="schoolmedium">
                                               <option  selected="selected" value="">स्कूल माध्यम का चयन करें / Select School Medium</option>
                                                <option value="Hindi Medium">हिंदी माध्यम | Hindi Medium</option>
                                                <option value="English Medium">अंग्रेजी माध्यम | English Medium<br></option>
                                                <option value="Bengali Medium">बंगाली माध्यम | Bengali Medium</option>
                                                 <option value="Others">अन्य | Others</option>
                                            </select>
                                            <!-- <div class="select-dropdown"></div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="schoolname"><span class="label-hindi">स्कूल का पूरा नाम</span><span class="req-col text-danger">*</span><br /><span class="label-eng">School Full Name</span>
                                                                      
                                        </label>

                                        <div class="form-select">
                                            <select id="schoolname"  name="schoolname" class="">
                                               <option  selected="selected" value="">सबसे पहले अपना बोर्ड और स्थान चुनें/First selct your board & location</option>
                                                
                                                
                                            </select>
                                            <!-- <div class="select-dropdown"></div> -->
                                        </div>


                                    </div>

                                    <div class="full">
                                        <p class="para-hindi_a"><span class="req-col"></span>यदि आपके विद्यालय का नाम नीचे दी गई सूची में नहीं है , तो कृपया अन्य का चयन करें और इनपुट फ़ील्ड में  विद्यालय का पूरा नाम और पता दर्ज करें|</p>
                                        <p class="para-eng_a">If your school name does not appear in the attached list, then please select 'Others' and enter your full School name and addresss in input field.</p>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-2">
                                    <div class="input-textarea">
                                        <label for="school_address"><span class="label-hindi">स्कूल का पता</span><span class="req-col text-danger">*</span><br /><span class="label-eng">School Address</span></label>
                                        <textarea maxlength="200" id="school_address" name="school_address" class="input--style-1 text_area text_input" rows="3" cols="50" placeholder="Enter School Address" style="background-color:grey;color:white;" readonly></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space other-school-section" id="other_school">
                               
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="other_school_name"><span class="label-hindi">नया स्कूल का पूरा नाम</span><span class="req-col text-danger">*</span><br><span class="label-eng">New School Name</span></label>
                                        <input type="text" id="other_school_name" name="other_school_name" class="input--style-1" placeholder="Enter New school Name">
                                    
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-textarea">
                                        <label for="other_school_address"><span class="label-hindi">नया स्कूल का पता</span><span class="req-col text-danger">*</span><br><span class="label-eng">New School Address</span></label>
                                        <textarea id="other_school_address" name="other_school_address" maxlength="300" rows="3" cols="50" class="input--style-1 text_area" placeholder="Enter New School Address"></textarea>
                                        
                                    </div>
                                </div>
                            </div>

                            <!-- FOR 1ST TERM -->
                            <div class="row row-space marks-block-1" id="nine_marks_para">
                                <p id="mark-text-para-1"  class="para-hindi"></p> 
                            </div>

                            <div class="row row-space marks-block-1" id="nine_marks">
                               
                                <div class="col-2">
                                    <div class="input-group">
                                       <label for="last_year_marks1"><span class="label-hindi">फर्स्ट टर्म </span><span class="req-col text-danger">*</span><br /><span class="label-eng">1st Term</span></label>
                                       <input type="number" id="last_year_marks1" name="last_year_marks1"   maxlength="3" min="0" max="100" class="input--style-1" placeholder="Enter 1st Term" >
                                        
                                    
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="last_year_marks2"><span class="label-hindi">सेकंड टर्म</span><span class="req-col text-danger">*</span><br /><span class="label-eng">2nd Term</span></label>
                                       <input type="number" id="last_year_marks2" name="last_year_marks2"   maxlength="3" min="0" max="100" class="input--style-1" placeholder="Enter 2nd Term">

                                        
                                    </div>
                                </div>


                            </div>


                         <!-- FOR 2ND TERM -->
                            <div class="row row-space marks-block-2" id="eleven_marks_para">
                                <p id="mark-text-para-2"  class="para-hindi"></p> 
                            </div>
                            <div class="row row-space marks-block-2" id="eleven_marks">
                                
                                <div class="col-3">
                                    <div class="input-group">

                                        <label for="current_year_marks1"><span class="label-hindi">फर्स्ट टर्म</span><span class="req-col text-danger">*</span><br /><span class="label-eng">1st Term</span></label>
                                       <input type="number" id="current_year_marks1" name="current_year_marks1"  maxlength="3" min="0" max="100" class="input--style-1" placeholder="Enter 1st Term" class="input--style-1" >

                                    
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">

                                        <label for="current_year_marks2"><span class="label-hindi">सेकंड टर्म</span><span class="req-col text-danger">*</span><br /><span class="label-eng">2nd Term</span></label>
                                       <input type="number" id="current_year_marks2" name="current_year_marks2"  maxlength="3" min="0" max="100" class="input--style-1" placeholder="Enter 2nd Term">

                                        
                                        
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="input-group">

                                        <label for="current_year_preboards"><span class="label-hindi">प्री बोर्ड</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Pre-Board</span></label>
                                          <input type="number" id="current_year_preboards" name="current_year_preboards"  maxlength="3" min="0" max="100" class="input--style-1" placeholder="Enter Pre-Board Marks" >

                            

                                        
                                    </div>
                                </div>
                            </div>
                            <!-- FOR attachment TERM -->
                            <div class="row row-space">
                               
                                <div class="col-2" id="nine_marksheet">
                                    <div class="input-file">
                                        <label for="marksheet_one" class="label_file"><span class="label-hindi">कृपया अपनी कक्षा IX की मार्कशीट अपलोड करें (फ़ाइल प्रारूप और आकार - * .pdf, * .jpg, * .png,*.jpeg, अधिकतम 1 एमबी)</span><span class="req-col text-danger"></span><br /><span class="label-eng">Please Upload Your Class IX Consolidated Marksheet (File format & size - *.pdf, *.jpg, *.png,*.jpeg, max. 1 MB)</span></label>
                                        <input type="file" id="marksheet_one" name="marksheet_one">

                                    
                                    </div>
                                </div>
                                <div class="col-2" id="eleven_marksheet">
                                    <div class="input-file">
                                        <label for="marksheet_eleven" class="label_file"><span class="label-hindi">कृपया अपनी कक्षा XI की मार्कशीट अपलोड करें (फ़ाइल प्रारूप और आकार - * .pdf, * .jpg, * .png,*.jpeg, अधिकतम 1 एमबी)</span><span class="req-col text-danger"></span><br /><span class="label-eng">Please Upload Your Class XI Consolidated Marksheet (File format & size - *.pdf, *.jpg, *.png,*.jpeg, max. 1 MB)</span></label>
                                        <input type="file" id="marksheet_eleven" name="marksheet_eleven">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space">
                                <!-- FOR teacher FIELD -->
                                <div class="col-2">
                                    <div class="input-group">
                                       <label for="hindi_Teacher_name"><span class="label-hindi">हिंदी शिक्षक का नाम जिन्होंने आपको सबसे अधिक प्रभावित किया है ?</span><span class="req-col text-danger">*</span><br><span class="label-eng">Name of a Hindi teacher who has impacted you the most.</span></label>
                                        <input type="text" id="hindi_Teacher_name" name="hindi_Teacher_name" placeholder="Enter Your Hindi Teacher Name" class="input--style-1 text_field">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="hindi_teacher_mobile"><span class="label-hindi">हिंदी शिक्षक मोबाइल नंबर</span><span class="req-col"></span><br><span class="label-eng">Hindi Teacher Mobile Number</span></label>
                                        <input id="hindi_teacher_mobile" type="number" class="input--style-1 student_mobile2" pattern="[0-9]{10}" placeholder="Enter Your Hindi Teacher Mobile Number" maxlength="10" name="hindi_teacher_mobile">
                                    </div>
                                </div>
                            </div>


                        </section>
















                        <!-- THIS IS SECTION FOUR -->
                        <section id="Step-4" class="section4">
                            <h3 class="section-heading sub-heading text-left py-3 text-light"><span class="heading1-hindi">अभिभावक जानकारी</span> / <span class="heading1-eng">GUARDIAN DETAILS</span></h3>


                            <!-- GUARDIAN NAME -->
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">

                                       <label for="parent_name"><span class="label-hindi">अभिभावक का नाम</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Parent / Guardian Name</span></label>

                                       <input type="text" id="parent_name" name="parent_name" class="input--style-1 text_field" placeholder="Enter Parents Full Name">
  
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">

                                        <label for="parentmobile"><span class="label-hindi">अभिभावक का फोन नंबर</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Parent / Guardian Mobile Number</span></label> 

                                       <input type="number" name="parentmobile" id="parentmobile" pattern="[0-9]{10}" maxlength="10" placeholder="Enter Parents Mobile Number" class="input--style-1 student_mobile3">
    
                                    </div>
                                </div>
                               
                            </div>

                            


                            <!-- GUARDIAN PINCODE -->

                            <div class="row row-space">
                                <!-- FOR teacher FIELD -->
                                <div class="col-2">
                                    <div class="input-group">

                                       <label for="parentemail"><span class="label-hindi">अभिभावक का ई-मेल</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Parent / Guardian Email ID</span></label>

                                           <input type="email" name="parent_email" id="parentemail" class="input--style-1" placeholder="example@gmail.com">
    
                                    </div>
                                    
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="family_income"><span class="label-hindi">परिवार की वार्षिक आय</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Annual Family Income</span></label>

                                        <div class="form-select">
                                            <select name="family_income" id="family_income" class="familyincome">

                                               <option  selected="selected" value="">परिवार की वार्षिक आय / Family Annual Income</option>                                 
                                                <option value="below 2.5 lakhs">2,50,000 से कम | BELOW 2,50,000</option>
                                                <option value="between 2.5lakhs-5lakhs">2,50,000 – 5,00,000 के बीच | BETWEEN 2,50,000 – 5,00,000</option>
                                                <option value="above 5lakhs">5,00,000 से अधिक | ABOVE 5,00,000</option>
                                            </select>
                                            <!-- <div class="select-dropdown"></div> -->
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <!-- family member who thaugts you hindi -->
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">

                                       <label for="members_name"><span class="label-hindi">परिवार के उस सदस्य का नाम जिसने आपको हिन्दी सिखाई है</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Name of a family member who has taught you Hindi</span></label>

                                       <input type="text" id="members_name" name="members_name" class="input--style-1 text_field" placeholder="Enter Members Full Name">
  
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">

                                        <label for="relationship"><span class="label-hindi">परिवार के सदस्य के साथ संबंध</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Relationship with the Family Member</span></label> 

                                       <input name="relationship" id="relationship" type="text" placeholder="Enter the Relationship" class="input--style-1 text_field">
    
                                    </div>
                                </div>
                               
                            </div>





                        </section>
                        <section id="Step-5" class="section5">
                        </section>
                        
                        <section id="Step-6" class="section6">
                            <h3 class="section-heading sub-heading text-left py-3 text-light" ><span class="heading1-hindi">अन्य जानकारी</span> / <span class="heading1-eng">OTHER DETAILS</span></h3>



                            <!-- source to know -->
                            <div class="row row-space">
                                
                                <div class="col-2">
                                    <div class="input-group">
                                        <label for="ragaward_source"><span class="label-hindi">आपको राम अवतार गुप्त हिंदी प्रोत्साहन 2024 के बारे में कैसे पता चला ?</span><span class="req-col text-danger">*</span><br /><span class="label-eng">How did you get to know about Ram Awatar Gupt Hindi Protsahan 2024?</span></label>

                                        <div class="form-select">
                                            <select name="ragaward_source" id="ragaward_source" class="ragawardsource">

                                                <option  selected="selected" value="">सोर्स चुनें / Select Source</option>                                   
                                                <option value="Sanmarg Newspaper">सन्मार्ग समाचार पत्र / Sanmarg Newspaper</option>
                                                <option value="Sanmarg Social Media">सन्मार्ग सोशल मीडिया / Sanmarg Social Media</option>
                                                <option value="Sanmarg Website">सन्मार्ग वेबसाइट / Sanmarg Website</option>
                                                <option value="School">विद्यालय / School</option>
                                                <option value="Friends">फ्रेंड्स / Friends</option>
                                                <option value="Family">फॅमिली / Family</option>
                                                <option value="Radio">रेडियो / Radio</option>
                                                <option value="Telegraph">टेलीग्राफ / Telegraph</option>                                               
                                                <option value="Others">अन्य / Others</option>
                                            </select>
                                            <!-- <div class="select-dropdown"></div> -->
                                        </div>


                                    </div>
                                </div>

                                <!-- FOR others FIELD -->
                                

                                <div class="col-2">
                                    <div class="input-group">
                                        <span class="label_radio"><span class="label-hindi">क्या आप सन्मार्ग हिंदी दैनिक के नियमित पाठक हैं?</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Are you a regular reader of Sanmarg Hindi Daily?</span></span>
                                        <div class="form-radio d-flex">                         
                                            <div class="form-radio-item mx-4"> 


                                                <span class="d-flex">
                                                    <input type="radio" name="sanmarg_reader" id="sanmarg_reader_yes"  class="sanmarg_reader" value="Yes" style="font-size: 6px;">
                                                    <label for="sanmarg_reader_yes"><span class="label-hindi">&nbsp;हाँ</span>&nbsp;/&nbsp;<span class="label-eng">Yes</span></label>                                
                                                                    
                                                </span>

                                                    
                                            </div>
                                            <div class="form-radio-item mx-4">
                                                <span class="d-flex">
                                                    <input type="radio" name="sanmarg_reader" id="sanmarg_reader_no" class="sanmarg_reader" value="No" style="font-size: 6px;">
                                                    <label for="sanmarg_reader_no"><span class="label-hindi">&nbsp;नहीं</span>&nbsp;/&nbsp;<span class="label-eng">No</span></label>                                  
                                                                
                                                                    
                                                </span>      
                                                                                          
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row row-space" id="source_other">
                               
                                
                                    <div class="col-2">
                                        <div class="input-full">
                                            <label for="ragaward_source_other" class="full"><span class="label-hindi">यदि आपने अन्य चुना</span><span class="req-col text-danger">*</span><br /><span class="label-eng">If Others Selected</span></label>

                                            
                                        </div>
                                    </div>
                                     <div class="col-2">
                                        <div class="input-full">
                                            

                                            <input type="text" id="ragaward_source_other" name="ragaward_source_other" class="input--style-1 full">
                                        </div>
                                    </div>
                                
                                
                            </div>
                            <div class="row row-space" id="ragp_before">
                                

                                    <div class="col-2">
                                        <div class="input-full">
                                           <span  class="radio-label full label_file"><span class="label-hindi">क्या आपने राम अवतार गुप्त हिन्दी प्रोत्साहन के लिए कक्षा 10 में भाग  लिया था?</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Did you participate in Ram Awatar Gupt Hindi Protsahan in class 10?</span></span>

                                           

                                             
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-full full-input">
                                          

                                           <div class="full">

                                                <div class="form-row" style="display:flex;">
                                                    <div class="form-radio-item mx-4">
                                                        <span class="d-flex">
                                                            <input type="radio" name="rag_participated_chk" id="rag_participated_yes"  class="rag-participated" value="Yes" style="font-size: 6px;">
                                                            <label for="rag_participated_yes"><span class="label-hindi">&nbsp;हाँ</span>&nbsp;/&nbsp;<span class="label-eng">Yes</span></label>                                  
                                                            
                                                                
                                                        </span>
                                                    </div>
                                                    <div class="form-radio-item mx-4">
                                                        <span class="d-flex">
                                                            <input type="radio" name="rag_participated_chk" id="rag_participated_no" class="rag-participated" value="No" style="font-size: 6px;">                                      
                                                            <label for="rag_participated_no"><span class="label-hindi">&nbsp;नहीं</span>&nbsp;/&nbsp;<span class="label-eng">No</span></label>                                   
                                                        </span>                                    
                                                    </div>
                                                </div>
                                            </div>

                                             
                                        </div>
                                    </div>
                                    
                                

                            </div>
                             <div class="row row-space">
                                

                                    <div class="col-2">
                                        <div class="input-full">
                                           <label for="ankur_option" class="full"><span class="label-hindi">क्या आपने किसी पाठ्यक्रमोत्तर (extra-curricular) हिंदी गतिविधियों में भाग लिया है?
                                                </span><span class="req-col text-danger">*</span><br /><span class="label-eng">Have you ever done any exceptional work or participated in any extracurricular activity around Hindi?</span></label>

                                             
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-full">
                                          

                                             <div class="form-select ankur_text_select">
                                                <select name="ankur" id="ankur_option" class="ankur_option ankur_text">                                              
                                                    <option   selected="selected" value="">प्रकार चुनें / Select Your Option</option>                                 
                                                    <option value="Yes">हाँ / Yes</option>
                                                    <option value="No">नहीं / No</option>
                                                </select>
                                                <!-- <div class="select-dropdown"></div> -->
                                            </div>
                                        </div>
                                    </div>
                                

                            </div>
                             <div class="row row-space ankur-option-section">

                                <div class="col-2">
                                    <div class="input-textarea-full">
                                        <label for="ankur_activity_textwork" class="label_file"><span class="label-hindi">कृपया मार्च 2020 से मार्च 2024 के बीच हिंदी के क्षेत्र मे आपके द्वारा किए गए  पाठ्यक्रमोत्तर कार्यों पर 200 शब्द लिखे<span class="req-col text-danger">*</span></span><span class="req-col text-danger">*</span><br><span class="label-eng">Please write 200 words on extracurricular work done in the field of Hindi between March 2020-2024.</span></label>

                                        <textarea  rows="3" cols="50" maxlength="300" id="ankur_activity_textwork" class="form-control ankur_text" name="ankur_activity_textwork" placeholder="Write about extracurricular activity in Hindi in 200 words..."></textarea>

                                        
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="input-file">

                                        <label for="ankur_activity_file" class="label_file"><span class="label-hindi">कृपया उल्लेख किये पाठ्येतर कार्यों से संबंधित दस्तावेज की स्कैन्ड कॉपी या चित्र अपलोड करें <span class="req-col text-danger">*</span>(फ़ाइल प्रारूप और आकार <span class="req-col text-danger">*</span> - * .pdf, * .jpg, * .png,*.jpeg, अधिकतम 1 एमबी)</span><br /><span class="label-eng">Please attach a scanned copy or picture
                             of documents supporting the above mentioned extracurricular activities(Upload relevant documents file format & size - *.pdf, *.jpg, *.png,*.jpeg, max. 1 MB)</span></label>

                                       <input type="file" id="ankur_activity_file" name="ankur_activity_file" class="input--style-1 form-control-file" accept="image/jpeg,image/jpg,image/png,application/pdf" placeholder="">

                                    </div>
                                </div>
                            </div>

                            <div class="row row-space">

                                <!-- FOR CATEGORY FIELD -->
                                <div class="col-2">
                                    
                                    <div class="input-full">

                                        <label for="category" class="">
                                            <span class="label-hindi">क्या आप दिव्यांग छात्र हैं ?</span><span class="req-col"></span><span class="req-col text-danger">*</span><br /><span class="label-eng">Are you a Specially Abled student ?</span>
                                        </label>

                                    

                                    </div>
                                </div>
                                <div class="col-2">
                                    
                                    <div class="input-full">

                                        <div class="form-select ankur_text_select">
                                            <select name="category" id="category" class="" aria-label="Default select example" required>
                                                <option value="">श्रेणी चुनें / Select Category</option>
                                                <option value="Aparajay" class="option">हाँ / Yes</option>
                                                <option value="General" class="option">नहीं / No</option>                             
                                            </select>
                                        </div>


                                    </div>
                                </div>
                                
                            </div>



                        </section>



                        <section id="Step-0" class="section0">

                            <h3 class="section-heading sub-heading text-left py-3 text-light" id="specially_abled_heading"><span class="heading1-hindi">दिव्यांग छात्र विवरण</span> / <span class="heading1-eng">DIFFERENTLY ABLED STUDENT DETAILS</span></h3>


                            <div class="row row-space" id="specially_abled_para">
                                <div class="full">
                                    <p class="para-hindi_a"><span class="req-col"></span> उन बच्चों के लिए जिन्होंने किसी भी चुनौतियों का अनुभव किया है (स्थिति परीक्षा की तारीख से कम से कम 45 दिन पहले मौजूद होनी चाहिए ।)</p>
                                    <p class="para-eng_a">For children who have experienced any challenges (The condition should have been present for a minimum of 45 days before the date of exam.)</p>
                                </div>
                            </div>


                           
                            <!-- <div class="row row-space disorder_section_para">
                                <div class="full">
                                     <p class="para-hindi_a"><span class="req-col"></span>उन बच्चों के लिए जिन्होंने किसी भी शारीरिक या मानसिक चुनौतियों का अनुभव किया है (स्थिति परीक्षा की तारीख से कम से कम 45 दिन पहले मौजूद होनी चाहिए ।)</p>
                                     <p class="para-eng_a">For children who have experienced any physical or mental challenges (The condition should have been present for a minimum of 45 days before the date of exam.)</p>
                                </div>
                            </div> -->
                            <div class="row row-space ">

                                <!-- FOR CATEGORY FIELD -->
                                <div class="col-2" id="disorder_type">
                                    
                                    <div class="input-group">

                                       <label for="disorder"><span class="label-hindi">दिव्यांगता का चयन  करें</span><span class="req-col text-danger">*</span><br><span class="label-eng">Please Select the Challenge</span></label>
                                        <div class="form-select">
                                        <select name="disorder" id="disorder" class="" aria-label="Default select example">
                                            <option value="">कृपया अपना विकार चुनें / Please Select Challenge</option>
                                            <option value="Physically Challenged" class="option">शारीरिक विकार / Physical Challenge</option>
                                            <option value="Emotionally Challenged" class="option">मानसिक विकार / Mental Challenge</option>                                    
                                        </select>
                                        </div>

                                    

                                    </div>
                                </div>
                                <div class="col-2" id="phy_disorder_div">
                                    
                                    <div class="input-group">

                                        <label for="phy_disorder"><span class="label-hindi">कृपया शारीरिक समस्या का चयन करें </span><span class="req-col text-danger">*</span><br /><span class="label-eng">Please Choose Physical Challenge Undergone</span></label>
                                        <div class="form-select">
                                           <select name="phy_disorder_name" id="phy_disorder" class="" aria-label="Default select example">
                                            <option value="">शारीरिक विकार / Physical Challenge</option>                                   
                                            <option value="Acquired brain injury">Acquired brain injury</option>
                                            <option value="Auditory Processing Disorder">Auditory Processing Disorder</option>
                                            <option value="Amputation">Amputation</option>
                                            <option value="Burn injury">Burn injury</option>
                                            <option value="Cancer">Cancer</option>
                                            <option value="Cerebral palsy">Cerebral palsy</option>
                                            <option value="Cystic fibrosis (CF)">Cystic fibrosis (CF)</option>
                                            <option value="Down Syndrome">Down Syndrome</option>
                                            <option value="Dwarfism">Dwarfism</option>
                                            <option value="Epilepsy">Epilepsy</option>
                                            <option value="Heart diseases">Heart diseases</option>
                                            <option value="Kidney disease">Kidney disease</option>
                                            <option value="Muscular dystrophy">Muscular dystrophy</option>
                                            <option value="Multiple sclerosis (MS)">Multiple sclerosis (MS)</option>
                                            <option value="Speech and language disorders">Speech and language disorders</option>
                                            <option value="Spina bifida">Spina bifida</option>
                                            <option value="Spinal cord injury (SCI)">Spinal cord injury (SCI)</option>
                                            <option value="Tourettes Syndrome">Tourettes Syndrome</option>
                                            <option value="Visual Processing Disorders">Visual Processing Disorders</option>
                                            <option value="Others">Others</option>                              
                                        </select>
                                        </div>


                                    </div>
                                </div>
                                 <div class="col-2" id="ment_disorder">
                                    
                                    <div class="input-group">

                                        <label for="mental_disorder"><span class="label-hindi">कृपया मानसिक समस्या का  चयन करें </span><span class="req-col text-danger">*</span><br /><span class="label-eng">Please Choose The Mental Challenge Undergone</span></label>
                                        <div class="form-select">
                                           <select name="mental_disorder_name" id="mental_disorder" class="" aria-label="Default select example">
                                                    <option value="">मानसिक विकार / Mental Challenge</option> 
                                                    <option value="Adjustment disorder">Adjustment disorder</option>
                                                    <option value="Alice in wonderland syndrome">Alice in wonderland syndrome</option>
                                                    <option value="Alzheimer's disease">Alzheimer's disease</option>
                                                    <option value="Amnestic disorder">Amnestic disorder</option>
                                                    <option value="Anxiety disorder">Anxiety disorder</option>
                                                    <option value="Asperger syndrome">Asperger syndrome</option>
                                                    <option value="Autism">Autism</option>
                                                    <option value="Bereavement">Bereavement</option>
                                                    <option value="Bipolar disorder">Bipolar disorder</option>
                                                    <option value="Borderline intellectual functioning">Borderline intellectual functioning</option>
                                                    <option value="Clinical Depression">Clinical Depression</option>
                                                    <option value="Cognitive disorder">Cognitive disorder</option>
                                                    <option value="Communication disorder">Communication disorder</option>
                                                    <option value="Developmental coordination disorder">Developmental coordination disorder</option>
                                                    <option value="Dissociative identity disorder">Dissociative identity disorder</option>
                                                    <option value="Dyscalculia">Dyscalculia</option>
                                                    <option value="Dyslexia">Dyslexia</option>
                                                    <option value="Dysgraphia">Dysgraphia</option>
                                                    <option value="Depression">Depression</option>
                                                    <option value="Neurodevelopmental disorder">Neurodevelopmental disorder</option>
                                                    <option value="Parkinson's Disease">Parkinson's Disease</option>
                                                    <option value="Schizophrenia">Schizophrenia</option>
                                                    <option value="Schizotypal personality disorder">Schizotypal personality disorder</option>
                                                   <option value="Stereotypic movement disorder">Stereotypic movement disorder</option>
                                                   <option value="Others">Others</option>
                                                </select>
                                        </div>


                                    </div>
                                </div>
                                
                            </div>

                            <div class="row row-space disorder_section_para">
                                <div class="full">
                                    <p class="para-hindi_a">कृपया समस्या का संक्षिप्त उल्लेख करें और उससे संबंधित दस्तावेज अपने स्कूल के प्रिंसिपल से सत्यापित करवा कर संलग्न करें</p>
                                    <p class="para-eng_a">Please write a short note on the same and attach documents supporting the above attested by your School Principal</p>
                                </div>
                            </div>



                            <div class="row row-space disorder_shortnote">

                                <!-- FOR CATEGORY FIELD -->
                                <div class="col-2">
                                    
                                    <div class="input-textarea-full">

                                       <label class="label_file" for="disorder_detail"><p class="para-hindi">कृपया चुनौती पर एक शार्ट नोट लिखें <span class="req-col text-danger">*</span><br>
                                      <span class="para-eng">Please write a short note on the challenge</p></label>
                                        <textarea  rows="4" cols="50" maxlength="550" id="disorder_detail" class="form-control ankur_text text_input" name="disorder_detail" placeholder="Write a short note on the challenge ...."></textarea>

                                    

                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-file apa_file">

                                        <label for="disorder_file" class="label_file"><span class="label-hindi">कृपया प्रासंगिक दस्तावेज़ अपलोड करें - फ़ाइल प्रारूप और आकार - * .pdf, * .jpg, * .png,*.jpeg, अधिकतम 1 एमबी</span><span class="req-col text-danger">*</span><br /><span class="label-eng">Please upload relevant documents - file format & size - *.pdf, *.jpg, *.png,*.jpeg, max. 1 MB</span></label>

                                        <input type="file" id="disorder_file" name="disorder_file" class="form-control-file custom-file" accept="image/jpeg,image/jpg,image/png,application/pdf" placeholder="">

                                    </div>
                                </div>                               
                            </div>
                        </section>


                        <section id="Step-7" class="section7">
                            <!-- <h3 class="section-heading sub-heading text-center py-3 text-light" style="background-color:#ae2627;font-size:15px; font-weight:700; color:#fff;"><span class="heading1-hindi">अंतिम सबमिशन के लिए</span><br /><span class="heading1-eng">FOR FINAL SUBMISSION</span></h3> -->

                            <span  class="label_para" style="border:1px solid black;border-radius: 10px;">
                                <p class="para-hindi"><span class="label-hindi">प्रिय छात्र! आपने सफलतापूर्वक फॉर्म भर दिया है, आपसे अनुरोध है कि अपनी अंतिम समीक्षा के लिए सभी सम्मिलित विवरणों की जांच करें, यदि विवरण में कोई बदलाव आवश्यक है तो आवश्यक परिवर्तन पूरा करें। एक बार <b>[सबमिट बटन]</b> पर क्लिक करने के बाद आप अपना विवरण संशोधित नहीं कर सकते।</span><br><span class="label-hindi"> कृपया यह भी ध्यान दें कि पंजीकरण प्रक्रिया के दौरान पूछे गए सभी विवरणों का उपयोग छात्र की प्रामाणिकता की जांच के लिए किया जाएगा। यदि कोई अमान्य डाटा या अनुपयुक्त फाइल छात्र द्वारा अपलोड की गई है तो उसे अयोग्य घोषित कर दिया जाएगा।</span></p>

                                <p class="para-eng"><span class="label-eng">Dear student !You have successfully filled the form, requesting you to review all the data, if any change is required do so now. Once the <b>[Submit Button]</b> is clicked, the details cannot be modified.</span><br><span class="label-eng">Kindly note that all the details entered during the registration process will be used for checking student's authenticity. If any invalid data or inappropriate files are uploaded by the student then he/she will be disqualified.</span></p>
                            </span><br>

                            <div class="row row-space">
                               
                                <div class="full" style="display:flex;width: 100%;">
                                    
                                    <div class="col-md-2">
                                       
                                        <input style="margin: 5px;" class="" value="Yes" type="checkbox" name="term_condition" id="term_condition">          
                                        
                                    </div>
                                    <div class="col-md-10">
                                       
                                        <label style="margin-top: 5px;" for="ragaward_source_other" class="full"><span class="label-hindi">मैं सब <a href="Terms-Conditions.pdf" style="color:black;">Terms & Condition</a> स्वीकार करता / करती हूँ।</span><span class="req-col text-danger">*</span><br /><span class="label-eng">I Accept All <a href="Terms-Conditions.pdf" style="color:black;">Terms & Condition</a></span></label>
   
                                    </div>
                                </div>
                                
                                
                            </div>
                            <span  class="label_para" style="padding: 10px;">
                                <p class="para-hindi"><span class="label-hindi">अस्वीकरण: प्रदान की गई सभी जानकारी किसी तीसरे पक्ष के साथ साझा नहीं की जाएगी।</span><span class="req-col text-danger">*</span></p>

                                <p class="para-eng"><span class="label-eng">Desclaimer: All information provided will not be shared with any third party</span></p>
                            </span>
                            <br><br>

                            
                            <section style="align-items: center;align-content: center;text-align: center;align-self: center;">

                               <input type="submit" id="final_submit" class="btn btn--radius custom_btn btn--green mx-4 btn-lg" name="submit"  value="Submit">
                            </section>
                                
                            


                        </section>

                    </form>


                    <div id="success_page">
                       
                        <div class="success_page_div">
                            <section class="success_page_div_two">
                                <img src="images/RAGLOGO_2022.webp" class="scs_img">
                                <div class="success_page_div_btn">
                                   <a href="index.php" class="btn_back"><b>Back to Home</b></a>
                                   <a href="regform_2024.php" class="btn_back"><b>Registration Form</b></a>
                                </div>
                            </section>
                        </div>
                        
                    </div>


                </div>
                <div class="card-footer">
                    <span>Powered By Sanmarg Foundation.</span>
                </div>
            </div>
        </div>
    </div>

    <script src="form-2024/vendor/jquery/jquery.min.js"></script>
    <script src="form-2024/vendor/select2/select2.min.js"></script>
    <script src="form-2024/vendor/datepicker/moment.min.js"></script>
    <script src="form-2024/vendor/datepicker/daterangepicker.js"></script>
    <script src="form-2024/js/global.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- for old javascript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.steps.js"></script>
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->
    <script src="js/main.js"></script>

    <!-- jquery ui js -->
    <script src="jq_ui_js/jquery-ui.min.js"></script>
    <script  src="jq_ui_js/jquery-ui.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script>

    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
     }
     </script>


    <?php 

if( $success==1){ ?>
    <script type="text/javascript">
        

        $(".section0").hide();  
        $(".section1").hide();
        $(".section2").hide();
        $(".section3").hide();
        $(".section4").hide();
        $(".section5").hide();
        $(".section6").hide();
        $(".section7").hide();
        $('#fill_section').hide();
        $('#success_page').show();
         window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
          });   
    </script>

<?php }else{ ?>
    <script type="text/javascript">
        

        $(".section0").show();  
        $(".section1").show();
        $(".section2").show();
        $(".section3").show();
        $(".section4").show();
        $(".section5").show();
        $(".section6").show();
        $(".section7").show();
        $('#fill_section').show();
        $('#success_page').hide();

         window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'
        });
    </script>
<?php } ?>




<script type="text/javascript">
    

$(document).ready(function(){
    
    
 $(this).scrollTop(0);
 
   window.onload = () => {
     const myInput = document.getElementById('ankur_activity_textwork');
     myInput.onpaste = e => e.preventDefault();
   }



<?php if($success==0){ ?>

    $(".section0").show();  
    $(".section1").show();
    $(".section2").show();
    $(".section3").show();
    $(".section4").show();
    $(".section5").show();
    $(".section6").show();
    $(".section7").show();
    $('#fill_section').show();
    $('#success_page').hide();

     window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
    });

<?php }else{ ?>


    $(".section0").hide();  
    $(".section1").hide();
    $(".section2").hide();
    $(".section3").hide();
    $(".section4").hide();
    $(".section5").hide();
    $(".section6").hide();
    $(".section7").hide();
    $('#fill_section').hide();
    $('#success_page').show();

     window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
    });
<?php } ?>

$('#hindi_name_file').hide();
$("#source_other").hide();
$(".ankur-option-section").hide();
$("#ragp_before").hide();
$('#nine_marksheet').hide();
$('#eleven_marksheet').hide();
$(".other-school-section").hide();

$(".disorder_section_para").hide(); 
$('.disorder_shortnote').hide();
$('#disorder_type').hide();
$('#ment_disorder').hide();
$('#phy_disorder_div').hide();
$('#nine_marks').hide();
$('#eleven_marks').hide();
$('#specially_abled_heading').hide();
$('#specially_abled_para').hide();







// //ON CHANGE EVENTS 

$("#category").change(function(){
    if($("#category").val()== "Aparajay"){

      $(".disorder_section_para").show(); 
      $('.disorder_shortnote').show();
      $('#disorder_type').show();
      $('#specially_abled_heading').show();
      $('#specially_abled_para').show();

      $("#disorder").attr("required",true); 
      $('#disorder_detail').attr("required",true);
      

      
    }
    else if($("#category").val()== "General"){

      $(".disorder_section_para").hide(); 
      $('.disorder_shortnote').hide();
      $('#disorder_type').hide();
      $('#ment_disorder').hide();
      $('#phy_disorder_div').hide();  
      $('#specially_abled_heading').hide();
      $('#specially_abled_para').hide();

      $("#disorder").attr("required",false); 
      $('#disorder_detail').attr("required",false);
      $("#phy_disorder").attr("required", false);
      $("#mental_disorder").attr("required",false); 

      
    }
    else{
      $(".disorder_section_para").hide(); 
      $('.disorder_shortnote').hide();
      $('#disorder_type').hide();
      $('#ment_disorder').hide();
      $('#phy_disorder_div').hide();
      $('#specially_abled_heading').hide();
      $('#specially_abled_para').hide();  

      $("#disorder").attr("required",false); 
      $('#disorder_detail').attr("required",false);
      $('#disorder_file').attr("required",false);
      $("#phy_disorder").attr("required", false);
      $("#mental_disorder").attr("required",false); 
      
    }
});
$("#category").change(function(){
   if($("#category").val()== "Aparajay" && $("#disorder").val()== "Physically Challenged"){

      $('#ment_disorder').hide();
      $("#mental_disorder").attr("required",false); 
      $('#phy_disorder_div').show();
      $("#phy_disorder").attr("required", true);
    }
    else if($("#category").val()== "Aparajay" && $("#disorder").val()== "Emotionally Challenged"){

      $('#ment_disorder').show();
      $("#mental_disorder").attr("required",true); 
      $('#phy_disorder_div').hide();
      $("#phy_disorder").attr("required", false);
    }
    else{
      $('#phy_disorder_div').hide();      
      $("#phy_disorder").attr("required", false);
      $('#ment_disorder').hide();
      $("#mental_disorder").attr("required", false);
    }


});


$("#disorder").change(function(){
    if($("#disorder").val()== "Physically Challenged"){

      $('#ment_disorder').hide();
      $("#mental_disorder").attr("required",false); 
      $('#phy_disorder_div').show();
      $("#phy_disorder").attr("required", true);
    }
    else{
      $('#phy_disorder_div').hide();      
      $("#phy_disorder").attr("required", false);
      $('#ment_disorder').show();
      $("#mental_disorder").attr("required", true);
    }
});




// //other source(rag on selection of others)



$("#ragaward_source").on("change",function(){

    if($("#ragaward_source").val()== "Others"){
        $("#source_other").show();     
        $("#ragaward_source_other").attr("required", true);
    }
    else{
        $("#source_other").hide();
        $("#ragaward_source_other").attr("required",false);
        
    }
    
});
// //other source(rag hindi pariksha participated)
$("#rag_pariksha_participated").change(function(){
    if($("#rag_pariksha_participated").val()== "Yes"){
      $(".hindipariksha").show();
      $("#rag_pariksha_rollno").attr("required",true);
      $("#rag_pariksha_marks").attr("required",true);     
      
    }
    else if($("#rag_pariksha_participated").val()== "No"){       
      $(".hindipariksha").hide();
      $("#rag_pariksha_rollno").attr("required",false);
      $("#rag_pariksha_marks").attr("required",false);        
    }    
});
// ANKUR Option
$("#ankur_option").change(function(){

    if($("#ankur_option").val()== "Yes"){
      $(".ankur-option-section").show();
      $("#ankur_activity_textwork").attr("required",true);
      $("#ankur_activity_file").attr("required",true);
        
      
    }
    else{        
      $(".ankur-option-section").hide();
      $("#ankur_activity_textwork").attr("required",false);
      $("#ankur_activity_file").attr("required",false);
        
    }    
});

//CLASS 10 AND 12 CHANGES MARKS ENTRY AND RAG PARTICIPATED FOR CLASS 12
$('input[type=radio][name=stuclass]').change(function(){
           if ($("input[name='stuclass']:checked").val() == "Class-12") {
                $("#ragp_before").show();
                $('input[type=radio][name=rag_participated_chk]').attr("required",true);
            }
            else{
                $("#ragp_before").hide();
                $('input[type=radio][name=rag_participated_chk]').attr("required",false);
            }
});


// // MARKS BLOCK DISPLAY ON
$('input[type=radio][name=stuclass]').change(function(){
           if ($("input[name='stuclass']:checked").val() == "Class-10") {

               $('#marks-block-1').show();
               $('#marks-block-2').show();

               $("#mark-text-para-1").text("कृपया कक्षा IX के हिंदी अंक  या प्रतिशत भरें/Please fill in your Class IX Hindi marks or percentage");
               $("#mark-text-para-2").text("कृपया कक्षा X के हिंदी अंक भरें/Please fill in your Class X Hindi marks or percentage");
               
               // $("#mark-text-para-1").css('background-color','#F7F2B0');
               $("#mark-text-para-1").css('padding-top','5px');
               $("#mark-text-para-1").css('padding-bottom','5px');
               $("#mark-text-para-1").css('width','100%');
               $("#mark-text-para-1").css('font-size','12px');
               $("#mark-text-para-1").css('font-weight','bold');
               // $("#mark-text-para-2").css('background-color','#F7F2B0');
               $("#mark-text-para-2").css('padding-top','5px');
               $("#mark-text-para-2").css('padding-bottom','5px');
               $("#mark-text-para-2").css('width','100%');
               $("#mark-text-para-2").css('font-size','12px');
               $("#mark-text-para-2").css('font-weight','bold');
             
               $('#nine_marksheet').show();
               $('#eleven_marksheet').hide();

               $('#nine_marks').show();
               $('#eleven_marks').show();

               $("#marksheet_one").attr("required",true);
               $("#marksheet_eleven").attr("required",false);
           }
           else if($("input[name='stuclass']:checked").val() == "Class-12"){

               $("#mark-text-para-1").text("कृपया कक्षा XI के हिंदी अंक  या प्रतिशत भरें/Please fill in your Class XI Hindi marks or percentage");
               $("#mark-text-para-2").text("कृपया कक्षा XII के हिंदी अंक  या प्रतिशत भरें/Please fill in your class XII Hindi marks or percentage");

               // $("#mark-text-para-1").css('background-color','#F7F2B0');
               $("#mark-text-para-1").css('padding-top','5px');
               $("#mark-text-para-1").css('padding-bottom','5px');
               $("#mark-text-para-1").css('width','100%');
               $("#mark-text-para-1").css('font-size','12px');
               $("#mark-text-para-1").css('font-weight','bold');

               // $("#mark-text-para-2").css('background-color','#F7F2B0');
               $("#mark-text-para-2").css('padding-top','5px');
               $("#mark-text-para-2").css('padding-bottom','5px');
               $("#mark-text-para-2").css('width','100%');
               $("#mark-text-para-2").css('font-size','12px');
               $("#mark-text-para-2").css('font-weight','bold');

               
               $('#nine_marksheet').hide();
               $('#eleven_marksheet').show();

               $('#nine_marks').show();
               $('#eleven_marks').show();

               $("#marksheet_one").attr("required",false);
               $("#marksheet_eleven").attr("required",true);             
           }
});


$('input[type=radio][name=radHindiName]').change(function(){

    if($("input[type=radio][name=radHindiName]:checked").val()=="No"){
        $('#hindi_name_file').show();
        $("#hname_file").attr("required", true);
    }else{
        $('#hindi_name_file').hide();
        $("#hname_file").attr("required", false);
    }

});

$("#stuemail").on("change", function() {
  var email = $('#stuemail').val();

  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
     

      this.value ='';
      $("#stuemail").focus(); 
      Swal.fire("Please enter a valid email address"); 
  }


});


$("#fname").on("change", function() {
     var fname = $('#fname').val();

  var regex = /^([a-zA-Z ])+$/;
  if(!regex.test(fname)) {
     

      this.value ='';
      $("#fname").focus();
      Swal.fire("Please enter a valid firstname(special characters not allowed)");  
  }


});
$("#lname").on("change", function() {
     var lname = $('#lname').val();

  var regex = /^([a-zA-Z ])+$/;
  if(!regex.test(lname)) {
     

      this.value =''; 
      $("#lname").focus(); 
      Swal.fire("Please enter a valid surname(special characters not allowed)");
  }


});

$("#parentemail").on("change", function() {
    var par_email=$("#parentemail").val();
     

    var first_dot=par_email.indexOf(".");
    var atposition=par_email.indexOf("@");  
    var dotposition=par_email.lastIndexOf(".");  
    var len=par_email.toString().length;
    // alert("@ atom position "+atposition+"& dot position "+dotposition+" and length "+len+"");
    if(atposition==""  || atposition<1 || dotposition+2>=len || first_dot<1 || dotposition==""){

      

      this.value =''; 
      $("#parentemail").focus(); 
      Swal.fire("Please enter a valid guardian email address");



    }
      
});
// //MARKS RANGE 0 TO 100
// To allow value within range between 50 to 100
$("#last_year_marks1").on("change", function() {
    var val = parseInt(this.value);
    if(val > 100 || val < 0)
    {
        
        this.value ='';
        $("#last_year_marks1").focus();   
        Swal.fire('Please enter valid hindi marks');     
    }
});
$("#last_year_marks2").on("change", function() {
    var val = parseInt(this.value);
    if(val > 100 || val < 0)
    {
        
        this.value =''; 
        $("#last_year_marks2").focus();
        Swal.fire('Please enter valid hindi marks');       
    }
});
$("#last_year_marks3").on("change", function() {
    var val = parseInt(this.value);
    if(val > 100 || val < 0)
    {
        
        this.value ='';
        $("#last_year_marks3").focus();   
        Swal.fire('Please enter valid hindi marks');     
    }
});

$("#current_year_marks1").on("change", function() {
    var val = parseInt(this.value);
    if(val > 100 || val < 0)
    {
        
        this.value ='';
        $("#current_year_marks1").focus(); 
        Swal.fire('Please enter valid hindi marks');       
    }
});
$("#current_year_marks2").on("change", function() {
    var val = parseInt(this.value);
    if(val > 100 || val < 0)
    {
        
        this.value ='';
        $("#current_year_marks2").focus();   
        Swal.fire('Please enter valid hindi marks');     
    }
});
$("#current_year_preboards").on("change", function() {
    var val = parseInt(this.value);
    if(val > 100 || val < 0)
    {
        
        this.value ='';
        $("#current_year_preboards").focus(); 
        Swal.fire('Please enter valid hindi marks');       
    }
});
// // rag pariksha marks
$("#rag_pariksha_marks").on("change", function() {
    var val = parseInt(this.value);
    if(val > 100 || val < 0)
    {
        
        this.value ='';   
        $("#rag_pariksha_marks").focus();    
        Swal.fire('Please enter valid hindi marks');  
    }
});
// for mobile no
$("#stumobile").on("change", function() {
    var val = parseInt(this.value);
    var regex = /^([0-9])+$/;
    if(val.toString().length!= 10 || !regex.test(val))
    {
        
        this.value ='';  
        $("#stumobile").focus(); 
        Swal.fire('Please enter a valid mobile number');      
    }
});




$("#hindi_teacher_mobile").on("change", function() {
    var val = parseInt(this.value);
    var regex = /^([0-9])+$/;
    if(val!=""){
        if(val.toString().length!= 10 || !regex.test(val))
        {
            
            this.value='';  
            $("#hindi_teacher_mobile").focus();   
            Swal.fire('Please enter a valid hindi teacher mobile number');    
        }
    }
});


$("#parentmobile").on("change", function() {
    var val = parseInt(this.value);
     var regex = /^([0-9])+$/;
    if(val.toString().length!= 10 || !regex.test(val))
    {
        
        this.value ='';   
        $("#parentmobile").focus();  
        Swal.fire('Please enter a valid parent mobile number');    
    }
});


// mobile no

$("#emergency_landline").on("change", function() {
    var val = parseInt(this.value);
    if(val!=""){
        if(val.toString().length!= 10)
        {
            
            this.value ='';  
            $("#emergency_landline").focus(); 
            Swal.fire('Please enter a valid emergency mobile number');      
        }
    }
});


$("#pincode").on("change", function() {
    var val = parseInt(this.value);
    if(val.toString().length!= 6)
    {
        
        this.value ='';  
        $("#pincode").focus();
        Swal.fire('Please enter a valid pincode');       
    }
});





// //pincode is only number
// // To allow only numbers
$('#pincode').keydown(function (e) {
    if (e.shiftKey || e.ctrlKey || e.altKey) {
        e.preventDefault();
    } else {
    var key = e.keyCode;
        if (!((key == 8) || (key == 46) || (key >= 35 && key <= 40) || (key >= 48 && key <= 57)      || (key >= 96 && key <= 105))) {
            e.preventDefault();
        }
    }
});
// ragaward_source_other
$("#ragaward_source_other").on("change", function() {
     var ragaward_source_other = $('#ragaward_source_other').val();

  var regex = /^([a-zA-Z0-9,.\-\:/&@*() ])+$/;
  if(!regex.test(ragaward_source_other)) {
     

      this.value =''; 
      $("#ragaward_source_other").focus(); 
      Swal.fire("Please enter a valid source Name(special characters not allowed)");
  }


});
// roll number
$("#boardrollnumber").on("change", function() {
     var boardrollnumber = $('#boardrollnumber').val();

  var regex = /^([a-zA-Z0-9,.\-\:/() ])+$/;
  if(!regex.test(boardrollnumber)) {
     

      this.value ='';  
      $("#boardrollnumber").focus();
      Swal.fire("Please enter a valid roll number(special characters not allowed)");
  }


});

// ankur_activity_textwork
$("#ankur_activity_textwork").on("change", function() {
     var ankur_activity_textwork = $('#ankur_activity_textwork').val();

  var regex = /^([a-zA-Z0-9,.\-\:/&@*() ])+$/;
  if(!regex.test(ankur_activity_textwork)) {
     

      this.value ='';  
      $("#ankur_activity_textwork").focus();
      Swal.fire("Please enter a valid text on extracurricular work(special characters not allowed)");
  }


});

// ankur_activity_textwork
$(".text_input").on("change", function() {
     var text_input = $('.text_input').val();

  var regex = /^([a-zA-Z0-9,.\-\:/&@*() ])+$/;
  if(!regex.test(text_input)) {
     

      this.value ='';  
      this.value.focus();
      Swal.fire("Please enter a valid text(special characters not allowed)");
  }


});


// custom hindi name
$("#custom_hindi_name").on("change", function() {
  var text_input = $('#custom_hindi_name').val();

  var regex = /^([a-zA-Z0-9',.\-\:/#&^+_@*'*%<>?/|!() ])+$/;
  if(regex.test(text_input)) {
     

      this.value ='';  
      $('#custom_hindi_name').focus();
      Swal.fire("Please enter a valid hindi name(only hindi allowed)");
  }


});

// city
$("#city").on("change", function() {
     var city = $('#city').val();

  var regex = /^([a-zA-Z0-9,.\-\:/&@*() ])+$/;
  if(!regex.test(city)) {
     

      this.value =''; 
      $("#city").focus(); 
      Swal.fire("Please enter a valid city name(special characters not allowed)");
  }


});
$("#parent_name").on("change", function() {
     var pname = $('#parent_name').val();

  var regex = /^([a-zA-Z ])+$/;
  if(!regex.test(pname)) {
     

      this.value ='';  
      $("#parent_name").focus();
      Swal.fire("Please enter a valid parent / guardian name(special characters not allowed)");
  }


});
$("#members_name").on("change", function() {
     var members_name = $('#members_name').val();

  var regex = /^([a-zA-Z ])+$/;
  if(!regex.test(members_name)) {
     

      this.value ='';  
      $("#members_name").focus();
      Swal.fire("Please enter a valid member name(special characters not allowed)");
  }


});
$("#hindi_Teacher_name").on("change", function() {
     var hindi_Teacher_name = $('#hindi_Teacher_name').val();

  var regex = /^([a-zA-Z ])+$/;
  if(!regex.test(hindi_Teacher_name)) {
     

      this.value ='';  
      $("#hindi_Teacher_name").focus();
      Swal.fire("Please enter a valid hindi teacher name(special characters not allowed)");
  }


});

// other_school_name
$("#other_school_name").on("change", function() {
     var other_school_name = $('#other_school_name').val();

  var regex = /^([a-zA-Z0-9,.\-\:/&@*() ])+$/;
  if(!regex.test(other_school_name)) {
     

      this.value ='';  
      $("#other_school_name").focus();
      Swal.fire("Please enter a valid School  Name(special characters not allowed)");
  }


});

// other_school_address
$("#other_school_address").on("change", function() {
     var other_school_address = $('#other_school_address').val();

  var regex = /^([a-zA-Z0-9,.\-\:/&@*() ])+$/;
  if(!regex.test(other_school_address)) {
     

      this.value =''; 
      $("#other_school_address").focus(); 
      Swal.fire("Please enter a valid School Address(special characters not allowed)");
  }


});

// home_address
$("#home_address").on("change", function() {
     var home_address = $('#home_address').val();

  var regex = /^([a-zA-Z0-9,.\-\:/&@*() ])+$/;
  if(!regex.test(home_address)) {
     

      this.value ='';  
      $("#home_address").focus();
      Swal.fire("Please enter a valid Parents Address(special characters not allowed)");
  }


});


    // file validation


$("#student_photo_file").on("change", function() {
    var file=$('#student_photo_file').val();
    var ext = $('#student_photo_file').val().split('.').pop().toLowerCase();

    var fileSize = $("#student_photo_file")[0].files[0].size;//size in MB

    if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
       
       this.value ='';
       $("#student_photo_file").focus();
       Swal.fire('Please upload an acceptable file type and size');
    }
    else if(fileSize>1000000){

        
       this.value ='';
       $("#student_photo_file").focus();
       Swal.fire('Do not exceed the file size limit (1MB)');
    }
    
});



$("#disorder_file").on("change", function() {
    var file=$('#disorder_file').val();
    
    var ext = $('#disorder_file').val().split('.').pop().toLowerCase();

    var fileSize = $("#disorder_file")[0].files[0].size;//size in MB

    if($.inArray(ext, ['pdf','png','jpg','jpeg']) == -1) {
       
       this.value ='';
       $("#disorder_file").focus();
       Swal.fire('Please upload an acceptable file type and size');
    }
    else if(fileSize>1000000){

        
       this.value ='';
       $("#disorder_file").focus();
       Swal.fire('Do not exceed the file size limit (1MB)');
    }
    
});


$("#hname_file").on("change", function() {
    var file=$('#hname_file').val();
    var ext = $('#hname_file').val().split('.').pop().toLowerCase();

    var fileSize = $("#hname_file")[0].files[0].size;//size in MB

    if($.inArray(ext, ['pdf','png','jpg','jpeg']) == -1) {
       
       this.value ='';
       $("#hname_file").focus();
       Swal.fire('Please upload an acceptable file type and size');
    }
    else if(fileSize>1000000){

        
       this.value ='';
       $("#hname_file").focus();
       Swal.fire('Do not exceed the file size limit (1MB)');
    }
    
});



$("#admit_card_file").on("change", function() {
    var file=$('#admit_card_file').val();
    var ext = $('#admit_card_file').val().split('.').pop().toLowerCase();

    var fileSize = $("#admit_card_file")[0].files[0].size;//size in MB

    if($.inArray(ext, ['pdf','png','jpg','jpeg']) == -1) {
       
       this.value ='';
       $("#admit_card_file").focus();
       Swal.fire('Please upload an acceptable file type and size');
    }
    else if(fileSize>1000000){

        
       this.value ='';
       $("#admit_card_file").focus();
       Swal.fire('Do not exceed the file size limit (1MB)');
    }
    
});


$("#ankur_activity_file").on("change", function() {
    var file=$('#ankur_activity_file').val();
    var ext = $('#ankur_activity_file').val().split('.').pop().toLowerCase();

    var fileSize = $("#ankur_activity_file")[0].files[0].size;//size in MB

    if($.inArray(ext, ['pdf','png','jpg','jpeg']) == -1) {
       
       this.value ='';
       $("#ankur_activity_file").focus();
       Swal.fire('Please upload an acceptable file type and size');
    }
    else if(fileSize>1000000){

        
       this.value ='';
       $("#ankur_activity_file").focus();
       Swal.fire('Do not exceed the file size limit (1MB)');
    }
    
});

 // for class 9th marksheet
$("#marksheet_one").on("change", function() {
    var file=$('#marksheet_one').val();
    var ext = $('#marksheet_one').val().split('.').pop().toLowerCase();

    var fileSize = $("#marksheet_one")[0].files[0].size;//size in MB

    if($.inArray(ext, ['pdf','png','jpg','jpeg']) == -1) {
       
       this.value ='';
       $("#marksheet_one").focus();
       Swal.fire('Please upload an acceptable file type and size');
    }
    else if(fileSize>1000000){

        
       this.value ='';
       $("#marksheet_one").focus();
       Swal.fire('Do not exceed the file size limit (1MB)');
    }
    
});

 // for class 11th marksheet
$("#marksheet_eleven").on("change", function() {
    var file=$('#marksheet_eleven').val();
    var ext = $('#marksheet_eleven').val().split('.').pop().toLowerCase();

    var fileSize = $("#marksheet_eleven")[0].files[0].size;//size in MB

    if($.inArray(ext, ['pdf','png','jpg','jpeg']) == -1) {
       
       this.value ='';
       $("#marksheet_eleven").focus();
       Swal.fire('Please upload an acceptable file type and size');
    }
    else if(fileSize>1000000){

        
       this.value ='';
       $("#marksheet_eleven").focus();
       Swal.fire('Do not exceed the file size limit (1MB)');
    }
    
});

// for ajax request


// //hindi first name translation
$('#fname').on('input', function(){
 $.ajax({
            type: "GET",
            url: "ajax/bingtranslation.php?word="+$("#fname").val(),
            success: function(data){
               $("#hname").val(data);
           }
       });

});


// //hindi surname  translation
$('#lname').on('input', function(){
 $.ajax({
            type: "GET",
            url: "ajax/bingtranslation.php?word="+$("#lname").val(),
            success: function(data){
               $("#hlname").val(data);
           }
       });

});

$("#location").on("change", function(){
    

    var location=$('#location').val();
    var board_name=$('#boardexam').val();
   
   // alert(board);
   $.ajax({
            type: "POST",         
            url: "ajax/get_board.php",
            // async: true,
            // datatype: "JSON",
            data: {

              location: location,
              board_name:board_name
              
              
            },
       
            success: function(data)
           {
                    // var html = '<option value="">Select School</option>';

                    // for(var i = 0; i <data.length; i++)
                    // {

                    //     html += '<option value="'+data[i]+'">'+data[i]+'</option>';

                    // }
                    // html+='<option value="Others">OTHERS</option>'

                    $('#schoolname').html(data);
                    
           }
       });




})


$('#boardexam').change(function(){

   var location=$('#location').val();
    var board_name=$('#boardexam').val();


 
   
   // alert(board);
   $.ajax({
            type: "POST",         
            url: "ajax/get_board.php",
            // async: true,
            // datatype: "JSON",
            data: {

              location: location,
              board_name:board_name
              
              
            },
       
            success: function(data)
           {
                    // var html = '<option value="">Select School</option>';

                    // for(var i = 0; i <data.length; i++)
                    // {

                    //     html += '<option value="'+data[i]+'">'+data[i]+'</option>';

                    // }
                    // html+='<option value="Others">OTHERS</option>'

                    $('#schoolname').html(data);
                    
           }
       });




})

// School address automatic in the field
$("#schoolname").change(function(){
    var school=$("#schoolname").val();
    if(school!="others"){
            $.ajax({
              type: "GET",
              url: "ajax/ajaxGetSchoolAddressInfo.php?school="+school,
              success: function(data){
                 $("#school_address").val(data);
             }
            }); //end of $.ajax

        }else{
            $("#school_address").val("OTHERS");
        }
    
    
});

// for only kolkataa
$("#location").change(function(){
    if($("#location").val()=="1"){
        $(".student_skill").show();
        $("#submit_type").attr("required",true);
        $("#extempore_date_checkbox").attr("required",true);
        
                
    }
    else{
        $(".student_skill").hide();
        $("#submit_type").attr("required",false);
        $("#extempore_date_checkbox").attr("required",false);
        
    }
            
});



//OTHER SCHOOL NAME OPTION CHANGE
$("#schoolname").change(function(){
    if($("#schoolname").val()=="others"){
        $(".other-school-section").show();
        $("#other_school_name").attr("required",true);
        $("#other_school_address").attr("required",true);
        // $(".school-section").hide();
        $("#schoolname").attr("required",false);
        $("#school_address").attr("required",false);
                
    }
    else{
        $(".other-school-section").hide();
        $("#other_school_name").attr("required",false);
        $("#other_school_address").attr("required",false);
        $(".school-section").show();
        $("#schoolname").attr("required",true);
        $("#school_address").attr("required",true);
    }
            
});




    //next button function
    $("#final_submit").click(function(){
    

        
        
        if($("#fname").val() == ""){
            $("#fname").val($("#fname").val());
            $("#fname").focus();
            Swal.fire("Please enter your first name!");
            return false;

        }
        else if($("#lname").val() == ""){
            
            $("#lname").val($("#lname").val());
            $("#lname").focus();
            Swal.fire("Please enter your last name!");
            return false;

        }
        else if(!$("input[type=radio][name=radHindiName]:checked").val()){
            
            $("input[type=radio][name=radHindiName]:checked").val($("input[type=radio][name=radHindiName]:checked").val());
            $("#rad_hindi_name_yes").focus();
            Swal.fire("Please selct your hindi name is correct or not!");
            return false;

        }
        else if($("input[type=radio][name=radHindiName]:checked").val() && $("input[type=radio][name=radHindiName]:checked").val()=="No" && $('#hname_file').val()==""){
            
            
            $("#hname_file").val($("#hname_file").val());
            $("#hname_file").focus();
            Swal.fire("Please enter hindi name file!");
            return false;

        }
        // else if($("input[type=radio][name=radHindiName]:checked").val() && $("input[type=radio][name=radHindiName]:checked").val()=="No" && $('#custom_hindi_name').val()==""){
            
            
        //     $("#custom_hindi_name").val($("#custom_hindi_name").val());
        //     $("#custom_hindi_name").focus();
        //     Swal.fire("Please enter your correct hindi name (in hindi)!");
        //     return false;

        // }
        
        else if(!$("input[type=radio][name=gender]:checked").val()){
            
            $("input[type=radio][name=gender]:checked").val($("input[type=radio][name=gender]:checked").val());
            $("#rad_gender_male").focus();
            Swal.fire("Please selct your gender!");
            return false;

        }
        else if($("#dp1").val() == ""){
            
            $("#dp1").val($("#dp1").val());
            $("#dp1").focus();
            Swal.fire("Please enter your date of birth!");
            return false;

        }
        else if($("#stuemail").val() == ""){
            
            $("#stuemail").val($("#stuemail").val());
            $("#stuemail").focus();
            Swal.fire("Please enter your email id!");
            return false;

        }
        else if($("#stumobile").val() == ""){
            
            $("#stumobile").val($("#stumobile").val());
            $("#stumobile").focus();
            Swal.fire("Please enter your mobile number!");
            return false;

        }
        else if($("#home_address").val() == ""){
            
            $("#home_address").val($("#home_address").val());
            $("#home_address").focus();
            Swal.fire("Please enter your address!");
            return false;

        }
        else if($("#state").val() == ""){
            
            $("#state").val($("#state").val());
            $("#state").focus();
            Swal.fire("Please select your state!");
            return false;

        }
        else if($("#city").val() == ""){
            
            $("#city").val($("#city").val());
            $("#city").focus();
            Swal.fire("Please enter your city!");
            return false;

        }
        else if($("#pincode").val() == ""){
            
            $("#pincode").val($("#pincode").val());
            $("#pincode").focus();
            Swal.fire("Please enter your pincode!");
            return false;

        }
        else if(!$("input[type=radio][name=stuclass]:checked").val()){
            
            $("input[type=radio][name=stuclass]:checked").val($("input[type=radio][name=stuclass]:checked").val());
            $("#class-10").focus();
            Swal.fire("Please selct your class!");
            return false;

        }
        else if($("#admit_card_file").val() == ""){
            
            $("#admit_card_file").val($("#admit_card_file").val());
            $("#admit_card_file").focus();
            Swal.fire("Please upload your admit card!");
            return false;

        }
        else if($("#boardexam").val() == ""){
            
            $("#boardexam").val($("#boardexam").val());
            $("#boardexam").focus();
            Swal.fire("Please select your board!");
            return false;

        }
        else if($("#boardrollnumber").val() == ""){
            
            $("#boardrollnumber").val($("#boardrollnumber").val());
            $("#boardrollnumber").focus();
            Swal.fire("Please enter board roll number!");
            return false;

        }
        else if($("#location").val() == ""){
            
            $("#location").val($("#location").val());
            $("#location").focus();
            Swal.fire("Please select your location!");
            return false;

        }
        else if($("#school_medium").val() == ""){
            
            $("#school_medium").val($("#school_medium").val());
            $("#school_medium").focus();
            Swal.fire("Please select your school medium!");
            return false;

        }
        else if($("#schoolname").val() == ""){
            
            $("#schoolname").val($("#schoolname").val());
            $("#schoolname").focus();
            Swal.fire("Please select your school name!");
            return false;

        }
        else if($("#schoolname").val() == "others" && $("#other_school_name").val() == ""){
            
            $("#other_school_name").val($("#other_school_name").val());
            $("#other_school_name").focus();
            Swal.fire("Please select your new school name!");
            return false;

        }
        else if($("#schoolname").val() == "others" && $("#other_school_address").val() == ""){
            
            $("#other_school_address").val($("#other_school_address").val());
            $("#other_school_address").focus();
            Swal.fire("Please select your new school address!");
            return false;

        }
        else if($("#schoolname").val() == ""){
            
            $("#schoolname").val($("#schoolname").val());
            $("#schoolname").focus();
            Swal.fire("Please select your school name!");
            return false;

        }
        else if($("#last_year_marks1").val() == ""){
            
            $("#last_year_marks1").val($("#last_year_marks1").val());
            $("#last_year_marks1").focus();
            Swal.fire("Please enter last year term 1 marks!");
            return false;

        }
        else if($("#last_year_marks2").val() == ""){
            
            $("#last_year_marks2").val($("#last_year_marks2").val());
            $("#last_year_marks2").focus();
            Swal.fire("Please enter last year term 2 marks!");
            return false;

        }
        else if($("#current_year_marks1").val() == ""){
            
            $("#current_year_marks1").val($("#current_year_marks1").val());
            $("#current_year_marks1").focus();
            Swal.fire("Please enter current year term 1 marks!");
            return false;

        }
        else if($("#current_year_marks2").val() == ""){
            
            $("#current_year_marks2").val($("#current_year_marks2").val());
            $("#current_year_marks2").focus();
            Swal.fire("Please enter your current year term 2 marks!");
            return false;

        }
        else if($("#current_year_preboards").val() == ""){
            
            $("#current_year_preboards").val($("#current_year_preboards").val());
            $("#current_year_preboards").focus();
            Swal.fire("Please enter your current year pre boards marks!");
            return false;

        }
        else if($("input[type=radio][name=stuclass]:checked").val()=='Class-10' && $("#marksheet_one").val()==''){
            
            $("#marksheet_one").val($("#marksheet_one").val());
            $("#marksheet_one").focus();
            Swal.fire("Please upload your class IX consolidated marksheet!");
            return false;

        }
        else if($("input[type=radio][name=stuclass]:checked").val()=='Class-12' && $("#marksheet_eleven").val()==''){
            
            $("#marksheet_eleven").val($("#marksheet_eleven").val());
            $("#marksheet_eleven").focus();
            Swal.fire("Please upload your class XI consolidated marksheet!");
            return false;

        }
        else if($("#hindi_Teacher_name").val() == ""){
            
            $("#hindi_Teacher_name").val($("#hindi_Teacher_name").val());
            $("#hindi_Teacher_name").focus();
            Swal.fire("Please enter your hindi teacher name!");
            return false;

        }
        else if($("#parent_name").val() == ""){
            
            $("#parent_name").val($("#parent_name").val());
            $("#parent_name").focus();
            Swal.fire("Please enter your guardian name!");
            return false;

        }
        else if($("#parentmobile").val() == ""){
            
            $("#parentmobile").val($("#parentmobile").val());
            $("#parentmobile").focus();
            Swal.fire("Please enter your guardian mobile number!");
            return false;

        }
        else if($("#parentemail").val() == ""){
            
            $("#parentemail").val($("#parentemail").val());
            $("#parentemail").focus();
            Swal.fire("Please enter guardian email!");
            return false;

        }
        
        else if($("#family_income").val() == ""){
            
            $("#family_income").val($("#family_income").val());
            $("#family_income").focus();
            Swal.fire("Please select your family income!");
            return false;

        }

        // family members name
        else if($("#members_name").val() == ""){
            
            $("#members_name").val($("#members_name").val());
            $("#members_name").focus();
            Swal.fire("Please enter family member name!");
            return false;

        }
        else if($("#relationship").val() == ""){
            
            $("#relationship").val($("#relationship").val());
            $("#relationship").focus();
            Swal.fire("Please enter relationship with the family member!");
            return false;

        }
        else if($("#ragaward_source").val() == ""){
            
            $("#ragaward_source").val($("#ragaward_source").val());
            $("#ragaward_source").focus();
            Swal.fire("Please select from where you know about the RAGHP 2024");
            return false;

        }
        else if($("#ragaward_source").val() == "Others" && $('#ragaward_source_other').val()==""){
            
            $("#ragaward_source").val($("#ragaward_source").val());
            $("#ragaward_source").focus();
            Swal.fire("Please enter the others source from where you know about the RAGHP 2024");
            return false;

        }
        else if($("input[type=radio][name=stuclass]:checked").val()=='Class-12' && $("input[type=radio][name=rag_participated_chk]:checked").val()==''){
            
            $("input[type=radio][name=rag_participated_chk]:checked").val($("input[type=radio][name=rag_participated_chk]:checked").val());
            $("#rag_participated_yes").focus();
            Swal.fire("Please selct you are participate in Ram Awatar Gupt Hindi Protsahan in class 10 or not?!");
            return false;

        }
        else if(!$("input[type=radio][name=sanmarg_reader]:checked").val()){
            
            $("input[type=radio][name=sanmarg_reader]:checked").val($("input[type=radio][name=sanmarg_reader]:checked").val());
            $("#sanmarg_reader_yes").focus();
            Swal.fire("Please selct you are a sanmarg reader or not!");
            return false;

        }
        else if($("#ankur_option").val() == ""){
            
            $("#ankur_option").val($("#ankur_option").val());
            $("#ankur_option").focus();
            Swal.fire("Please select if you ever done any exceptional work!");
            return false;

        }
        else if($("#ankur_option").val() == "Yes" && $("#ankur_activity_textwork").val() == ""){
            
            $("#ankur_activity_textwork").val($("#ankur_activity_textwork").val());
            $("#ankur_activity_textwork").focus();
            Swal.fire("Please write extracurricular work done in the field of hindi!");
            return false;

        }
        else if($("#ankur_option").val() == "Yes" && $("#ankur_activity_file").val() == ""){
            
            $("#ankur_activity_file").val($("#ankur_activity_file").val());
            $("#ankur_activity_file").focus();
            Swal.fire("Please attach a documents supporting mentioned extracurricular activities!");
            return false;

        }
        else if($("#category").val()==""){
            
            $("#category").val($("#category").val());
            $("#category").focus();
            Swal.fire("Please select are you a specially abled student?");
            return false;

        }
        else if($("#category").val()=="Aparajay" && $("#disorder").val()==""){
            
            $("#disorder").val($("#disorder").val());
            $("#disorder").focus();
            Swal.fire("Please select your challenge!");
            return false;

        }
        else if($("#category").val()=="Aparajay" && $("#disorder").val()=="Physically Challenged" && $("#phy_disorder").val()==""){
            
            $("#phy_disorder").val($("#phy_disorder").val());
            $("#phy_disorder").focus();
            Swal.fire("Please select your physical challenge!");
            return false;

        }
        else if($("#category").val()=="Aparajay" && $("#disorder").val()=="Emotionally Challenged" && $("#mental_disorder").val()==""){
            
            $("#mental_disorder").val($("#mental_disorder").val());
            $("#mental_disorder").focus();
            Swal.fire("Please select your mental challenge!");
            return false;

        }
        else if($("#category").val()=="Aparajay" && $("#disorder_detail").val()==""){
            $("#disorder_detail").val($("#disorder_detail").val());
            $("#disorder_detail").focus();
            Swal.fire("Please write a short note about your challenge!");
            
            return false;

        }
        else if($("#category").val()=="Aparajay" && $("#disorder_file").val()==""){
            $("#disorder_file").val($("#disorder_file").val());
            $("#disorder_file").focus();
            Swal.fire("Please select your challenge related attachment!");
            
            return false;

        }else if(!$("input[type=checkbox][name=term_condition]:checked").val()){
            $("#term_condition").val($("#term_condition").val());
            $("#term_condition").focus();
            Swal.fire("Please select term & condition!");
            
            return false;

        } 
        else{
            return true;
        }



    });
});
    



</script>




</body>

</html>
<!-- end document-->
