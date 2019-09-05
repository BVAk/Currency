<?php

require ('connect.php');

if (isset($_POST['limit'])){
 $lim=$_POST['limit'];
 $sql2="SELECT * FROM history ORDER BY date_change DESC LIMIT $lim";
 }
else {$sql2="SELECT * FROM history ORDER BY date_change DESC LIMIT 10";}
$result_hist=mysqli_query($connection,$sql2); 
echo"
<table>
<tr> <th>Date </th><th>Exchange</th></tr>";

 while($object = mysqli_fetch_object($result_hist)){ 
 echo " <tr><td>$object->date_change</td><td>$object->change_amount $object->change_currency <=> $object->get_change_amount $object->get_change_currency </td></tr>";}
 echo"</table>";
?>