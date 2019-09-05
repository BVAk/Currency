<?php
   require ('connect.php');
   $add=$_POST['add'];
   $result=mysqli_query($connection,$add);
?>