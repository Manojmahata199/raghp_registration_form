<?php						
include('common-header.php');
if (isset($_SESSION['username'])){
// Turn off error reporting
error_reporting(0);	
//define form variables
require_once "config.php";
//include('processtoverify.php');
$idErr=$validErr=$qualifyErr="";
$result=$stuid=$row="";
//filter student details
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['form1submission'])) {
if (!empty($_POST['submit-filter'])) {
   if (empty($_POST["stu-id"])) {
    $idErr = "Student Id is required";
  } else {
    $stuid =test_input($_POST["stu-id"]);
	    	
  }
}
}
?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
						<h2>Specialy Abbled Student Record</h2>
					</div>
                </div><!-- row -->
					<form name="filterlist" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					    <p>Enter Student ID To View Student Record</p>
					       Student Id : <input type="text" id="stu-id" name="stu-id">
						<span class="error">*<?php echo $idErr?></span>
					    </br>
						<input type="hidden" name="form1submission" value="yes" >
					    <input id="submit-filter" class="btn btn-primary button-loading" type="submit" name="submit-filter" value="Submit">
					</form>		
					<?php
							
							if(isset($_POST['submit-filter'])){								
							$sql = "SELECT * FROM `aparajay_student_data` WHERE `reg_id`='$stuid'";
							if($result = mysqli_query($conn, $sql)){
								if(mysqli_num_rows($result) > 0){
									while($row = mysqli_fetch_array($result)){
					?>
						<h2>Specialy Abbled Student Details</h2>
						<table class='table table-responsive table-striped w-auto table-bordered'>
						<thead>
						<tr>
						<th>Student Data Column-1</th>
						<th>Student Data Column-2</th>
						<th>Student Data Column-3</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td><b>Registration Id :</b><?php echo $row['reg_id']?></td>
							<td><b>Form Submission Date & Time :</b><?php echo date("d-m-Y H:i:s", strtotime($row['form_date_time']));?></td>
							<td><b>Student IP address :</b><?php echo $row['ip_address']?></td>
						</tr>
						<tr>

							<td><b>Specially Abled Student :</b><?php if($row['category']=='Aparajay'){
								   echo 'Yes'; 
								 }else{
                   echo 'No';
								 }?>
							</td>
							<td><b>Disorder Type :</b><?php echo $row['disorder']; ?></td>
							<td><b>Disorder Name :</b><?php if($row['phy_disorder_name']!=""){
								echo $row['phy_disorder_name'];
							}else{
								echo $row['mental_disorder_name'];
							} ?>
						</td>

						</tr>

						<tr>
					   <td><b>Disorder File :</b><a href="../aparajay_uploads/<?php echo $row['id']?>/disorder-img/<?php echo $row['disorder_file']?>" target="_blank">Click to Open</a></td>
						 <td colspan="2"><b>Disorder Details :</b><?php echo $row['disorder_detail']?></td>
						
						</tr>


						<tr>
					   <td><b>Student Full Details :</b><a href="../aparajay_uploads/<?php echo 'file'.$row['id'].'.pdf';?>" target="_blank">Click to Open</a></td>
						 <td><b>Registration Location :</b><?php echo $row['reg_location']?></td>
						 <td><b>Board :</b><?php echo $row['boardexam']?></td>
						</tr>
					
						<tr>
						<td><b>Student Name :</b><?php echo $row['fname']." ".$row['lname']?></td>
						<td><b>Hindi Name :</b><?php echo $row['hname']." ".$row['hlname']?></td>
						<td><b>Is Hindi Name Correct :</b><?php echo $row['hname_correct']?></td>
						</tr>
						<tr>
						<td><b>Correct Hindi FileName :</b><?php echo $row['hname_file']." ";?>

              <?php if($row['hname_file']!=""){ ?>

                  <a href="../aparajay_uploads/<?php echo $row['id']?>/hindi-name/<?php echo $row['hname_file']?>" target="_blank">Click to Open</a>
						<?php }else{ ?>

                 <a href="#">No File Uploaded</a>

					  <?php 	} ?>






						</td>
						<td><b>Student Photo FileName :</b><?php echo $row['student_photo_file']." ";?>




						 <?php if($row['student_photo_file']!=""){ ?>

                   <a href="../aparajay_uploads/<?php echo $row['id']?>/student-photo/<?php echo $row['student_photo_file']?>" target="_blank">Click to Open</a>
						<?php }else{ ?>

                 <a href="#">No File Uploaded</a>

					  <?php 	} ?>




            </td>
						<td><b>Student Gender :</b><?php echo $row['student_gender']?></td>
						</tr>
						<tr>						
						<td><b>Student DOB :</b><?php echo $row['student_dob'];?></td>
						<td><b>Student Email :</b><span class="email-font" style="text-transform: lowercase;"><?php echo $row['student_email']?></span></td>
						<td><b>Student Mobile No :</b><?php echo $row['student_mobile']?></td>
						</tr>
						<tr>
						<td><b>Board Roll No :</b><?php echo $row['board_roll_no']?></td>
						<td><b>Admit Card File Name :</b><?php echo $row['admit_card_file']." ";?>


						 <?php if($row['admit_card_file']!=""){ ?>

                   <a href="../aparajay_uploads/<?php echo $row['id']?>/admit-card/<?php echo $row['admit_card_file']?>" target="_blank">Click to Open</a>
						<?php }else{ ?>

                 <a href="#">No File Uploaded</a>

					  <?php 	} ?>

            </td>
						<td><b>School Name :</b><?php echo $row['school_name']?></td>
						</tr>
						<tr>
						<td><b>School Address :</b><?php echo $row['school_address']?></td>
						<td><b>Other School Name :</b><?php echo $row['other_school_name']?></td>
						<td><b>Other School Address :</b><?php echo $row['other_school_address']?></td>
						</tr>
						<tr>
						<td><b>School Medium :</b><?php echo $row['school_medium']?></td>
						<td><b>Class :</b><?php echo $row['class']?></td>
						<td><b>Last Year 1st Term Marks :</b><?php echo $row['last_year_marks1']?></td>
						</tr>
						<tr>
						<td><b>Last Year 2nd Term Marks :</b><?php echo $row['last_year_marks2']?></td>
				
						<td><b>Current Year 1st Term Marks :</b><?php echo $row['current_year_marks1']?></td>
							<td><b>Current Year 2nd Term Marks :</b><?php echo $row['current_year_marks2']?></td>
						</tr>
						<tr>
					
						<td><b>Current Year Pre-Board Marks :</b><?php echo $row['current_year_preboards']?></td>
						<td><b>Hindi Teacher Name :</b><?php echo $row['hnd_tech_name']?></td>
					   <td><b>Class 9th Marksheet :</b><?php echo $row['hnd_tech_mob']?></td>
						</tr>
						<tr>
						<td><b>Hindi Teacher Phone No :</b><?php echo $row['hnd_tech_mob']?></td>
						<td><b>Parent Name :</b><?php echo $row['parent_name']?></td>
						<td><b>Parent Mobile :</b><?php echo $row['parent_mobile']?></td>
						

						
						</tr>
						<tr>
						<td><b>Parent Email :</b><span class="email-font" style="text-transform: lowercase;"><?php echo $row['parent_email']?></span></td>
						<td><b>Home Address :</b><?php echo $row['home_address']?></td>
						<td><b>City :</b><?php echo $row['city']?></td>
					
						</tr>
						<tr>
						<td><b>State :</b><?php echo $row['state']?></td>
						<td><b>Pincode :</b><?php echo $row['pincode']?></td>
						<td><b>Family Income :</b><?php echo $row['family_income']?></td>
					
						</tr>
						
						<tr>
						
						<td><b>RAGPP Source :</b><?php echo $row['ragaward_source']?></td>
						<td><b>RAGPP Other Source :</b><?php echo $row['ragaward_source_other']?></td>
						 <td><b>Extra Curricular Reward:</b><?php echo $row['ankur']?> </td>
						
						</tr>
						<tr>
						
						
						<td><b>Reward Details :</b><?php echo $row['ankur_activity_textwork']?></td>
						<td><b>Reward File Name :</b><?php echo$row['ankur_activity_file']." ";?>



						 <?php if($row['ankur_activity_file']!=""){ ?>

                   <a href="../aparajay_uploads/<?php echo $row['id']?>/ankur-activity/<?php echo $row['ankur_activity_file']?>" target="_blank">Click to Open</a>
						<?php }else{ ?>

                 <a href="#">No File Uploaded</a>

					  <?php 	} ?>





					  </td>
					  <td><b>RAGPP Award In Class 10 :</b><?php echo $row['rag_participated_chk']?></td>
						</tr>
						<tr>							
					  	<td><b>Board Total Marks :</b><?php echo $row['board_total_mark']?></td>;
						  <td><b>Board Hindi Marks :</b><?php echo $row['board_hindi_mark']?></td>
					  	<td><b>Hindi Mark Percentage :</b><?php echo $row['Board_hindi_mark_percent']?>%</td>
						</tr>
						<tr>							
					
						<td><b>Marksheet FileName :</b><?php echo $row['marksheet_file']." ";?>



						 <?php if($row['marksheet_file']!=""){ ?>

                   <a href="../aparajay_uploads/<?php echo $row['id']?>/marksheet_img/<?php echo $row['marksheet_file']?>" target="_blank">Click to Open</a>
						<?php }else{ ?>

                 <a href="#">No File Uploaded</a>

					  <?php 	} ?>





					  </td>
						<td><b>Student Above Details Verified :</b><?php echo $row['verified']?> </td>
						<td><b>Is Student Qualified :</b><?php echo $row['qualified']?></td>
						
						</tr>
							<tr>							
					
						<td><b>Essay FileName :</b><?php echo $row['essay_file']." ";?>



						 <?php if($row['essay_file']!=""){ ?>

                   <a href="../aparajay_uploads/essay_folder/<?php echo $row['id']?>/<?php echo $row['essay_file']?>" target="_blank">Click to Open</a>
						<?php }else{ ?>

                 <a href="#">No File Uploaded</a>

					  <?php 	} ?>

					  </td>
						<td>
							<b>Essay Video :</b><?php echo $row['essay_video']." ";?>



						 <?php if($row['essay_video']!=""){ ?>

                   <a href="../aparajay_uploads/essay_folder/<?php echo $row['id']; ?>/essay_video/<?php echo $row['essay_video']; ?>" target="_blank">Click to Open</a>
						<?php }else{ ?>

                 <a href="#">No File Uploaded</a>

					  <?php 	} ?>

						</td>
						<td>

            <?php if($row['marksheet_one']!=""){ ?>
							<b>Class 9th Marksheet:</b><?php echo $row['marksheet_one']." ";?>

                  <a href="../aparajay_uploads/<?php echo $row['id']?>/nine_marksheet/<?php echo $row['marksheet_one']; ?>" target="_blank">Click to Open</a>
						<?php }else if($row['marksheet_eleven']!=""){ ?>


                  <b>Class 11th Marksheet:</b><?php echo $row['marksheet_eleven']." ";?>
                  <a href="../aparajay_uploads/<?php echo $row['id']?>/marksheet_eleven/<?php echo $row['marksheet_eleven']; ?>" target="_blank">Click to Open</a>


						<?php }else{ ?>
             <b>9th/11th Marksheet:</b>
                  <a href="#">No File Uploaded</a>

					  <?php 	} ?>

						</td>
						
						</tr>
						
						
						</tbody>
						</table>						
						<!-- <button type="button" id="verifystu-button" class="btn btn-success" value="<?php// echo $row['id']?>">Verify Student</button>
						<button type="button" id="noverifystu-button" class="btn btn-danger" value="<?php// echo $row['id']?>">Not Valid Student</button> -->
						<p></p>
						<div id="div1" class="alert"></div>
						<?php
						}
						// Close result set
						mysqli_free_result($result);								
					    }                         					
						else{
							echo "No records matching your query were found.Please try again";
						}
						}
						}
						// Close connection
						mysqli_close($conn); 									
						?>
						
				
</div><!-- page inner-->
</div><!-- page wrapper-->
<?php  
include('common-footer.php');
}
else{
//Redirect user to admin page
header("location: index.php");
}	
?>
<script>
$( document ).ready(function() {
	
$("#verifystu-button").click(function(){
	var vstuid=$(this).val();
  $.ajax({url: "ajax/ajaxverifystudent.php?vstuid="+vstuid,
    success: function(result){
	location.reload();	
    $("#div1").html(result);
  }});
});
$("#noverifystu-button").click(function(){
	var vstuid=$(this).val();
  $.ajax({url: "ajax/ajaxnoverifystudent.php?vstuid="+vstuid,
    success: function(result){
	location.reload();		
    $("#div1").html(result);
  }});
});
});
</script>			






