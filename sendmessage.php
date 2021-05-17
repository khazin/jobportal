<?php include './includes/ClassAutoloader.php';
session_start();
ob_start();
?>

<?php
if (isset($_POST['send'])) {
    /////////////////SEND MESSAGE/////////////////////
    $msgSenderId = $_SESSION['user_id'];
    $msgReceiverId = $_GET['id'];
    $msg = $_POST['message'];


    //connection model initiated
    $message = new Message();

    // store message object in message controller
    $messageController = new MessageController($message);


    //set message
    $messageController->setMsgSenderId($msgSenderId);
    $messageController->setMsgReceiverId($msgReceiverId);
    $messageController->setMsg($msg);

    $model = new Model();
    $controller = new Controller();

    if ($controller->sendMessage($model, $message) == true) {
        ?>
        <script>
          alert("You have sent a message.");
        //   setTimeout(function() {
        //     window.location.href = "viewanswers.php?id=<?=$_GET['id']?>";
        //   }, 100);
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="icons/node_modules/@fortawesome/fontawesome-free/css/all.css">
</head>

<body>
<?php include './includes/header2.php' ?>

    <div class="container col-12 d-flex flex-column align-items-center bg-light">

        <!-- SEND MESSAGE FORM -->
        <form method="post" action="" class="form col-6">
            <div class="card mt-5" style="width: 38rem;">
                <h5 class="mt-3 card-title text-center">Send Message</h5>
                <div class="card-body ">

                    <div class="col-12 form__post-job" id="formSendMessage">
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="send">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
    <script src="library/node_modules/jquery/dist/jquery.min.js"></script>
</body>

</html>