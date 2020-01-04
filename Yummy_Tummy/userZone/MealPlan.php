<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="../images/logo.png"/>
        <link href="../css/index.css" rel="stylesheet"  type="text/css"/>
        <link href="../css/login.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="../css/feedbackcss.css" type="text/css"/>
        <link  href="../css/mealplan.css" rel="stylesheet" type="text/css"/>
        <script src="../js/feddback.js"></script>
        <script src="../js/login.js"></script>
        <title> :: Welcome To Hungry Pet :: </title>
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
            <!--div id="slider">
                <img id="imgslider" src="" height="300px" width="100%" />
            </div-->
            <div id="content">
                <div class="menu" >
                    
                    <h2>Veg Meal Plan</h2>
                    <img src="../images/veg.jpg" height="200px" width="350px"/>
                    <div class="standard">
                        <h3>Standard Meal</h3>
                        <?php include '../processes/connection.php';
                        $query="select * from mealplan";
                        $result=mysqli_query($conn,$query);
                        while($rows=mysqli_fetch_array($result))
                        {?>
                        <p> <?php echo $rows['stndveg'];?></p>
                        <?php
                        }?>
                        <!--p>4 Roti<br/>1 Dal<br/>1 Veg Sabji<br/>1 Rice<br/>1Salad/Raita/Dessert<br/><br/>Rs. 80* per Meal</p-->
                    </div>
                    <div class="Mini">
                        <h3>Mini Meal</h3> <?php include '../processes/connection.php';
                        $query="select * from mealplan";
                        $result=mysqli_query($conn,$query);
                        while($rows=mysqli_fetch_array($result))
                        {?>
                        <p> <?php echo $rows['miniveg'];?></p>
                        <?php
                        }?>
                    </div>
                  
                    <input type="button" value="Order Now.." onclick="location.href='orderNow.php'" />

                </div>
                <div  class="menu">
                    <h2>Non-Veg Meal Plan</h2>
                    <img src="../images/nonveg.jpg" height="200px" width="350px">
                    <div class="standard">
                         <h3>Standard Meal</h3>
                        <?php include '../processes/connection.php';
                        $query="select * from mealplan";
                        $result=mysqli_query($conn,$query);
                        while($rows=mysqli_fetch_array($result))
                        {?>
                        <p> <?php echo $rows['stndnonveg'];?></p>
                        <?php
                        }?>
                    </div>
                    <div class="Mini">
                        <h3>Mini Meal</h3>
                        <?php include '../processes/connection.php';
                        $query="select * from mealplan";
                        $result=mysqli_query($conn,$query);
                        while($rows=mysqli_fetch_array($result))
                        {?>
                        <p> <?php echo $rows['mininonveg'];?></p>
                        <?php
                        }?>
                    </div>
                    <input type="button" value="Order Now.."  onclick="location.href='orderNow.php'"/>
                </div>

            </div>

        </div>
    </body>
</html>
