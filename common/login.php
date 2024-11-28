<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Images/favicon.png" type="image/x-icon">

    <!-- All CSS -->
    <?php include_once "../common-section/css-lib.php" ?>

    <title>Learn Stream | Online Education Platform</title>

    <style>
        .input-wrapper {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>

</head>

<body>

    <!-- Include navbar -->
    <?php include_once "../common-section/navbar.php" ?>

    <!-- Registration Section Form Start-->
    <div class="form-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="signup-form-wrapper">
                        <div class="section-title text-center mb-5">
                            <div class="signup-title">
                                <h2>Log in Your Account</h2>
                            </div>
                        </div>
                        <form id="loginForm">
                            <div class="input-wrapper mb-4">
                                <span><img src="./Images/email.png" alt=""></span>
                                <input type="email" id="email" placeholder="Email" required>

                            </div>
                            <div class="input-wrapper mb-4">
                                <span><img src="./Images/lock.png" alt=""></span>
                                <input type="password" id="password" placeholder="Password" required>
                                <div class="password-toggle" onclick="togglePasswordVisibility()">
                                    <i id="toggleIcon" class="fas fa-eye"></i>
                                </div>

                            </div>
                            <div class="submit-btn-wrapper">
                                <button class="signup-btn btn-1" type="submit">Sign In</button>
                            </div>

                            <div class="form-footer">
                                <p>Don’t have an account? <a href="registration.php">Register Now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration Section Form End -->

    <!-- Footer -->

    <?php include_once "../common-section/footer.php" ?>


    <!-- Script Cdn -->
    <!-- Script Cdn -->
    <?php include_once "../common-section/js-lib.php" ?>


</body>

</html>