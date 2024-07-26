<?php
include('common-header.php');
if( isset( $_SESSION['username'] ) ){
    
   
?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-dark">
                             <strong><?php echo "welcome ".$_SESSION["username"]."!";?></strong>
                        </div>                       
                    </div>
                </div>
                  <!-- /. ROW  --> 
                  <div class="row text-center pad-top">
                     <?php if($_SESSION["user_type"]=='admin'){ ?>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                              <div class="div-square">
                                   <a href="register.php" >
                                    <i class="fa fa-circle-o-notch fa-5x"></i>
                              <h4>Add New Admin</h4>
                              </a>
                              </div>                   
                      </div> 
    					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                              <div class="div-square">
                                   <a href="addschool.php" >
                                   <i class="fa fa-circle-o-notch fa-5x"></i>
                              <h4>Add New School</h4>
                              </a>
                              </div>                   
                      </div>
                  <?php } ?>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
				        <div class="div-square">
                           <a href="export_data.php" >
					    	<i class="fa fa-file-excel-o fa-5x"></i>
                          <h4>Export Student Data</h4>
                          </a>
                        </div>                                   
                     </div>	
                     <!--  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                           <a href="export_aparajay_data.php" >
                            <i class="fa fa-file-excel-o fa-5x"></i>
                          <h4>Export SA-Student Data</h4>
                          </a>
                        </div>                                   
                     </div>  -->
                    <?php if($_SESSION["user_type"]=='admin'){ ?>			  
                    <!--  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="#" >
                                 <i class="fa fa-users fa-5x"></i>
                          <h4>Student Registration</h4>
                          </a>
                          </div>             
                     </div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="../registration-step2.php" target="_blank">
                                 <i class="fa fa-clipboard fa-5x"></i>
                          <h4>Marks Entry</h4>
                          </a>
                          </div>                   
                     </div>    -->
                     <?php } ?>           
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="student-data.php" >
                                 <i class="fa fa-graduation-cap fa-5x"></i>
                          <h4>Student Data</h4>
                          </a>
                          </div>                  
                     </div>

                      <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="aparajay_student_data.php" >
                                 <i class="fa fa-graduation-cap fa-5x"></i>
                          <h4>SA-Student Data</h4>
                          </a>
                          </div>                  
                     </div> -->

                    <?php if($_SESSION["user_type"]=='admin'){ ?>
				   <!--  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        				<div class="div-square">
                                   <a href="verify-record.php" >
        						<i class="fa fa-thumbs-up fa-5x"></i>
                              <h4>Verify Student Data</h4>
                              </a>
                        </div>                                   
                    </div>
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
    				  <div class="div-square">
                               <a href="not-verify-record.php" >
    						<i class="fa fa fa-thumbs-down fa-5x"></i>
                          <h4>Data Not Verify</h4>
                          </a>
                      </div>                                   
                  </div>
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        				  <div class="div-square">
                                   <a href="qualify-record.php" >
        						<i class="fa fa-th-list fa-5x"></i>
                              <h4>Qualify Student</h4>
                              </a>
                          </div>                                   
                  </div>
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
    				  <div class="div-square">
                               <a href="disqualify-record.php" >
    						<i class="fa fa-th-list fa-5x"></i>
                          <h4>Disqualify Student</h4>
                          </a>
                      </div>                                   
                  </div>
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
    				  <div class="div-square">
                               <a href="delete-record.php" >
    						<i class="fa fa-eraser fa-5x"></i>
                          <h4>Delete Student Data</h4>
                          </a>
                      </div>                                   
                  </div>		 -->		  
				 <!--  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
    				  <div class="div-square">
                               <a href="qualified-list.php" >
    						<i class="fa fa-key fa-5x"></i>
                          <h4>Qualified Student</h4>
                          </a>
                      </div> 
                                  
                  </div>
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
    				  <div class="div-square">
                               <a href="disqualified-list.php" >
    						<i class="fa fa-key fa-5x"></i>
                          <h4>DisQualified Student</h4>
                          </a>
                      </div>                                  
                  </div> 

                   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                            <a href="aparajay_mail_verified.php" >
                            <i class="fa fa-envelope fa-5x"></i>
                            <h4>Email to verified Aparajay</h4>
                            </a>
                       </div>                                   
                  </div>
                    -->
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
    				  <div class="div-square">
                            <a href="mail-verified.php" >
    						<i class="fa fa-envelope fa-5x"></i>
                            <h4>Email to verified</h4>
                            </a>
                       </div>                                   
                  </div>

                 
              <?php } ?>

            <?php
             require_once "config.php";
              $today_date=date('Y-m-d');


              $sql="SELECT * from `rgb_cupon` WHERE `srt_date`='$today_date'";
              $query=mysqli_query($conn,$sql);
              $resultarray=mysqli_fetch_assoc($query);
              
                      
              
            ?>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                            <a href="export_cupon.php" >
                            <i class="fa fa-download fa-5x"></i>
                            <h4>Download Coupon Code List</h4>

                            </a>
                            <h4><?php echo $resultarray['code']; ?></h4>
                       </div>                                   
                  </div>
				  
            </div>                  
        </div>
        	<div class="row">
                <div class="col-lg-12 ">
                                                     
                </div>
            </div>
	
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
<?php
include('common-footer.php');
}
// else{	
// 	// Redirect user to welcome page
//     header("location: index.php");
// }	
?> 
