<?php



include('../database.php');
ini_set('upload_max_filesize', '5M');



$location=urldecode($_POST['location']);
$board_name=urldecode($_POST['board_name']);




//$school=addslashes($school);
$sql="select * from `school_list` where `school_location`='$location' and `board`='$board_name'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);


// $school_list=array();
// while($row=mysqli_fetch_array($result)){

//   $school_list[]=$row['school_name'];

// }

// $school=array();
if(mysqli_num_rows($result)>0){

     echo '<option value="">अपने स्कूल का नाम चुनें/Select Your School Name</option>';
     // foreach($school_list as $list){
     while($row=mysqli_fetch_assoc($result)){ 

          echo '<option value="'.$row['school_name'].'">'.$row['school_name'].'</option>'; 
     }
     echo '<option value="others">OTHERS</option>';
}else{

     echo '<option value="">अपने स्कूल का नाम चुनें/Select Your School Name</option>';
     echo '<option value="others">सूची में कोई स्कूल नहीं/No School in the list</option>';


      echo '<option value="others">OTHERS</option>';     
}





