
<?php
include "../config/variable.php";
include "../config/conn.php";
include "../library_function/functions.php";


require "vendor/autoload.php";
if(!isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){ header('location:index.php');
      exit;}
	

$serial="0001";
$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($serial, $Bar::TYPE_CODE_128);
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>


 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Id Card Generator-sanmarg.in</title>
     <!-- add icon link -->
        <link rel = "icon" href ="<?php echo base_link;?>asset/image/sanmarglogo.jpg" type = "image/x-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">

    

	    <!-- Bootstrap core CSS -->
	<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	    <!-- Favicons -->
	<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#7952b3">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/A.style.css.pagespeed.cf.69oUKoK-5A.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <link rel="stylesheet" type="text/css" href="<?php echo base_link;?>aseet/css/bootstrap.min.css">





		
<style>
  body{
		  	background:#008080;
		  }
#bg {
  width: 1000px;
  height: 410px;
 
  margin:60px;
 	float: left;
 	border-radius: 10%; 
 		
}

#id {
  width:410px;
  height:250px;
  position:absolute;
	  /*opacity: 0.88;*/
	/*font-family: sans-serif;
	*/
	transition: 0.4s;
	
	border-radius: 10%;
}

#id::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: url('<?php echo base_link;?>asset/Tehelka/Tehelka-front.jpg');   /*if you want to change the background image replace logo.png*/
  background-repeat:repeat-x;
  background-size: 410px 250px;
 /* opacity: 0.2;*/
  z-index: -1;
  text-align:center;
  border-radius: 10%;

 
}
	


.back{
	margin-top: 8px;
   
   height: 100px;
	width: auto;
	

	text-align: left;
	font-size: 8px;
	font-family: sans-serif;
	margin-left: -45px;
	
}
.back2{
	margin-top: 8px;
   
   height: 100px;
	width: auto;
	

	text-align: left;
	font-size: 8px;
	font-family: sans-serif;
	
}
.front1{

    text-align: left;
	font-size: 8px;
	font-family: sans-serif;
	width: auto;


}
.front2{

    text-align: left;
	font-size: 8px;
	font-family: sans-serif;
	width: auto;
	margin-left: -55px;


}
.front{

	margin-top: 98px;
    margin-left: 75px;
   
    height: 139px;
	width: 100px;
	z-index: +1;
	
	
	text-align: left;
	font-size: 12px;
	font-family: sans-serif;
	

}

.qr{


	margin-top: 28px;
 
   
    height: 88px;
	width: 80px;
	z-index: +1;
	
	
	text-align: left;
	font-size: 12px;
	font-family: sans-serif;
	



}
.data{
	font-family: sans-serif;
	font-size: 12px;
	line-height: 13px;
}


 .id-1{
  	transition: 0.4s;
  	width:410px;
  	height:250px;
  	background: #FFFFFF;
  	text-align:center;
  	font-size: 16px;
  	font-family: sans-serif;
  	float: left;
  	margin:auto;		  	
  	margin-left:500px;
  	
  	background: url('<?php echo base_link;?>asset/Tehelka/Tehelka-back.jpg');   /*if you want to change the background image replace logo.png*/
	background-repeat:repeat-x;
	background-size: 410px 250px;
	border-radius:4%;

		  	
}
</style>
	</head>
<?php 
include_once("db_connect.php");

if(isset($_GET['id'])){



        $id=$_GET['id'];
        $sql="SELECT * FROM `employee_table2` where `id`='$id'";
        $query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($query);

        
      
       


        


    }

	                                    
?>
	<body>
		<script type="text/javascript">	
 		
		 	window.print();
		  setTimeout(function(){
		    window.close()
		  },750)
          </script>
 
	       <div id="bg">
		            <div id="id">
		            	
		                    <!-- to show image on the card  -->
		             	 	              
		             	 	 <div class="container front" align="center">
		             	 	 	<img src="<?php echo base_link; ?>asset/image/img/<?php echo $row['image']; ?>" height="139" width="100" style="align-content: center;align-items: center; margin-left: -13px;">

		             	 	 	
		      
		              
		                     </div>

		                     <!-- to show name on the card  -->
		                     <div class="container row text-center my-1 mx-1">
			                     	<h6 class="text-center text-dark"><?php echo $row['name']; ?></h6>
			                 </div>


		                     <div class="d-flex">
		                     	<div class="container front1">
		                     	
			                     	<p class="my-1 fs-16 data text-dark"><b>Company Name</b></p>
			                     	<p class="my-1 fs-16 data text-dark"><b>Date of Issue</b></p>
	                                <p class="my-1 fs-16 data text-dark"><b>Date Of expiry</b></p>
		                        </div>
			                     <div class="container front2">
			                     	
			                     	<p class="my-1 fs-16 data text-dark"><b>: <?php echo $row['company_id']; ?></b></p>
			                     	<p class="my-1 fs-16 data text-dark"><b>: <?php echo $row['date_of_issue']; ?></b></p>
	                                <p class="my-1 fs-16 data text-dark"><b>: <?php echo $row['date_of_expiry']; ?></b></p>
			                     </div>


		                     </div>

		                    
		                 
		            </div>
		            <div class="id-1">

		            	<!-- to show qr image on the card  -->


		            	    <div class="container qr" align="center">
		             	 	  	<img src="<?php echo base_link;?>phpqrcode/<?php echo $row['qr']; ?>" height="88" width="82" style="align-content: center;align-items: center;margin-left: -12px;">

		             	 	 	
		      
		              
		                    </div>


		                    <!-- to show employee all data on the card  -->
		                    <div class="d-flex">
		                    	<div class="container back2">
		                    		 <p class="my-1 fs-16 data text-dark"><b>Id</b></p>
		                             <p class="my-1 fs-16 data text-dark"><b>Date Of Birth</b></p>
		                             <p class="my-1 fs-16 data text-dark"><b>Mobile No</b></p>
		                             <p class="my-1 fs-16 data text-dark"><b>Emargency No</b></p>
		                           
		                             <p class="my-1 fs-16 data text-dark"><b> Blood Group</b></p>
		                              <p class="my-1 fs-16 data text-dark"><b> Joining Date</b></p>
		                             <p class="my-1 fs-16 data text-dark"><b> Department</b></p>



		                    	</div>
		                    	<div class="container back" align="center">
		                              <p class="my-1 fs-16 data text-dark"><b>: <?php echo $row['emp_id']; ?></b></p>
		                              <p class="my-1 fs-16 data text-dark"><b>: <?php echo $row['date_of_birth']; ?></b></p>
		                              <p class="my-1 fs-16 data text-dark"><b>: <?php echo $row['mobile']; ?></b></p>
		                              <p class="my-1 fs-16 data text-dark"><b>: <?php echo $row['emargency']; ?></b></p>
		                            
		                              <p class="my-1 fs-16 data text-dark"><b>: <?php echo $row['blood_group']; ?></b></p>
		                              <p class="my-1 fs-16 data text-dark"><b>: <?php echo $row['joining_date']; ?></b></p>
		                              <p class="my-1 fs-16 data text-dark"><b>: <?php echo $row['department']; ?></b></p>
		      
		              
		                        </div>
		                    	



		                    </div>
	                     	 
                     	 	
                     	 
	                         
		            </div>
	        </div>









	 <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="sidebars.js"></script>

      <script src="<?php echo base_link;?>asset/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_link;?>asset/js/bootstrap.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

	       
	</body>
</html>
