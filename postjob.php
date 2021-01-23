<?php include './includes/ClassAutoloader.php'; ?>
<?php
///////////////////POST JOB//////////////////////////

 //job model initiated
 $job = new Job();

//  //employer model initiated
//  $employer = new Employer();

 // store job object in job controller
 $jobController = new JobController($job);

//  // store employer object in employer controller
//  $employerController = new EmployerController($employer);

  //set job data
    $id=0;
    $employerId = 7; // id take from session id
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