<!DOCTYPE html>
<html lang="en">
 <head>
 <link rel="stylesheet" href="style.css">
</head>
 <body>
 <?php
   require ('connect.php');
   require ('functions.php');
 if (isset($_POST['amountFrom']) && isset($_POST['currencyFrom'])&& isset($_POST['currencyIn'])){
   $amountFrom=$_POST['amountFrom'];
   $currencyFrom=$_POST['currencyFrom'];
   $currencyIn=$_POST['currencyIn'];
   $course_curr=round(get_course($amountFrom,$currencyFrom,$currencyIn),2);
   $date=date("Y-m-d H:i:s");
   var_dump($course_curr);
   $query_history="INSERT INTO history(date_change,change_amount,change_currency,get_change_amount,get_change_currency) VALUES('$date','$amountFrom','$currencyFrom','$course_curr','$currencyIn')";
   $result=mysqli_query($connection,$query_history);
 }
 
 if (isset($_POST['limit'])){
 $lim=$_POST['limit'];
 $sql2="SELECT * FROM history ORDER BY date_change DESC LIMIT $lim";
 }
else {$sql2="SELECT * FROM history ORDER BY date_change DESC LIMIT 10";}
$result_hist=mysqli_query($connection,$sql2); 
   ?>

   <div class="container">
     <form class="form-sigmin" method="POST" action="">
       <h2>Calculate currency</h2>
  <label >Change:</label>
  <input type="text" name="amountFrom" class="form-control" value="" required> 
    <?php 
    echo " <select name='currencyFrom'>";
      while($object = mysqli_fetch_object($result_curr)){ 
        echo "<option value ='$object->currency' > $object->currency </option>";}
        echo "</select>"; ?>
  <br>
  <label>Get:</label>
  <input type="text" readonly name="amountIn" class="form-control" value="" required> 
  <?php 
    echo " <select name='currencyIn'>";
      while($object = mysqli_fetch_object($result_curr_in)){ 
        echo "<option value = '$object->currency' > $object->currency </option>";}
        echo "</select>"; ?> 
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Calculate</button>
  
</form>
  <div class="demo">
    <input type="checkbox" id="hd-1" class="hide"/>
    <label for="hd-1" >History</label>
    <div>
      <form name="limitform" method="POST" >
      <label>Search for last </label>
      <input type="text" name="limit" id="limit"  value="" >
      <label>exchanges</label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Show</button>
      </form>
       <table>
        <tr> <th>Date </th><th>Exchange</th></tr>
       <?php while($object = mysqli_fetch_object($result_hist)){ 
         echo" <tr><td>$object->date_change</td><td>$object->change_amount $object->change_currency <=> $object->get_change_amount $object->get_change_currency </td></tr>";}
         ?>
       </table>
    </div>
   </div>
   </div>
  
   </body> 
</html>