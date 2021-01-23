<?php include './includes/ClassAutoloader.php'; ?>
<?php
///////////////////SHOW ALL JOB//////////////////////////

//job model initiated
$job = new Job();

// store job object in job view
$jobView = new JobView($job);

$model = new Model();
$view = new View();

$jobAttr = $view->showAllJobs($model, $job, $jobView);

$jobId[] = $jobAttr->id;
$jobTitle = $jobAttr->jobTitle;
$jobEmployerId = $jobAttr->employerId;
$jobLocation = $jobAttr->location;
$jobMinSalary = $jobAttr->minSalary;
$jobMaxSalary = $jobAttr->maxSalary;
$jobDescription = $jobAttr->description;
$jobSkills = $jobAttr->skills;


?>