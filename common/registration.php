<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./Images/favicon.png" type="image/x-icon">

     <!-- All CSS -->
     <?php include_once "../common-section/css-lib.php" ?>

    <title>Learn Stream | Online Education Platform</title>

</head>

<body>

    <?php include_once "../common-section/navbar.php" ?>

    <!-- Registration Section Form STart-->
    <div class="form-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="signup-form-wrapper">
                        <div class="section-title text-center mb-5">
                            <div class="signup-title">
                                <h2>Create Your Account</h2>
                            </div>
                        </div>
                        <form>
                            <div class="input-wrapper mb-4">
                                <span><img src="./Images/user.png" alt=""></span>
                                <input type="text" placeholder="Your Name" required>
                            </div>
                            <div class="input-wrapper mb-4">
                                <span><img src="./Images/email.png" alt=""></span>
                                <input type="email" placeholder="Email" required>
                            </div>
                            <div class="input-wrapper mb-4">
                                <span><img src="./Images/call.png" alt=""></span>
                                <input type="text" placeholder="Phone Number" required>
                            </div>
                            <div class="input-wrapper mb-4">
                                <span><img src="./Images/user.png" alt=""></span>
                                <select class="user-type-input" name="user-type" id="" required>
                                    <option selected>User Type</option>
                                    <option value="1">Teacher</option>
                                    <option value="2">Student</option>
                                </select>

                            </div>

                          

                            <div class="input-wrapper mb-4">
                                <span><img src="./Images/lock.png" alt=""></span>
                                <input type="password" id="password" placeholder="Password" required>
                                <div class="password-toggle" onclick="togglePasswordVisibility()">
                                    <i id="toggleIcon" class="fas fa-eye"></i>
                                </div>
                            </div>

                            <div class="input-wrapper mb-4">
                                <span><img src="./Images/lock.png" alt=""></span>
                                <input type="password" id="password" placeholder="Confirm Password" required>
                                <div class="password-toggle" onclick="togglePasswordVisibility()">
                                    <i id="toggleIcon" class="fas fa-eye"></i>
                                </div>
                            </div>

                             <!-- Image Upload Option -->
                             <div class="mb-3">
                                <label for="formFile" class="form-label">Upload Image</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <!-- End of Image Upload Option -->
                            <div class="submit-btn-wrapper">
                                <button class="signup-btn btn-1" type="submit">Sign Up</button>
                            </div>

                            <div class="form-footer">
                                <p>Already have an account? <a href="login.html">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration Section Form End -->

    <!-- Footer Start -->
    <?php include_once "../common-section/footer.php" ?>
    

  
    <!-- Script Cdn -->
    <?php include_once "../common-section/js-lib.php" ?>

</body>

</html>