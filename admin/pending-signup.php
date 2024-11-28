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
                            <h3 class="table__heading-title">Pending Signup</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="user-card mb-3">
                                    <div class="card-content-wrapper">
                                        <div class="d-flex align-items-center gap-10">
                                            <img class="card-img border-circle" src="../Images/avatar1.png"
                                                alt="image not found">
                                        </div>
                                        <p class="card-text"><strong>User ID:</strong> #23123</p>
                                        <p class="card-text"><strong>Full Name:</strong> Michael Brown</p>
                                        <p class="card-text"><strong>User Type:</strong> Editor</p>
                                        <p class="card-text"><strong>Email:</strong> michael.brown@example.com</p>
                                        <p class="card-text"><strong>Contact No:</strong> +1122334455</p>
                                        <p class="card-text"><strong>Gender:</strong> Male</p>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-success">Approve</button>
                                            <button class="btn btn-danger">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="user-card mb-3">
                                    <div class="card-content-wrapper">
                                        <div class="d-flex align-items-center gap-10">
                                            <img class="card-img border-circle" src="../Images/avatar1.png"
                                                alt="image not found">
                                        </div>
                                        <p class="card-text"><strong>User ID:</strong> #23123</p>
                                        <p class="card-text"><strong>Full Name:</strong> Michael Brown</p>
                                        <p class="card-text"><strong>User Type:</strong> Editor</p>
                                        <p class="card-text"><strong>Email:</strong> michael.brown@example.com</p>
                                        <p class="card-text"><strong>Contact No:</strong> +1122334455</p>
                                        <p class="card-text"><strong>Gender:</strong> Male</p>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-success">Approve</button>
                                            <button class="btn btn-danger">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="user-card mb-3">
                                    <div class="card-content-wrapper">
                                        <div class="d-flex align-items-center gap-10">
                                            <img class="card-img border-circle" src="../Images/avatar1.png"
                                                alt="image not found">
                                        </div>
                                        <p class="card-text"><strong>User ID:</strong> #23123</p>
                                        <p class="card-text"><strong>Full Name:</strong> Michael Brown</p>
                                        <p class="card-text"><strong>User Type:</strong> Editor</p>
                                        <p class="card-text"><strong>Email:</strong> michael.brown@example.com</p>
                                        <p class="card-text"><strong>Contact No:</strong> +1122334455</p>
                                        <p class="card-text"><strong>Gender:</strong> Male</p>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-success">Approve</button>
                                            <button class="btn btn-danger">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="user-card mb-3">
                                    <div class="card-content-wrapper">
                                        <div class="d-flex align-items-center gap-10">
                                            <img class="card-img border-circle" src="../Images/avatar1.png"
                                                alt="image not found">
                                        </div>
                                        <p class="card-text"><strong>User ID:</strong> #23123</p>
                                        <p class="card-text"><strong>Full Name:</strong> Michael Brown</p>
                                        <p class="card-text"><strong>User Type:</strong> Editor</p>
                                        <p class="card-text"><strong>Email:</strong> michael.brown@example.com</p>
                                        <p class="card-text"><strong>Contact No:</strong> +1122334455</p>
                                        <p class="card-text"><strong>Gender:</strong> Male</p>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-success">Approve</button>
                                            <button class="btn btn-danger">Decline</button>
                                        </div>
                                    </div>
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