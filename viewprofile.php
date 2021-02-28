<?php session_start(); ?>
<?php include './includes/ClassAutoloader.php'; ?>

<?php
if (isset($_GET['id'])) {

  $userId = $_GET['id'];
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
}

if (isset($_POST['connect'])) {
  $userRequestId = $_SESSION['user_id'];
  $userReceiveId = $_GET['id'];


  //connection model initiated
  $connection = new Connection();

  // store connection object in connection controller
  $connectionController = new ConnectionController($connection);

  //set connection
  $connectionController->setConnection($userRequestId, $userReceiveId);

  $model = new Model();
  $controller = new Controller();

  $controller->connectUser($model, $connection);
}

/////////////////CHECK IF USER IS CONNECTED/////////////////////
$userRequestId = $_SESSION['user_id'];
$userReceiveId = $_GET['id'];


//connection model initiated
$connection = new Connection();

// store connection object in connection controller
$connectionController = new ConnectionController($connection);

// store connection object in connection View
$connectionView = new ConnectionView($connection);

//set connection
$connectionController->setConnection($userRequestId, $userReceiveId);

$model = new Model();
$view = new View();

$result = $view->checkConnectUser($model, $connection, $connectionView);
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

  <div class="container col-12 d-flex flex-column align-items-center bg-success">

    <div class="col-6 card__container" id="cardContainerApplicant">

      <!-- card profile -->
      <div class="card my-5">
        <div class="card-body row">
          <div class="col-9 ">
            <h4 class=" "><?= $applicantAttr->firstname ?> <?= $applicantAttr->lastname ?></h4>
            <h5 class="mb-4"><?= $_SESSION['email'] //must not use session ?></h5> 
            <h6 class="">About me</h6>
            <p class=" "><?= $biographyAttr->bio ?></p>
          </div>
          <div class="col-2">
            <form method="post">
              <?php if (isset($_GET['id'])) { ?>
                <?php if ($result == true) { ?>
                  <a href="sendmessage.php?id=<?=$_GET['id']?>" class="btn btn-primary ml-3 mb-2">Message</a>
                  <!-- <button type="submit" class="btn btn-primary ml-3" name="unfollow">Unfollow</button> -->

                <?php } else { ?>
                  <button type="submit" class="btn btn-primary ml-3" name="connect">Follow</button>

              <?php }
              } ?>

            </form>
          </div>
          <div class="col-1"><i class="far fa-edit ml-3"></i></div>
        </div>
      </div>

      <!-- card skills -->
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

      <!-- card education -->
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

      <!-- work experience -->
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
    </div>



  </div>
  <script src="js/script.js"></script>
  <script src="library/node_modules/jquery/dist/jquery.min.js"></script>
</body>




</html>