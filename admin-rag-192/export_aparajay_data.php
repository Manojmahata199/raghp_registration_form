<?php

include('common-header.php');


if (isset($_SESSION['username'])){
include('functions.php');
include('config.php');
// Turn off error reporting
error_reporting(0);
?>
<div id="page-wrapper" >
            <div id="page-inner">
                
				<div class="row">
                    <div class="col-lg-12">
						<h2>Export All Registered Specialy Abbled Student Data</h2>
						
					       <?php get_all_aparajay_records();?>
					     


					    <div class="col-lg-12">
					    	<a href="export_aparajay_data_op.php" class="btn btn-success mx-2 text-center">Export Aparajay List</a>
							<!-- <form class="form-horizontal" action="functions.php" method="post" name="upload_excel"   
							enctype="multipart/form-data">
							<div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <input type="submit" name="Export_aparajay" class="btn btn-success" value="export all student list to excel"/>
                                </div>
                            </div>                    
                            </form>     -->       
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