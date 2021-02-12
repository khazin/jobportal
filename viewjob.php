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
                            <p class="text-light"><?= $_SESSION['name'] ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    </header>

    <div class="container col-12 d-flex  justify-content-center bg-success">

        <div class="container mt-5 col-9 bg-light row">

            <div class="col-12 bg-secondary">
                <div class="card mt-5">
                    <div class="card-body">
                        <h6 class="card-title"><?= $_SESSION['name'] ?></h6>
                        <h6 class="card-title"><?= $jobLocation ?></h6>
                        <h6 class="card-title"><?= $jobType ?></h6>
                        <h6 class="card-title"><?= $jobTitle ?></h6>
                        <div class="card-text mb-4">
                            <?= $jobDescription ?> Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, nesciunt?
                        </div>
                        <h6 class="card-title">Skills</h6>
                        <div>
                            <span class="badge rounded-pill bg-primary">HTML</span>
                            <span class="badge rounded-pill bg-primary">CSS</span>
                        </div>

                        <h6 class="card-title">Salary range</h6>
                        <p class="card-text">$<?= $jobMinSalary ?> - $<?= $jobMaxSalary ?></p>
                        <a href="#" class="btn btn-primary">Apply</a>
                        <a href="#" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>