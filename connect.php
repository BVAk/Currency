<?php
define("LINK",'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=3');
$connection=mysqli_connect( 'localhost','root','','test');
$sql="SELECT currency FROM currency";
$result_curr=mysqli_query($connection,$sql);
$result_curr_in=mysqli_query($connection,$sql);
$sql2="SELECT * FROM history ORDER BY date_change DESC LIMIT 10";
$result_hist=mysqli_query($connection,$sql2); 
?>