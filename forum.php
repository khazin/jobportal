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
<?php include 'includes/header2.php'; ?>


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