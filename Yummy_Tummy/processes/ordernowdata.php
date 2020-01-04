<?php 
include_once'connection.php';
if(isset($_POST['submit']))
{
$time=$_POST['time'];
$type=$_POST['type'];
$plan=$_POST['plan'];
$package=$_POST['package'];
$date=$_POST['dateField'];
$area=$_POST['area'];
$add=$_POST['address'];
$Price=$_POST['price'];
 //echo $area;
$query="insert into ordernow(timing,MealType,MealPlan,Package,StartDate,Area,Address,Amount) values('$time','$type','$plan','$package','$date','$area','$add','$Price');";
$result=mysqli_query($conn,$query);
if($result)
{
	echo "<script>alert('Your Order is Successfully Submitted');</script>";
	header('location:../userZone/submit.php');
}
else{
	echo "<script>alert('Your Order is not Submitted');</script>";
}

}
?>