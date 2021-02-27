<?php session_start();
error_reporting(E_ALL & ~E_NOTICE); ?>
<?php include './includes/ClassAutoloader.php'; ?>

<?php
if (isset($_POST['search'])) {
    $jobTitle = $_POST['jobTitle'];
    $jobLocation = $_POST['jobLocation'];
    $companyType = $_POST['companyType'];
    if ($_POST['skillsArr'] == null) {
        $_POST['skillsArr'] = [];
    }
    $skillsArr = $_POST['skillsArr'];
    if ($_POST['jobType'] == null) {
        $_POST['jobType'] = [];
    }
    $jobType = $_POST['jobType'];
    $minSalary = $_POST['minSalary'];
    $maxSalary = $_POST['maxSalary'];

    //job model initiated
    $job = new Job();
    //Employer model initiated
    $employer = new Employer();

    $modelArr = [$job, $employer];
    // store job object in job Controller
    $jobController = new JobController($job);
    $employerController = new EmployerController($employer);

    $jobController->setJobTitle($jobTitle);
    $jobController->setJobLocation($jobLocation);
    $jobController->setJobSkills($skillsArr);
    $jobController->setJobType(implode(',', $jobType));
    $jobController->setJobMinSalary($minSalary);
    $jobController->setJobMaxSalary($maxSalary);
    $employerController->setEmployerCompanyType($companyType);

    // store job object in job view
    $jobView = new JobView($job);
    // store employer object in employer view
    $employerView = new EmployerView($employer);

    $viewArr = [$jobView, $employerView];

    $model = new Model();
    $view = new View();

    $searchJobAttr = $view->searchJob($model, $modelArr, $viewArr);

    $jobAttr = $searchJobAttr->jobAttr;
    $jobIdArr = $jobAttr->id;
    $jobTitleArr = $jobAttr->jobTitle;
    $employerIdArr = $jobAttr->employerId;
    $locationArr = $jobAttr->location;
    $minSalaryArr = $jobAttr->minSalary;
    $maxSalaryArr = $jobAttr->maxSalary;
    $descriptionArr = $jobAttr->description;
    $skillsArr = $jobAttr->skills;
    $jobTypeArr = $jobAttr->jobType;
    $companyNameArr = $searchJobAttr->companyName;
    $companyTypeArr = $searchJobAttr->companyType;
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

        <div class="container mt-5 col-12 bg-light row">

            <div class=" col-2  d-flex flex-column ">
                <form method="post" class="form mt-5">
                    <input type="text" placeholder="Job" class="form-control mb-3" id="jobTitle" name="jobTitle">
                    <input type="text" placeholder="Location" class="form-control mb-3" id="jobLocation" name="jobLocation">
                    <input type="text" placeholder="specialisation" class="form-control mb-3" id="companyType" name="companyType">
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Skills" id="skill" name="skills" list='skills'>
                        <datalist id="skills">
                            <option value="HTML">
                            <option value="CSS">
                            <option value="Javscript">
                            <option value="Linux">
                            <option value="AWS">
                        </datalist>
                        <div class="btn btn-outline-secondary" onclick="return addSkills();"><i class="fas fa-plus"></i></div>
                    </div>

                    <div class="mt-3">
                        <h6>Skills</h6>
                        <div class="row container__skills" id="skillsContainer">
                            <!-- append skills badge here -->
                            <!-- <span class="badge rounded-pill bg-primary ml-3 pills">Windows Server<i class="fas fa-times ml-1 btn-icon__remove" onclick="removePill(this)"></i></span> -->
                        </div>

                    </div>
                    <div class="mt-3">
                        <h6>Types of employment</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="full time" id="" name="jobType[]">
                            <label class="form-check-label" for="">Full-time</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="part time" id="parTime" name="jobType[]">
                            <label class="form-check-label" for="parTime">Part-time</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="remote" id="" name="jobType[]">
                            <label class="form-check-label" for="">Remote</label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6>Salary range</h6>
                        <label class="form-check-label" for="">Minimum salary</label>
                        <input type="range" min="1" max="10000" value="1700" class="slider" id="minSalary" 
                        name="minSalary" onchange="return changeSliderValue(this)">
                        <p id="minSalaryValue">$1700</p>
                        <label class="form-check-label" for="">Maximum salary</label>
                        <input type="range" min="1" max="10000" value="5000" class="slider" id="maxSalary" 
                        name="maxSalary" onchange="return changeSliderValue(this)">
                        <p id="maxSalaryValue">$5000</p>

                    </div>
                    <input type="submit" class="btn btn-primary mt-5" name="search" onclick="">

                </form>
            </div>
            <div class=" col-10  bg-secondary">
                <?php for ($i = 0; $i < count($jobIdArr); $i++) { ?>
                    <div class="card mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-title"><?= $companyNameArr[$i] ?></h6>
                            <h6 class="card-title"><?= $locationArr[$i] ?></h6>
                            <h6 class="card-title"><?= $companyTypeArr[$i] ?></h6>
                            <h6 class="card-title"><?= $jobTitleArr[$i] ?></h6>
                            <div class="card-text mb-4" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                                <?= $descriptionArr[$i] ?>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, sit corporis odit provident vitae maiores debitis nemo
                            </div>
                            <h6 class="card-title">Skills</h6>
                            <div style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                                <?php
                                for ($j = 0; $j < count($skillsArr[$i]); $j++) {
                                    echo '<span class="badge rounded-pill bg-primary mr-2">' . $skillsArr[$i][$j] . '</span>';
                                };
                                ?>
                            </div>

                            <h6 class="card-title">Salary range</h6>
                            <p class="card-text">$<?=$minSalaryArr[$i]?> - $<?=$maxSalaryArr[$i]?></p>
                            <a href="viewjob.php?id=<?=$jobIdArr[$i]?>&company=<?=$companyNameArr[$i]?>" class="btn btn-primary">View Job</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
<script src="js/script.js"></script>
<script src="library/node_modules/jquery/dist/jquery.min.js"></script>

</html>