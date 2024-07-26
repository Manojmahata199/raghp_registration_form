<?php

include('common-header.php');


if (isset($_SESSION['username'])){
include('functions.php');	
// Turn off error reporting
error_reporting(0);
?>
<div id="page-wrapper" >
            <div id="page-inner">
                
				<div class="row">
                    <div class="col-lg-12">
						<h2>Export All Registered Student Data</h2>
						
					       <?php// get_all_records();?>

                          <div class='table-responsive'>

					        <table class="table table-responsive table-striped w-auto table-bordered">
						        <thead>
						        <tr>
						            <th>Sr.No</th> 	
									  <th>RAG ROLL NO</th>
		                              <th>English Name</th>
		                              <th>Hindi Name</th>
									  <th>Email</th>
									  <th>Mobile</th>
									  <th>Standard</th>
									  <th>School</th>
		                              <th>Board</th>                              
									  <th>Board Hindi Marks</th>
									  <th>Board Total Marks</th>
									  <th>Options</th>
						            
						        </tr>
						        </thead>
						        <?php
						              
						        // Get users from the database
						        $sql="SELECT * FROM `new_student_data` ORDER BY `id` ASC";                       
						        // List all records
						        if($result = mysqli_query($conn, $sql)){
												if(mysqli_num_rows($result) > 0){
													$i=1;
												while($row = mysqli_fetch_array($result)){	
						                            if($row['school_name']=="others"){
						                                  $school_name=$row['other_school_name'];
						                            }else{
						                             
						                               $school_name=$row['school_name'];
						                             }
						        ?>
						        <tr>
						           <td><?php echo $i++; ?></td>
								   <td>G-<?php echo $row['boardexam']."-".substr("0000000{$row['reg_id']}", -7); ?></td>
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

								   	 <!-- <a style="margin:2px;" class='btn btn-success text-dark text-center' href='generate_card.php?id=<?php// echo $row["reg_id"]; ?>'>Pdf</a> -->
								   	 <a style="margin:2px;" class='btn btn-success text-dark text-center' href='../new_uploads/<?php echo 'file'.$row['id'].'.pdf';?>'>Pdf</a>

								   	 <?php if($row['marksheet_file']!=""){ ?>
								   	          <a style="margin:2px;" href="../new_uploads/<?php echo $row['id']?>/marksheet_img/<?php echo $row['marksheet_file']?>" target="_blank" class="btn btn btn-success text-dark text-center">
								   	                Marksheet
								   	           </a>
								   	  <?php } ?>
								   	  <?php if($row['essay_file']!=""){ ?>
								   	          <a style="margin:2px;" href="../new_uploads/essay_folder/<?php echo $row['id']; ?>/essay_file/<?php echo $row['essay_file']; ?>" target="_blank" class="btn btn btn-success text-dark text-center">
								   	                Essay File
								   	           </a>
								   	  <?php } ?>
								   	  <?php if($row['essay_video']!=""){ ?>
								   	          <a style="margin:2px;" href="../new_uploads/essay_folder/<?php echo $row['id']; ?>/essay_video/<?php echo $row['essay_video']; ?>" target="_blank" class="btn btn btn-success text-dark text-center">
								   	                Essay Video
								   	           </a>
								   	  <?php } ?>

								   	</th>
						            
						        </tr>
						        <?php } }else{ ?>
						            <tr><td colspan="5">No records found.</td></tr>
						        <?php }}?>
						    </table>
						</div>




























					    <div>
							<form class="form-horizontal" action="functions.php" method="post" name="upload_excel"   
							enctype="multipart/form-data">
							<div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <input type="submit" name="Export" class="btn btn-success" value="export all student list to excel"/>
                            </div>
                       </div>                    
                </form>           
     </div>		
					</div>		
				</div>
			</div>
</div>
<?php  
include('common-footer.php');
}
else{
//Redirect user to admin page
header("location: index.php");
}	
?>				