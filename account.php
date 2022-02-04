<?php include'header.php'; ?>
    


    <!-- START-BREADCUMB-SECTION -->

    <section id="breadcumb-section">
        <div class="row">
            <div class="breadcumb-details">
                <h2>Account Page</h2>
                <h4>Home / Account</h4>
            </div>
        </div>
    </section>

    <!-- END-BREADCUMB-SECTION -->

    <!-- START-ACCOUNT-SECTION -->
    
    <section id="account-section">
        <div class="row">
            <div class="grid-account-container">

                <div class="grid-account-login">
                    <h2>Login</h2>
                    <p>Login if you are a returning customer</p>
                    <div class="login-form">
                        <form name="lForm" id="lForm" action="" method="post">
                            <div class="email-form">
                                <input type="email" placeholder="E-mail Address" name="lemail" id="lemail">
                            </div>
                            <div class="password-form">
                                <input type="password" placeholder="Password" name="lpassword" id="lpassword">
                            </div>
                            <div class="remember-me">
                                <input type="checkbox" name="a" id="a">
                                <label for="a">Remember me</label>
                            </div>
                            <div class="forget-password">
                                <a href="">Forgot Password?</a>
                            </div>
                            <div class="login-btn">
                                <input type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="or">
                        <h3>OR</h3>
                    </div>
                    <div class="social-account">
                        <div class="fb-btn"><a href="#">
                            Facebook
                        </a></div>
                        <div class="google-btn"><a href="#">
                            Google
                        </a></div>
                        <div class="twitter-btn"><a href="#">
                            Twitter
                        </a></div>
                    </div>
                    <div class="no-account">
                        <h4>Don't have an Account? <a href="">Sign up now</a></h4>
                    </div>
                </div>

                <div class="grid-account-create" >
                    <h2>Create an Account</h2>
                    <p>Register here if you are a new customer</p>
                    <div class="new-account-form">
                        <form action="" method="post" id="cFrom">
                            <div class="username">
                                <input type="text" placeholder="Username" name="cusername">
                            </div>
                            <div class="email-form">
                                <input type="email" placeholder="E-mail Address" name="cemail">
                            </div>
                            <div class="password-form">
                                <input type="password" placeholder="Password" name="cpassword" id="cpassword">
                            </div>
                            <div class="password-form">
                                <input type="password" placeholder="Confirm Password" name="cpasswordConfirm" id="cpasswordConfirm">
                            </div>
                            <div class="register-btn">
                                <input type="submit" value="Submit & Register">
                            </div>
                        </form>
                    </div>
                    <div class="terms">
                        <input type="checkbox" name="a" id="b">
                        <label for="b">I have read and agree to the terms & condition</label>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <!-- END-ACCOUNT-SECTION -->
















     <!--START-FOOTER-SECTION -->
<?php include 'footer.php'; ?>