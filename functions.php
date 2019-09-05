<?php
function get_course($amountFrom,$currencyFrom,$currencyIn){
    $data=file_get_contents(LINK);
    $courses=json_decode($data,true);
   foreach($courses as $course){
      //из гривны в валюту
      if($course['ccy']==$currencyIn && $course['base_ccy']==$currencyFrom){
      $course_curr=$amountFrom/$course['sale'];
    }
  }  
   foreach($courses as $course){
     //из валюты в гривну
     if($course['ccy']==$currencyFrom && $course['base_ccy']==$currencyIn):
       $course_curr=$amountFrom*$course['buy'];
     endif;
    } 
   foreach($courses as $course){
     //из валюты в валюту
     if($course['ccy']==$currencyFrom && $course['base_ccy']!=$currencyIn){
      $course_curr1=$amountFrom*$course['buy'];} 
   foreach($courses as $course){
    if($course['ccy']==$currencyIn && $course['base_ccy']!=$currencyFrom) { $course_curr=$course_curr1/$course['sale'];}
   }}
   foreach($courses as $course){
      //одинаковые валюты
      if($currencyFrom==$currencyIn){
      $course_curr=$amountFrom;
     }
    }
   
   return $course_curr;
}

?>