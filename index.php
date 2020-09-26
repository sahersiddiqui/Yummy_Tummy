<?php
include_once("./userZone/header.php");

?>
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <img src="./assets/slider/image1.jpeg" height="422" width="1166" />
        </div>
        <div class="swiper-slide">
            <img src="./assets/slider/image2.jpg" height="422" width="1166" />
        </div>
        <div class="swiper-slide">
            <img src="./assets/slider/image3.jpg" height="422" width="1166" />
        </div>
        <div class="swiper-slide">
            <img src="./assets/slider/image4.jpg" height="422" width="1166" />
        </div>
        <div class="swiper-slide">
            <img src="./assets/slider/image5.jpg" height="422" width="1166" />
        </div>
        <div class="swiper-slide">
            <img src="./assets/slider/image6.jpg" height="422" width="1166" />
        </div>
        <div class="swiper-slide">
            <img src="./assets/slider/image7.jpg" height="422" width="1166" />
        </div>
        <div class="swiper-slide">
            <img src="./assets/slider/image8.jpg" height="422" width="1166" />
        </div>
        <div class="swiper-slide">
            <img src="./assets/slider/image9.jpg" height="422" width="1166" />
        </div>
    </div>
</div>
<div id="content">
    <div class="order">
        <h2>Order Timing</h2>
        <div class="img"><img src="./assets/images/tray.png"></div>
        <p>A day befor 6:00 pm</p>
    </div>
    <div class="text">
        <p>
            We love picky eaters.we lovw foodies.we love both vegetarian and non vegetarian.We love health freeks."Is ther any dessert?" We love them too. We love the one who calls. We even love the ones who order online.we love them all. Born with mission to revolutionize eating habits, we believe in providing tiffins in Lucknow that are healthy. These meals are ideal for people who are too busy to cook or don't wish to compromise on nutrition wih restraunt food.The menu, at Yummy Tummy,comes in variety of motuh-watering cousines and nutritional options- a judicious mix of carbohydrates and protiens, low calorie and no artificial flavour/preservatives.<br />
            &nbsp; Whether its hakka noodles, cheese bolls or Gulab Jamun.Nutrition does not have to meant bland. boring diets. Ask the dietician on board.<br />
            <p>It's just like you would make it, minus the effort. <br /> The team at Yummy Tummy ensures that the meal are not only healthy but appealing to the eye and palette. We believe in giving surprise ang breaking monotony,so our menu changes daily and features over 40 dishes that change everyday. That includes a variety of vegetables,daal,raita,roti,rice,salad and snacks item. These ae healthy and well-balanced meals cooked in rice bran/olive oil,which provide the right amount of protien along with essential vitamins and minerals. The same food prepared in canteens or Udupi restraunts can be tasty,but is generally oily and big in your pocket.<br />Now relish the tangy vegetable masala, homemade, GajarHalwa, and life changing Garlic, Spinachand chickean Soup. </p>
        </p>
    </div>
</div>
<?php
include_once("./userZone/login.php")

?>

<div id="feedbackBtn"><input type="button" value='Feedback' onclick="show(this.value);" /></div>
<div id="FeedbackMain"></div>
<div id="feedback">
    <form action="processes/feedbackData.php" method="post">
        <h1> Feedback Form</h1>
        <i style="color:gray" onclick="hide(this.id)" id="closeFB" class="fa fa-close"></i>
        <br /><br /><br />
        <p><i class="fa fa-user-circle-o"></i></p>
        <input type="text" placeholder="Enter Your Name" name="username" required />
        <p><i style="font-size: 30px;" class="fa fa-envelope"></i></p>
        <input type="email" placeholder="Enter Your Email" name="email" required />
        <p> <i style="font-size: 30px; width: 30px;" class="fa fa-mobile"></i></p>
        <input type="text" placeholder="Enter Your Contact No" name="mobileno" required />
        <p> <i style="font-size: 30px;" class="fa fa-pencil-square"></i></p>
        <textarea rows="3" cols="10" placeholder="Enter Your Feedback Here...!!" name="message" required /></textarea><br /><br />
        <input type="submit" value="Submit" name="submit" style="width: 90px; background-color: gray; color: white; " />
    </form>
</div>
<div id="LoginMain"></div>
<div id="main">


    <span onclick="hide(this.id)" id="closeLog" class="fa fa-close" style="color: black;  font-size: 18px; margin-left: 5px;"></span>
    <input id="btnLogin" type="button" onclick="show_hide(this.id)" value="Log In" />
    <input id="btnSignup" type="button" onclick="show_hide(this.id)" value="Sign Up" />
    <hr style="width: 330px; margin-top: 65px; margin-bottom: 0; color: gray; border-style:dashed" />


    <div id="login" value="login">
        <form method="post" action="processes/loginUser.php">
            <h1>Log In </h1>
            <p> <span class="fa fa-envelope"></span><input type="email" placeholder="Enter Your Email" name="email" /></p>
            <p><span class="fa fa-lock"></span><input style="margin-left: 30px;" type="password" placeholder="Enter Your Password" name="pass" /></p>

            <input style="text-indent:0px; width: 100px; margin-left: 50px;" type="reset" Value="Reset" />
            <input style="text-indent:0px; width: 100px; margin-left: 80px;" name="login" type="submit" Value="Log In" />
        </form>
    </div>
    <div id="signup" value="signup">
        <form method="post" action="processes/SignupData.php">
            <h1>Sign Up</h1>

            <p><span class="fa fa-user-circle-o"></span><input type="text" placeholder="Enter Your Name" name="name" required /></p>
            <p><span class="fa fa-phone-square"></span><input type="number" placeholder="Enter Your Mobile No" name="mobile" required /></p>
            <p><span class="fa fa-envelope-o"></span><input type="email" placeholder="Enter Your Email" name="email" required /></p>
            <p><span class="fa fa-lock"></span><input style="margin-left: 28px;" type="password" placeholder="Enter Your Password" name="pass" required /></p>

            <input id="check" onclick="validate()" style="width:20px; margin-top: 18px;margin-left: 40px; padding: 0; position:absolute;" type="checkbox" />
            <p>I accept the <a href="#">'Terms and Conditions'</a>.</p>
            <p><input type="submit" id="submit" value="Sign Up" name="SubmitSignup" disabled="disabled" style="width: 100px; text-indent: 0;cursor: pointer;" /></p>
        </form>
    </div>
</div>

<?php
include_once("./userZone/footer.php");
?>