<!-- Modal Login -->
<div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-filter-modal" role="document">
        <!--Content-->
        <div class="modal-content"> 
            <!--Header-->
            <div class="modal-header">
                <!-- Nav tabs -->
                <h3 style="margin-top: 20px"><i class="fa fa-user"></i> Login</h3><hr>
                <ul class="nav nav-tabs tabs-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link nav-link-user active" data-toggle="tab" href="#panel1" role="tab">User</a>
                    </li>
                    <li class="nav-item">
                        <a id="region-tab" class="nav-link nav-link-org" data-toggle="tab" href="#panel2" role="tab">Organizer</a>
                    </li>
                </ul>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>-->
            </div>
            <!--Body-->
            <div class="modal-body">
                <div id="form-login">
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control" name="username" required>
                        <label for="form2">Your email</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form3" class="form-control" name="pwd" required>
                        <label for="form3">Your password</label>
                    </div>
                    <div class="text-xs-center">
                        <button id="btn-login" class="btn btn-primary btn-lg">Login</button>
                    </div>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
<!--                 <div class="options">
    <p>Not a member? <a href="#">Sign Up</a></p>
    <p>Forgot <a href="#">Password?</a></p>
</div>-->
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>