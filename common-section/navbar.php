<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Images/favicon.png" type="image/x-icon">


    <!-- All CSS -->
    <?php include_once "../common-section/css-lib.php" ?>

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

    <!-- Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <!-- Navbar logo -->
            <a class="navbar-logo" href="../index.php">
                <span>Learn</span> Stream
            </a>

            <!-- Right side toggle button for mobile view -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links and login button -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link " href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../student/practice.php">Practice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../student/hybrid-test.php">Hybrid Test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../common/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../common/contact.php">Contact</a>
                    </li>
                </ul>

                <!-- Right side login button -->
                <div class="d-flex ms-lg-auto">
                    <div class="primary-button"> <a href="login.html">Login</a></div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End-->


    

    <!-- Script Cdn -->
    <!-- Script Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="./js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/script.js"></script>


</body>

</html>