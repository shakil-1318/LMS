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

    <style>

    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand dashboard-nav py-4">
        <a class="navbar-brand ps-3" href="../index.html">Learn Stream</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            
           <!-- Sidebar -->
           <?php include_once "../dsb-nav-common/teacher-sidebar.php" ?>

        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="card__wrapper">
                        <div class="card__title-wrap mb-20">
                            <h3 class="table__heading-title">My subject-wise submitted questions</h3>
                        </div>
                        <div class="attendant__wrapper ">
                            <table id="pendingTable" class="display">
                                <thead>
                                    <tr>
                                        <th>Subject Name</th>
                                        <th>Email</th>
                                        <th>Level</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <!-- <th>Details</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <span>Physics</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>Beginner</td>
                                        <td>25 Jun 2024</td>
                                        <td><span class="bd-badge bg-success">Approved</span></td>
                                        <!-- <td>
                                            <div class="attendant__action">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon checkmark">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <span>Physics</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>28 Jun 2024</td>
                                        <td>Hard</td>
                                        <td><span class="bd-badge bg-warning">Pending</span></td>
                                        <!-- <td>
                                            <div class="attendant__action">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon checkmark">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <span>Chemistry</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>30 Jun 2024</td>
                                        <td>Intermediate</td>
                                        <td><span class="bd-badge bg-warning">Pending</span></td>
                                        <!-- <td>
                                            <div class="attendant__action">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon checkmark">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <span>Biology</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>02 Feb 2024</td>
                                        <td>Beginner</td>
                                        <td><span class="bd-badge bg-warning">Pending</span></td>
                                        <!-- <td>
                                            <div class="attendant__action">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon checkmark">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <span>Math</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>05 Feb 2024</td>
                                        <td>Beginner</td>
                                        <td><span class="bd-badge bg-success">Approved</span></td>
                                        <!-- <td>
                                            <div class="attendant__action">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon checkmark">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">

                                                <div class="registration__user-thumb">
                                                    <span>Bangla</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>15 Mar 2024</td>
                                        <td>Beginner</td>
                                        <td><span class="bd-badge bg-warning">Pending</span></td>
                                        <!-- <td>
                                            <div class="attendant__action">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon checkmark">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <span>Chemistry</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>
                                            25 Mar 2024
                                        </td>
                                        <td>Beginner</td>
                                        <td><span class="bd-badge bg-warning">Pending</span></td>
                                        <!-- <td>
                                            <div class="attendant__action">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon checkmark">
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer  -->
            <?php include_once "../common-section/dashboard-footer.php" ?>

            
        </div>
    </div>

    <!-- Include js cdn -->
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