<?php
include('common-header.php');
include('action.php');
// Include config file
require_once "config.php"; 
// Define variables and initialize with empty values
if (isset($_SESSION['username'])){ ?>

 <div id="page-wrapper" class="my-5" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Admin Import New Registration</h2>
					 
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


				                        <form action="import_excel_registration.php" method="post" enctype="multipart/form-data">
				                        	<label for="excel_file" class="form-label"><b>For Import student registration data enter your excell file</b></label>
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
        </div>       
<?php
include('common-footer.php');
}
else{	
	// Redirect user to welcome page
    header("location: index.php");
}	
?>