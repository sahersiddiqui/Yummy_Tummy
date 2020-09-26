<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="signup" value="signup">
                    <form method="post" action="processes/SignupData.php">

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
        </div>
    </div>
</div>