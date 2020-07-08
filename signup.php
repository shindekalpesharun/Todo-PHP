<?php include_once 'style/header.php'; ?>
<?php
session_start();
if (isset($_SESSION["id"])) {
    header("Location: index.php");
}
?>
<title>Sign up</title>
</head>

<body>
    <div class="container-fluid">
        <!-- Material form login -->

        <h5 class="black-text text-center py-4">
            <strong>Sign up</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0 d-flex justify-content-center">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="" method="POST">

                <!-- Username -->
                <div class="md-form">
                    <input type="text" name="signup[0][username]" id="materialLoginFormEmail" class="form-control">
                    <label for="materialLoginFormEmail">Username</label>
                </div>

                <!-- Email -->
                <div class="md-form">
                    <input type="email" name="signup[0][email]" id="materialLoginFormEmail" class="form-control">
                    <label for="materialLoginFormEmail">Username</label>
                </div>

                <!-- Password -->
                <div class="md-form">
                    <input type="password" name="signup[0][password]" id="materialLoginFormPassword" class="form-control">
                    <label for="materialLoginFormPassword">Password</label>
                </div>

                <div class="d-flex justify-content-around">
                    <div>
                        <!-- Remember me
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                        </div> -->
                    </div>
                    <div>
                        <!-- Forgot password -->
                        <!-- <a href="">Forgot password?</a> -->
                    </div>
                </div>

                <!-- Sign in button -->
                <button name="btnSignup" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                <!-- Register -->
                <p>member?
                    <a href="login.php">Log in</a>
                </p>
                <!-- Social login -->
                <!-- <p>or sign in with:</p>
                    <a type="button" class="btn-floating btn-fb btn-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a type="button" class="btn-floating btn-tw btn-sm">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="btn-floating btn-li btn-sm">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm">
                        <i class="fab fa-github"></i>
                    </a> -->
            </form>
            <!-- Form -->
        </div>
    </div>
    <!-- Material form login -->
    <?php include_once 'style/fotter.php'; ?>

    <?php
    if (isset($_POST['btnSignup'])) {
        $user->userSignup();
    }
    ?>