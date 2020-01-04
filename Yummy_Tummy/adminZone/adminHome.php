<?php
session_start();
if($_SESSION==NULL)
{
    echo "<script>alert('You must Login First.');location.href='../index.php'</script>";
}
//echo "hello admin";
?>
<html>
    <head>
        <title></title>
        <script type="text/javascript" src="../js/admin.js"></script>
       <link rel="stylesheet" type="text/css" media="all" href="../css/adminhome.css"/>
    </head>
    <body onload="show()">
        <form method="post" action="../processes/logoutUser.php"><input type="submit" value="Logout" name="logout" style="float: right;margin-top: -180px; width: 100px; height: 50px; font-size: 20px; background-color: brown;color:white; border-radius: 0px 10px 0px 10px; border:0; cursor: pointer;" /></form>
                        
        <h1 id="title">Welcome To Admin Zone</h1>
       
        <div id="mealPlan" onclick="location.href='mealplan.php'" >Meal Plan</div>
        <div id="User" onclick="location.href='registereduser.php'"> View User</div>
        <div id="userFeedback" onclick="location.href='userfeedback.php'"> View Feedback</div>
        <div id="order" onclick="location.href='userorder.php'">View Order</div>
    </body>
</html>