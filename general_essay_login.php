<?php
/* Redirect browser */
header("Location: https://raghp.sanmarg.in/studentlogin.php"); 
exit();

	session_start();

?>
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="css/A.style.css.pagespeed.cf.eQk9-CoeFP.css">-->
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RAGHP Registration Form 2024</title>
	 <!-- add icon link -->
        <link rel = "icon" href ="images/RAGLOGO_2022.png" type = "image/x-icon">

    <!-- Font Icon -->	  
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel = "Stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
		
    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/email-style.css">
    <!--<link rel="stylesheet" type="text/css" href="css/style2.css.map">-->
     <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    
    <link rel="stylesheet" type="text/css" href="css/email-style.css" />


    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type = "text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type = "text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript" src="js2/jquery-3.6.0.min.js"></script>
 <style>
    .cascading-right {
      margin-right: -50px;
    }

  @media (max-width: 991.98px) {
  
	  .cascading-right {
      margin-right: 0;
    }
 }


 @media (min-width: 768px) {
    #nav-img{
	    height:210px;
	    width:  100%;
	    
	  }
	  #top-nav{
	  	height:210px ;
	  }
  #paragrp{
  	font-size:15px;
  	
  }
   #top_heading{
     font-size: 15px;
  }
  #paragrp{
		margin-top: 20px;
	}
}
@media (min-width: 991.98px) {
    #nav-img{
	    height:210px;
	    width:  100%;
	    
	  }
	  #top-nav{
	  	height:230px;
	  }
	  
 }

@media (max-width: 768px) {
   #nav-img{
	    height:100px;
	    width:  100%;
	    
	  }
	  #top-nav{
	  	height:100px;
	  }
  #paragrp{
  	font-size:8px;
  	

  }
  #top_heading{
     font-size: 10px;
  }
}
@media (max-width: 500px) {
   #btn-log{
   	font-size: 10px;
   }

}


  </style>
  

<body class="img js-fullheight">
	<div class="main">
		<div class="" id="top-nav" style="background-color: #fee588;">
		      <img src="images/Header_Banner1.webp" class="" id="nav-img" alt="Ram Awatar Gupt Protsahan-2022" style="background-size: cover;background-repeat: no-repeat;">		 
		</div>
		<div class="col-md-12" id="back" style="background-image: url(images/rag_website_bg.webp);">
        <div class="container rounded-3" style="background-color: #fffae6; margin-top:20px;">
	    
		    <div class="navbar" style="text-align:center;align-content: center;align-items: center;background-color:#ae2627 ;font-size: 25px;color: #fff;">
				 
				  
				    <h3 class="text-center my-2" style="font-size:25px; font-weight:700; color:#fff;">-2024-</h3>
				  
		    </div>
							<div class="signup-form">

							    <!---- Form area started  action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"---->
					            <form id="rag2020-form"  method="post" autocomplete="on" enctype="multipart/form-data" action="general_essay_login_op.php">           
					            <!-- SECTION 1 -->
					            <div class="form-group top-section2 text-center" id="paragrp"> 			
					                <h4 class="mandatory-heading" id="top_heading"><b>हिंदी का गौरव [Hindi Ka Gaurav]<span class="mandatory-heading">(<span class="main-req-col">*</span>)</span></b></h4>
					                <hr class="text-dark">
					                <p class="mb-4 text-center text-dark" >कृपया अपना रजिस्टर्ड  <b>ईमेल आईडी</b> और अंतिम 7 अंकों का <b>यूनिक रोल नम्बर</b> दर्ज करें (जैसे:
		                      <b>0000001</b>)<br>Please enter your registered <b>Email ID</b> & last 7 digits of <b>Unique Roll Number</b> (Like:
					                	<b>0000001</b>).</p>
									  		<hr class="text-dark">
								       </div>

					      
										<!-- <section class="vh-100" style="background-color: #508bfc;"> -->
										  <div class="container" style="background-color: #fffae6;">
										    <div class="row d-flex justify-content-center align-items-center h-100" >
										      <div class="col-12 col-md-8 col-lg-6 col-xl-5">


										      	 


										        <div class="card shadow-2-strong" style="border-radius: 1rem;background-color: #fee588;">

										        	<?php if(isset($_SESSION['msg'])){ ?>

				                                    <div class="col-lg-12 bg-danger my-1 py-4">

				                                      <h5 class="text-light text-center"><?php echo $_SESSION['msg']; ?></h5>
				                                    </div>


				                        <?php  unset($_SESSION['msg']);}?>


										          <div class="card-body p-5 text-center">


										          	



										            <h3 class="mb-4">लॉग इन/LOGIN</h3>
										            <hr>

										            <div class="form-outline mb-2">
										            	<label for=""><span class="label-hindi">ईमेल आईडी</span><span class="req-col text-danger">*</span><br><span class="label-eng">EMAIL ID</span></label>
										              <input type="stu_email" id="stu_email" name="stu_email" class="form-control form-control-lg"   />
										     
										            </div>

										            <div class="form-outline mb-2">
										            	<label for=""><span class="label-hindi">यूनिक रोल नम्बर</span><span class="req-col text-danger">*</span><br><span class="label-eng">UNIQUE ROLL NUMBER</span></label>
										            	<input type="stu_reg_id" id="stu_reg_id" name="stu_reg_id" maxlength="7" class="form-control  form-control-lg"   />
										            							                						          
										            </div>

										                <hr class="my-4">

										            <button class="btn btn-lg btn-block" style="background-color:#ae2627; color:#fff;" type="submit" name="submit">लॉग इन करें(LOGIN)</button>
										            
										            <!--<h3 class="text-center"><b>Closed</b></h3>-->

										       

										           

										          </div>
										        </div>
										      </div>
										    </div>
										  </div>
										<!-- </section> -->


					    </form>
					</div><br><br><br>
		       
		
					  

			
			  </div>
	    </div>
		 <nav class="navbar" id="footer_main">
    	
       <footer id="footer" style="background-color:#ae2627;color: #fff;" class="navbar bottom-0">Powered By Sanmarg Pvt. Ltd.</footer>

     </nav>

     </div>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.steps.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>



 <script>if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
     }
  </script>




<script>eval(mod_pagespeed_T07FyiNNgg);</script>
<script>eval(mod_pagespeed_zB8NXha7lA);</script>
<script>eval(mod_pagespeed_xfgCyuItiV);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71788cd2e92c94b8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>




</body>
</html>
