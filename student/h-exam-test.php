<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/favicon.png" type="image/x-icon">

    <!-- All CSS -->
    <?php include_once "../common-section/css-lib.php" ?>

    <title>Learn Stream | MCQ </title>

    <style>
        .step-bar-progress-wrapper {
            margin-bottom: 20px;
        }

        .step-bar {
            border: solid 2px rgb(255, 255, 255);
            background-color: #FF4E59;
            height: 28px;
            width: 80%;
            border-radius: 50px;
            margin: 0 auto;
            padding: 4px;
        }

        .step-bar .fill {
            width: 20%;
            height: 100%;
            border-radius: inherit;
            background-color: rgb(255, 255, 255);
            transition: 0.5s;
        }
    </style>

</head>

<body>


    <!-- Include navbar -->
    <?php include_once "../common-section/navbar.php" ?>


    <!-- SUbject Hero Start -->
    <section class="subject-heading-wrapper">
        <div class="container">
            <div class="subject-heading-inner-flex ">
                <div class="subject-Text-wrap">
                    <h1 class="subject-name">Hybrid Test</h1>
                </div>
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
                        <div class="mcq-timer-count-wrapper">
                            <div class="mcq-sticky-content-wrapper">
                                <div class="timer">
                                    <h2><span id="countdown-timer">60</span>sec</h2>
                                </div>
                                <div class="divider"></div>
                                <div class="mcq-number">
                                    <h1 class="mcq-number">10 / 30</h1>
                                </div>
                            </div>
                        </div>
                        <div class="step-bar-progress-wrapper">
                            <div class="step-bar">
                                <div class="fill"></div>
                            </div>
                        </div>
                        <form action="" class="show-section">
                            <div class="hybrid-question-wrapper">
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
                                                        <input type="checkbox" name="op1" value="Bangladesh">
                                                        <label>Bangladesh</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>



                                </div>
                            </div>
                            <div class="hybrid-question-wrapper">
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
                                                        <input type="checkbox" name="op1" value="Bangladesh">
                                                        <label>Bangladesh</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>



                                </div>
                            </div>
                            <div class="hybrid-question-wrapper">
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
                                                        <input type="checkbox" name="op1" value="Bangladesh">
                                                        <label>Bangladesh</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>



                                </div>
                            </div>
                            <div class="hybrid-question-wrapper">
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
                                                        <input type="checkbox" name="op1" value="Bangladesh">
                                                        <label>Bangladesh</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>



                                </div>
                            </div>
                            <div class="hybrid-question-wrapper">
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
                                                        <input type="checkbox" name="op1" value="Bangladesh">
                                                        <label>Bangladesh</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>



                                </div>
                            </div>

                            <!-- Next Prev Hints and  -->
                            <div class="next-prev d-flex justify-content-center">

                                <button type="button" class="button button-submit" id="step1btn">Submit</button>

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