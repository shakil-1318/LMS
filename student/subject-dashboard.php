<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Images/favicon.png" type="image/x-icon">

    <!-- All CSS -->
    <?php include_once "../common-section/css-lib.php" ?>

    <title>Learn Stream | Online Education Platform</title>

</head>

<body>


      <!-- Include navbar -->
      <?php include_once "../common-section/navbar.php" ?>

    <!-- SUbject Hero Start -->
    <section class="subject-info">
        <div class="container">
            <div class="subject-info-wrapper">
                <h1 class="subject-name">Subject Name Physics</h1>
                <p class="card-text">Chapters: 8</p>
                <p class="card-text">MCQs: 1100</p>
            </div>
            <div class="question-label-wrapper">
                <h2>Question type</h2>
                <div class="question-label">
                    <a class="question-filter-btn" href="#">All</a>
                    <a class="question-filter-btn" href="#">Easy</a>
                    <a class="question-filter-btn" href="#">Medium</a>
                    <a class="question-filter-btn" href="#">Hard</a>
                </div>
            </div>

            <div class="chapter-content-wrapper">
                <a href="#" class="chapter-info-wrapper">
                    <h4>Chapter 1</h4>
                    <p>109 MCQ</p>
                </a>
                <a href="#" class="chapter-info-wrapper">
                    <h4>Chapter 2</h4>
                    <p>50 MCQ</p>
                </a>
                <a href="#" class="chapter-info-wrapper">
                    <h4>Chapter 3</h4>
                    <p>50 MCQ</p>
                </a>
                <a href="#" class="chapter-info-wrapper">
                    <h4>Chapter 4</h4>
                    <p>50 MCQ</p>
                </a>
            </div>
        </div>
    </section>
    <!-- SUbject Hero End -->



    <!-- Footer -->

    <?php include_once "../common-section/footer.php" ?>

    <!-- Script Cdn -->
    <?php include_once "../common-section/js-lib.php" ?>

</body>

</html>