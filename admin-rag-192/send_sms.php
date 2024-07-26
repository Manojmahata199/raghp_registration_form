<?php 
session_start();

if($_SESSION["user_type"]=='admin'){ 


   include('functions.php');

      if(isset($_GET['mobile'])){


           $mobile=$_GET['mobile'];
	        $votingportal = "RAGHP REGISTRATION-2023";
	        $comany_name = "SANMARG -";
	        $msg = "Dear student thank you for your registration on RAGHP please upload your board marks & marksheet on raghp portal";
	        $url = "http://dndopen.jhaveritechno.com/api/web2sms.php?template_id=1507165950038524313&workingkey=A060882309a58b77b66aa09fc39b9cbf3&sender=JHVERI&to=".$mobile."&message=".$msg;
	        // echo $url;
	        
	         $curl = curl_init();
	       
	        curl_setopt_array($curl, array(
	          //CURLOPT_URL => "https://api.msg91.com/api/v5/otp?template_id=6177b639e1f5e32c8c06b1e3&mobile=91".$mobile."&authkey=319664AayK0tehrinQ5e511865P1&otp=".$user_otp."",
			  //CURLOPT_URL => "https://api.msg91.com/api/v5/otp?template_id=6177b639e1f5e32c8c06b1e3&mobile=91".$mobile."&authkey=319664AayK0tehrinQ5e511865P1&sender=APVOTE&otp=".$user_otp."",
			  CURLOPT_URL => "http://dndopen.jhaveritechno.com/api/web2sms.php?template_id=1507165950038524313&workingkey=A060882309a58b77b66aa09fc39b9cbf3&sender=JHVERI&to=".$mobile."&message=Dear%20student%20thank%20you%20for%20your%20registration%20on%20RAGHP%20please%20upload%20your%20board%20marks%20&%20marksheet%20on%20raghp%20portal",
	          //CURLOPT_URL => $url,
	          CURLOPT_RETURNTRANSFER => true,
	          CURLOPT_ENCODING => "",
	          CURLOPT_MAXREDIRS => 10,
	          CURLOPT_TIMEOUT => 30,
	          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	          CURLOPT_CUSTOMREQUEST => "GET",
	          CURLOPT_POSTFIELDS => "{\"Value1\":\"Param1\",\"Value2\":\"Param2\",\"Value3\":\"Param3\"}",
	          CURLOPT_HTTPHEADER => array(
	            "content-type: application/json"
	          ),
	        ));
	         $response = curl_exec($curl);
	         $err = curl_error($curl);
	        curl_close($curl);
	        
	        if($err){
	            // return false;
	            echo "cURL Error #:" . $err;
	        } else {
	            // return TRUE ;
	             echo $response;
	            $_SESSION['msg2']="sms send successfully";
	            header('Location:export_data.php');
	        }
	     }else{

	     	      $_SESSION['msg2']="sms send successfully";
	            header('Location:export_data.php');
	     }

}else{
   //Redirect user to admin page
   header("location: index.php");
}
?>