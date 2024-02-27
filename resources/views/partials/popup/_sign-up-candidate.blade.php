<!--Signup Candidate Content-->
<div class="tab-pane fade show active" id="sign-candidate">
    <form method="POST" action="/candidate/register/">
        @csrf

        <div class="row">

            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <input name="name" type="text" class="form-control" required="" placeholder="Name*" />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <input name="email" type="email" class="form-control" required="" placeholder="Email*" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <input name="password" type="password" class="form-control" required="" placeholder="Password*" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <input name="password_confirmation" type="password" class="form-control" required="" placeholder="Password Confirmation*" />
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group mb-3">
                    <div class="form-check">
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
