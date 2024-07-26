<?php
ob_start();

session_start();



if($_SESSION['reg_id']){

include('database.php');
$error_msg="";
$msg="";
$m="";
$n="";


$id=$_SESSION['id'];
$reg_id=$_SESSION['id'];
$student_email=$_SESSION['student_email'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];


$sql="SELECT * FROM `student_data` WHERE `id`='$id' and `student_email`='$student_email'";
$query=mysqli_query($conn,$sql);
$row=mysqli_num_rows($query);
if($row>0){
    $res=mysqli_fetch_assoc($query);
}
else{
    $res="";
}

if(isset($_POST['upload_submit'])){

  $stu_reg_id=$res['reg_id']; 
  $board_total_mark=$_POST['board_total_mark'];
  $board_hindi_mark=$_POST['board_hindi_mark'];
  $board_hindi_mark_perc=$_POST['board_hindi_mark_perc'];
  
  

    
        if(isset($_FILES['Stu_marksheet']))
            {


                $Stu_marksheet_name=$_FILES['Stu_marksheet']['name'];
        $Stu_marksheet_path=$_FILES['Stu_marksheet']['tmp_name'];


                if (!file_exists('$target_dir'.$id.'/marksheet_img/')) {
                    mkdir('uploads/'.$id.'/marksheet_img/', 0777, true);
                    }
                $target_dir = "uploads/".$id."/marksheet_img/";
                $target_file = $target_dir.$_FILES["Stu_marksheet"]["name"];
                $uploadOk = 1;


                
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


                // Check if image file is a actual image or fake image
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "pdf" ) {
                        $error_msg="Uploaded Marksheet File Is An Invalid";
                        $uploadOk = 0;
                }
                // Check file size
                // if ($_FILES["Stu_marksheet"]["size"] > 1000000) {
          //            $error_msg= "Sorry, your Marksheet File is too large.";
          //            $uploadOk = 0;
                // }
                if($uploadOk ==0){
                   $error_msg="Your Marksheet File Was Not uploaded";
                }
                else
                {
                    if($uploadOk ==1)
                    {
                        $m=move_uploaded_file($_FILES["Stu_marksheet"]["tmp_name"], $target_file);
                        if($m==1){


                            $sql="UPDATE `student_data` SET `marksheet_file`='$Stu_marksheet_name',`board_total_mark`='$board_total_mark',`board_hindi_mark`='$board_hindi_mark',
                            `Board_hindi_mark_percent`='$board_hindi_mark_perc' WHERE `id`='$id' and `reg_id`='$stu_reg_id'";

                            $result=mysqli_query($conn,$sql);

                            if($result){

                                $msg="Your Markshit Is Submitted Successfully";
                            }
                        }       

                        
                    }
                }
            }




    

            ob_end_clean();

    


}


 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>RAGHP Registration Form 2024</title>
    <!-- add icon link -->
        <link rel = "icon" href ="images/RAGLOGO_2022.png" type = "image/x-icon">

    <!-- Icons font CSS-->
    <link href="form-2024/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="form-2024/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="form-2024/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="form-2024/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="form-2024/css/main.css" rel="stylesheet" media="all">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style type="text/css">
        @media (max-width: 900px){
            .btn {
                font-size: 12px !important;
            }
        }
    </style>
</head>

<body>
    <div class="page-wrapper bg-blue p-t-50 p-b-50 font-robo">
        <div class="wrapper wrapper--w1000">
            <div class="card card-1">
                <div class="card-heading">
                    <img src="images/Header_Banner1.webp" id="top_img" style="background-size: cover;background-repeat: no-repeat;background-position: center;">
                </div>
                <div class="card-body">
                    <div class="navbar my-2" style="margin-top: 10px;margin-bottom: 10px !important;">
                 
                 
                        <h3 class="section-heading text-center" style="padding-top: 5PX;padding-bottom: 5PX;">रजिस्ट्रशन फॉर्म 2024 - द्वितीय चरण</h3>
                  
                    </div>

                    <?php if(isset($_SESSION['msg'])){ ?>

                                    <div class="col-md-12 bg-danger alert-dismissible  alert alert-danger py-4">

                                        <h5 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h5>
                                    </div>



                    <?php  unset($_SESSION['msg']);}?>

                    <?php if($error_msg){ ?>
                                  <div class="col-md-12 bg-danger alert-dismissible  alert alert-danger py-4">

                                    <h5 class="text-light text-center"><?php echo $error_msg; ?></h5>
                                </div>
                    <?php } ?>
                     <?php if($msg){ ?>
                                  <div class="col-md-12 bg-success alert-dismissible  alert alert-success py-4">

                                    <h5 class="text-light text-center"><?php echo $msg; ?></h5>
                                </div>
                    <?php } ?>

                    <div class="row" id="three_div">


                                    <!-- this is for form div -->
                                    <div class="" id="main_form_div">
                                   <?php if($res['marksheet_file']!=""){ ?>
                                        <div style="background-color:whitesmoke;width: 100%;padding: 14px;">
                                            
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                              <h4 class="text-dark text-center">You Have Already Uploaded the Details</h4>  
                                            </div>
                                            <hr>
                                              <div class="alert alert-danger py-2 my-2">
                                                <h4 class="text-center text-dark">आपने अपना बोर्ड विवरण पहले ही अपलोड कर दिया है, यदि आप सभी विवरण अपडेट करना चाहते हैं तो फिर से अपलोड करें<br>You Already Uploaded Your Board Details, If You Want To Update All Details Then Upload Again</h4>
                                              </div>
                                        
                                                <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>बोर्ड कुल अंक</span><br><span>Board Total Marks</span></span>
                                                </div>
                                                 <div class="col-board">
                                                       <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['board_total_mark']; ?></b></span></span>
                                                 </div>
                                              </div>

                                              <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>बोर्ड   हिंदी मार्क्स</span><br><span>Board Hindi Marks</span></span>
                                                </div>
                                                 <div class="col-board">
                                                       <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['board_hindi_mark']; ?></b></span></span>
                                                 </div>
                                              </div>
                                              <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>बोर्ड हिंदी अंक प्रतिशत</span><br><span>Board Hindi Marks Percentage</span></span>
                                                </div>
                                                 <div class="col-board">
                                                       <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['Board_hindi_mark_percent']; ?>%</b></span></span>
                                                 </div>
                                              </div>
                                              <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>अपलोड   किया गया निबंध</span><br><span>Uploaded Marksheet</span></span>
                                                </div>
                                                 <div class="col-board">
                                                       <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['marksheet_file']; ?></b></span></span>                                               
                                                 <h6 class="text text-left text-dark mx-2"><span>:&nbsp</span><span><a href="uploads/<?php echo $res['id']?>/marksheet_img/<?php echo $res['marksheet_file']?>" target="_blank"><b>Click to See Uploaded Marksheet</b></a></span></h6>
                                                 </div>
                                              </div>


                                            

                                        </div>
                                        <?php } ?>
                                        <hr>
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h4 class="text-right">Upload Board Details</h4>
                                        </div>
                                        <hr>   
                                        
                                              
                                          <form id="rag2020-form"  method="post"  enctype="multipart/form-data">     
                                        <div id="form_div" style="background-color:whitesmoke;width: 100%;padding: 10px;height:500px;">                       
                                            <div class="col-md-12 my-2" style="margin-top:5px;">
                                                <label class="full_width"><span>बोर्ड कुल अंक</span><span class="req-col text-danger">*</span><br><span>Board Total Marks</span></label>

                                                <input type="number" class="form-control mb-2" maxlength="3" placeholder="Enter Board Total marks" name="board_total_mark" 
                                                id="board_total_mark" value="" required>
                                            </div> <br>
                                            <div class="col-md-12 my-2" style="margin-top:5px;">
                                                <label class="full_width"><span>बोर्ड हिंदी मार्क्स</span><span class="req-col text-danger">*</span><br><span>Board Hindi Marks</span></label>

                                                <input type="number" class="form-control mb-2" maxlength="3" placeholder="Enter Board Hindi Marks" name="board_hindi_mark" 
                                                id="board_hindi_mark" value="" required>
                                            </div> <br>

                                            <div class="col-md-12 my-2" style="margin-top:5px;">
                                                <label class="full_width"><span>बोर्ड हिंदी अंक प्रतिशत (केवल संख्या में)</span><span class="req-col text-danger">*</span><br><span>Board Hindi Marks Percentage (Only In Number)</span></label>

                                                <input type="number" class="form-control mb-2" maxlength="3" placeholder="Enter Board Hindi Marks Percentage" name="board_hindi_mark_perc" 
                                                id="board_hindi_mark_perc" value="" required>
                                            </div> <br>


                                            <div class="col-md-12 my-2" style="margin-top:5px;">
                                                <label class="full_width"><span>मार्कशीट अपलोड करे ( फाइनल प्रारूप और आकार  – *.pdf  *.jpg  *.png  max 1MB)</span><span class="req-col text-danger">*</span><br><span>Upload Current Board Marksheet  (Supported File Format and Size – *.pdf  *.jpg  *.png  max 1MB)</span></label>

                                                <input type="file" class="form-control mb-2" placeholder="Upload Your Marksheet" name="Stu_marksheet" 
                                                id="Stu_marksheet" value="" required>
                                            </div>
                                            
                                            <div class="col-md-12 text-center" style="margin-top:10px;margin-bottom:10px;">

                                                <button type="submit" name="upload_submit" id="upload_submit" value="Upload Details" class="btn btn-success text-center" style="background-color:#ae2627; color:#fff;height:auto;">
                                                    <i class="fa fa-upload"></i>
                                                    <span>&nbsp</span>विवरण अपलोड करें (Upload Details)</button>
                                            </div>
                                        </div>  

                                          </form>
                                
                                        
                                        </div>

                                    
                                   
                                    <div class="border-right" id="det_div">
                                        <div class="p-2 py-2">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h4 class="text-right">Student Details</h4>
                                            </div>

                                             <hr>
                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                   
                                                       <span class="full_width"><span>यूनिक रोल नम्बर</span><br><span>Unique Roll Number</span></span>
                                                    
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                   
                                                       <span class="full_width"><span>:&nbsp</span><span><b><?php echo "RAGHP-".$res['boardexam']."-".$res['reg_id'].""; ?></b></span></span>
                                                    
                                                      
                                                </div>
                                            </div>

                                            



                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                     <span class="full_width"><span>रजिस्ट्रेशन (परीक्षा क्षेत्र)</span><br><span>Registered Location</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                       <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['reg_location']; ?></b></span></span>
                                                      
                                                    </div>
                                            </div>

                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                     <span class="full_width"><span>स्टूडेंट केटेगरी</span><br><span>Student Category</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                       <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['category']; ?></b></span></span>
                                                      
                                                    </div>
                                            </div>

                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                     <span class="full_width"><span>विकार प्रकार</span><br><span>Challenge Type</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                       <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['disorder']; ?></b></span></span>
                                                      
                                                    </div>
                                            </div>
                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                     <span class="full_width"><span>विकार नाम</span><br><span>Challenge Name</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                       <span class="full_width"><span>:&nbsp</span><span><b>
                                                        <?php 
                                                            if($res['disorder']=='Physically Challenged'){
                                                              echo $res['phy_disorder_name'];
                                                            }else{
                                                               echo $res['mental_disorder_name']; 
                                                            } 
                                                        ?></b></span></span>
                                                      
                                                    </div>
                                            </div>




                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                     <span class="full_width"><span>पूरा नाम (अंग्रेजी)</span><br><span>Full Name in English</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                       <span class="full_width"><span>:&nbsp</span><span><b><?php echo ''.$res['fname'].' '.$res['lname'].''; ?></b></span></span>
                                                      
                                                    </div>
                                            </div>


                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                     <span class="full_width"><span>पूरा नाम (हिंदी)</span><br><span>Full Name in Hindi</span></span>
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                     <span class="full_width"><span>:&nbsp</span><span><b><?php echo  ''.$res['hname'].' '.$res['hlname'].''; ?></b></span></span>
                                                 </div>
                                            </div>



                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                     <span class="full_width"><span>मोबाइल नंबर</span><br><span>Mobile Number</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['student_mobile']; ?></b></span></span>
                                                 </div>
                                            </div>



                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                     <span class="full_width"><span>ई-मेल</span><br><span>Email ID</span></span>
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['student_email']; ?></b></span></span>
                                                 </div>
                                            </div>



                                             <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>लिंग</span><br><span>Gender</span></span>
                                                </div>
                                                <div class="col-board">
                                                      <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['student_gender']; ?></b></span></span>
                                                </div>
                                            </div>



                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                      <span class="full_width"><span>जन्म तिथि</span><br><span>Date of Birth (Year-Month-Day)</span></span>
                                                </div>
                                                <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['student_dob']; ?></b></span></span>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>अभिभावक का नाम</span><br><span>Parent Name</span></span>
                                                </div>
                                                <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['parent_name']; ?></b></span></span>
                                                </div>
                                            </div>

                             

                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>अभिभावक का फोन नं</span><br><span>Parent Phone Number</span></span>
                                                </div>
                                                <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['parent_mobile']; ?></b></span></span>
                                                </div>
                                            </div>



                                            <div class="row row-space board_div">
                                                  <div class="col-board">
                                                    <span class="full_width"><span>अभिभावक का ई-मेल</span><br><span>Parent Email ID</span></span>
                                                  </div>
                                                  <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['parent_email']; ?></b></span></span>
                                                  </div>
                                            </div>



                                            <div class="row row-space board_div">
                                                  <div class="col-board">
                                                    
                                                    <span class="full_width"><span>अभिभावक का पता</span><br><span>Parent Address</span></span>
                                                  </div>
                                                  <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['home_address']; ?></b></span></span>
                                                 </div>
                                             </div>


                                             <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>परिवार के उस सदस्य का नाम जिसने आपको हिन्दी सिखाई है</span><br><span>Name of a family member who has taught you hindi</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['members_name']; ?></b></span></span>
                                                      
                                                </div>
                                            </div>


                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>परिवार के सदस्य के साथ संबंध</span><br><span>Relationship with the Family Member</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['relationship']; ?></b></span></span>
                                                      
                                                </div>
                                            </div>


                                             <div class="row row-space board_div">
                                                <div class="col-board">
                                                  <span class="full_width"><span>पिन कोड</span><br><span>Pincode</span></span>
                                                </div>
                                                <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['pincode']; ?></b></span></span>
                                                </div>
                                             </div>



                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>शहर</span><br><span>City</span></span>
                                                </div>
                                                <div class="col-board">
                                                  <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['city']; ?></b></span></span>
                                                </div>
                                            </div>



                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>राज्य</span><br><span>State</span></span>
                                                </div>
                                                <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['state']; ?></b></span></span>
                                                </div>
                                            </div>

                                            <hr>

                                             <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>स्कूल का नाम</span><br><span>School Name</span></span>
                                                </div>
                                                <div class="col-board">
                                                    <?php if($res['school_name']=="others"){ ?>
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['other_school_name']; ?></b></span></span>
                                                    <?php }else{ ?>
                                                   <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['school_name']; ?></b></span></span>

                                                   <?php } ?>
                                                        
                                                </div>
                                             </div>



                                             <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>स्कूल का पता</span><br><span>School Address</span></span>
                                               </div>
                                               <div class="col-board">
                                                <?php if($res['school_name']=="others"){ ?>
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['other_school_address']; ?></b></span></span>
                                                <?php }else{ ?>
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['school_address']; ?></b></span></span>

                                                <?php } ?>
                                               </div>
                                             </div>



                                             <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>कक्षा का नाम</span><br><span>Class Name</span></span>
                                                 </div>
                                                 <div class="col-board">

                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['class']; ?></b></span></span>
                                                    </div>
                                            </div>



                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>बोर्ड परीक्षा</span><br><span>Board Exam</span></span>
                                                </div>
                                                <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['boardexam']; ?></b></span></span>
                                                </div>
                                            </div>




                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>बोर्ड क्रमांक नं</span><br><span>Board Roll Number</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['board_roll_no']; ?></b></span></span>
                                                      
                                                </div>
                                            </div>
                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>प्री बोर्ड मार्क्स</span><br><span>Pre-Board Marks</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['current_year_preboards']; ?></b></span></span>
                                                      
                                                </div>
                                            </div>

                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>हिंदी शिक्षक का नाम</span><br><span>Hindi Teacher Name</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['hnd_tech_name']; ?></b></span></span>
                                                      
                                                </div>
                                            </div>

                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>हिंदी शिक्षक मोबाइल</span><br><span>Hindi Teacher Mobile</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['hnd_tech_mob']; ?></b></span></span>
                                                      
                                                    </div>
                                            </div>
                                            <div class="row row-space board_div">
                                                <div class="col-board">
                                                    <span class="full_width"><span>अवधि और हालत</span><br><span>Term & Condition</span></span>
                                                    
                                                    
                                                 </div>
                                                 <div class="col-board">
                                                    <span class="full_width"><span>:&nbsp</span><span><b><?php echo $res['term_condition']; ?></b></span></span>
                                                      
                                                    </div>
                                            </div>

                                          <hr>

                                           

                                                 
                                           
                                        </div>
                                    </div>


                                    <!-- for img div -->



                                    <div class="border-right" id="img_div" style="background-color:whitesmoke;padding: 10px;">
                                        <div class="align-items-center text-center p-3 py-5">
                                            <img class="rounded-circle circle" width="150px" src="https://raghp.sanmarg.in/images/user_pic.png"><br>
                                            <span class="font-weight-bold"><?php echo ''.$res['fname'].' '.$res['lname'].''; ?></span><br>
                                            <span class="text-black-50"><?php echo $res['student_email']; ?></span>
                                            <span> </span>

                                        </div>
                                        <hr>
                                        <div class="row row-space board_div">
                                                <div class="full">
                                                    <h4 class="text-left"><b>All Uploaded File</b></h4>
                                                    <hr>
                                                </div>
                                                
                                                <div class="full">
                                                       <span class="full_width"><span></span>
                                                       
                                                       
                                                       
                                                       <b>Student Full Details & Registration Card=></b><span><br><a href="uploads/<?php echo 'file'.$res['id'].'.pdf';?>" target="_blank">Click to Open</a></span><br>
                                                     
                                                      


                                                       <b>Specially Abled Document=></b><span><?php 
                                                         if($res['disorder_file']){

                                                        echo $res['disorder_file'].'<br><a href="uploads/'.$res['id'].'/disorder-img/'.$res['disorder_file'].'" target="_blank">Click to Open</a>'; 
                                                       }else{
                                                        echo "No Data";
                                                       }

                                                     ?></span><br>

                                                        <b>Student Photo=></b><span><?php 
                                                        if($res['student_photo_file']){

                                                            echo $res['student_photo_file'].'<br><a href="uploads/'.$res['id'].'/student-photo/'.$res['student_photo_file'].'" target="_blank">Click to Open</a>'; 
                                                        }else{
                                                            echo "No Data";
                                                        }

                                                       ?></span><br>


                                                      <b> Hindi Name Document=></b><span><?php 
                                                        if($res['hname_file']){

                                                            echo $res['hname_file'].'<br><a href="uploads/'.$res['id'].'/hindi-name/'.$res['hname_file'].'" target="_blank">Click to Open</a>'; 
                                                        }else{
                                                            echo "No Data";
                                                        }

                                                       ?></span><br>


                                                       <b>Admit Card Document=></b><span><?php 
                                                        if($res['admit_card_file']){

                                                            echo $res['admit_card_file'].'<br><a href="uploads/'.$res['id'].'/admit-card/'.$res['admit_card_file'].'" target="_blank">Click to Open</a>'; 
                                                        }else{
                                                            echo "No Data";
                                                        }

                                                       ?></span><br>


                                                       <b>Class <?php if($res['class']=='Class-10'){
                                                        echo '9th';
                                                       }else{
                                                        echo '11th';
                                                       } ?> Marksheet Document=></b><span><?php 
                                                        if($res['class']=='Class-10'){
                                                            if($res['marksheet_one']!=""){

                                                            echo $res['marksheet_one'].'<br><a href="uploads/'.$res['id'].'/nine_marksheet/'.$res['marksheet_one'].'" target="_blank">Click to Open</a>';
                                                            }else{
                                                                echo "No data";
                                                            } 
                                                        }else{
                                                            if($res['marksheet_eleven']!=""){
                                                               echo $res['marksheet_eleven'].'<br><a href="uploads/'.$res['id'].'/marksheet_eleven/'.$res['marksheet_eleven'].'" target="_blank">Click to Open</a>';
                                                             }else{
                                                                echo "No data";
                                                             }
                                                        }

                                                       ?></span><br>


                                                        <b>Ankur Activity Document=></b><span><?php 
                                                        if($res['ankur_activity_file']){

                                                            echo $res['ankur_activity_file'].'<br><a href="uploads/'.$res['id'].'/ankur-activity/'.$res['ankur_activity_file'].'" target="_blank">Click to Open</a>'; 
                                                        }else{
                                                            echo "No Data";
                                                        }

                                                       ?></span><br>
                                                      
                                                       
                                                       
                                                       


                                                       


                                                       


                                                        <b>Marksheet File=></b><span><?php 
                                                        if($res['marksheet_file']){

                                                            echo $res['marksheet_file'].'<br><a href="uploads/'.$res['id'].'/marksheet_img/'.$res['marksheet_file'].'" target="_blank">Click to Open</a>"';
                                                        }else{
                                                            echo "No Data";
                                                        }

                                                       ?></span><br>







                                                       </span>
                                                 </div>
                                              </div> 
                                              <hr>
                                              <div class="text-center col-md-12">
                                                 <img src="images/Flame.png" width="200" height="300">
                                             </div>
                                             <div class="col-md-12 text-center my-3" style="margin-top:20px;">
                                        
                                                    <a href="logout.php" class="btn btn-warning text-dark text-center"><b><i class="fa fa-arrow-right-from-bracket"></i><span>Logout</span></b></a>
                                        
                                                        
                                             </div>
                                    </div>

                                    
                                        
                                    


                                   </div>
                    
                    </div>
                </div>
                <div class="card-footer">
                    <span>Powered By Sanmarg Pvt. Ltd.</span>
                </div>
            </div>
        </div>
    </div>

    <script src="form-2024/vendor/jquery/jquery.min.js"></script>
    <script src="form-2024/vendor/select2/select2.min.js"></script>
    <script src="form-2024/vendor/datepicker/moment.min.js"></script>
    <script src="form-2024/vendor/datepicker/daterangepicker.js"></script>
    <script src="form-2024/js/global.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- for old javascript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.steps.js"></script>
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->
    <script src="js/main.js"></script>

    <!-- jquery ui js -->
    <script src="jq_ui_js/jquery-ui.min.js"></script>
    <script  src="jq_ui_js/jquery-ui.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script>

    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
     }
     </script>


     <script type="text/javascript">
    

$(document).ready(function(){
    
    
 $(this).scrollTop(0);
 $('#upload_submit').click(function(){


    if($('#board_total_mark').val()=="" || $('#board_hindi_mark').val()=="" || $('#board_hindi_mark_perc').val()=="" || $('#Stu_marksheet').val()==""){

        Swal.fire("Please enter all 'board details'");
        return false;
    }
    else{
        return true;
    }


 });


 $("#Stu_marksheet").on("change", function() {
    var file=$('#Stu_marksheet').val();
    var ext = $('#Stu_marksheet').val().split('.').pop().toLowerCase();

    var fileSize = $("#Stu_marksheet")[0].files[0].size;//size in MB

    if($.inArray(ext, ['pdf','png','jpg']) == -1) {
       
       this.value ='';
       $("#Stu_marksheet").focus();
       Swal.fire('Please upload an acceptable file type and size');
    }
    else if(fileSize>1000000){

        
       this.value ='';
       $("#Stu_marksheet").focus();
       Swal.fire('Do not exceed the file size limit (1MB)');
    }
    
});

  $("#board_total_mark").on("change", function() {

    var val = parseInt(this.value);
    if(val > 1000 || val < 0)
    {
        
        this.value =''; 
        $("#board_total_mark").focus();    
        Swal.fire("Please enter valid 'board total hindi marks'");   
    }
              

  });

   $("#board_hindi_mark").on("change", function() {

    var val = parseInt(this.value);
    if(val > 100 || val < 0)
    {
        
        this.value =''; 
        $("#board_hindi_mark").focus(); 
        Swal.fire("Please enter valid 'hindi marks'");      
    }
              

  });

   $("#board_hindi_mark_perc").on("change", function() {

    var val = parseInt(this.value);
    if(val > 100 || val < 0)
    {
        
        this.value ='';  
        $("#board_hindi_mark_perc").focus(); 
        Swal.fire("Please enter valid 'hindi marks percentage'");     
    }
              

  });










});


</script>



</body>

</html>
<!-- end document-->


<?php }else{


    $_SESSION['msg']="Please Login First";
    header('location:studentlogin.php');


} ?>