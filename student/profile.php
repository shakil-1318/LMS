<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- All CSS -->
    <?php include_once "../common-section/dashboard-css-lib.php" ?>


    <title>Dashboard - Learn Stream</title>

    <style>
        .card__wrapper {
            background: #fff;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 6px 30px rgba(182, 186, 203, 0.3);
            position: relative;
            margin-top: 40px;
        }

        .table__heading-title {
            color: #362a2a;
            font-weight: 700;
            margin-top: 0px;
            line-height: 1;
            margin-bottom: 40px;
            text-align: center;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #ddd;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
        }

        .form-control[readonly] {
            background-color: #e9ecef;
        }

        .form-label,
        .col-form-label {
            color: #362a2a;
        }

        .account-profile .avatar-preview {
            width: 160px;
            height: 160px;
            position: relative;
        }

        .account-profile .avatar-preview>div {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

        }

        .account-profile .upload-link {
            position: absolute;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            background: var(--primary);
            bottom: 0;
            right: 0px;
            border-radius: 6px;
            color: #fff;
            overflow: hidden;
        }

        .account-profile .upload-link .update-flie {
            position: absolute;
            opacity: 0;
            z-index: 0;
            width: 100%;
            cursor: pointer;
            left: 0;
            height: 100%;
        }

        .fs-update {
            font-size: 1rem !important;
            line-height: 1.6;
        }

        .form-control {
            color: #7e7e7e;
            line-height: 1.7;
            font-size: 0.9rem;
            border-color: #dad8d4;
            height: 2.813rem;
            border-radius: 0.5rem;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5;
            appearance: none;
            background-clip: padding-box;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:hover,
        .form-control:focus,
        .form-control.active {
            box-shadow: none;
            outline: none;
            border-color: #dad8d4;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    
      <!-- Navbar  -->
      <?php include_once "../common-section/dashboard-nav.php" ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <!-- Sidebar -->
            <?php include_once "../dsb-nav-common/student-sidebar.php" ?>
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
                                                    style="background-image: url(../Images/avatar1.png);"></div>
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
                                                <input type="text" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="col-sm-6 mt-2 mt-sm-0">
                                                <input type="text" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4">
                                    <div class="col-md-3">
                                        <label class="form-label mb-md-0">User Type</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="Student" readonly>
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
                                        <input type="email" class="form-control" placeholder="abc@gmail.com">
                                    </div>
                                </div>

                                <div class="card-footer text-end">

                                    <a href="#" class=" btn btn-primary ms-2">Save Changes</a>

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