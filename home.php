<?php session_start(); ?>
<?php 
include './includes/ClassAutoloader.php';
include './includes/settings.php';

?>

<?php
if ($_SESSION['role'] == 'applicant') {
  ///////////////////SHOW APPLICANT PROFILE//////////////////////////

  $userId = $_SESSION['user_id'];
  // initialise applicants model
  $applicant = new Applicants();
  // initialise biography model
  $biography = new Biography();
  //initialise skills model
  $skills = new Skills();
  //initialise education model
  $education = new Education();
  //initialise experience model
  $experience = new Experience();

  // store applicant object in applicant controller
  $applicantController = new ApplicantsController($applicant);
  // store biography object in biography controller
  $biographyController = new BiographyController($biography);
  // store skills object in skills controller
  $skillsController = new skillsController($skills);
  // store education object in education controller
  $educationController = new EducationController($education);
  // store experience object in experience controller
  $experienceController = new ExperienceController($experience);

  //set applicant id
  $applicantController->setApplicantId($userId);
  //set biography id
  $biographyController->setBiographyId($userId);
  //set skills id
  $skillsController->setSkillsId($userId);
  //set education id
  $educationController->setEducationUserId($userId);
  //set experience id
  $experienceController->setExperienceUserId($userId);

  // store applicant object in applicant view
  $applicantView = new ApplicantsView($applicant);
  // store biography object in biography view
  $biographyView = new BiographyView($biography);
  // store skills object in skills view
  $skillsView = new SkillsView($skills);
  // store education object in education view
  $educationView = new EducationView($education);
  // store experience object in experience view
  $experienceView = new ExperienceView($experience);

  $modelArr = [$applicant, $biography, $skills, $education, $experience];
  $viewArr = [$applicantView, $biographyView, $skillsView, $educationView, $experienceView];

  $model = new Model();
  $view = new View();

  $applicantProfObj = $view->showApplicantProfile($model, $modelArr, $viewArr);
  $applicantAttr = $applicantProfObj->applicantAttr;
  $biographyAttr = $applicantProfObj->biographyAttr;
  $skillsAttr = $applicantProfObj->skillsAttr;
  $educationAttr = $applicantProfObj->educationAttr;
  $experienceAttr = $applicantProfObj->experienceAttr;

  $_SESSION['name'] = $applicantAttr->firstname . ' ' . $applicantAttr->lastname;
} elseif ($_SESSION['role'] == 'employer') {
  ///////////////////SHOW EMPLOYER PROFILE//////////////////////////
  $userId = $_SESSION['user_id'];

  // initialise employers   
  $employer = new Employer();

  // initialise biography   
  $biography = new Biography();

  // store employer object in employer controller
  $employerController = new EmployerController($employer);

  // store biography object in biography controller
  $biographyController = new BiographyController($biography);

  $employerController->setEmployerId($userId);
  $biographyController->setBiographyId($userId);

  // store employer object in employer view
  $employerView = new EmployerView($employer);

  // store biography object in biography view
  $biographyView = new BiographyView($biography);

  $modelArr = [$employer, $biography];
  $viewArr = [$employerView, $biographyView];

  $model = new Model();
  $view = new View();

  $employerProfObj = $view->showEmployerProfile($model, $modelArr, $viewArr);
  $employerAttr = $employerProfObj->employerAttr;
  $biographyAttr = $employerProfObj->biographyAttr;

  $_SESSION['name'] = $employerAttr->companyName;
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
 <?php include 'includes/header2.php'; ?>

  <div class="container col-12 d-flex flex-column align-items-center bg-success">

    <div class="col-6 card__container" id="cardContainerApplicant">

      <?php if ($_SESSION['role'] == 'applicant') { ?>

        <!--applicant card profile -->
        <div class="card my-5">
          <div class="card-body row">
            <div class="col-9 ">
              <h4 class=" "><?= $applicantAttr->firstname ?> <?= $applicantAttr->lastname ?></h4>
              <h5 class="mb-4"><?= $_SESSION['email'] ?></h5>
              <h6 class="">About me</h6>
              <p class=" "><?= $biographyAttr->bio ?></p>
            </div>
            <div class="col-2">
            </div>
            <div class="col-1"><i class="far fa-edit ml-3"></i></div>
          </div>
        </div>

        <!--applicant card skills -->
        <div class="card my-5">
          <div class="card-body row">
            <div class="col-9">
              <h5 class="mb-4">Skills</h5>
              <div class="row">
                <?php
                for ($i = 0; $i < count($skillsAttr->skills); $i++) {
                ?>
                  <span class="badge rounded-pill bg-primary ml-3 mb-2"><?= $skillsAttr->skills[$i] ?></span>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="col-2"></div>
            <div class="col-1"><i class="far fa-edit ml-3"></i></div>
          </div>
        </div>

        <!--applicant card education -->
        <div class="card my-5">
          <div class="card-body row">
            <div class="col-9">
              <h5 class="mb-4">Education</h5>
              <?php
              for ($i = 0; $i < count($educationAttr->id); $i++) {
              ?>
                <p><?= $educationAttr->certification[$i] ?> in <?= $educationAttr->course[$i] ?> - <?= $educationAttr->school[$i] ?>, <?= $educationAttr->graduateYear[$i] ?></p>
              <?php
              }
              ?>
            </div>
            <div class="col-2"></div>
            <div class="col-1"><i class="far fa-edit ml-3"></i></div>

          </div>
        </div>

        <!--applicant work experience -->
        <div class="card my-5">
          <div class="card-body row">
            <div class="col-9">
              <h5 class="mb-4">Experience</h5>
              <?php
              for ($i = 0; $i < count($educationAttr->id); $i++) {
              ?>
                <p><?= $experienceAttr->jobTitle[$i] ?> - <?= $experienceAttr->company[$i] ?>, <?= $experienceAttr->yearFrom[$i] ?> - <?= $experienceAttr->yearTo[$i] ?></p>
              <?php
              }
              ?>
            </div>
            <div class="col-2"></div>
            <div class="col-1"><i class="far fa-edit ml-3"></i></div>

          </div>
        </div>

      <?php } elseif ($_SESSION['role'] == 'employer') {
        ///////////////////SHOW ALL JOB//////////////////////////

        //job model initiated
        $job = new Job();

        // store job object in job view
        $jobView = new JobView($job);

        $model = new Model();
        $view = new View();

        $jobAttr = $view->showAllJobs($model, $job, $jobView);

        $jobId = $jobAttr->id;
        $jobTitle = $jobAttr->jobTitle;
        $jobEmployerId = $jobAttr->employerId;
        $jobLocation = $jobAttr->location;
        $jobMinSalary = $jobAttr->minSalary;
        $jobMaxSalary = $jobAttr->maxSalary;
        $jobDescription = $jobAttr->description;
        $jobSkills = $jobAttr->skills;
        $jobType = $jobAttr->jobType;
 
      ?>

        <!--employer card profile -->
        <div class="card my-5">
          <div class="card-body row">
            <div class="col-9 ">
              <h4 class=" "><?= $employerAttr->companyName ?></h4>
              <h5 class="mb-4"><?= $_SESSION['email'] ?></h5>
              <h6 class="">About me</h6>
              <p class=" "><?= $biographyAttr->bio ?></p>
            </div>
            <div class="col-2">
              <button class="btn btn-primary ml-3">Connect</button>
            </div>
            <div class="col-1"><i class="far fa-edit ml-3"></i></div>
          </div>
        </div>

        <!--employer card jobs -->
        <div class="card my-5">
          <div class="card-body row">
            <?php for ($i = 0; $i < count($jobId); $i++) { ?>
              <div class="card mt-5" style="width: 18rem;">
                <div class="card-body">
                  <h6 class="card-title"><?=$jobTitle[$i]?></h6>
                  <h6 class="card-title"><?=$jobType[$i]?></h6>
                  <h6 class="card-title">$<?=$jobMinSalary[$i]?> - $<?=$jobMaxSalary[$i]?></h6>
                  <div class="card-text mb-4" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                    <?= $jobDescription[$i] ?> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, voluptas.
                  </div>
                  <div class="my-4">
                    <h6 class="card-title">Skills</h6>
                    <div style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                      <?php
                      for ($j = 0; $j < count($jobSkills[$i]); $j++) {
                          echo '<span class="badge rounded-pill bg-primary mr-2">' . $jobSkills[$i][$j] . '</span>';
                      };
                      ?>
                    </div>
                  </div>

                  <a href="viewjob.php?id=<?=$jobId[$i]?>" class="btn btn-primary">View Job</a>
                </div>
              </div>
            <?php  } ?>

          </div>
        </div>

      <?php } ?>
    </div>


  </div>
  <script src="js/script.js"></script>
  <script src="library/node_modules/jquery/dist/jquery.min.js"></script>
</body>




</html>