<?php session_start(); ?>
<?php include './includes/ClassAutoloader.php'; ?>
<?php

//forumQuestion model initiated
$forumQuestion = new ForumQuestion();
//applicant model initiated
$applicant = new Applicants();

$modelObj = new stdClass();
$modelObj->forumQuestion = $forumQuestion;
$modelObj->applicant = $applicant;

// store forumQuestion object in forumQuestion view
$forumQuestionView = new ForumQuestionView($forumQuestion);
// store applicant object in applicant view
$applicantView = new ApplicantsView($applicant);

$viewObj = new stdClass();
$viewObj->forumQuestionView = $forumQuestionView;
$viewObj->applicantView = $applicantView;

$model = new Model();
$view = new View();

$forumAttr = $view->showAllQuestions($model, $modelObj, $viewObj);

$firstnameArr = $forumAttr->applicantsObj->firstnameArr;
$lastnameArr = $forumAttr->applicantsObj->lastnameArr;
$forumIdArr = $forumAttr->forumQuestionObj->forumIdArr;
$questionArr = $forumAttr->forumQuestionObj->questionArr;
$questionUserIdArr = $forumAttr->forumQuestionObj->questionUserIdArr;
$questionVoteArr = $forumAttr->forumQuestionObj->questionVoteArr;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="library/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/node_modules/@fortawesome/fontawesome-free/css/all.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container ">
                <a class="navbar-brand col-2" href="index.php">JOB PORTAL</a>

                <div class="collapse navbar-collapse col-8 d-flex justify-content-around">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Search users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Find jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Find company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Post</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2 mt-3 d-flex justify-content-around">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <i class="far fa-user bg-light"></i>
                        </li>
                        <li class="nav-item">
                            <p class="text-light">Firstname Lastname</p>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-dark d-flex justify-content-center">
            <form action="" class="form col-4 ">

                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Search anything">
                    <button class="btn btn-outline-secondary" type="button" id=""><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    </header>

    <div class="container col-12 d-flex flex-column justify-content-start bg-success">

        <div class="container col-6 ">

            <!-- card profile -->
            <?php for ($i = 0; $i < count($forumIdArr); $i++) { ?>
                <div class="card my-5">
                    <a href="viewanswers.php?id=<?=$forumIdArr[$i]?>" class="card-body row container">
                        <div class="col-2 d-flex flex-column justify-content-center">
                            <i class="fas fa-chevron-up">2</i>
                            <i class="far fa-eye">2</i>
                            <i class="far fa-comment-alt">2</i>
                        </div>
                        <div class="col-10">
                            <h6 class=" "><?=$firstnameArr[$i]?> <?=$lastnameArr[$i]?></h6>
                            <!-- <h5 class="mb-4"<?//=$questionArr[$i]?></h5> -->
                            <p class="white-space: nowrap; width: 50px;overflow: hidden;text-overflow: ellipsis;">
                            <?=$questionArr[$i]?></p>
                        </div>
                    </a>
                </div>
            <?php   }  ?>
        </div>
    </div>
</body>

</html>