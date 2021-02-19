<?php session_start(); ?>
<?php include './includes/ClassAutoloader.php'; ?>
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
  $controller->postAnswer($model,$forumAnswer);
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
      <div class="card my-5">
        <div class="card-body row container">
          <div class="col-2 d-flex flex-column justify-content-center  align-items-end">
            <i class="fas fa-chevron-up"><?=$questionVote?></i>
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

        <?php for ($i=0; $i < count($answerIdArr); $i++) {  ?>
        <div class="card-body row container">
          <div class="col-3 pl-4 d-flex flex-column justify-content-center align-items-end">
            <i class="fas fa-chevron-up"><?=$answerVoteArr[$i]?></i>
          </div>
          <div class="col-9">
            <h6 class=" "><?=$firstnameArr[$i]?> <?=$lastnameArr[$i]?></h6>
            <p class="white-space: nowrap; width: 50px;overflow: hidden;text-overflow: ellipsis;">
            <?=$answerArr[$i]?></p>
            <hr>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
  </div>
</body>

</html>