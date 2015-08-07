<?php
    require_once("config.php");
    #http://127.0.0.1/report_pdf/query_register.php?id_register=68
    
    # link  report    http://127.0.0.1/report_pdf/report_cleft_update.php
    
 $id_register=  htmlspecialchars($_REQUEST["id_register"]);
 $today = date("F j, Y, g:i a");  
 //echo "<br>";
 
  if(strlen($id_register) > 0 && strlen( $id_register ) )
  {
       $tb="   `cleft_register`  ";
       $str="SELECT  * FROM  $tb  WHERE   id_register=$id_register;  ";
       $obj=  mysql_query($str) or die(" mysql server  error!!");
       $ck_num=mysql_num_rows($obj );
       $count_field =mysql_num_fields($obj);
      

       if( $ck_num > 0 )
       {
                  $arr_va=array();    
             while($obj=  mysql_fetch_array($obj))
             {
                  //  echo  $arr_va[$i]= $obj[$i];
                  //  echo "<br>";
                     for($i=0;$i<$count_field;$i++)
                     {
                         //echo $i;                       
                          $arr_va[$i]= $obj[$i];
                          //echo "<br>";

                     }
              }
       }
       
  }
    
?>

