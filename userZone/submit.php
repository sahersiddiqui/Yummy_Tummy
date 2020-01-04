<html>
<head>
 <meta charset="UTF-8">
        <link rel="icon" href="../images/logo.png"/>
        <link rel="stylesheet" href="../css/index.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/receipt.css"/>
        <title> :: Welcome To Yummy Tummy ::</title>
    </head>
    <body onload="amount()">
        

<?php include'../processes/connection.php';
$query="select * from ordernow order by id desc limit 1;";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<div id="content">
<div id="receipt">
<img src="../images/logo.png" height="100px" width="100px">
<h1>Final Invoice</h1>
	<p><span style="margin-left: 60px;">Timing ::</span> <input type="text" name="Rtime" value="<?php echo $row['Timing'];?>"></p>
	<p><span style="margin-left: 30px">Meal Plan :: </span><input id="plan" type="text" name="Rplan" value="<?php echo $row['MealType'];?>"></p>
	<p><span style="margin-left: 30px">Meal Type :: </span><input  id="type" type="text" name="Rtype" value="<?php echo $row['MealPlan'];?>"></p>
	<p><span style="margin-left: 55px;">Package :: </span><input type="text" name="Rpackage" id="package" value="<?php echo $row['Package'];?>"></p>
	<p>Deleivery Date :: <input type="text" name="Rdate" value="<?php echo $row['StartDate'];?>"></p>
	<p><span style="margin-left: 60px; margin-top: -20px;">Address ::</span> <textarea col="20" row="3" name="Radd"><?php echo$row['Address'] ?></textarea></p>
	<p><span style="margin-left: 40px;">Total Cash :: </span><input type="text" value="Rs. <?php echo $row['Amount'];?>/-"/></p>
	<p><input style="width: auto;  height: 40px; font-family: Cambria Math; font-size: 20px;  text-indent: 0;" type="button" name="Print" onclick="print()" id="print" value="Print Receipt"></p>
</div>	
</div>
</body>
</html>