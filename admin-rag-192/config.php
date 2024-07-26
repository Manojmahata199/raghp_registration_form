<?php

	$servername = "localhost";
	$username = "root";
	$password = "";	
	$dbName = "sanmatob_rag2022";

// $base_url = '//rag2020/';
// $rootUrl = '//rag2020/';
// if( ! ini_get('date.timezone') )
// {
//     date_default_timezone_set('Asia/Kolkata');
// }

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed:didnt not get " . $conn->connect_error);
// }
// //echo "Connected successfully";
// mysqli_select_db($conn,$dbName);
// mysqli_set_charset($conn,'utf8');//this preventes the appearing of the strange characters
	$conn=mysqli_connect($servername,$username,$password,$dbName);
	
// 	if($conn){
// 	    echo "connection successfull";
// 	}else{
// 	    echo "connection faild";
	    
// 	}
// 	die();

?>