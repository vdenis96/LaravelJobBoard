<!--Signup popup -->
<div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="sign_up_popupLabel">
                    Sign Up
                </h2>
                <p>
                    Sign Up and get access to all the features
                    of Jobzilla
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="twm-tabs-style-2">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <!--Signup Candidate-->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate"
                                type="button">
                                <i class="fas fa-user-tie"></i>Candidate
                            </button>
                        </li>
                        <!--Signup Employer-->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer"
                                type="button">
                                <i class="fas fa-building"></i>Employer
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @include('partials.popup._sign-up-candidate')
                        @include('partials.popup._sign-up-employer')
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <span class="modal-f-title">Login or Sign up with</span>
                <ul class="twm-modal-social">
                    <li>
                        <a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
