<?php
require_once "config.php";


         $today_date=date('d-m-Y');


	  $sql="SELECT * from `rgb_cupon` ORDER BY `id` ASC";
	  $query=mysqli_query($conn,$sql);
	  $res=array();
	  while($resultarray=mysqli_fetch_array($query)){
              $res[]=$resultarray;
	  }

       // This is for get all result in table field for export
      
	   $html='<table style="text-align:center;">
	   <tr>
	            <td>Serial Number</td>
	            <td>Coupon Code</td>
	            <td>Coupon Date</td>
	            
	   </tr>';

              foreach($res as $result) {

            	       $html.='<tr>
            	            
            	            <td>'.$result['id'].'</td>
            	            <td>'.$result['code'].'</td>
            	            <td>'.$result['srt_date'].'</td>	            	                                  
            	       </tr>';	            	           
            	           
              }


	       $html.='</table>';

	       header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
		header("Content-type:   application/x-msexcel; charset=utf-8");
		header("Content-Disposition: attachment; filename=RAGHP_COUPON_LIST(".$today_date.").xls"); 
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);
			
	      echo $html;

exit();

 ?>