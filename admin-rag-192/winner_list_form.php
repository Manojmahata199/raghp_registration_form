<?php
include('common-header.php');
require_once "config.php"; 
error_reporting(E_ALL);
if (isset($_SESSION['username'])){	
?>
<div id="page-wrapper" >
    <div id="page-inner">                


	<div class="row">
            <div class="col-lg-12">
             <h2>Add New Winner</h2>
			 </div>
	</div>
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

	<form action="add_winner_operation.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Winner Student Name</label>
    <input type="text" class="form-control" name="w_name" id="w_name" required>
   
  </div>
  <div class="mb-3">
    <label for="ragp_roll" class="form-label">Winner Student Ragp Roll No</label>
    <input type="text" class="form-control" name="ragp_roll" id="ragp_roll" required>
   
  </div>
  <div class="mb-3">
    <label for="w_class" class="form-label">Winner Student Class</label>
    <input type="text" class="form-control" name="w_class" id="w_class" required>
   
  </div>
  <div class="mb-3">
    <label for="w_board" class="form-label">Winner Student Board</label>
    <input type="text" class="form-control" name="w_board" id="w_board" required>
   
  </div>
  
   <div class="mb-3 my-2">
  
     <!-- <button type="submit" name="submit" class="btn btn-primary my-3">Submit</button> -->
     <input type="submit" name="submit" class="btn btn-primary my-3" value="Submit">
   </div>
</form>















</div>
<hr class="bg-dark text-dark">
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
           <div class="col-md-12 my-4 mb-5">


                        <form action="import_winner_excel_operation.php" method="post" enctype="multipart/form-data">
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
            <div class="col-lg-12 my-4">
              <hr>
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
<script type="text/javascript">
	

$(document).ready(function(){
 	
	
$(this).scrollTop(0);
   $('#upload_submit').click(function(){


	if($('#w_name').val()=="" || $('#ragp_roll').val()=="" || $('#w_class').val()=="" || $('#w_board').val()==""){

		alert("Please enter all 'Winner Details'");
	}


   });


});





</script>