<?php
require_once("config.php");
 $lastname= trim($_GET["lastname"]);
//echo "<br>";
 $firstname= trim($_GET["firstname"]);
//echo "<br>";
 $id_course=trim($_GET["id_course1"]);
 
  $id_course2=trim($_GET["id_course2"]);
 
 $total_fee=trim($_GET["total_fee"]);
 
 /*
 if( strlen($total_fee ) > 0    )
 {
     // ให้คูณด้วย 33.33
     $ex_total=export(" ",$total_fee); //90 USD / 3000 Baht
     $multi1 =  $ex_total * 33.33;
     $detail_total = $ex_total[0]." USD / ".$multi1." Baht";
 }
  */
 
 
  if( strlen( $total_fee ) > 0    )
 {
         $ex_total=explode(" ",$total_fee); //90 USD / 3000 Baht  
         $multi1 = round( $ex_total[0]*33.33 ); 
         $detail_total = $ex_total[0]." USD / ".$multi1." Baht";
 }
 
 
 
 if(strlen($id_course) > 0 )
 {
     switch ($id_course)
     {
         case 11:
         {
            $de_course="Docter/Dentist Pre-Congress 17 Nov,15";
            $de_course2="Pre-Congress 17 Nov,15";
             break;
         }
         case 12:
         {
            $de_course="Mulitdisciplinary Pre-Congress 17 Nov,15";
            $de_course2="Pre-Congress 17 Nov,15";
             break;
         }
           case 13:
         {
            $de_course="Resident Pre-Congress 17 Nov,15";
            $de_course2="Pre-Congress 17 Nov,15";
             break;
         }
           case 21:
         {
            $de_course="Docter/Dentist Early Bird Before 31 July,2015";
            $de_course2="Early Bird Before 31 July,2015";
             break;
         }
            case 22:
         {
            $de_course="Mulitdisciplinary Early Bird Before 31 July,2015";
            $de_course2="Early Bird Before 31 July,2015";
             break;
         }
          case 23:
         {
            $de_course="Resident Early Bird Before 31 July,2015";
            $de_course2="Early Bird Before 31 July,2015";
             break;
         }
           case 31:
         {
            $de_course="Docter/Dentist August-before16 Nov,15";
            $de_course2="Early Bird Before 31 July,2015";
             break;
         }
           case 32:
         {
            $de_course="Mulitdisciplinary August-before16 Nov,15";
            $de_course2="August-before16 Nov,15";
             break;
         }
            case 33:
         {
            $de_course="Resident August-before16 Nov,15";
             $de_course2="August-before16 Nov,15";
             break;
         }
             case 41:
         {
            $de_course="Docter/Dentist  Onsite";
             $de_course2="Onsite";
             break;
         }
             case 42:
         {
            $de_course="Mulitdisciplinary  Onsite";
            $de_course2="Onsite";
             break;
         }
            case 43:
         {
            $de_course="Resident  Onsite";
            $de_course2="Onsite";
             break;
         }
         default :
            $de_course="";
            $de_course2="Onsite";
     }
     
     
 }
 

if(  strlen($lastname) > 0  && strlen($firstname) > 0  )
{
       $str=' SELECT *
             FROM `cleft_register`
             WHERE    lastname="'.$lastname.'"  AND firstname="'.$firstname.'"   ;    '; 
     $query=mysql_query($str) or die(mysql_err()); 
     $check =  mysql_num_rows($query);
      
     if( $check > 0 ) 
     {
       
       while($r= mysql_fetch_row($query))
       {
              $title=$r[1];
              switch ($title )
              {
                   case 1:
                   {
                      $detail_title="Mr.";
                       break;
                   }
                   case 2:
                   {
                       $detail_title="Miss";
                       break;
                   }
                   case 3:
                   {
                      $detail_title="Mrs.";
                       break;
                   }
              
              }
                  
              $email=$r[4];
              $phone=$r[5];
              $organization=$r[8];
              $address=$r[9];
              $country=$r[12];
              $course=$r[14];
       }
      
         
     }
     
      $today = date("F j, Y, g:i a");  
}

?>
