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
                    <div class="card__wrapper question_wrapper">
                        <div class="card__title-wrap mb-20">
                            <h3 class="table__heading-title text-center">Question submission form</h3>
                        </div>
                        <div class="question-submission-form-wrapper">
                            <form class="question-submission-form-block">
                                <!-- <div class="form-group">
                                    <select class="form-control js-example-basic-single" id="exampleFormControlSelect1">
                                        <option>Choose Subject</option>
                                        <option>Physics</option>
                                        <option>Chemistry</option>
                                        <option>Bangla</option>
                                        <option>Math</option>
                                        <option>ICT</option>
                                        <option>English</option>
                                    </select>
                                </div> -->
                                <div class="form-group question-submission-group">
                                    <!-- <label for="exampleFormControlSelect1">Choose Subject</label> -->
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option default>Choose Subject</option>
                                        <option>Chemistry</option>
                                        <option>Bangla</option>
                                        <option>Math</option>
                                        <option>ICT</option>
                                        <option>English</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlSelect1">Choose Chapter</label> -->
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option default>Choose Chapter</option>
                                        <option>Chapter 2</option>
                                        <option>Chapter 3</option>
                                        <option>Chapter 4</option>
                                        <option>Chapter 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlSelect1">Difficulty Level</label> -->
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option default>Difficulty Level</option>
                                        <option>Medium</option>
                                        <option>Hard</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Question title in Bangla"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Question title in English"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Option 1 in Bangla"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Option 1 in English"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Option 2 in Bangla"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Option 2 in English"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Option 3 in Bangla"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Option 3 in English"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Option 4 in Bangla"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Option 4 in English"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Option 4 in English"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Describe the answer explanation"></textarea>
                                </div>
                                <div class="form-group">
                                    <p>Choose Correct Answer</p>
                                    <fieldset id="option-wrapper">
                                        <div class="row overflow-hidden">
                                            <div class="col-md-12">
                                                <div class="input-field">
                                                    <div class="radio-field me-auto bounce-left">
                                                        <input type="checkbox" name="op1" value="Option 1">
                                                        <label>Option 1</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-field">
                                                    <div class="radio-field me-auto bounce-left">
                                                        <input type="checkbox" name="op2" value="Option 2">
                                                        <label>Option 2</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-field">
                                                    <div class="radio-field me-auto bounce-left delay-200">
                                                        <input type="checkbox" name="op3" value="Option 3">
                                                        <label>Option 3</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-field">
                                                    <div class="radio-field me-auto bounce-left delay-200">
                                                        <input type="checkbox" name="op4" value="Option 4">
                                                        <label>Option 4</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="question-submit-btn-wrapper d-flex justify-content-center">
                                    <button class="btn btn-primary w-100 py-2">Submit question</button>
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