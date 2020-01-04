<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="../images/logo.png"/>
         <link href="../css/index.css" rel="stylesheet"  type="text/css"/>
        <link href="../css/login.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="../css/feedbackcss.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../css/review.css">
         <script src="../js/feddback.js"></script>
        <script src="../js/login.js"></script>
        <title> :: Welcome To Hungry Pet ::</title>
    </head>
    <body>
        <div id="outer">
            <div id="header">
                <div id="left">
                    <img src="../images/logo.png" height="100px" width="100px" align="center"/>
                </div>
                <div id="center">
                    <p>
                        Yummy Tummy
                    </p>
                </div>
                <div id="right">
                    <div id="up_right">
                        
                        <h2>Call Us :</h2>
                        <i class="fa fa-phone-square" style="color:gray; font-size: 25px; padding: 8px; margin-left: -5%;"> 0522-236478</i>
                       <form method="post" action="../processes/logoutUser.php"><input type="submit" value="Logout" name="logout" style="margin-left: 650px; margin-top: -30px;"/></form>
                        
                    </div>
                    <div id="down_right">
                        <ul>
                           <li onclick="location.href='UserProfile.php'">Home</li>
                            <li onclick="location.href='MealPlan.php'" >Meal Plan</li>
                            <li onclick="location.href='review.php'">Review</li>
                            <li onclick="location.href='WhyUs.php'">Why Us</li>
                            <li onclick="location.href='orderNow.php'">Order Now</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="content" style="background-image: url('../images/image9.jpg');">
            <?php include '../processes/connection.php';
            $query="select * from feedback order by id desc limit 9";
            $result=mysqli_query($conn,$query);
            while($rows=mysqli_fetch_array($result))
            {?>    
            <div class="review"><p> <?php echo $rows['Message'];?></p> <h2> - <?php echo $rows['Name'];?></h2> </div>
 
            <?php } ?>
            </div>
        
        </div>
    </body>
</html>