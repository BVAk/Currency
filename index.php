<!DOCTYPE html>
<html lang="en">
 <head>
 <link rel="stylesheet" href="style.css">
 
<script src="http://code.jquery.com/jquery-latest.js"></script>
 <script src="js/app.js"></script>
</head>
 <body onload="openTab(event, 'Calculate')">
 
 <?php require ('connect.php');?>

<div class="tab">
<button class="tablinks" onclick="openTab(event, 'Calculate')">Calculate</button>
  <button class="tablinks" onclick="openTab(event, 'History')">History</button>
</div>
<div id="Calculate" class="tabcontent">
  <form class="form-sigmin" name="chk" method="POST">
  <label>Choose needed currence:</label><br>
       <?php 
       while($object = mysqli_fetch_object($result_curr_ch)){ 
         echo " <input type='checkbox' name='checkCurrency' id='checkCurrency' value='$object->currency'>$object->currency";}
        ?><br>
 <input type="button" type="submit" class="btn btn-lg btn-primary btn-block" onclick="return checkb()" value="Remember"/>
  </form>

<form class="form-sigmin" method="POST" id="calculateForm" >
       <h2>Calculate currency</h2>
  <label >Change:</label>
  <input type="text" class="form-control" id="amountFrom" name="amountFrom" > 
  <div id="stateFrom">
  <?php 
    echo " <select id='currencyFrom' name='currencyFrom'>";
      while($object = mysqli_fetch_object($result_curr)){ 
        echo "<option value ='$object->currency' > $object->currency </option>";}
        echo "</select>"; ?></div>
  <br>
  <label>Get:</label>
  <div id="amountDiv">
  <input type="text" class="form-control" id="amountIn" readonly name="amountIn" > 
      </div>
      <div id="stateIn">
      <?php 
    echo " <select id='currencyIn' name='currencyIn'>";
      while($object = mysqli_fetch_object($result_curr_in)){ 
        echo "<option value = '$object->currency' > $object->currency </option>";}
        echo "</select>"; ?> 
      </div>
  <input type="button" class="btn btn-lg btn-primary btn-block" type="submit" onclick="return clickCalculate()" value="Calculate"/>
</form>
</div>



  <div  id="History" class="tabcontent">
     
      <form class="form-sigmin" id="limitForm" method="POST" >
      <label>Search for last </label>
      <input type="text" class="form-control" name="limit" id="limit">
      <input type="hidden" id="add" value="">
      <label>exchanges</label>
      <input type="button" class="btn btn-lg btn-primary btn-block" type="submit" id="submitFormData()" onclick="return clickLimit()" value="Show" />
      </form>
      <div id="limittable">
       <table>
       <tr> <th>Date </th><th>Exchange</th></tr>
       <?php
 while($object = mysqli_fetch_object($result_hist)){ 
 echo " <tr><td>$object->date_change</td><td>$object->change_amount $object->change_currency <=> $object->get_change_amount $object->get_change_currency </td></tr>";}
 ?>
 
       </table>
    
   </div>
   </div>
  
   </body> 
</html>