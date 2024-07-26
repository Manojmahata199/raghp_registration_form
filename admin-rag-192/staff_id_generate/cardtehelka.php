
<?php
include "../config/variable.php";
include "../config/conn.php";
include "../library_function/functions.php";


require "vendor/autoload.php";


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
        <link rel = "icon" href ="../asset/image/sanmarglogo.jpg" type = "image/x-icon">

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



    <link rel="stylesheet" type="text/css" href="../aseet/css/bootstrap.min.css">





		
<style>
  body{
		  	background:#008080;
		  }
#bg {
  width: 1000px;
  height: 1200px;
 
   
 	float: left;
 	/*border-radius: 4%; */
 		
}

#id {
  width:482px;
  height:305px;
  position:absolute;
	  /*opacity: 0.88;*/
	/*font-family: sans-serif;
	*/
	transition: 0.4s;
	
	/*border-radius: 4%;*/
	
	
}

#id::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: url('../asset/Tehelka/Tehelka-front2.jpg');   /*if you want to change the background image replace logo.png*/
  background-repeat:repeat-y;
  background-size: 482px 305px;
 /* opacity: 0.2;*/
  z-index: -1;
  text-align:center;
  border-radius: 4%;
  margin-top: 0px;
  margin-left: 0px;
 /* transform: rotate(90deg);
*/
 
}
	


.back{
   margin-top: 3px;
  width:360px;
   height: auto;
	
	
	text-align: left;
	font-size: 10px;
	font-family: sans-serif;

	
}

.back2{
   margin-top: 3px;
  
   height: auto;
	width: 75%;
	
	
	text-align: left;
	font-size: 10px;
	font-family: sans-serif;
	margin-left: 0px;
	
}
.front{

	margin-top: 31px;
	
   
    height: 140px;
	width: 40%;
	z-index: +1;
	
	
	text-align: left;
	font-size: 12px;
	font-family: sans-serif;
	
	


}
.text{
	width: 500px;
}

.qr{

   
	
    margin-left: 300px;

   
    height:300px;
	width: 106px;
	z-index: +1;
	
	
	text-align: left;
	font-size: 12px;
	font-family: sans-serif;
	


}
.data{
	font-family: sans-serif;
	font-size: 12px;
	line-height: 12px;
	margin-left: 0px;
}
.text1{
	margin-top: 110px;
	width: 60%;
}
.text2{
	width: 90px;
}
.text3{
	width: 230px;
}
.name{

}
.text{
	font-family: sans-serif;
	font-size: 13px;
	line-height: 10px;
}



 .id-1{
  	transition: 0.4s;
  	width: 482px;
  	height: 305px;
  	background: #FFFFFF;
  	text-align:center;
  	font-size: 16px;
  	font-family: sans-serif;
  	float: left;
  	margin:auto;		  	
  	
  	
  	background: url('../asset/Tehelka/Tehelka-back2.jpg');   /*if you want to change the background image replace logo.png*/
	background-repeat:repeat-x;
	background-size: 482px 305px;
	border-radius:4%;
	margin-top: 304.6px;
	margin-left: 0px;
		  	
}
</style>
	</head>
<?php 


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
		                    <div class="d-flex">
		                    	<div class="container text1 text-center name">
			                     	<h4 class=" my-1 mx-4 text-dark"><?php echo $row['name']; ?></h4>
			                     </div>
		                    	 <div class="container front" align="center">
			             	 	 	<img src="../operation/image/img/<?php echo $row['image']; ?>" height="140" width="138" 
			             	 	 	style="align-content: center;align-items: center; margin-left: 13px;">

			                     </div>

			                     <!-- to show name on the card  -->

			                     


		                    </div>
		             	 	              
		             	 	
		                     
	                    	<div class="container back">
                                      
                                      <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Department</b></span><b>:</b><span class="text3"><b><?php echo $row['department']; ?></b></span></p>
                                      <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Designation</b></span><b>:</b><span class="text3"><b><?php echo $row['designation']; ?></b></span></p>
	                              <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Employee Id</b></span><b>:</b><span class="text3"><b><?php echo $row['emp_id']; ?></b></span></p>
	                              <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Date Of Issue</b></span><b>:</b><span class="text3"><b><?php echo $row['date_of_issue']; ?></b></span></p>
                                      <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Date Of Expiry</b></span><b>:</b><span class="text3"><b><?php echo $row['date_of_expiry']; ?></b></span></p>
	                              <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Blood Group</b></span><b>:</b><span class="text3"><b><?php echo $row['blood_group']; ?></b></span></p>
	                              
	                             
	      
	              
	                        </div>
	                       

		                    


		                 
		            </div>
		            <div class="id-1">

		            	<!-- to show qr image on the card  -->


		            	    <div class="container qr" align="center">
		             	 	  	<img src="../phpqrcode/temp/qr/<?php echo $row['qr']; ?>" height="105" width="105" style="align-content: center;align-items: center; margin-left: 20px; margin-top: 130px;">

		             	 	 	
		      
		              
		                    </div>

                       
		            </div>
	        </div>









	 <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="sidebars.js"></script>

      <script src="../asset/js/jquery-3.6.0.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

	       
	</body>
</html>
