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
            <!-- Sidebar -->
            <?php include_once "../dsb-nav-common/student-sidebar.php" ?>
            
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-center">Welcome Student Dashboard</h1>
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