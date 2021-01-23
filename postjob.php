<?php include './includes/ClassAutoloader.php'; ?>
<?php
///////////////////POST JOB//////////////////////////

 //job model initiated
 $job = new Job();

 // store job object in job controller
 $jobController = new JobController($job);

  //set job data
    $id=0;
    $employerId = 7; // employer id take from session id
    $jobTitle = 'web dev';
    $location = 'woodlands, sg';
    $minSalary = 1000;
    $maxSalary = 2000;
    $description = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, exercitationem.';
    $skills = ['html','css','php','js'];
    $jobArr = [$jobTitle,$employerId,$location,$minSalary,$maxSalary,$description,$skills];
    $jobController->setJob($jobArr, $id);

    $model = new Model();
    $controller = new Controller();

 $controller->postJob($model, $job);
?>