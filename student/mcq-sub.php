<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Images/favicon.png" type="image/x-icon">

    <!-- All CSS -->
    <?php include_once "../common-section/css-lib.php" ?>

    <title>Learn Stream | MCQ </title>

    <style>

    </style>

</head>

<body>


    <!-- Include navbar -->
    <?php include_once "../common-section/navbar.php" ?>

    <!-- SUbject Hero Start -->
    <section class="mcq-subject-info">
        <div class="container">
            <div class="subject-info-wrapper">
                <h1 class="subject-name">Physics</h1>
                <p class="card-text">Chapters: 8</p>
                <p class="card-text">MCQs: 60</p>
            </div>

        </div>
    </section>
    <!-- SUbject Hero End -->

    <!-- MCQ Step Start -->
    <section class="mcq-step-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mcq-step-content-wrapper">
                        <form action="" class="show-section">
                            <div class="move">
                                <div class="step-count">
                                    Question <span id="activeStep">1</span>/5
                                </div>
                            </div>
                            <!-- Step 1 -->
                            <div class="steps">
                                <h1 class="quiz-question">
                                    What is your country name?
                                </h1>
                                <!-- quiz option form -->
                                <fieldset id="step-1">
                                    <div class="row overflow-hidden">
                                        <div class="col-md-12">
                                            <div class="input-field">
                                                <div class="radio-field me-auto bounce-left">
                                                    <input type="checkbox" name="op1" value="Russia">
                                                    <label>Russia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-field">
                                                <div class="radio-field me-auto bounce-left">
                                                    <input type="checkbox" name="op1" value="Russia">
                                                    <label>Russia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-field">
                                                <div class="radio-field me-auto bounce-left delay-200">
                                                    <input type="checkbox" name="op1" value="Australia">
                                                    <label>Australia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-field">
                                                <div class="radio-field me-auto bounce-left delay-200">
                                                    <input type="checkbox" name="op1" value="Bangladesh"
                                                        id="bangladesh-checkbox">
                                                    <label for="bangladesh-checkbox">Bangladesh</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <div class="correct-ans-text-wrapper">
                                    <p>Correct Answer</p>
                                </div>
                                <!-- Next Prev Hints and  -->
                                <div class="next-prev">

                                    <button type="button" class="button" id="step1btn"><i
                                            class="fa-solid fa-arrow-left"></i>Prev question</button>

                                    <!-- <button type="button" class="button button-submit" id="step1btn">Submit</button> -->


                                    <button type="button" class="button" id="step1btn">next question<i
                                            class="fa-solid fa-arrow-right"></i></button>

                                </div>
                                <div class="hints-btn-wrapper">
                                    <button type="button" class="button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalCenter">
                                        Show Answer
                                    </button>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Question Hints ID
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                This is our question hints for you. You can use this hints for your
                                                better understanding.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Hinst -->

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MCQ Step End -->
    <!-- MCQ Step Start -->
    <section class="mcq-step-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mcq-step-content-wrapper">
                        <form action="" class="show-section">
                            <div class="move">
                                <div class="step-count">
                                    Question <span id="activeStep">1</span>/5
                                </div>
                            </div>
                            <!-- Step 1 -->
                            <div class="steps">
                                <h1 class="quiz-question">
                                    What is your country name?
                                </h1>
                                <!-- quiz option form -->
                                <fieldset id="step-1">
                                    <div class="row overflow-hidden">
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <div class="radio-field me-auto bounce-left">
                                                    <input type="checkbox" name="op1" value="Russia">
                                                    <label>Russia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <div class="radio-field me-auto bounce-left">
                                                    <input type="checkbox" name="op1" value="Russia">
                                                    <label>Russia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <div class="radio-field me-auto bounce-left delay-200">
                                                    <input type="checkbox" name="op1" value="Australia">
                                                    <label>Australia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <div class="radio-field me-auto bounce-left delay-200">
                                                    <input type="checkbox" name="op1" value="Bangladesh"
                                                        id="bangladesh-checkbox">
                                                    <label for="bangladesh-checkbox">Bangladesh</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <div class="wrong-ans-text-wrapper">
                                    <p>Wrong Answer</p>
                                </div>
                                <!-- Next Prev Hints and  -->
                                <div class="next-prev">

                                    <button type="button" class="button" id="step1btn"><i
                                            class="fa-solid fa-arrow-left"></i>Prev question</button>

                                    <button type="button" class="button button-submit" id="step1btn">Submit
                                        Again</button>


                                    <button type="button" class="button" id="step1btn">next question<i
                                            class="fa-solid fa-arrow-right"></i></button>

                                </div>
                                <div class="hints-btn-wrapper">
                                    <button type="button" class="button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalCenter">
                                        Show Answer
                                    </button>
                                </div>

                                <!-- Modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Question Hints ID
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                This is our question hints for you. You can use this hints for your
                                                better understanding.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Hinst -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MCQ Step End -->



    <!-- Footer -->

    <?php include_once "../common-section/footer.php" ?>



    <!-- Script Cdn -->
    <?php include_once "../common-section/js-lib.php" ?>



</body>

</html>