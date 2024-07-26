 <?php 

//connect to the database
include('includes/db.php');
 //select the table
//
error_reporting(0);
 $user_id = $_GET['user_id'];
 
if(isset($_POST["Submit"])){
   $file = $_FILES['csv']['tmp_name'];
    //echo 'upload file name: '.$file.' ';
    $handle = fopen($file, "r");
    $c = 0;
    $count =0;

    while(($data = fgetcsv($handle, 1000, ",")) !== false)
    {
        $count ++;
			$borad_roll=$data[0];
			$name=$data[1];
			$board=$data[2];
			$class=$data[3];
			$center=$data[4];
			
			
        $checkExistingData = "SELECT * FROM  examqualified WHERE borad_roll='$borad_roll' ";
        $resultcheckExistingData = mysql_query( $checkExistingData);
        $countExistingData = mysql_num_rows($resultcheckExistingData);     

        if($countExistingData == 0)
        {
            if($count>1) {
                $sql = "INSERT INTO examqualified
				(
				borad_roll,
				name,
				board,
				class,
				center
				)
				VALUES
				(
				'$borad_roll',
				'$name',
				'$board',
				'$class',
				'$center'
				)";
                $resultsql = mysql_query($sql);
              
       
        }

}
}
header('Location: import.php?success=1');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Import a CSV File with PHP & MySQL</title>
</head>

<body style="background:#FECE1A">
<center>
<?php if (!empty($_GET[success])) { echo "<b>Your file has been imported.</b><br><br>"; } //generic success notice ?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<h4>Choose your file:</h4> 
  <input name="csv" type="file" id="csv" />
  <input type="submit" name="Submit" value="Submit" />
</form><br />
<a href="index.php?user_id=<?php echo $user_id?>" style="text-decoration: none">Return Previous Page</a><br>
</center>
</body>
</html>

