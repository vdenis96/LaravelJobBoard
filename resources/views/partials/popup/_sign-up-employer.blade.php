<!--Signup Employer Content-->
<div class="tab-pane fade" id="sign-Employer">
    <form action="" method="POST">
        @csrf

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*" />
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <input name="email" type="text" class="form-control" required="" placeholder="Password*" />
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*" />
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*" />
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="agree2" />
                        <label class="form-check-label" for="agree2">I agree to the
                            <a href="javascript:;">Terms and
                                conditions</a></label>
                        <p>Already registered?
                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal"
                                data-bs-dismiss="modal">
                                Log in here
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="site-button">
                    Sign Up
                </button>
            </div>
        </div>
    </form>
</div>
