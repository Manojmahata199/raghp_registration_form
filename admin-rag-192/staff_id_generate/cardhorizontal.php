
<?php
include "../config/variable.php";
include "../config/conn.php";
include "../library_function/functions.php";


require "vendor/autoload.php";


$serial="0001";
$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($serial, $Bar::TYPE_CODE_128);


if(isset($_GET['card_id']) and isset($_GET['id'])) {     

        $card_id=$_GET['card_id'];
        $id=$_GET['id'];
     

		$sql="SELECT * FROM `card` WHERE `id`='$card_id'";
		$query=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($query);
		// if($num>0){
		// 	header('Location:../all-page/select_card.php');
		// }
		$row=mysqli_fetch_array($query);




       if(isset($_GET['id'])){

          $id=$_GET['id'];
       


        //$id=$_SESSION['card_id'];
        $sql2="SELECT * FROM `employee_table2` where `id`='$id'";
        $query2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_assoc($query2);
        
         $dob=$row2['date_of_birth'];
        $date_of_birth = date( 'd-m-y', strtotime( $dob ) );


        $dou=$row2['date_of_issue'];
        $date_of_issue = date( 'd-m-y', strtotime( $dou ) );



        $doe=$row2['date_of_expiry'];
        $date_of_expiry = date( 'd-m-y', strtotime( $doe ) );

        }

        

}	                                    	






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
  
  float: left;

 		
}



#id{
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
   width:482px;
  height:305px;
 
  transition: 0.4s;


 <?php if($row['front_img']){ ?>
      background: url('../all-page/image/img/<?php echo $row['front_img']; ?>');  /* if you want to change the background image replace logo.png */  /*variable one for image*/
  <?php } 
  else{  ?>
     background: url('');
 <?php }  ?>


  background-repeat:repeat-y;
  background-size: 482px 305px;
  z-index: -1;
  text-align:center;
  border-radius: 4%;
  margin-top: 0px;
  margin-left: 0px;

 
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
  	
  	
  	<?php if($row['back_img']){ ?>
      background: url('../all-page/image/img/<?php echo $row['back_img']; ?>');  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         background: url('');
     <?php }  ?>
    

	background-repeat:repeat-x;
	background-size: 482px 305px;
	border-radius:4%;
	margin-top: 304.6px;
	margin-left: 0px;
		  	
}
	


.back{

	 <?php if($row['mt_info']){ ?>
      margin-top:<?php echo $row['mt_info']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-top: 180px; 
     <?php }  ?>
       /*variable*/ 


       <?php if($row['ml_info']){ 


        $ml_info=$row['ml_info'];
        $new_ml_info=$ml_info+10;
        ?>
      margin-left:<?php echo $new_ml_info; ?>px;   if you want to change the background image replace logo.png   /*variable one for image*/*/
      <?php } 
      else{  ?>
         margin-left: 35px;  
     <?php }  ?>
      /*variable*/


      <?php if($row['mr_info']){ ?>
      margin-right:<?php echo $row['mr_info']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-right: ; 
     <?php }  ?> 
        /*variable*/


        <?php if($row['mb_info']){ ?>
      margin-bottom:<?php echo $row['mb_info']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-bottom: ;
     <?php }  ?> 


         /*variable*/ */


  
   margin-right: ;
   margin-bottom: ;
  
   

   height: auto;
	
	
	text-align: left;
	font-size: 10px;
	font-family: sans-serif;
	line-height: 8px;

	
}


.front{
	position: absolute;


	 <?php if($row['mt_img']){ ?>
      margin-top:<?php echo $row['mt_img']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
        margin-top: 31px;
     <?php }  ?>
       /*variable*/ 


       <?php if($row['ml_img']){ 

       	$ml_img=$row['ml_img'];
       	$new_ml_img=$ml_img+11;
       	?>
      margin-left:<?php echo $new_ml_img; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
        margin-left: 315px;
     <?php }  ?>
      /*variable*/


      <?php if($row['mr_img']){ ?>
      margin-right:<?php echo $row['mr_img']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-right: ; 
     <?php }  ?> 
        /*variable*/


        <?php if($row['mb_img']){ ?>
      margin-bottom:<?php echo $row['mb_img']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-bottom: ;
     <?php }  ?> 
         /*variable*/ 

	
	
   
    height: 145px;
	width: 136px;
	z-index: +1;
	
	
	text-align: left;
	font-size: 12px;
	font-family: sans-serif;
	background-color: red;
	
	


}

.qr{

   position: absolute;



   <?php if($row['mt_qr']){ ?>
      margin-top:<?php echo $row['mt_qr']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-top: 130px; 
     <?php }  ?>
       /*variable*/ 


       <?php if($row['ml_qr']){
       $ml_qr=$row['ml_qr'];
       $new_ml_qr=$ml_qr+12; ?>
      margin-left:<?php echo $new_ml_qr; ?>px;   /*if you want to change the background image replace logo.png*/   /*variable one for image*/*/
      <?php } 
      else{  ?>
         margin-left: 350px;  
     <?php }  ?>
      /*variable*/


      <?php if($row['mr_qr']){ ?>
      margin-right:<?php echo $row['mr_qr']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-right: ; 
     <?php }  ?> 
        /*variable*/


        <?php if($row['mb_qr']){ ?>
      margin-bottom:<?php echo $row['mb_qr']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
         margin-bottom: ;
     <?php }  ?> 
         /*variable*/ */


	
  

   
    height:90px;
	width: 90px;
	z-index: +1;
	
	
	background-color: red;


}

.name{
	position: absolute;


	 <?php if($row['mt_name']){ ?>
      margin-top:<?php echo $row['mt_name']; ?>px;  /* if you want to change the background image replace logo.png */  /*variable one for image*/
      <?php } 
      else{  ?>
       margin-top: 120px;  /*variable*/ 
     <?php }  ?>
       /*variable*/ 


       <?php if($row['mb_name']){ ?>
      margin-left:<?php echo $row['mb_name']; ?>px;   if you want to change the background image replace logo.png   /*variable one for image*/*/
      <?php } 
      else{  ?>
      margin-bottom: 0px;  /*variable*/
     <?php }  ?>
      /*variable*/
    /*margin-top: 5px;
    margin-bottom: 0px;
     */
    margin-left: 30px;

	
	


	width: 280px;
	height: auto;

}




.text1{
	margin-top: 110px;
	width: 60%;
	
	<?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>


}
.text2{
	width: 90px;
	


	<?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>


}
.text3{
	width: 230px;
	


	<?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>


}

.text{
	font-family: sans-serif;
	font-size: 10px;
	line-height: 10px;
	


	<?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>


}

.text5{
   
   <?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>


       
   
    text-align: center;
    align-items: center;
    font-family: sans-serif;
    font-size: 12px;
    line-height: 7px;

}
.text6{


     <?php if($row['text_color']){ ?>
         color:<?php echo $row['text_color']; ?>; /*variable */
      <?php } 
      else{  ?>
          color: black;
     <?php }  ?>




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
		                   
	                    	<div class="container text-center name" id="name">
                                <h6 class="text-center  text6" id="name2"><b><?php echo $row2['name']; ?></b></h6>
                                <h6 class="text-center text5 t" id="name2"><b><?php echo $row2['department']; ?></b></h6>
                                <h6 class="text-center text5 t" id="name2"><b><?php echo $row2['designation']; ?></b></h6>
                             </div>
	                    	<div class="container front"  id="img">
                                <img src="../operation/image/img/<?php echo $row2['image']; ?>" height="145" width="136" style="margin-left: -12px;">

                            </div>

		                     <!-- to show name on the card  -->

			                     


		                   
		             	 	
		                     
	                    	<div class="container back">
                                  <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Company Name</b></span><b>:</b><span class="text3"><b><?php echo $row2['company_id']; ?></span></b>
	                              <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Employee Id</b></span><b>:</b><span class="text3"><b><?php echo $row2['emp_id']; ?></b></span></p>
	                              
	                              <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Blood Group</b></span><b>:</b><span class="text3"><b><?php echo $row2['blood_group']; ?></b></span></p>
	                              <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Date Of Birth</b></span><b>:</b><span class="text3"><b><?php echo $date_of_birth; ?></b></span></p>
	                              <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Date Of Issue</b></span><b>:</b><span class="text3"><b><?php echo $date_of_issue; ?></b></span></p>
	                              <p class="my-1 fs-16 text text-dark d-flex"><span class="text2"><b>Date Of Expiry</b></span><b>:</b><span class="text3"><b><?php echo $date_of_expiry; ?></b></span></p>
	                             
	      
	              
	                        </div>
	                       

		                    


		                 
		            </div>
		            <div class="id-1">

		            	<!-- to show qr image on the card  -->


		            	    <div class="container qr">
		             	 	  	<img src="../phpqrcode/temp/qr/<?php echo $row2['qr']; ?>" height="90" width="90" style="margin-left: -12px;">

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
