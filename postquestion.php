<?php
session_start();
include './includes/ClassAutoloader.php';
include './includes/settings.php';
?>

<?php
if (isset($_POST['post'])) {
    /////////////////POST QUESTION/////////////////////
    $questionUserId = $_GET['id'];
    $question = $_POST['question'];

    //connection model initiated
    $forumQuestion = new forumQuestion();

    // store forumQuestion object in forumQuestion controller
    $forumQuestionController = new forumQuestionController($forumQuestion);

    //set forumQuestion
    $forumQuestionController->setQuestionUserId($questionUserId);
    $forumQuestionController->setQuestion($question);

    $model = new Model();
    $controller = new Controller();

    if ($controller->postQuestion($model, $forumQuestion) == true) {
        echo '<script>
            alert("You have posted a question.");
            setTimeout(function(){
                window.location.href = "forum.php";
             }, 100);
        </script>';
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="icons/node_modules/@fortawesome/fontawesome-free/css/all.css">
</head>

<body>
    <?php include './includes/header2.php' ?>
    <div class="container col-12 d-flex flex-column align-items-center bg-light">

        <!-- SEND MESSAGE FORM -->
        <form method="post" action="" class="form col-6">
            <div class="card mt-5" style="width: 38rem;">
                <h5 class="mt-3 card-title text-center">Post Question</h5>
                <div class="card-body ">

                    <div class="col-12 form__post-job" id="formPostQuestion">
                        <div class="mb-3">
                            <label for="question" class="form-label">Question</label>
                            <textarea class="form-control" name="question" id="question"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="post">Post</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
    <script src="library/node_modules/jquery/dist/jquery.min.js"></script>
</body>

</html>