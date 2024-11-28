<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Learn Stream</title>
    <!-- All CSS -->
    <?php include_once "../common-section/dashboard-css-lib.php" ?>

   

</head>

<body class="sb-nav-fixed">
   <!-- Navbar  -->
   <?php include_once "../common-section/dashboard-nav.php" ?>
   
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <!-- sidebar  -->
            <?php include_once "../dsb-nav-common/admin-sidebar.php" ?>

        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="card__wrapper">
                        <div class="card__title-wrap mb-20">
                            <h3 class="table__heading-title">Pending Question</h3>
                        </div>
                        <div class="row pending-question-card">

                            <div class="col-md-10">
                                <div class="pending-question-lists">
                                    <p class="card-text"><strong>Subject ID:</strong> #1231</p>
                                    <p class="card-text"><strong>Created By:</strong> xyz</p>
                                    <p class="card-text"><strong>Difficulty Level:</strong> Easy</p>

                                    <div class="question-warpper">
                                        <div class="single-question-wrap">
                                            <div class="steps">
                                                <div class="question-title-wrap d-flex align-items-center gap-2">
                                                    <span>1. </span>
                                                    <h1 class="question-title">
                                                        What is your country name?
                                                    </h1>
                                                </div>
                                                <!-- question option -->
                                                <p class="card-text"><span>1. </span><strong>Bangladesh</strong></p>
                                                <p class="card-text"><span>2. </span><strong>USA</strong></p>
                                                <p class="card-text"><span>3. </span><strong>Russia</strong></p>
                                                <p class="card-text"><span>4. </span><strong>UK</strong></p>
                                            </div>
                                            <p class="card-text mt-3"><strong>Correct Answer:</strong> Russia</p>
                                            <div class="answer-explain">
                                                <strong>Answer Description:</strong>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo,
                                                    laboriosam!</p>
                                            </div>

                                        </div>
                                        <div class="single-question-wrap">
                                            <div class="steps">
                                                <div class="question-title-wrap d-flex align-items-center gap-2">
                                                    <span>2. </span>
                                                    <h1 class="question-title">
                                                        What is your Nickname name?
                                                    </h1>
                                                </div>
                                                <!-- question option -->
                                                <p class="card-text"><span>1. </span><strong>BD</strong></p>
                                                <p class="card-text"><span>2. </span><strong>USA</strong></p>
                                                <p class="card-text"><span>3. </span><strong>RU</strong></p>
                                                <p class="card-text"><span>4. </span><strong>UK</strong></p>
                                            </div>
                                            <p class="card-text mt-3"><strong>Correct Answer:</strong> BD</p>
                                            <div class="answer-explain">
                                                <strong>Answer Description:</strong>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo,
                                                    laboriosam!</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Answer Explain -->

                                </div>
                            </div>
                            <div class="col-md-2 d-flex justify-content-center align-items-center">
                                <!-- add twi button approved and declined using bootstrap -->
                                <div>
                                    <div class="d-flex justify-content-between gap-1">
                                        <button type="button" class="btn btn-success">Approve</button>
                                        <button type="button" class="btn btn-danger">Decline</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </main>

            <!-- Footer  -->
            <?php include_once "../common-section/dashboard-footer.php" ?>

        </div>
    </div>

    <!-- Script Cdn -->
    <?php include_once "../common-section/dashboard-js-lib.php" ?>

    <script>
        $(document).ready(function () {
            $('#pendingTable').DataTable(); // Initialize DataTables on #userTable
        });

        window.addEventListener('DOMContentLoaded', event => {

            // Toggle the side navigation
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
                // Uncomment Below to persist sidebar toggle between refreshes
                // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                //     document.body.classList.toggle('sb-sidenav-toggled');
                // }
                sidebarToggle.addEventListener('click', event => {
                    event.preventDefault();
                    document.body.classList.toggle('sb-sidenav-toggled');
                    localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
                });
            }

        });
    </script>
</body>

</html>