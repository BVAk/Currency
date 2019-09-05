<?php
require ('connect.php'); 
if (isset($_POST['amountFrom']) && isset($_POST['currencyFrom'])&& isset($_POST['currencyIn'])){
  $amountFrom=$_POST['amountFrom'];
  $currencyFrom=$_POST['currencyFrom'];
  $currencyIn=$_POST['currencyIn'];
  $date=date("Y-m-d H:i:s");
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
$r_course_curr=round($course_curr,2);
 
} 
$connection=mysqli_connect( 'localhost','root','','test');
echo "<input type='text' id='amountIn' class='form-control' readonly value='$r_course_curr' > ";
$query_history="INSERT INTO history(date_change,change_amount,change_currency,get_change_amount,get_change_currency) VALUES('$date','$amountFrom','$currencyFrom','$r_course_curr','$currencyIn')";
echo "<input type='text' id='add' value=$query_history >";

?>