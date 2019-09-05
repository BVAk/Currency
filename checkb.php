<?php

require ('connect.php');
$result=$_POST['result'];

echo " <select id='currencyFrom' name='currencyFrom'>";
foreach($result as $result){

        echo "<option value ='$result' > $result </option>";
      
}
echo " </select >";
?>