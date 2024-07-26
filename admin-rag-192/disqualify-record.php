<?php
include('common-header.php');
include('action.php');
// Include config file
require_once "config.php"; 
// Turn off error reporting
error_reporting(0);
if (isset($_SESSION['username'])){

?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>DisQualify Student</h2>
                    </div>
                </div>
<!-- Display the status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="alert alert-success"><?php echo $statusMsg; ?></div>
<?php } ?>

<!-- Users data list -->
<form name="bulk_action_form" action="" method="post" onSubmit="return disqualify_confirm();"/>
    <table class="table table-responsive table-striped w-auto table-bordered">
        <thead>
        <tr>
            <th><input type="checkbox" id="select_all" value=""/></th>        
            <th>Student Id</th>
			<th>RAG Roll No</th>
			<th>Submission Date & Time</th>
			<th>Student Full Name</th>
			<th>Student Category</th>
			<th>School Name</th>
			<th>Student Verified</th>
			<th>Student Qualified</th>
            
        </tr>
        </thead>
        <?php
              
        // Get users from the database
        $sql="SELECT * FROM `student_data` ORDER BY `id` ASC";                       
        // List all records
        if($result = mysqli_query($conn, $sql)){
						if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_array($result)){	
                             if($row['school_name']=="others"){
                                  $school_name=$row['other_school_name'];
                            }else{
                             
                               $school_name=$row['school_name'];
                             }
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo $row['id']; ?></td>
			<td><?php echo $row['boardexam']."-".substr($row['class'], -2)."-".substr("0000000{$row['id']}", -7);?></td>
			<td><?php echo $row['form_date_time']; ?></td>
			<td><?php echo $row['fname']." ".$row['lname']?></td>
			<td><?php echo $row['category']?></td>
			<td><?php echo $school_name; ?></td>
			<td><?php echo $row['verified']?></td>
			<td><?php echo $row['qualified']?></td>
            
        </tr>
        <?php } }else{ ?>
            <tr><td colspan="5">No records found.</td></tr>
        <?php }}?>
    </table>
	<input type="submit" class="btn btn-primary" name="bulk_disqualify_submit" value="DISQUALIFY STUDENT"/>
</form>









				
				</div>
        </div>
<?php
include('common-footer.php');
}
else{
	
	// Redirect user to welcome page
    header("location: index.php");
}	
?> 
<script>
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
	
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
function disqualify_confirm(){
    if($('.checkbox:checked').length > 0){
        var result = confirm("Are you sure to Disqualify selected student?");
        if(result){
            return true;
        }else{
            return false;
        }
    }else{
        alert('Select at least 1 record to disqualify.');
        return false;
    }
}
</script>
				