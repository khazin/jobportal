<?php session_start(); ?>
<?php include './includes/ClassAutoloader.php'; ?>
<?php
if (isset($_GET['id'])) {
    ///////////////////SHOW JOB//////////////////////////

    //job model initiated
    $job = new Job();

    // store job object in job controller
    $jobController = new JobController($job);

    //set job id
    $jobController->setJobId($_GET['id']);
    // store job object in job view
    $jobView = new JobView($job);

    $model = new Model();
    $view = new View();

    $jobAttr = $view->showJob($model, $job, $jobView);

    $companyName = $_GET['company'];
    $jobId = $jobAttr->id;
    $jobTitle = $jobAttr->jobTitle;
    $jobEmployerId = $jobAttr->employerId;
    $jobLocation = $jobAttr->location;
    $jobMinSalary = $jobAttr->minSalary;
    $jobMaxSalary = $jobAttr->maxSalary;
    $jobDescription = $jobAttr->description;
    $jobSkills = $jobAttr->skills;
    $jobType = $jobAttr->jobType;
}

$message = 'Do you want to apply for this job?';


 ///////////////////CHECK APPLY JOB//////////////////////////

    //job model initiated
    $job = new Job();
    //applicant model initiated
    $applicant = new Applicants();
    $modelArr=[$job,$applicant];
    
    // store job object in job controller
    $jobController = new JobController($job);
    // store applicant object in applicant controller
    $applicantController = new ApplicantsController($applicant);

        
    // store job object in job View
    $jobView = new JobView($job);
    // store applicant object in applicant View
    $applicantView = new ApplicantsView($applicant);
    $viewArr=[$jobView,$applicantView];

    //set job data
    $jobController->setJobId($jobId);
    //set applicant data
    $applicantController->setapplicantId($_SESSION['user_id']);

    $model = new Model();
    $view = new View();

    $result = $view->checkAppliedJob($model, $modelArr);
        
    if ($result == true) {
        $message = 'You have applied for this job';
        header("Location: searchjob.php");
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


    <div class="container col-12 d-flex  justify-content-center bg-success">
        <div class="container mt-5 col-9 bg-light row">
            <div class="col-12 bg-secondary">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3><?=$message?></h3>
                        <div class="card-title">Job title: <?=$jobTitle?></div>
                        <div class="card-title">Company: <?=$companyName?></div>
                        <div class="card-title">Location: <?=$jobLocation?></div>
                        <div class="card-title">salary: $<?=$jobMinSalary?> - $<?=$jobMaxSalary?></div>
                        <form method="post"><button type="submit" class="btn btn-primary" name="apply" <?php if($result == true) echo 'disabled'?>>Yes</button></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php

if ( isset($_POST['apply'])) {
    ///////////////////APPLY JOB//////////////////////////

    //job model initiated
    $job = new Job();
    //applicant model initiated
    $applicant = new Applicants();
    $modelArr=[$job,$applicant];
    
    // store job object in job controller
    $jobController = new JobController($job);
    // store applicant object in applicant controller
    $applicantController = new ApplicantsController($applicant);

    //set job data
    $jobController->setJobId($jobId);
    //set applicant data
    $applicantController->setapplicantId($_SESSION['user_id']);

    $model = new Model();
    $controller = new Controller();
    $controller->applyJob($model, $modelArr);
}
?>