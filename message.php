<?php session_start(); ?>
<?php include './includes/ClassAutoloader.php'; ?>
<?php include './includes/settings.php'; ?>
<?php


///////////////////CHECK ALL MESSAGES//////////////////////////
$msgReceiverId = $_SESSION['user_id'];

//message model initiated
$message = new Message();
//applicant model initiated
$applicant = new Applicants();
$modelArr = [$message, $applicant];

// store message object in message controller
$messageController = new MessageController($message);
// store applicant object in applicant controller
$applicantController = new ApplicantsController($applicant);


// store message object in message View
$messageView = new MessageView($message);
// store applicant object in applicant View
$applicantView = new ApplicantsView($applicant);
$viewArr = [$messageView, $applicantView];

//set message data
$messageController->setMsgReceiverId($msgReceiverId);

$model = new Model();
$view = new View();

$msgSenderAttr = $view->getMsgSender($model, $modelArr, $viewArr);

$applicantsAttr = $msgSenderAttr->applicantsObj;
$messageAttr = $msgSenderAttr->messageObj;

$firstnameArr = $applicantsAttr->firstname;
$lastnameArr = $applicantsAttr->lastname;
$jobTitleArr =  $applicantsAttr->jobTitle;
$companyArr = $applicantsAttr->company;
$msgIdArr = $messageAttr->msgId;
$msgSenderIdArr = $messageAttr->msgSenderId;
$msgArr = $messageAttr->msg;


if (isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $jobTitle = $_GET['jobTitle'];
    $company = $_GET['company'];
    $msg = $_GET['msg'];
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
<?php include './includes/header2.php'; ?>
   

    <div class="container col-12 d-flex  justify-content-center bg-light">

        <div class="container mt-5 col-12 bg-light row">

            <div class="col-2 d-flex flex-column pt-5">
                <?php for ($i = 0; $i < count($msgIdArr); $i++) { ?>
                    <a href="message.php?firstname=<?= $firstnameArr[$i] ?>&lastname=<?= $lastnameArr[$i] ?>&jobTitle=<?= $jobTitleArr[$i] ?>&company=<?= $companyArr[$i] ?>&msg=<?= $msgArr[$i] ?>" class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title"><?= $firstnameArr[$i] ?> <?= $lastnameArr[$i] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $jobTitleArr[$i] ?> - <?= $companyArr[$i] ?></h6>
                            <p class="card-subtitle" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                                <?= $msgArr[$i] ?>
                            </p>
                        </div>
                    </a>
                <?php  } ?>
            </div>

            <div class="col-10 bg-secondary pt-5">

                <div class="container card mt-3">
                    <h5 class="text-center card-title">Message</h5>
                    <h6 class="card-title "><?= $firstname ?> <?= $lastname ?></h6>
                    <h6 class="card-subtitle mb-5 text-muted"><?= $jobTitle ?> - <?= $company ?></h6>

                    <p class="card-text"><?= $msg ?></p>

                </div>



            </div>




        </div>
    </div>
</body>

</html>