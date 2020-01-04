<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="images/logo.png"/>
         <link href="css/index.css" rel="stylesheet"  type="text/css"/>
        <link href="css/login.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="Font-Awesome-master/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/feedbackcss.css" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/review.css">
         <script src="js/feddback.js"></script>
        <script src="js/login.js"></script>
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
            <div id="content" style="background-image: url('images/image9.jpg');">
            <?php include 'processes/connection.php';
            $query="select * from feedback order by id desc limit 9";
            $result=mysqli_query($conn,$query);
            while($rows=mysqli_fetch_array($result))
            {?>    
            <div class="review"><p> <?php echo $rows['Message'];?></p> <h2> - <?php echo $rows['Name'];?></h2> </div>
 
            <?php } ?>
            </div>
             
        </div>
        <div id="feedbackBtn" ><input type="button" value='Feedback' onclick="show(this.value);" /></div>
        <div id="FeedbackMain"></div>
            <div id="feedback">
                <form action="processes/feedbackData.php" method="post">
                    <h1> Feedback Form</h1>
                    <i style="color:gray" onclick="hide(this.id)" id="closeFB" class="fa fa-close"></i>
                   <br/><br/><br/> <p><i class="fa fa-user-circle-o"></i></p>
                    <input type="text" placeholder="Enter Your Name" name="username" required/>
                    <p><i  style="font-size: 30px;" class="fa fa-envelope"></i></p>
                    <input type="email" placeholder="Enter Your Email" name="email" required/>
                    <p> <i  style="font-size: 30px; width: 30px;" class="fa fa-mobile"></i></p>
                    <input type="text" placeholder="Enter Your Contact No" name="mobileno" required/>
                    <p> <i   style="font-size: 30px;" class="fa fa-pencil-square"></i></p>
                     <textarea rows="3" cols="10" placeholder="Enter Your Feedback Here...!!" name="message" required/></textarea><br/><br/>
                     <input type="submit" value="Submit" name="submit" style="width: 90px; background-color: gray; color: white; "/>
                </form>
            </div>
        <div id="LoginMain"></div>
         <div id="main">
              
        
                <span onclick="hide(this.id)"  id="closeLog" class="fa fa-close" style="color: black;  font-size: 18px; margin-left: 5px;"></span>
                <input id="btnLogin" type="button" onclick="show_hide(this.id)" value="Log In"/>
                <input  id="btnSignup" type="button"  onclick="show_hide(this.id)" value="Sign Up"/>
                <hr style="width: 330px; margin-top: 65px; margin-bottom: 0; color: gray; border-style:dashed"  />
            
            
            <div id="login" value="login">
                <form method="post" action="processes/loginUser.php">
                <h1>Log In </h1>
                <p> <span class="fa fa-envelope" ></span><input type="email" placeholder="Enter Your Email" name="email"/></p>
                <p><span class="fa fa-lock" ></span><input style="margin-left: 30px;" type="password" placeholder="Enter Your Password"name="pass"/></p>
                
                <input style="text-indent:0px; width: 100px; margin-left: 50px;" type="reset" Value="Reset"/>
                <input style="text-indent:0px; width: 100px; margin-left: 80px;" name="login" type="submit" Value="Log In"/>
                </form>
            </div>
            <div id="signup" value="signup">
                <form method="post" action="processes/SignupData.php">
                <h1>Sign Up</h1>
                
                <p><span class="fa fa-user-circle-o"></span><input type="text" placeholder="Enter Your Name"name="name" required/></p>
                <p><span class="fa fa-phone-square"></span><input type="number" placeholder="Enter Your Mobile No" name="mobile" required/></p>
                <p><span class="fa fa-envelope-o"></span><input type="email" placeholder="Enter Your Email" name="email"required/></p>
                <p><span class="fa fa-lock"></span><input  style="margin-left: 28px;"type="password" placeholder="Enter Your Password" name="pass" required/></p>
               
                <input id="check"  onclick="validate()" style="width:20px; margin-top: 18px;margin-left: 40px; padding: 0; position:absolute;" type="checkbox"/><p>I accept the <a href="#">'Terms and Conditions'</a>.</p>
                <p><input type="submit" id="submit" value="Sign Up" name="SubmitSignup" disabled="disabled" style="width: 100px; text-indent: 0;cursor: pointer;"/></p>
                </form>
            </div>
        </div>
    </body>
</html>