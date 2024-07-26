<?php
include('common-header.php');
include('action.php');
require_once "config.php"; 

error_reporting(E_ALL);
if (isset($_SESSION['username'])){	

    if(isset($_GET['page'])){
          $page=$_GET['page'];

        }
         else{
          $page=1;
        }
?>
<div id="page-wrapper" >
            <div id="page-inner">                
<!-- Display the status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="alert alert-success"><?php echo $statusMsg; ?></div>
<?php } ?>

			
			<div class="col-md-12">
	        <?php if(isset($_SESSION['msg'])){ ?>

                                    <div class="col-md-12 bg-success  alert alert-success py-4">

                                        <h5 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h5>
                                    </div>



            <?php  unset($_SESSION['msg']);}?>
            <?php if(isset($_SESSION['msg2'])){ ?>

                                    <div class="col-md-12 bg-danger  alert alert-danger py-4">

                                        <h5 class="text-light text-center"><?php echo $_SESSION['msg2']; ?></h5>
                                    </div>



            <?php  unset($_SESSION['msg2']);}?>

        </div>
    
    
		<form name="bulk_action_form" action="action.php" method="post">
        <div class="row d-flex">
            <div class="col-md-10 text-left">
                <h2 class="">Winner List</h2>
                
            </div>
            <div class="col-md-2 text-right">
                <input type="hidden" name="page" value="<?php echo $page; ?>">
                <input type="submit" class="btn btn-success" name="bulk_print_submit" onclick="printverify_confirm()" value="print all" />
            </div>
        </div>
		<table class="table table-responsive table-striped w-auto table-bordered">
        <thead>
        <tr>
                            <th><input type="checkbox" id="select_all" value=""/></th>
							  <th>Sr.No</th> 	
							  <th>RAGP ROLL No</th>
                              <th>Hindi Name</th>
                              <th>Class</th>
							  <th>Board</th>
							  <th>Print Status</th>
                              <th>Options</th>
							 
            
        </tr>
        </thead>
        <?php              
        // Get users from the database

        

        $limit=10;

        $sql_pagination="SELECT * FROM `winner_list`";
        $query_pagination = mysqli_query($conn, $sql_pagination);
        $row_pagination=mysqli_num_rows($query_pagination);
        $result_pagination = mysqli_fetch_array($query_pagination);


        $per_page=ceil($row_pagination/$limit);
        $offset=($page-1)*$limit;
        $p=$page;
         $prev=$p-1;
         $next=$p+1;




        $sql="SELECT * FROM `winner_list` ORDER BY `id` desc limit $offset,$limit";                       
        // List all records
        if($result = mysqli_query($conn, $sql)){
						if(mysqli_num_rows($result) > 0){
							$i=$offset+1;
						while($row = mysqli_fetch_array($result)){	
                             
        ?>
        <tr>
                       <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>
                       <td><?php echo $i++?></td>
					   <td><?php echo $row['reg_id']; ?></td>
                       <td><?php echo $row['winner_name']; ?></td>
					   <td><?php echo $row['winner_class']; ?></td>
					   <td><?php echo $row['winner_board']; ?></td>
					   <td><?php echo $row['print_status']; ?></td>
                       <td>
                           
                           <?php if($row['print_status']==0){ ?>

                           	<a class="btn btn-primary text-center text-dark" href="print_status.php?id=<?php echo $row['id']; ?>">Print</a>

                           <?php }else{ ?>
                           	    <!--<p class="btn btn-danger text-center text-dark">Allready Printed</p>-->
                           	    <a class="btn btn-danger text-center text-dark" href="print_status.php?id=<?php echo $row['id']; ?>">Allready Printed|Print Again</a>
        
                           <?php } ?>
                           
                           
                           
                       </td>
                       <td>
                         	<a href="delete_winner.php?id=<?php echo $row['id']; ?>" class="btn btn-warning text-center text-dark">Delete</a>
                       </td>
					  
					 
        </tr>
        <?php } }else{ ?>
            <tr><td colspan="5">No records found.</td></tr>
        <?php }}?>

        
    </table>
    

                <div aria-label="col-md-12 text-center my-2">
                  <ul class="pagination">
                    <li class="page-item">
                    
                       <a class="page-link" href="winner_list.php?page=<?php echo 1; ?>"><h6><b><span aria-hidden="true">First</span></b></h6></a>
                    </li>
                    <?php if($prev>1){ ?>
                    <li class="page-item">
                    
                       <a class="page-link" href="winner_list.php?page=<?php echo $prev; ?>"><h6><b><span aria-hidden="true">&laquo;</span></b></h6></a>
                    </li>
                  <?php } ?>
                  <?php for ($i=$page-4; $i <=$page+4 ; $i++) { 
                        if($i>0 && $i<=$per_page){ ?>

                      <li class="page-item">

                        
                        <a class="page-link text-light text-center <?php print ($i==$page) ? "btn-primary" : ""; ?>" href="winner_list.php?page=<?php echo $i; ?>"><h6 class="text-light text-center"><?php echo $i; ?></h6></a>
                        
                      </li>

                  <?php }
                   } ?>
                     <?php if($next<=$per_page){ ?>
                     <li class="page-item">

                       
                         <a class="page-link" href="winner_list.php?page=<?php echo $next; ?>"><h6><b><span aria-hidden="true">&raquo;</span></b></h6></a>
                        
                      </li>
                      <?php } ?>
                      <li class="page-item">

                       
                         <a class="page-link" href="winner_list.php?page=<?php echo $per_page; ?>"><h6><b><span aria-hidden="true">Last</span></b></h6></a>
                        
                      </li>
                  </ul>
                </div>
              


	
</form>

                

                    

				
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
function printverify_confirm(){
    if($('.checkbox:checked').length > 0){
        var result = confirm("Are you sure want to print the selected user?");
        if(result){
            return true;
        }else{
            return false;
        }
    }else{
        alert('Select at least 1 record to print.');
        return false;
    }
}
</script>