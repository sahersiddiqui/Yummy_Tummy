
<html>
    <head>
        <link rel="icon" href="../images/logo.png"/>
        <title>Welcome To Yummy Tummy's Admin Panel </title>
        <link href="../css/format.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class='feedback'>
        <h1>Registered User</h1>
        <table cellpadding='10'>
            <tr>
                <th>Name</th><th>Email</th><th>Contact No</th><th>Date</th>
            </tr>
            <?php 
            include_once'../processes/connection.php';
            $query="select * from signup order by id desc";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $row['Name'] ?></td><td><?php echo $row['Email'] ?></td><td><?php echo $row['Mobile'] ?></td><td><?php echo $row['Date'] ?></td>
            </tr>
            <?php } ?>
        </table>
         <input type="button" value="Back to Home" style="width: 120px; height: 50px; margin-top: 30px; font-size: 15px; border: 0; cursor: pointer; color:brown; font-weight: bold;" onclick="location.href='adminhome.php'">
            </div>
    </body>
</html>