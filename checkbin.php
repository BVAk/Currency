<?php

require ('connect.php');
$result=$_POST['result'];

echo " <select id='currencyIn' name='currencyIn'>";
foreach($result as $result){

        echo "<option value ='$result' > $result </option>";

}
echo "</select>";

?>