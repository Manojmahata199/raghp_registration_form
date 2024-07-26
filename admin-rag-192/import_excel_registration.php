<?php
ob_start();
session_start();

include "config.php";
include "config.php";

require('library_php_excel/Classes/PHPExcel.php');
require('library_php_excel/Classes/PHPExcel/IOFactory.php');









if(isset($_POST['excel_submit'])) {


    if(isset($_FILES['excel_file']['name']) && $_FILES['excel_file']['name'] != "") {
        $allowedExtensions = array("xls","xlsx");
        $ext = pathinfo($_FILES['excel_file']['name'], PATHINFO_EXTENSION);



        
    
        if(in_array($ext, $allowedExtensions)) {
        
           $d=dirname(__FILE__)."/upload/file/";

           $file = $d.$_FILES['excel_file']['name'];
           $isUploaded = copy($_FILES['excel_file']['tmp_name'], $file);

         

            if($isUploaded) {
          
                    $objPHPExcel = PHPExcel_IOFactory::load($file);
                    
                    $sheet = $objPHPExcel->getSheet(0);
                    $total_rows = $sheet->getHighestRow();
                    $highestColumn      = $sheet->getHighestColumn(); 
                    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); 

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



                          //    loop over the rows
                    for ($row = 1; $row <= $total_rows; ++ $row) {
                        for ($col = 0; $col < $highestColumnIndex; ++ $col) {
                            $cell = $sheet->getCellByColumnAndRow($col, $row);
                            $val = $cell->getValue();
                            $records[$row][$col] = $val;
                        }
                    }

                    // to store records in a array for each record 

                    foreach($records as $row){



                       

                        // print_r($row);

                    $registrationId=getRegistrationId($conn);

                    $location=$row[0];
                    $boardexam=$row[1];
                    $stucategory=$row[2];
                    $fname=$row[3];
                    $lname=$row[4];
                    $studentPhotoFileName=$row[5];
                    $stugender=$row[6];
                    $studob=$row[7];
                    $stuemail=$row[8];
                    $stumobile=$row[9];
                    $board_roll_no_stu_validate=$row[10];
                    $admitCardFileName=$row[11];
                    $schoolname=$row[12];
                    $schooladdress=$row[13];
                    $schoolmedium=$row[14];
                    $class=$row[15];
                    $last_year_marks1=$row[16];
                    $last_year_marks2=$row[17];
                    $current_year_marks1=$row[18];
                    $current_year_marks2=$row[19];
                    $current_year_preboards=$row[20];
                    $parentname=$row[21];
                    $parentmobile=$row[22];
                    $emergencyno=$row[23];
                    $parentemail=$row[24];
                    $address=$row[25];
                    $city=$row[26];
                    $state=$row[27];
                    $pincode=$row[28];
                    $family_annual_income=$row[29];
                    $ragaward_source=$row[30];
                    $sanmarg_reader=$row[31];
                    $rag_participated_chk=$row[32];
                    $ankur_option=$row[33];
                    $hnd_tech_name=$row[34];
                    $hnd_tech_mob=$row[35];
                   
                     // $card_status=$row[30];



                    $sql="INSERT INTO `student_data`(`form_date_time`, `reg_id`, `ip_address`, `reg_location`, `boardexam`,
                                                     `category`, `disorder`, `phy_disorder_name`, `mental_disorder_name`, `disorder_detail`,
                                                      `disorder_file`, `fname`, `lname`, `hname`, `hlname`,
                                                       `student_photo_file`, `hname_correct`, `hname_file`, `student_gender`, `student_dob`,
                                                        `student_email`, `student_mobile`, `board_roll_no`, `admit_card_file`, `school_name`,
                                                         `school_address`, `other_school_name`, `other_school_address`, `school_medium`, `class`,
                                                          `last_year_marks1`, `last_year_marks2`, `last_year_marks3`, `current_year_marks1`, `current_year_marks2`,
                                                           `current_year_preboards`, `parent_name`, `parent_mobile`, `emergency_landline`, `parent_email`,
                                                            `home_address`, `city`, `state`, `pincode`, `family_income`,
                                                             `facebook_handle`, `twitter_handle`, `ragaward_source`, `ragaward_source_other`, `sanmarg_reader`,
                                                              `hawker_name`, `hawker_telephone`, `rag_pariksha_participated`, `rag_pariksha_rollno`, `rag_pariksha_marks`,
                                                               `rag_participated_chk`, `ankur`, `ankur_activity_textwork`, `ankur_activity_file`, `all_activity_file`,
                                                                `yuva`,`marksheet_file`, `board_total_mark`,`board_hindi_mark`, `Board_hindi_mark_percent`,
                                                                 `qualified`, `verified`, `hindi_grade`,`hnd_tech_name`, `hnd_tech_mob`)


                     VALUES ('00-00-0000 00:00','$registrationId','0000','$location','$boardexam',
                        '$stucategory','NIL','NIL','NIL','NIL',
                        'NIL','$fname','$lname','NIL','NIL',
                        '$studentPhotoFileName','NIL','NIL','$stugender','$studob',
                        '$stuemail','$stumobile','$board_roll_no_stu_validate','$admitCardFileName','$schoolname',
                        '$schooladdress','NIL','NIL','$schoolmedium','$class',
                        '$last_year_marks1','$last_year_marks2','0','$current_year_marks1','$current_year_marks2',
                        '$current_year_preboards','$parentname','$parentmobile','$emergencyno','$parentemail',
                        '$address','$city','$state','$pincode','$family_annual_income',
                        'NIL','NIL','$ragaward_source','NIL','$sanmarg_reader',
                        'NIL','NIL','NIL','NIL','NIL',
                        '$rag_participated_chk','$ankur_option','NIL','NIL','NIL',
                        'NIL','','','','',
                        'no','no','NIL','$hnd_tech_name','$hnd_tech_mob')";





                 // $sql="INSERT INTO `student_data`(`reg_id`,`reg_location`, `boardexam`, `category`,`fname`, `lname`,`student_photo_file`,`student_gender`, `student_dob`, `student_email`, `student_mobile`, `board_roll_no`, `admit_card_file`, `school_name`, `school_address`,`school_medium`, `class`, `last_year_marks1`, `last_year_marks2`, `last_year_marks3`, `current_year_marks1`, `current_year_marks2`, `current_year_preboards`, `parent_name`, `parent_mobile`, `emergency_landline`, `parent_email`, `home_address`, `city`, `state`, `pincode`, `family_income`,
                 //  `ragaward_source`,`sanmarg_reader`,`rag_participated_chk`, `ankur`) 


                 //    VALUES ('$registrationId','$location','$boardexam','$stucategory','$fname','$lname','$studentPhotoFileName',
                 //           '$stugender','$studob','$stuemail','$stumobile','$board_roll_no_stu_validate','$admitCardFileName','$schoolname','$schooladdress',
                 //                '$schoolmedium','$class','$last_year_marks1','$last_year_marks2','$current_year_marks1','$current_year_marks2','$current_year_preboards','$parentname','$parentmobile',
                 //                '$emergencyno',
                 //               '$parentemail','$address','$city','$state','$pincode','$family_annual_income','$ragaward_source','$sanmarg_reader','$rag_participated_chk','$ankur_option')";
                       
                        
                        // // // Insert into database
                        // $sql = "INSERT INTO `student_data`(`reg_location`, `boardexam`, `category`,`fname`, `lname`, `student_photo_file`,
                        //  `student_gender`,`student_dob`,`student_email`, `student_mobile`, `board_roll_no`,`admit_card_file`,`school_name`,`school_address`,
                        //  `school_medium`, `class`, `last_year_marks1`,`last_year_marks2`,`current_year_marks1`, `current_year_marks2`, `current_year_preboards`, 
                        //  `parent_name`, `parent_mobile`,`emergency_landline`,`parent_email`, `home_address`,`city`, `state`, `pincode`, `family_income`,`ragaward_source`,
                        //   `sanmarg_reader`,`rag_participated_chk`, `ankur`,`hnd_tech_name`,`hnd_tech_mob`)


                        // VALUES ('$location', '$boardexam', '$stucategory','no','no','no','no','no','$fname','$lname','$studentPhotoFileName','$stugender','$studob','$stuemail','$stumobile',
                        //         '$board_roll_no_stu_validate','$admitCardFileName','$schoolname','$schooladdress','$schoolmedium','$class','$last_year_marks1',
                        //         '$last_year_marks2','$current_year_marks1','$current_year_marks2','$current_year_preboards','$parentname','$parentmobile','$emergencyno',
                        //        '$parentemail','$address','$city','$state','$pincode','$family_annual_income','$ragaward_source','$sanmarg_reader','$rag_participated_chk',
                        //        '$ankur_option','$hnd_tech_name','$hnd_tech_mob')";  

                   
                        
                    
                        
                        $query=mysqli_query($conn,$sql);
                        $_SESSION['msg']="Data Imported Successfully";  
                       
                         
    
                    }
                    header('Location:data_import_registration.php');
          
            } else {
                echo '<span class="msg">File not uploaded!</span>';
                $_SESSION['msg2']="Data Import Unsuccessfull1";
                 header('Location:data_import_registration.php');
  
                }

        } else {
            echo '<span class="msg">Please upload excel sheet.</span>';
            $_SESSION['msg2']="Data Import Unsuccessfull2";
             header('Location:data_import_registration.php');
  
        }
    } else {
        echo '<span class="msg">Please upload excel file.</span>';
        $_SESSION['msg2']="Data Import Unsuccessfull3";
         header('Location:data_import_registration.php');
  
    }
}
ob_end_flush();
?>