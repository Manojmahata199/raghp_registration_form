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
						<h2>Qualified Student List</h2>						
					       <?php get_all_qualified_records();?>
							<form class="form-horizontal" action="functions.php" method="post" name="upload_excel"   
							enctype="multipart/form-data">
							<div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <input type="submit" name="Export-Qualified" class="btn btn-success" value="export qualified student list to excel"/>
								</div>
							</div>                    
							</form>					
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