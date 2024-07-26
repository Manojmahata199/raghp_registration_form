
<?php
session_start();
include "../config.php";
require "vendor/autoload.php";

       
        


if(isset($_GET['id'])) {     

        
        $id=$_GET['id'];
     

		$sql="SELECT * FROM `winner_list` WHERE `id`='$id'";
		$query=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($query);
		if($num<0){
			header('Location:../winner_list.php');
		}
		$row=mysqli_fetch_array($query);
        
        

}	                                    	

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
    <title>RAGP CERTIFICATE-<?php echo $row['reg_id']; ?></title>
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
		  	font-size:12px;
            color: #ae2627;

		  }
#bg {
 
 
   
 	float: left;
 	border-radius: 2%; 
 		
}

#id {
   position: absolute;
   width:444.5mm;
   height:314mm;
  
   background: url('../assets/img/certificate_kolkata.jpg');  /* if you want to change the background image replace logo.png */  /*variable one for image*/
 
  background-size: cover;
 
  /* background-size: 305px 482px;*/
  text-align:center;
 
 
  margin-left: 0.5px;
  background-color: red;
  margin-top: 0px;
  font-size:12px;
  
   
}
#roll_no{
    margin-top: 155px;
    margin-left: 1300px;
    font-size:12px;
    
    width: 300px;
    text-align: left;
    
   
}
#name{
    margin-top: 360px;
    
    width: 100%;
    text-align: center;
    font-weight: bold;
}
#class_board{
   width:1000px;

   width: 100%;
   text-align: center;
   font-weight: bold;
}
.class{
    margin-top: 60px;
    margin-left: 70px;
   
    width: 390px;
    text-align: center;
    font-weight: bold;
}
.board{
    margin-top: 60px;
    margin-left: 60px; 
    width:500px;
    
    width: 390px;
    text-align: center;
    font-weight: bold;
    
}
.text{
   font-weight: bold; 
}






}
</style>
	</head>

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
                                          
                             <div class="container front"  id="roll_no">
                                <h3 class="text-left" style="font-size:21px;"><?php echo $row['reg_id']; ?></h3>
                    
                             </div>

                             <!-- to show name on the card  -->

                            <div class="container text-center" id="name">
                                <h1 class="text-center text" ><?php echo $row['winner_name']; ?></h1>
                                
                             </div>
                             <div class="container text-center d-flex" id="class_board">
                                 <div class="container text-center d-flex">
                                    <h2 class="text-center class text"><?php echo $row['winner_class']; ?></b></h2>
                                     
                                 </div>
                                 <div class="container text-center d-flex">
                                    <h2 class="text-center board text"><?php echo $row['winner_board']; ?></h2>
                                     
                                 </div>
                             </div>
                            
                           
                         
                    </div>
		           
	        </div>









	 <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="sidebars.js"></script>

      <!--<script src="asset/js/jquery-3.6.0.min.js"></script>-->
    <!--<script src="asset/js/bootstrap.min.js"></script>-->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

	       
	</body>
</html>
