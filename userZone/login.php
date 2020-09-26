<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Log In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="processes/loginUser.php">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me?</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <!-- <div id="login">
                    <form method="post" action="processes/loginUser.php">
                        <div>
                            <i class="fa fa-envelope"></i>
                            <input type="email" placeholder="Enter Your Email" name="email" />
                        </div>
                        <div>
                            <i class="fa fa-lock"></i>
                            <input style="margin-left: 30px;" type="password" placeholder="Enter Your Password" name="pass" />
                        </div>
                        <div>
                            <input style="text-indent:0px; width: 100px; margin-left: 50px;" type="reset" Value="Reset" />
                            <input style="text-indent:0px; width: 100px; margin-left: 80px;" name="login" type="submit" Value="Log In" />

                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </div>
</div>