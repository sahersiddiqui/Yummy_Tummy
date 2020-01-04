<?php 
    session_start();
	if($_SESSION==NULL)
	{
		//echo $_SESSION['user'];
		echo "<script>alert('You must login to order now'); location.href='index.php'</script>";
	}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="images/logo.png"/>
        <link rel="stylesheet" href="css/index.css" type="text/css"/>
        <link href="css/login.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="Font-Awesome-master/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/feedbackcss.css" type="text/css"/>
		<link rel="stylesheet" href="css/ordernow.css"  type="text/css"/>
        <title> :: Welcome To Hungry Pet ::</title>
    </head>
    <body>
        <div id="outer">
            <div id="header">
                <div id="left">
                    <img src="images/logo.png" height="100px" width="100px" align="center"/>
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
                         <input id="Lgn" type="button" style="width: 130px; cursor: hand;" onclick="show(this.id)" value="Log In/Sign Up"/>
                        
                    </div>
                    <div id="down_right">
                        <ul>
                           <li onclick="location.href='index.php'">Home</li>
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
                <form action="processes/ordernowdata.php" method="post">
                <h2>Order Now</h2>
               <p> Meal Timing:: <input type="checkbox" value="Breakfast" name="time"/>Breakfast<input type="checkbox" value="Lunch" name="time"/>Lunch<input type="checkbox" value="Dinner" name="time"/>Dinner<br/></p>
                 
             <p>Meal Type:: <input type="radio" name="type" value="veg">Veg<input type="radio" name="type" value="nonveg">Non-Veg<br/></p>

               <p> Meal Plan:<input type="radio" name="plan" value="Standard">Standard<input type="radio" name="plan" value="Mini">Mini<br/></p>

                <p>Package:: <input type="radio" name="package" value="daily">Daily<input type="radio" name="package" value="weekly"> Weekly<input type="radio" name="package" value="monthly">Monthly<br/></p>

                <p>Start From:: <input onclick="date()" type="Date" name="dateField" value=""  style="width: 150px;" /><br/></p>
                <p>Delievered To:: <textarea rows="3" cols="20" name="address "></textarea></p>
                <input class="submit" type="submit" name="submit" value="Proceed" onclick="confirm()">
                </form>
            </div>
            <div id="footer">
                
            </div>
        </div>
        
    </body>
</html>
