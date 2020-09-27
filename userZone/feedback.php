<div class="modal" id="feedbackModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Feedback Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="processes/feedbackData.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text"  class="form-control" placeholder="Enter Your Name" name="username" required />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email"  class="form-control" placeholder="Enter Your Email" name="email" required />
                    </div>
                    <div class="form-group">
                        <label class="form-check-label">Mobile Number</label>
                        <input type="text"  class="form-control" placeholder="Enter Your Contact No" name="mobileno" required />
                    </div>
                    <div class="form-group">
                        <label class="form-check-label">Feedback</label>
                        <textarea rows="3"  class="form-control" cols="10" placeholder="Enter Your Feedback Here...!!" name="message" required /></textarea><br /><br />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>