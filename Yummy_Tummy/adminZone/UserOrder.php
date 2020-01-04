
<html>
    <head>
        <link rel="icon" href="../images/logo.png"/>
        <title>Welcome To Yummy Tummy's Admin Panel </title>
        <link href="../css/format.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class='feedback'>
        <h1>User Order</h1>
        <table cellpadding='10'>
            <tr>
                <th>Timing</th><th>Meal Type</th><th>Meal Plan</th><th>Package</th><th>Starting Date</th><th>Area</th><th>Address</th>
           <th>Amount</th> </tr>
            <?php 
            include_once'../processes/connection.php';
            $query="select * from ordernow order by id desc";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $row['Timing'] ?></td><td><?php echo $row['MealType'] ?></td><td><?php echo $row['MealPlan'] ?></td><td><?php echo $row['Package'] ?></td><td><?php echo $row['StartDate'] ?></td><td><?php echo $row['Area']?></td><td><?php echo $row['Address']?></td><td><?php echo $row['Amount']?></td>
            </tr>
            <?php } ?>
        </table>
        <input type="button" value="Back to Home" style="width: 120px; height: 50px; margin-top: 30px; font-size: 15px; border: 0; cursor: pointer; color:brown; font-weight: bold;" onclick="location.href='adminhome.php'">
            </div>
    </body>
</html>