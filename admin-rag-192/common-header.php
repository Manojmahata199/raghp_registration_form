<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rag Registration Form Admin</title>

    <!-- add icon link -->
        <link rel = "icon" href ="images/signup-img.jpg" type = "image/x-icon">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">  	 
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <style type="text/css">
       #page-wrapper{
        min-height: 970px;
       }
       @media(min-width:768px) {
             #page-wrapper{
                 
                min-height: 970px;
                
            }
            
        }
   </style>
</head>
<body>
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand rag-custom-link" href="#">राम अवतार गुप्त प्रतिभा पुरस्कार <br>Ram Awatar Gupt Pratibha Puraskar</a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="logout.php" style="color:#fff;">Logout</a>  

                </span>
            </div>
        </div>
        <!--  /. NAV TOP   -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                
                   <li class="active-link">
                        <a href="dashboard.php" ><i class="fa fa-desktop "></i>Dashboard<span class="badge"></span></a>
                    </li>
                <?php if($_SESSION["user_type"]=='admin'){ ?>
					<li class="link">
                        <a href="register.php" ><i class="fa fa-user"></i>Register New Admin User<span class="badge"></span></a>
                    </li>
					<li class="link">
                        <a href="addschool.php" ><i class="fa fa-university"></i>Add New School<span class="badge"></span></a>
                    </li>
                <?php } ?>
					<li class="link">
                        <a href="export_data.php" ><i class="fa fa-file-excel-o"></i>Export Student Data<span class="badge"></span></a>
                    </li>
                   <!--  <li class="link">
                        <a href="export_aparajay_data.php" ><i class="fa fa-file-excel-o"></i>Export SA-Student Data<span class="badge"></span></a>
                    </li>	 -->
					<li class="link">
                        <a href="student-data.php" ><i class="fa fa-graduation-cap"></i>Check Student Data<span class="badge"></span></a>
                    </li>	

                    <!-- <li class="link">
                        <a href="aparajay_student_data.php" ><i class="fa fa-graduation-cap"></i>Check SA-Student Data<span class="badge"></span></a>
                    </li> -->
                     <li class="link">
                        <a href="winner_list.php" ><i class="fa fa-envelope"></i>Winner List<span class="badge"></span></a>
                    </li>
                     <li class="link">
                        <a href="winner_list_form.php" ><i class="fa fa-envelope"></i>Add Winner<span class="badge"></span></a>
                    </li>

                  <?php if($_SESSION["user_type"]=='admin'){ ?>
					<!-- <li class="link">
                        <a href="verify-record.php" ><i class="fa fa-thumbs-up"></i>Verify Student Data<span class="badge"></span></a>
                    </li>
					<li class="link">
                        <a href="not-verify-record.php" ><i class="fa fa-thumbs-down"></i>Student Data Not Verify<span class="badge"></span></a>
                    </li>
					<li class="link">
                        <a href="qualify-record.php" ><i class="fa fa-th-list"></i>Qualify Student<span class="badge"></span></a>
                    </li>
					<li class="link">
                        <a href="disqualify-record.php" ><i class="fa fa-th-list"></i>DisQualify Student<span class="badge"></span></a>
                    </li>
					<li class="link">
                        <a href="qualified-list.php" ><i class="fa fa-key"></i>Qualified Student<span class="badge"></span></a>
                    </li>
					<li class="link">
                        <a href="disqualified-list.php" ><i class="fa fa-key"></i>DisQualified Student<span class="badge"></span></a>
                    </li> -->
					<!--<li class="link">-->
     <!--                   <a href="delete-record.php" ><i class="fa fa-eraser"></i>Delete Student Data<span class="badge"></span></a>-->
     <!--               </li>-->
					<li class="link">
                        <a href="mail-verified.php" ><i class="fa fa-envelope"></i>Mail To Verified<span class="badge"></span></a>
                    </li>

                   <!--  <li class="link">
                        <a href="aparajay_mail_verified.php" ><i class="fa fa-envelope"></i>Mail To Verified Aparajay<span class="badge"></span></a>
                    </li> -->


                    <li class="link">
                        <a href="data_import_registration.php" ><i class="fa fa-envelope"></i>Import Student Data<span class="badge"></span></a>
                    </li>
                   
                   <!--  <li class="link">
                        <a href="new_export_data.php" ><i class="fa fa-envelope"></i>New_reg_data<span class="badge"></span></a>
                    </li> -->
				<?php } ?>	
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->