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
        <link rel="icon" href="../images/logo.png"/>
        <link rel="stylesheet" href="../css/index.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../Font-Awesome-master/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="../css/feedbackcss.css" type="text/css"/>
		<link rel="stylesheet" href="../css/ordernow.css"  type="text/css"/>
        <script type="text/javascript" src="../js/ordernow.js"></script>
                <title> :: Welcome To Yummy Tummy ::</title>
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
                <form action="../processes/ordernowdata.php" method="post">
                <h2>Order Now</h2>
               <p> Meal Timing :: <input type="checkbox" value="Breakfast" name="time"/>Breakfast<input type="checkbox" value="Lunch" name="time"/>Lunch<input type="checkbox" value="Dinner" name="time"/>Dinner<br/></p>
                 
             <p>Meal Type :: <input onchange="calculate()" id="veg" type="radio" name="type" value="Veg">Veg<input id="nonveg" type="radio" name="type"onchange="calculate()" value="Nonveg">Non-Veg<br/></p>

               <p> Meal Plan ::<input onchange="calculate()"  id="stnd" type="radio" name="plan" value="Standard">Standard<input id="mini" type="radio" name="plan" onchange="calculate()" value="Mini">Mini<br/></p>

                <p>Package :: <input onchange="calculate()" id="daily" type="radio" name="package" value="daily">Daily<input onchange="calculate()" id="weekly" type="radio" name="package" value="weekly"> Weekly<input onchange="calculate()" id="monthly" type="radio" name="package" value="monthly">Monthly<br/></p>

                <p><span style="padding:0 0px 0 35px;">Start From::</span> <input onclick="date()" type="Date" name="dateField" value=""  style="width: 150px;" /><br/></p>
                <p><span style="padding: 0 0 0 45px;">Your City :: </span><select name="city"><option>--Select City--</option><option>Lucknow</option></select></p>
                <p><span style="padding: 0 0 0 40px;">Your Area :: </span><select name="area"><option>--Select Area--</option><option id="area">Ashiana</option><option id="area">Aishbagh</option><option id="area">Alambagh</option><option id="area">Alamnagar</option><option id="area">Aliganj</option><option>Amber Ganj</option><option>Amausi</option><option>Anand Nagar</option><option>Balaganj</option><option>Bijnaur</option><option>Banthra</option><option>Charbagh</option><option>Chaupatiyan</option><option>Chinhat</option><option>Civil Lines</option><option>Chowk</option><option>Daliganj</option><option>Dilkhusha Garden</option><option>Hazratganj</option><option>Husainabad</option><option>Husainganj</option><option>Indira  Nagar</option><option>Jankipuram</option><option>Lalbagh</option><option>Mahanagar</option><option>Madiaon</option><option>manak Nagar</option><option>Manas Nagar</option><option>Natkur</option><option>Naubasta</option><option>Nishatganj</option><option>Niralanagar</option><option>Wazirganj</option><option>Yahiya ganj</option></select></p>
                <input type="hidden" name="price" value="" id="price">
                <p>Delievered To :: <textarea rows="3" cols="19" name="address" placeholder="Enter Your Address"></textarea></p>
                <!--p><span style="margin-left: 25px;">Contact No :: </span><input style="height: 30px;
                width: 150px;" type="number" name="mobile" placeholder="Enter Your Mobile Number"></p-->
                <input class="submit" type="submit" name="submit" value="Proceed">
                </form>
            </div>
           
        </div>
        
    </body>
</html