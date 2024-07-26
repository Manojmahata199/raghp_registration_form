<?php
require_once "config.php";


          $today_date=date('d-m-Y');


	  $sql="SELECT * from `student_data` ORDER BY `id` ASC";
	  $query=mysqli_query($conn,$sql);
	  $res=array();
	  while($resultarray=mysqli_fetch_array($query)){
              $res[]=$resultarray;
	  }


//       'Student Id', 'Form Submission(Date&Time)','Registration ID', 'Student IP Address',  'Location','Board Name','Student Category',
// 	  'Disorder','Physical Disorder Name','Mental Disorder Name','Disorder Description','Disorder Filename','First Name','Last Name','Hindi First Name',
// 'Hindi Last Name','Student Photo Filename','Is Hindi Name Correct','Correct Hindi Filename','Student Gender','DOB','Valid Email','Valid Mobile','Board Roll No','Admit Card Filename',
// 'School Name','School Address','Other School Name','Other School Address','School Medium','Class','Last Year Mark(1st term)','Last Year Mark(2nd term)',
// 'Last Year Mark(3rd term)','Current Year Mark(1st term)','Current Year Mark(2nd term)','Current Year Mark(Pre-Boards)','Class 9th Marksheet','Calss 11th Marksheet',
// 'Parent Name','Parent Mobile','Emergency Landline','Parent Email','Home Address','City','State','Pincode','Family Income','Facebook Handle','Instagram Handle',
// 'Source About RAGPP','Other Source','Regular Sanmarg Reader','Hawker Name','Hawker Telephone No','Participated In RAGP','Ragp Roll No','RAGP Hindi Marks','RAGPP Award In 10',
// 'Ankur','Ankur Activity In Words','Ankur Activity Filename','All Activity Filename','Yuva','Marksheet Filename','Board Total Marks','Board Hindi Mark','Hindi Mark Percent','Qualified','Verified','Hindi Grade','Hindi Teacher Name','Hindi Teacher Mobile','Essay File','Essay Video'



       // This is for get all result in table field for export
      
	   $html='<table style="text-align:center;">
	   <tr>
	            <td>Student Id</td>
	            <td>Form Submission(Date&Time)</td>
	            <td>Registration ID</td>
	            <td>Registration Roll Number</td>
	            <td>Student IP Address</td>
	            <td>Location</td>
	            <td>Board Name</td>
	            <td>Student Category</td>
	            <td>disorder</td> 
	            <td>phy_disorder_name</td> 
	            <td>mental_disorder_name</td> 
	            <td>disorder_detail</td> 
	            <td>disorder_file</td>
	            <td>Full Name</td>
	            
	            <td>Hindi Full Name</td>
	           

	            <td>Student Photo Filename</td>   
	            <td>Is Hindi Name Correct</td>
	            <td>Student Enter Hindi Name</td>
	            <td>Correct Hindi Filename</td>
	            <td>Student Gender</td>
	            <td>DOB</td>
	            <td>Valid Email</td>
	            <td>Valid Mobile</td>
	            <td>Board Roll No</td>
	            <td>Admit Card Filename</td>
	            <td>School Name</td>
	            <td>School Address</td>
	            <td>Other School Name</td>
	            <td>Other School Address</td>
	            <td>School Medium</td>
	            <td>Class</td>
	            <td>Last Year Mark(1st term)</td>
	            <td>Last Year Mark(2nd term)</td>
	            <td>Current Year Mark(1st term)</td>
	            <td>Current Year Mark(2nd term)</td>
	            <td>Current Year Mark(Pre-Boards)</td>
	            <td>Class 9th Marksheet</td>
	            <td>Calss 11th Marksheet</td>
	            <td>Parent Name</td>
	            <td>Parent Mobile</td>
	            <td>Emergency Landline</td>
	            <td>Parent Email</td>
	            <td>Home Address</td>
	            <td>City</td>
	            <td>State</td>
	            <td>Pincode</td>
	            <td>Family Income</td>
                   <td>Source About RAGPP</td>
                   <td>Other Source</td>
                   <td>Regular Sanmarg Reader</td>
                   <td>RAGPP Award In 10</td>
                   <td>Ankur</td>
                   <td>Ankur Activity In Words</td>
                   <td>Ankur Activity Filename</td>
                   <td>All Activity Filename</td>
                   <td>Marksheet Filename</td>
                   <td>Board Total Marks</td>
                   <td>Board Hindi Mark</td>
                   <td>Hindi Mark Percent</td>
                   <td>Hindi Teacher Name</td>
                   <td>Hindi Teacher Mobile</td>
                   <td>Term & Condition</td>
                  





 


	   </tr>';



  //   `id`, `form_date_time`, `reg_id`, `ip_address`, `reg_location`, `boardexam`,
  // `category`, `disorder`, `phy_disorder_name`, `mental_disorder_name`, `disorder_detail`, `disorder_file`,
  //  `fname`, `lname`, `hname`, `hlname`, `student_photo_file`, `hname_correct`, `hname_file`, `student_gender`, `student_dob`, `student_email`, `student_mobile`, `board_roll_no`, `admit_card_file`, `school_name`, 
  //  `school_address`, `other_school_name`, `other_school_address`, `school_medium`, `class`, `last_year_marks1`, `last_year_marks2`, `last_year_marks3`, `current_year_marks1`, `current_year_marks2`, 
  //  `current_year_preboards`, `marksheet_one`, `marksheet_eleven`, `parent_name`, `parent_mobile`, `emergency_landline`, `parent_email`, `home_address`, `city`, `state`, `pincode`, `family_income`, `facebook_handle`,
  //   `twitter_handle`, `ragaward_source`, `ragaward_source_other`, `sanmarg_reader`, `hawker_name`, `hawker_telephone`, `rag_pariksha_participated`, `rag_pariksha_rollno`, `rag_pariksha_marks`,`rag_participated_chk`, 
  //   `ankur`, `ankur_activity_textwork`, `ankur_activity_file`, `all_activity_file`, `yuva`, `marksheet_file`, `board_total_mark`, `board_hindi_mark`, `Board_hindi_mark_percent`, `qualified`, `verified`,`hindi_grade`,  `hnd_tech_name`, `hnd_tech_mob`, `essay_file`, `essay_video` FROM `student_data`

	           



	            foreach($res as $result) {

	            	if($result['student_photo_file']!=""){
	            	  $stu_phot_file_link='https://raghp.sanmarg.in/uploads/'.$result['id'].'/student-photo/'.$result['student_photo_file'].'';	
	            	}
	            	else{
	                $stu_phot_file_link='';
	            	}

	            	if($result['disorder_file']!=""){
	            	  $stu_disorder_file_link='https://raghp.sanmarg.in/uploads/'.$result['id'].'/disorder-img/'.$result['disorder_file'].'';	
	            	}
	            	else{
	                $stu_disorder_file_link='';
	            	}


	            	if($result['hname_file']!=""){
	            	  $stu_hname_file_link='https://raghp.sanmarg.in/uploads/'.$result['id'].'/hindi-name/'.$result['hname_file'].'';	
	            	}
	            	else{
	                $stu_hname_file_link='';
	            	}

	            	if($result['admit_card_file']!=""){
	            	  $stu_admit_card_file_link='https://raghp.sanmarg.in/uploads/'.$result['id'].'/admit-card/'.$result['admit_card_file'].'';	
	            	}
	            	else{
	                $stu_admit_card_file_link='';
	            	}

	            	if($result['marksheet_one']!=""){
	            	  $stu_marksheet_one_link='https://raghp.sanmarg.in/uploads/'.$result['id'].'/nine_marksheet/'.$result['marksheet_one'].'';	
	            	}
	            	else{
	                $stu_marksheet_one_link='';
	            	}

	            	if($result['marksheet_eleven']!=""){
	            	  $stu_marksheet_eleven_link='https://raghp.sanmarg.in/uploads/'.$result['id'].'/marksheet_eleven/'.$result['marksheet_eleven'].'';	
	            	}
	            	else{
	                $stu_marksheet_eleven_link='';
	            	}

	            	if($result['ankur_activity_file']!=""){
	            	  $stu_ankur_activity_file_link='https://raghp.sanmarg.in/uploads/'.$result['id'].'/ankur-activity/'.$result['ankur_activity_file'].'';	
	            	}
	            	else{
	                $stu_ankur_activity_file_link='';
	            	}

	            	if($result['all_activity_file']!=""){
	            	  $stu_all_activity_file_link='https://raghp.sanmarg.in/uploads/'.$result['id'].'/all-activity/'.$result['all_activity_file'].'';	
	            	}
	            	else{
	                $stu_all_activity_file_link='';
	            	}

	            	if($result['marksheet_file']!=""){
	            	  $stu_marksheet_file_link='https://raghp.sanmarg.in/uploads/'.$result['id'].'/marksheet_img/'.$result['marksheet_file'].'';	
	            	}
	            	else{
	                $stu_marksheet_file_link='';
	            	}


	            	if($result['custom_hindi_name']==""){

	                $hin_name=''.$result["hname"].' '.$result["hlname"].'';

	              }else{
	                
	                $hin_name=$result['custom_hindi_name'];

	              }

	            




	            	$html.='<tr>
	            	            
	            	            <td>'.$result['id'].'</td>
	            	            <td>'.$result['form_date_time'].'</td>
	            	            <td>'.$result['reg_id'].'</td>
	            	            <td>RAGHP-'.$result['boardexam']."-".substr("0000000{$result['reg_id']}", -7).'</td>
	            	            <td>'.$result['ip_address'].'</td>
	            	            <td>'.$result['reg_location'].'</td>
	            	            <td>'.$result['boardexam'].'</td>
	            	            <td>'.$result['category'].'</td>
	            	            <td>'.$result['disorder'].'</td> 
	            	            <td>'.$result['phy_disorder_name'].'</td> 
	            	            <td>'.$result['mental_disorder_name'].'</td> 
	            	            <td>'.$result['disorder_detail'].'</td> 
	            	            <td>'.$stu_disorder_file_link.'</td>
	            	            <td>'.$result['fname'].' '.$result['lname'].'</td>	            	     
	            	            <td>'.$hin_name.'</td>	            	            
	            	            <td>'.$stu_phot_file_link.'</td>
	            	            <td>'.$result['hname_correct'].'</td>
	            	            <td>'.$result['custom_hindi_name'].'</td>
	            	            <td>'.$stu_hname_file_link.'</td>
	            	            <td>'.$result['student_gender'].'</td>
	            	            <td>'.$result['student_dob'].'</td>
	            	            <td>'.$result['student_email'].'</td>
	            	            <td>'.$result['student_mobile'].'</td>
	            	            <td>'.$result['board_roll_no'].'</td>
	            	            <td>'.$stu_admit_card_file_link.'</td>
	            	            <td>'.$result['school_name'].'</td>
	            	            <td>'.$result['school_address'].'</td>
	            	            <td>'.$result['other_school_name'].'</td>
	            	            <td>'.$result['other_school_address'].'</td>
	            	            <td>'.$result['school_medium'].'</td>
	            	            <td>'.$result['class'].'</td>
	            	            <td>'.$result['last_year_marks1'].'</td>
	            	            <td>'.$result['last_year_marks2'].'</td>
	            	            <td>'.$result['current_year_marks1'].'</td>
	            	            <td>'.$result['current_year_marks2'].'</td>
	            	            <td>'.$result['current_year_preboards'].'</td>
	            	            <td>'.$stu_marksheet_one_link.'</td>
	            	            <td>'.$stu_marksheet_eleven_link.'</td>
	            	            <td>'.$result['parent_name'].'</td>
	            	            <td>'.$result['parent_mobile'].'</td>
	            	            <td>'.$result['emergency_landline'].'</td>
	            	            <td>'.$result['parent_email'].'</td>
	            	            <td>'.$result['home_address'].'</td>
	            	            <td>'.$result['city'].'</td>
	            	            <td>'.$result['state'].'</td>
	            	            <td>'.$result['pincode'].'</td>
	            	            <td>'.$result['family_income'].'</td>
                                 <td>'.$result['ragaward_source'].'</td>
                                 <td>'.$result['ragaward_source_other'].'</td>
                                 <td>'.$result['sanmarg_reader'].'</td>                                 
                                 <td>'.$result['rag_participated_chk'].'</td>
                                 <td>'.$result['ankur'].'</td>
                                 <td>'.$result['ankur_activity_textwork'].'</td>
                                 <td>'.$stu_ankur_activity_file_link.'</td>
                                 <td>'.$stu_all_activity_file_link.'</td>                               
                                 <td>'.$stu_marksheet_file_link.'</td>
                                 <td>'.$result['board_total_mark'].'</td>
                                 <td>'.$result['board_hindi_mark'].'</td>
                                 <td>'.$result['Board_hindi_mark_percent'].'</td>                                 
                                 <td>'.$result['hnd_tech_name'].'</td>
                                 <td>'.$result['hnd_tech_mob'].'</td>
                                 <td>'.$result['term_condition'].'</td>
                              

	            	       </tr>';
	            	           
	            	            
	            	            
	            	           
	            }


	            $html.='</table>';

	




	            header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
				header("Content-type:   application/x-msexcel; charset=utf-8");
				header("Content-Disposition: attachment; filename=RAGHP_REGISTRATION_DATA(".$today_date.").xls"); 
				header("Expires: 0");
				header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
				header("Cache-Control: private",false);
			
	            echo $html;




exit();

 ?>