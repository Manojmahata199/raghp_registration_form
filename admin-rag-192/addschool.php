<?php
include('common-header.php');
include('action.php');
// Include config file
require_once "config.php"; 
// Define variables and initialize with empty values
if (isset($_SESSION['username'])){
include('functions.php');
    $sql="select * from `school_list`";
	$query=mysqli_query($conn,$sql);
	$result = mysqli_num_rows($query); 
	// $rows = $row[0]; 
	$page_rows = 20; 
	//$last =ceil($rows/$page_rows); 
	$last=ceil( $result / $page_rows );
	
	// if($last < 1){
	// 	$last = 1;
	// } 

	if(isset($_GET['pn'])){
		$pagenum =$_GET['pn'];
	}
	else{
		$pagenum = 1; 
	}
 
	// if ($pagenum < 1) { 
	// 	$pagenum = 1; 
	// } 
	// else if ($pagenum > $last) { 
	// 	$pagenum = $last; 
	// }
    $offset=($pagenum - 1) * $page_rows;
	$limit ="SELECT * FROM `school_list` ORDER BY  `id` ASC LIMIT $offset,$page_rows";

	$nquery=mysqli_query($conn,$limit); 
	$paginationCtrls = ''; 
	if($last != 1){ 
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-default">Previous</a> &nbsp; &nbsp; '; 
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
			}
	    }
    }
 
	$paginationCtrls .= ''.$pagenum.' &nbsp; '; 
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	} 
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-default">Next</a> ';
    }
	}
?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Admin Add A New School</h2>
					 <!-- Display the status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="alert alert-success"><?php echo $statusMsg; ?></div>
<?php } ?>
						<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for School..">
						<p></p>
						<form id="myadd-school" name="bulk_action_form" action="" method="post" onSubmit="return school_delete_confirm();"/>
							<table width="80%" class="table table-striped table-bordered table-hover">
								<thead>
								<th><input type="checkbox" id="select_all" value=""/></th>
								<th>School ID</th>
								<th>School Name</th>
								<th>School Address</th>			
								</thead>
							<tbody>
						<?php
							while($crow = mysqli_fetch_array($nquery)){
						?>
						<tr>
						<td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $crow['id']; ?>"/></td>
						<td><?php echo $crow['id']; ?></td>
						<td><?php echo $crow['school_name']; ?></td>
						<td><?php echo $crow['school_address']; ?></td>					    
				        </tr>
					<?php
						}		
					?>
		</tbody>
	</table>
	<input type="submit" class="btn btn-danger" name="bulk_schdelete_submit" value="DELETE SCHOOL"/>
	<p class="custom-space"></p>
</form>
	<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
	</div>
					</div>
                </div>       
        <form name="add-school" action="" method="post">               
            <div id="wizard">   
            <div class="form-row">
			<label for="usr">Enter School Name:</label>
			<input type="text" class="form-control" id="school-name" name="school-name">
			</div>
			<div class="form-row">
				<label for="comment">Enter School Address</label>
				<textarea class="form-control" rows="5" id="school-address" name="school-address"></textarea>
			</div>  

			<div class="form-row">
				<label for="comment">Select School Board</label>
				 
                          <select name="boardexam" class="form-select" id="boardexam" required>
			                     <option value="">Select School Board</option>
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
                                   
			</div>  

			<div class="form-row">
				<label for="comment">Select School Location</label>
				                     <select name="location" id="location" class="form-select" required>
		                                <option value="">Select School Location</option>
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
			</div>  


            <div class="form-row">
			<p class="custom-space"></p>
                <input type="submit" id="add-school-submit" class="btn btn-primary" value="Add School" name="add-school-submit">
                <input type="reset" class="btn btn-primary" value="Reset">
            </div>            
            </div>
        </form>



                                       





<hr>
         <div class="row my-4">
         	 <?php if(isset($_SESSION['msg'])){ ?>

                <div class="row col-md-12 bg-success my-2 py-2">

                  <h4 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h4>
                </div>


           <?php  unset($_SESSION['msg']);}?>



           <!-- This is for show error massage  -->


           
           <?php if(isset($_SESSION['msg2'])){ ?>

                <div class="row col-md-12 bg-danger my-2 py-2">

                  <h4 class="text-light text-center"><?php echo $_SESSION['msg2']; ?></h4>
                </div>


           <?php  unset($_SESSION['msg2']);}?>


                        <form action="import_excel_operation.php" method="post" enctype="multipart/form-data">
                        	<label for="excel_file" class="form-label"><b>For Import School List Enter Your Excel File</b></label>
                              <div class="row d-flex col-md-12">
                                    

                                    <div class="col-md-8">
                                          
                                        <div class="mb-2">
                                          
                                          <input type="file" class="form-control" id="excel_file" name="excel_file" required>
                                        </div>


                                    </div>
                                    <div class="col-md-4">
                                          
                                       <div class="mb-3">
                                          <input type="submit" name="excel_submit" id="excel_submit" value="Upload" class="btn btn-success">
                                              
                                        </div>
                                    </div>
                              </div>



                        </form>
                  </div>
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
function school_delete_confirm(){
    if($('.checkbox:checked').length > 0){
        var result = confirm("Are you sure to delete selected school?");
        if(result){
            return true;
        }else{
            return false;
        }
    }else{
        alert('Select at least 1 record to delete.');
        return false;
    }
}
</script>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myadd-school");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
				 