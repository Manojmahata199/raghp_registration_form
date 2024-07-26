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



                    $winner_roll_no=$row[0];
                    $winner_name=$row[1];
                    $winner_class=$row[2];
                    $winner_board=$row[3];
                    
                    
                    
                       
                        
                        // // Insert into database
                        $sql=" 
                         INSERT INTO `winner_list`(`reg_id`, `winner_name`, `winner_class`, `winner_board`) VALUES ('$winner_roll_no','$winner_name','$winner_class','$winner_board')";


                        $query=mysqli_query($conn,$sql);
                        $_SESSION['msg']="Data Imported Successfully";  
                       
                         
    
                    }
                    header('Location:winner_list_form.php');
          
            } else {
                echo '<span class="msg">File not uploaded!</span>';
                $_SESSION['msg2']="Data Import Unsuccessfull1";
                 header('Location:winner_list_form.php');
  
                }

        } else {
            echo '<span class="msg">Please upload excel sheet.</span>';
            $_SESSION['msg2']="Data Import Unsuccessfull2";
             header('Location:winner_list_form.php');
  
        }
    } else {
        echo '<span class="msg">Please upload excel file.</span>';
        $_SESSION['msg2']="Data Import Unsuccessfull3";
         header('Location:winner_list_form.php');
  
    }
}
ob_end_flush();
?>