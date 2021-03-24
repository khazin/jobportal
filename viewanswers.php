<?php session_start(); ?>
<?php
include './includes/ClassAutoloader.php';
include './includes/settings.php';
?>
<?php

if (isset($_GET['id'])) {
  $forumId = $_GET['id'];

  //forumAnswer model initiated
  $forumAnswer = new ForumAnswer();
  //forumQuestion model initiated
  $forumQuestion = new ForumQuestion();
  //applicant model initiated
  $applicant = new Applicants();

  $modelObj = new stdClass();
  $modelObj->forumAnswer = $forumAnswer;
  $modelObj->forumQuestion = $forumQuestion;
  $modelObj->applicant = $applicant;

  // store forumAnswer object in forumAnswer Controller
  $forumAnswerController = new ForumAnswerController($forumAnswer);
  // store forumQuestion object in forumQuestion Controller
  $forumQuestionController = new ForumQuestionController($forumQuestion);
  // store applicant object in applicant Controller
  $applicantController = new ApplicantsView($applicant);

  $forumQuestionController->setForumId($forumId);


  // store forumAnswer object in forumAnswer view
  $forumAnswerView = new ForumAnswerView($forumAnswer);
  // store forumQuestion object in forumQuestion view
  $forumQuestionView = new ForumQuestionView($forumQuestion);
  // store applicant object in applicant view
  $applicantView = new ApplicantsView($applicant);

  $viewObj = new stdClass();
  $viewObj->forumQuestionView = $forumQuestionView;
  $viewObj->applicantView = $applicantView;
  $viewObj->forumAnswerView = $forumAnswerView;

  $model = new Model();
  $view = new View();


  ////////SHOW QUESTION//////////
  $forumAttr = $view->showQuestion($model, $modelObj, $viewObj);

  $firstname = $forumAttr->applicantsObj->firstname;
  $lastname = $forumAttr->applicantsObj->lastname;
  $forumId = $forumAttr->forumQuestionObj->forumId;
  $question = $forumAttr->forumQuestionObj->question;
  $questionUserId = $forumAttr->forumQuestionObj->questionUserId;
  $questionVote = $forumAttr->forumQuestionObj->questionVote;


  ////////SHOW ANSWERS//////////
  $forumAnswerController->setQuestionId($forumId);

  $forumAnswerAttr = $view->showAllAnswers($model, $modelObj, $viewObj);
  $applicantsObj = $forumAnswerAttr->applicantsObj;
  $forumAnswerObj = $forumAnswerAttr->forumAnswerObj;

  $firstnameArr = $applicantsObj->firstnameArr;
  $lastnameArr = $applicantsObj->lastnameArr;

  $answerIdArr = $forumAnswerObj->answerIdArr;
  $questionIdArr = $forumAnswerObj->questionIdArr;
  $answerUserIdArr = $forumAnswerObj->answerUserIdArr;
  $answerArr = $forumAnswerObj->answerArr;
  $answerVoteArr = $forumAnswerObj->answerVoteArr;
}

if (isset($_POST['post'])) {
  $answer = $_POST['answer'];
  $forumAnswerController->setQuestionId($forumId);
  $forumAnswerController->setAnswer($answer);
  $forumAnswerController->setAnswerUserId($_SESSION['user_id']);

  $controller = new Controller();
  if ($controller->postAnswer($model, $forumAnswer) == true) {
  ?>
    <script>
      alert("You have posted an answer.");
      setTimeout(function() {
        window.location.href = "viewanswers.php?id=<?=$_GET['id']?>";
      }, 100);
    </script>
<?php
  }
}
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


  <div class="container col-12 d-flex flex-column justify-content-start bg-light">
    <div class="container col-6 ">
      <!-- card profile -->
      <div class="card my-5">
        <div class="card-body row container">
          <div class="col-2 d-flex flex-column justify-content-center  align-items-end">
            <i class="fas fa-chevron-up"><?= $questionVote ?></i>
            <i class="far fa-comment-alt">2</i>
          </div>
          <div class="col-10">
            <h6 class=" "><?= $firstname ?> <?= $lastname ?></h6>
            <p class="white-space: nowrap; width: 50px;overflow: hidden;text-overflow: ellipsis;">
              <?= $question ?></p>
            <hr>
          </div>
        </div>

        <div class="card-body row container">
          <div class="col-3 pl-4 d-flex flex-colmn justify-content-cente
          align-items-en">

          </div>
          <div class="col-9">
            <form method="post" action="" class="form">
              <div class="col-12 form__post-job" id="formPostAnswer">
                <div class="mb-3">
                  <label for="answer" class="form-label">Answer</label>
                  <textarea class="form-control" name="answer" id="answer"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="post">Post</button>
              </div>
            </form>
            <hr>
          </div>
        </div>

        <?php for ($i = 0; $i < count($answerIdArr); $i++) {  ?>
          <div class="card-body row container">
            <div class="col-3 pl-4 d-flex flex-column justify-content-center align-items-end">
              <i class="fas fa-chevron-up"><?= $answerVoteArr[$i] ?></i>
            </div>
            <div class="col-9">
              <h6 class=" "><?= $firstnameArr[$i] ?> <?= $lastnameArr[$i] ?></h6>
              <p class="white-space: nowrap; width: 50px;overflow: hidden;text-overflow: ellipsis;">
                <?= $answerArr[$i] ?></p>
              <hr>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</body>

</html>