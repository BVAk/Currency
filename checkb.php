<?php

require ('connect.php');
$result=$_POST['result'];
if ($result==[]){
        echo " <select id='currencyFrom' name='currencyFrom'>";
      while($object = mysqli_fetch_object($result_curr_in)){ 
        echo "<option value = '$object->currency' > $object->currency </option>";}
        echo "</select>"; 
}else{
echo " <select id='currencyFrom' name='currencyFrom'>";
foreach($result as $result){

        echo "<option value ='$result' > $result </option>";
      
}
echo " </select >";}
?>