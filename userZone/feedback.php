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