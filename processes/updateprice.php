<?php
 include_once 'connection.php';
 if(isset($_POST['Price']))
 {
 	$a=$_POST['stndvegprice'];
 	$b=$_POST['minivegprice'];
 	$c=$_POST['stndnvegprice'];
 	$d=$_POST['mininvegprice'];

 	$query="update mealplan set price='$a' where id='1' and set price='$b' where id='2' and price='$b' where id='3' and price='$d' where id='4' ;";
 	if(mysqli_query($conn,$query))
 		echo "<script>alert('Successfully updated');</script>";
 	else
 		echo "<script>alert('Can not updated');</script>";
 }
?>