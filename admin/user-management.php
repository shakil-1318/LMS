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
                            <h3 class="table__heading-title">All Users</h3>
                        </div>
                        <div class="attendant__wrapper ">
                            <table id="userTable" class="display">
                                <thead>
                                    <tr>
                                        <th>Account Type</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Teacher</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <img class="img-36 border-circle" src="../Images/avatar1.png"
                                                    alt="image not found">
                                                <span>Harry Porter</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>Male</td>
                                        <td><span class="bd-badge bg-success">Approved</span></td>
                                        <td>
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Student</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <img class="img-36 border-circle" src="../Images/avatar4.png"
                                                    alt="image not found">
                                                <span>Lary go</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>Male</td>
                                        <td><span class="bd-badge bg-warning">Pending</span></td>
                                        <td>
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Teacher</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <img class="img-36 border-circle" src="../Images/avatar5.png"
                                                    alt="image not found">
                                                <span>Sumona Gang</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>Male</td>
                                        <td><span class="bd-badge bg-warning">Pending</span></td>
                                        <td>
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Student</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <img class="img-36 border-circle" src="../Images/avatar1.png"
                                                    alt="image not found">
                                                <span>David Morph</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>Women</td>
                                        <td><span class="bd-badge bg-warning">Pending</span></td>
                                        <td>
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Teacher</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <img class="img-36 border-circle" src="../Images/avatar4.png"
                                                    alt="image not found">
                                                <span>Willium Cany</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>Male</td>
                                        <td><span class="bd-badge bg-success">Approved</span></td>
                                        <td>
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Student</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <img class="img-36 border-circle" src="../Images/avatar5.png"
                                                    alt="image not found">
                                                <div class="registration__user-thumb">
                                                    <span>Keny Dinen</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>Women</td>
                                        <td><span class="bd-badge bg-warning">Pending</span></td>
                                        <td>
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Student</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-10">
                                                <img class="img-36 border-circle" src="../Images/avatar1.png"
                                                    alt="image not found">
                                                <span>Frintim Zomata</span>
                                            </div>
                                        </td>
                                        <td>abc@gmail.com</td>
                                        <td>Women</td>

                                        <td><span class="bd-badge bg-warning">Pending</span></td>
                                        <td>
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
                                        </td>
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
            $('#userTable').DataTable(); // Initialize DataTables on #userTable
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