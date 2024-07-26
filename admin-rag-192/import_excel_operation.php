<?php
ob_start();
session_start();

include "config.php";
include "config.php";

require('library_php_excel/Classes/PHPExcel.php');
require('library_php_excel/Classes/PHPExcel/IOFactory.php');









if(isset($_POST['excel_submit'])) {


    if(isset($_FILES['excel_file']['name']) && $_FILES['excel_file']['name'] != "") {
        $allowedExtensions = array("xls","xlsx");
        $ext = pathinfo($_FILES['excel_file']['name'], PATHINFO_EXTENSION);



        
    
        if(in_array($ext, $allowedExtensions)) {
        
           $d=dirname(__FILE__)."/upload/file/";

           $file = $d.$_FILES['excel_file']['name'];
           $isUploaded = copy($_FILES['excel_file']['tmp_name'], $file);

         

            if($isUploaded) {
          
                    $objPHPExcel = PHPExcel_IOFactory::load($file);
                    
                    $sheet = $objPHPExcel->getSheet(0);
                    $total_rows = $sheet->getHighestRow();
                    $highestColumn      = $sheet->getHighestColumn(); 
                    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); 




                          //    loop over the rows
                    for ($row = 1; $row <= $total_rows; ++ $row) {
                        for ($col = 0; $col < $highestColumnIndex; ++ $col) {
                            $cell = $sheet->getCellByColumnAndRow($col, $row);
                            $val = $cell->getValue();
                            $records[$row][$col] = $val;
                        }
                    }

                    // to store records in a array for each record 

                    foreach($records as $row){

                        // print_r($row);



                    $school_name=$row[0];
                    $School_address=$row[1];
                    $school_location=$row[2];
                    $board_name=$row[3];
                    
                       
                        
                        // // Insert into database
                        $sql=" 
                         INSERT INTO `school_list`(`school_name`, `school_address`,`school_location`,`board`) VALUES ('$school_name','$School_address','$school_location','$board_name')";


                        $query=mysqli_query($conn,$sql);
                        $_SESSION['msg']="Data Imported Successfully";  
                       
                         
    
                    }
                    header('Location:addschool.php');
          
            } else {
                echo '<span class="msg">File not uploaded!</span>';
                $_SESSION['msg2']="Data Import Unsuccessfull1";
                 header('Location:addschool.php');
  
                }

        } else {
            echo '<span class="msg">Please upload excel sheet.</span>';
            $_SESSION['msg2']="Data Import Unsuccessfull2";
             header('Location:addschool.php');
  
        }
    } else {
        echo '<span class="msg">Please upload excel file.</span>';
        $_SESSION['msg2']="Data Import Unsuccessfull3";
         header('Location:addschool.php');
  
    }
}
ob_end_flush();
?>