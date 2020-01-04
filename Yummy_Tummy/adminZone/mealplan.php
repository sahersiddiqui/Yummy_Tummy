
<html>
    <head>
        <link rel="icon" href="../images/logo.png"/>
        <title>Welcome To Yummy Tummy's Admin Panel </title>
        <link href="../css/format.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../css/update.css"/>
    </head>
    <body>
        <div class='feedback'>
        <h1>Meal Plan</h1>
        <table cellpadding='10'>
            <tr>
                <th>Standard Veg</th><th>Standard Nonveg</th><th>Mini Veg</th><th>Mini nonveg</th>
            </tr>
            <?php 
            include_once'../processes/connection.php';
            $query="select * from mealplan";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $row['stndveg'] ?></td><td><?php echo $row['stndnonveg'] ?></td><td><?php echo $row['miniveg'] ?></td><td><?php echo $row['mininonveg'] ?></td>
            </tr>
            <?php } ?>
        </table>
         <input type="button" value="Back to Home" style="width: 120px; height: 50px; margin-top: 30px; font-size: 15px; border: 0; cursor: pointer; color:brown; font-weight: bold;" onclick="location.href='adminhome.php'">
            </div>

            <div id="update">
                <form action="../processes/updateprice.php" method="post">
                    <h1>Update Meal Price</h1>                     
                    <input type="text" name="stndvegprice" placeholder="Enter Standard Veg Plan Price"><br/><br/>
                    <input type="text" name="minivegprice" placeholder="Enter Mini Veg Plan Price"><br/><br/>
                    <input type="text" name="stndnvegprice" placeholder="Enter Standard Non-Veg Plan Price"><br/><br/>
                    <input type="text" name="mininvegprice" placeholder="Enter Mini Non-Veg Plan Price"><br/><br/>
                    <input type="submit" name="Price" value="Update">
                </form>
            </div>
    </body>
</html>