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
                            <h3 class="table__heading-title mb-5">Account Details</h3>
                        </div>
                        <div class="card-body">
                            <form action="#" class="mt-2">
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label class="form-label mb-md-0">Avatar</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="d-inline-block position-relative me-4 mb-3 mb-lg-0 account-profile">
                                            <div class="avatar-preview rounded">
                                                <div id="imagePreview" class="rounded-4 profile-avatar"
                                                    style="background-image: url(../Images/avatar4.png);"></div>
                                            </div>
                                            <div class="upload-link" title="" data-toggle="tooltip"
                                                data-placement="right" data-original-title="update">
                                                <input type="file" class="update-flie" id="imageUpload">
                                                <i class="fa-solid fa-pen-to-square fs-update"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4">
                                    <div class="col-md-3">
                                        <label class="form-label mb-md-0">Full Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="First Name"
                                                    value="Abdul">
                                            </div>
                                            <div class="col-sm-6 mt-2 mt-sm-0">
                                                <input type="text" class="form-control" placeholder="Last Name"
                                                    value="Arafat">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4">
                                    <div class="col-md-3">
                                        <label class="form-label mb-md-0">User Type</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="Teacher" readonly>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4">
                                    <div class="col-md-3">
                                        <label class="form-label mb-md-0">Contact Phone</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" value="+880 1798968181"
                                            placeholder="+880 1798968181">
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4">
                                    <div class="col-md-3">
                                        <label class="form-label mb-md-0">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" placeholder="abc@gmail.com"
                                            value="abc@gmail.com">
                                    </div>
                                </div>

                                <div class="card-footer text-end">
                                    <div class="primary-button">
                                        <a href="#" class="btn btn-primary ms-2">Save Changes</a>
                                    </div>
                                </div>
                            </form>
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
            $('#pendingTable').DataTable();
        });

        window.addEventListener('DOMContentLoaded', event => {
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
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