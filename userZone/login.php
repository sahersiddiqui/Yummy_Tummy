<div class="modal"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div id="login" value="login">
        <form method="post" action="processes/loginUser.php">
            <h1>Log In </h1>
            <p> <span class="fa fa-envelope"></span><input type="email" placeholder="Enter Your Email" name="email" /></p>
            <p><span class="fa fa-lock"></span><input style="margin-left: 30px;" type="password" placeholder="Enter Your Password" name="pass" /></p>

            <input style="text-indent:0px; width: 100px; margin-left: 50px;" type="reset" Value="Reset" />
            <input style="text-indent:0px; width: 100px; margin-left: 80px;" name="login" type="submit" Value="Log In" />
        </form>
    </div>
        </div>
    </div>
</div>