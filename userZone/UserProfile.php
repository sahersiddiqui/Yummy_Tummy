<?php 
session_start();
if($_SESSION==NULL)
{
    echo "<script>alert('You must Log In...'); location.href='../index.php'</script>";
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="../images/logo.png"/>
        <link rel="stylesheet" href="../css/index.css" type="text/css"/>
        <link href="../css/login.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="../css/feedbackcss.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../css/contntindex.css">
        <script src="../js/slider.js"></script>
        <title> :: Welcome To Yummy Tummy ::</title>
    </head>
    <div id="fb-root"></div>
<body id="body" onload="myslider()">
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
            <div id="slider">
                <img id="imgslider" src="../" height="300px" width="100%" />
            </div>
            <div id="content">
             <h3>Hello  <?php echo($_SESSION['user']);?></h3>
            <div class="order">
                <h2>Order Timing</h2>
                <div class="img"><img src="../images/tray.png"></div>
                <p>A day befor 6:00 pm</p>
            </div>
            <div class="text"> 
              <p>
                We love picky eaters.we lovw foodies.we love both vegetarian and non vegetarian.We love health freeks."Is ther any dessert?" We love them too. We love the one who calls. We even love the ones who order online.we love them all. Born with mission to revolutionize eating habits, we believe in providing tiffins in Lucknow that are healthy. These meals are ideal for people  who are too busy to cook or don't wish to compromise on nutrition wih restraunt food.The menu, at Yummy Tummy,comes in variety of motuh-watering cousines and nutritional options- a judicious mix of carbohydrates and protiens, low calorie and no artificial flavour/preservatives.<br/>
                &nbsp; Whether its hakka noodles, cheese bolls or Gulab Jamun.Nutrition does not have to meant bland. boring diets. Ask the dietician on board.<br/>
                <p>It's just like you would make it, minus the effort. <br/> The team at Yummy Tummy ensures that the meal are not only healthy but appealing to the eye and palette. We believe in giving surprise ang breaking monotony,so our menu changes daily and features over 40 dishes that change everyday. That includes a variety of vegetables,daal,raita,roti,rice,salad and snacks item. These ae healthy and well-balanced meals cooked in rice bran/olive oil,which provide the right amount of protien along with essential vitamins and minerals. The same food prepared in canteens or Udupi restraunts can be tasty,but is generally oily and big in your pocket.<br/>Now relish the tangy vegetable masala, homemade, GajarHalwa, and life changing Garlic, Spinachand chickean Soup.  </p>
              </p> 
            </div>
            </div>
            
            <div id="footer">
               <h4>Press Release</h4> 
                <h4>Terms and condition</h4>
                <h4>FAQs</h4>
                <h4 style="margin-left: 420px;">Follow Us On ::</h4>
                <span class="fa fa-facebook-square"></span>
                <span class="fa fa-instagram"></span>
                <span class="fa fa-twitter"></span>
                <h4>&copy; All Right Reserved @ 2017</h4>
                <h4 style="margin-left: 420px;">Mail Us At :: admin@yummytummy.com</h4>
            </div>
        </div>            
        </div>