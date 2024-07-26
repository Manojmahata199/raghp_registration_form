<?php
require_once "config.php";

//Export aparajay Complete Student Data 
if(isset($_POST["Export_aparajay"])){
      $today_date=date('d-M-Y');
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=RAGHP_REGISTRATION_DATA-SA-STUDENT('.$today_date.').csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Student Id', 'Form Submission(Date&Time)','Registration ID', 'Student IP Address',  'Location','Board Name','Student Category',
      'Disorder','Physical Disorder Name','Mental Disorder Name','Disorder Description','Disorder Filename','First Name','Last Name','Hindi First Name',
'Hindi Last Name','Student Photo Filename','Is Hindi Name Correct','Correct Hindi Filename','Student Gender','DOB','Valid Email','Valid Mobile','Board Roll No','Admit Card Filename',
'School Name','School Address','Other School Name','Other School Address','School Medium','Class','Last Year Mark(1st term)','Last Year Mark(2nd term)',
'Last Year Mark(3rd term)','Current Year Mark(1st term)','Current Year Mark(2nd term)','Current Year Mark(Pre-Boards)','Class 9th Marksheet','Calss 11th Marksheet',
'Parent Name','Parent Mobile','Emergency Landline','Parent Email','Home Address','City','State','Pincode','Family Income','Facebook Handle','Instagram Handle',
'Source About RAGPP','Other Source','Regular Sanmarg Reader','Hawker Name','Hawker Telephone No','Participated In RAGP','Ragp Roll No','RAGP Hindi Marks','RAGPP Award In 10',
'Ankur','Ankur Activity In Words','Ankur Activity Filename','All Activity Filename','Yuva','Marksheet Filename','Board Total Marks','Board Hindi Mark','Hindi Mark Percent','Qualified','Verified','Hindi Grade','Hindi Teacher Name','Hindi Teacher Mobile','Essay File','Essay Video'));  
      $query = "SELECT * from `aparajay_student_data` ORDER BY `id` ASC";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 


//Export Complete Student Data 
if(isset($_POST["Export"])){
      $today_date=date('d-M-Y');
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=RAGHP_REGISTRATION_DATA-GENERAL('.$today_date.').csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Student Id', 'Form Submission(Date&Time)','Registration ID', 'Student IP Address',  'Location','Board Name','Student Category',
	  'Disorder','Physical Disorder Name','Mental Disorder Name','Disorder Description','Disorder Filename','First Name','Last Name','Hindi First Name',
'Hindi Last Name','Student Photo Filename','Is Hindi Name Correct','Correct Hindi Filename','Student Gender','DOB','Valid Email','Valid Mobile','Board Roll No','Admit Card Filename',
'School Name','School Address','Other School Name','Other School Address','School Medium','Class','Last Year Mark(1st term)','Last Year Mark(2nd term)',
'Last Year Mark(3rd term)','Current Year Mark(1st term)','Current Year Mark(2nd term)','Current Year Mark(Pre-Boards)','Class 9th Marksheet','Calss 11th Marksheet',
'Parent Name','Parent Mobile','Emergency Landline','Parent Email','Home Address','City','State','Pincode','Family Income','Facebook Handle','Instagram Handle',
'Source About RAGPP','Other Source','Regular Sanmarg Reader','Hawker Name','Hawker Telephone No','Participated In RAGP','Ragp Roll No','RAGP Hindi Marks','RAGPP Award In 10',
'Ankur','Ankur Activity In Words','Ankur Activity Filename','All Activity Filename','Yuva','Marksheet Filename','Board Total Marks','Board Hindi Mark','Hindi Mark Percent','Qualified','Verified','Hindi Grade','Hindi Teacher Name','Hindi Teacher Mobile','Essay File','Essay Video'));  
      $query = "SELECT * from `student_data` ORDER BY `id` ASC";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 
 //Export Qualified Student Data 
if(isset($_POST["Export-Qualified"])){
     
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=qualified_student_data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Student Id', 'Form Submission(Date&Time)','Registration ID', 'Student IP Address',  'Location','Board Name','Student Category',
	  'Disorder','Physical Disorder Name','Mental Disorder Name','Disorder Description','Disorder Filename','First Name','Last Name','Hindi First Name',
'Hindi Last Name','Student Photo Filename','Is Hindi Name Correct','Correct Hindi Filename','Student Gender','DOB','Valid Email','Valid Mobile','Board Roll No','Admit Card Filename',
'School Name','School Address','Other School Name','Other School Address','School Medium','Class','Last Year Mark(1st term)','Last Year Mark(2nd term)',
'Last Year Mark(3rd term)','Current Year Mark(1st term)','Current Year Mark(2nd term)','Current Year Mark(Pre-Boards)','Class 9th Marksheet','Calss 11th Marksheet',
'Parent Name','Parent Mobile','Emergency Landline','Parent Email','Home Address','City','State','Pincode','Family Income','Facebook Handle','Instagram Handle',
'Source About RAGPP','Other Source','Regular Sanmarg Reader','Hawker Name','Hawker Telephone No','Participated In RAGP','Ragp Roll No','RAGP Hindi Marks','RAGPP Award In 10',
'Ankur','Ankur Activity In Words','Ankur Activity Filename','All Activity Filename','Yuva','Marksheet Filename','Board Total Marks','Board Hindi Mark','Hindi Mark Percent','Qualified','Verified','Hindi Grade','Hindi Teacher Name','Hindi Teacher Mobile','Essay File'));  
      $query = "SELECT * from `student_data` WHERE `qualified`='yes' ORDER BY `id` ASC";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 

 //Export Disqualified Student Data 
if(isset($_POST["Export-Disqualified"])){
     
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=disqualified_student_data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Student Id', 'Form Submission(Date&Time)',  'Registration ID','Student IP Address', 'Location','Board Name','Student Category',
	  'Disorder','Physical Disorder Name','Mental Disorder Name','Disorder Description','Disorder Filename','First Name','Last Name','Hindi First Name',
'Hindi Last Name','Student Photo Filename','Is Hindi Name Correct','Correct Hindi Filename','Student Gender','DOB','Valid Email','Valid Mobile','Board Roll No','Admit Card Filename',
'School Name','School Address','Other School Name','Other School Address','School Medium','Class','Last Year Mark(1st term)','Last Year Mark(2nd term)',
'Last Year Mark(3rd term)','Current Year Mark(1st term)','Current Year Mark(2nd term)','Current Year Mark(Pre-Boards)','Class 9th Marksheet','Calss 11th Marksheet',
'Parent Name','Parent Mobile','Emergency Landline','Parent Email','Home Address','City','State','Pincode','Family Income','Facebook Handle','Instagram Handle',
'Source About RAGPP','Other Source','Regular Sanmarg Reader','Hawker Name','Hawker Telephone No','Participated In RAGP','Ragp Roll No','RAGP Hindi Marks','RAGPP Award In 10',
'Ankur','Ankur Activity In Words','Ankur Activity Filename','All Activity Filename','Yuva','Marksheet Filename','Board Total Marks','Board Hindi Mark','Hindi Mark Percent','Qualified','Verified','Hindi Grade','Hindi Teacher Name','Hindi Teacher Mobile','Essay File'));  
      $query = "SELECT * from `student_data` WHERE `qualified`='no' ORDER BY `id` ASC";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 
//db connection
function getdb(){
	$servername = "localhost";
	$username = "##########";
	$password = "##########";	
	$dbName = "##########";

try {
   
    $conn = mysqli_connect($servername, $username, $password, $dbName);
	mysqli_set_charset($conn,'utf8');
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}   
	  
// get all Student Records
	    function get_all_records(){
		$conn = getdb();	
        $Sql = "SELECT * FROM `student_data` ORDER BY `id` ASC";
        $result = mysqli_query($conn, $Sql);  
        if (mysqli_num_rows($result) > 0) {
         echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                 <thead><tr>  
							  <th>RAG ROLL NO</th>
                              <th>English Name</th>
                              <th>Hindi Name</th>
							  <th>Student Email</th>
							  <th>Student Mobile</th>
							  <th>Standard</th>
							  <th>School Name</th>
                              <th>Board</th>                              
							  <th>Board Hindi Marks</th>
							  <th>Board Total Marks</th>
							  <th>Operation</th>
                            </tr></thead><tbody>";
							$i=1;
         while($row = mysqli_fetch_assoc($result)) {
            if($row['school_name']=="others"){
                  $school_name=$row['other_school_name'];
            }else{
             
               $school_name=$row['school_name'];
             }

            if($row['custom_hindi_name']==""){

                $hin_name=''.$row["hname"].' '.$row["hlname"].'';

            }else{
                
                $hin_name=$row['custom_hindi_name'];

            }
             ?>
             
             
             <tr>
                       
                       <td>RAGHP-<?php echo  $row['boardexam']."-".substr("0000000{$row['reg_id']}", -7); ?></td>
                       <td><?php echo $row['fname']." ".$row['lname']; ?></td>
                       <td><?php echo $hin_name; ?></td>
                       <td><?php echo $row['student_email']; ?></td>
                       <td><?php echo $row['student_mobile']; ?></td>
                       <td><?php echo $row['class']; ?></td>
                       <td><?php echo $school_name; ?></td>
                       <td><?php echo $row['boardexam']; ?></td>
                       <td><?php echo $row['board_hindi_mark']; ?></td>
                       <td><?php echo $row['board_total_mark']; ?></td>  
                       <th class="d-flex" style="display:flex;">
                           
                           
                           <a class='btn btn-success text-dark text-center mx-1' style="margin:2px;" href='../uploads/file<?php echo $row["id"]; ?>.pdf'>Pdf</a>
                        <?php if($row['marksheet_file']!=""){ ?>
                           <a class='btn btn-success text-dark text-center mx-1' style="margin:2px;" href='../uploads/<?php echo $row["id"]; ?>/marksheet_img/<?php echo $row['marksheet_file']; ?>'>Marksheet</a>
                           
                        <?php } ?>
                        <?php if($row['essay_file']!=""){ ?>
                         <a class='btn btn-success text-dark text-center mx-1' style="margin:2px;" href='../uploads/essay_folder/<?php echo $row["id"]; ?>/essay_file/<?php echo $row['essay_file']; ?>'>Essay File</a><?php } ?>
                         <?php if($row['essay_video']!=""){ ?>
                         <a class='btn btn-success text-dark text-center mx-1' style="margin:2px;" href='../uploads/essay_folder/<?php echo $row["id"]; ?>/essay_video/<?php echo $row['essay_video']; ?>'>Essay Video</a><?php } ?>
                            
                        </th>
                       </tr>
                       
                       
                       
                 
        <?php }
        
         echo "</tbody></table></div>";
         
    } else {
         echo "you have no records";
    }
    }


    // get all aparajay Student Records
        function get_all_aparajay_records(){
        $conn = getdb();    
        $Sql = "SELECT * FROM `aparajay_student_data` ORDER BY `id` ASC";
        $result = mysqli_query($conn, $Sql);  
        if (mysqli_num_rows($result) > 0) {
         echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                 <thead><tr>  <th>Sr.No</th>
                              <th>RAG ROLL NO</th>
                              <th>English Name</th>
                              <th>Hindi Name</th>
                              <th>Student Email</th>
                              <th>Student Mobile</th>
                              <th>Standard</th>
                              <th>School Name</th>
                              <th>Board</th>                              
                              <th>Board Hindi Marks</th>
                              <th>Board Total Marks</th>
                              <th>Operation</th>
                            </tr></thead><tbody>";
                            $i=1;
         while($row = mysqli_fetch_assoc($result)) {
             if($row['school_name']=="others"){
                  $school_name=$row['other_school_name'];
            }else{
             
               $school_name=$row['school_name'];
             } ?>
            <tr>
                       <td><?php echo $row['reg_id']; ?></td>
                       <td>SA-<?php echo  $row['boardexam']."-".substr("0000000{$row['reg_id']}", -7); ?></td>
                       <td><?php echo $row['fname']." ".$row['lname']; ?></td>
                       <td><?php echo $row['hname']." ".$row['hlname']; ?></td>
                       <td><?php echo $row['student_email']; ?></td>
                       <td><?php echo $row['student_mobile']; ?></td>
                       <td><?php echo $row['class']; ?></td>
                       <td><?php echo $school_name; ?></td>
                       <td><?php echo $row['boardexam']; ?></td>
                       <td><?php echo $row['board_hindi_mark']; ?></td>
                       <td><?php echo $row['board_total_mark']; ?></td>  
                       <th class="d-flex" style="display:flex;">
                         <a class='btn btn-success text-dark text-center mx-1' style="margin:2px;" href='../aparajay_uploads/file<?php echo $row["id"]; ?>.pdf'>Pdf</a>
                        <?php if($row['marksheet_file']!=""){ ?>
                         <a class='btn btn-success text-dark text-center mx-1' style="margin:2px;" href='../aparajay_uploads/<?php echo $row["id"]; ?>/marksheet_img/<?php echo $row['marksheet_file']; ?>'>Marksheet</a><?php } ?>
                        
                         <?php if($row['essay_file']!=""){ ?>
                         <a class='btn btn-success text-dark text-center mx-1' style="margin:2px;" href='../aparajay_uploads/essay_folder/<?php echo $row["id"]; ?>/essay_file/<?php echo $row['essay_file']; ?>'>Essay File</a><?php } ?>
                         <?php if($row['essay_video']!=""){ ?>
                         <a class='btn btn-success text-dark text-center mx-1' style="margin:2px;" href='../aparajay_uploads/essay_folder/<?php echo $row["id"]; ?>/essay_video/<?php echo $row['essay_video']; ?>'>Essay Video</a><?php } ?>
                         
                        </th>
                       </tr>        
        <?php }
        
         echo "</tbody></table></div>";
         
    } else {
         echo "you have no records";
    }
    }
// get all Qualified Student Records
function get_all_qualified_records(){
		$conn = getdb();	
        $Sql = "SELECT * FROM `student_data` WHERE `qualified`='yes'";
        $result = mysqli_query($conn, $Sql);  
        if (mysqli_num_rows($result) > 0) {
         echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                 <thead><tr>
							  <th>Sr.No</th> 	
							  <th>RAG ROLL NO</th>
                              <th>English Name</th>
                              <th>Hindi Name</th>
							  <th>Student Email</th>
							  <th>Standard</th>
							  <th>School Name</th>
                              <th>Board</th>                              
							  <th>Board Hindi Marks</th>
							  <th>Board Total Marks</th>
                            </tr></thead><tbody>";
							$i=1;
         while($row = mysqli_fetch_assoc($result)) {
             if($row['school_name']=="others"){
                  $school_name=$row['other_school_name'];
            }else{
             
               $school_name=$row['school_name'];
             }
             echo "<tr>
					   <td>".$i++."</td>
					   <td>" . $row['boardexam']."-".substr($row['class'], -2)."-".substr("0000000{$row['id']}", -7)."</td>
                       <td>" . $row['fname']." ".$row['lname']."</td>
					   <td>" . $row['hname']." ".$row['hlname']."</td>
					   <td>" . $row['student_email']."</td>
					   <td>" . $row['class']."</td>
					   <td>" . $school_name."</td>
                       <td>" . $row['boardexam']."</td>
					   <td>" . $row['board_hindi_mark']."</td>
					   <td>" . $row['board_total_mark']."</td>                       
                       </tr>";        
         }
        
         echo "</tbody></table></div>";
         
    } else {
         echo "you have no records";
    }
    }
	// get all Qualified Student Records
function get_all_disqualified_records(){
		$conn = getdb();	
        $Sql = "SELECT * FROM `student_data` WHERE `qualified`='no'";
        $result = mysqli_query($conn, $Sql);  
        if (mysqli_num_rows($result) > 0) {
         echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                 <thead><tr>
							  <th>Sr.No</th>
							  <th>RAG ROLL NO</th>
                              <th>English Name</th>
                              <th>Hindi Name</th>
							  <th>Student Email</th>
							  <th>Standard</th>
							  <th>School Name</th>
                              <th>Board</th>                              
							  <th>Board Hindi Marks</th>
							  <th>Board Total Marks</th>
                            </tr></thead><tbody>";
							$i=1;
         while($row = mysqli_fetch_assoc($result)) {
             if($row['school_name']=="others"){
                  $school_name=$row['other_school_name'];
            }else{
             
               $school_name=$row['school_name'];
             }
             echo "<tr>
					   <td>".$i++."</td>
					   <td>" . $row['boardexam']."-".substr($row['class'], -2)."-".substr("0000000{$row['id']}", -7)."</td>
                       <td>" . $row['fname']." ".$row['lname']."</td>
					   <td>" . $row['hname']." ".$row['hlname']."</td>
					   <td>" . $row['student_email']."</td>
					   <td>" . $row['class']."</td>
					   <td>" . $school_name."</td>
                       <td>" . $row['boardexam']."</td>
					   <td>" . $row['board_hindi_mark']."</td>
					   <td>" . $row['board_total_mark']."</td>
                       
                       </tr>";        
         }
        
         echo "</tbody></table></div>";
         
    } else {
         echo "you have no records";
    }
    }
// get all School Records
function get_all_schools_records(){
		$conn = getdb();	
        $Sql = "SELECT * FROM `school_list`";
        $result = mysqli_query($conn, $Sql);  
        if (mysqli_num_rows($result) > 0) {
         echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                 <thead><tr><th>id</th>
                              <th>School Name</th>
                              <th>School Address</th>
						</tr></thead><tbody>";
         while($row = mysqli_fetch_assoc($result)) {
             if($row['school_name']=="others"){
                  $school_name=$row['other_school_name'];
            }else{
             
               $school_name=$row['school_name'];
             }
             echo   "<tr><td>" . $row['id']."</td>
                        <td>" . $school_name."</td>
					    <td>" . $row['school_address']."</td>
                    </tr>";        
         }
        
         echo "</tbody></table></div>";
         
    } else {
         echo "you have no records";
    }
    }	


	  
     ?>