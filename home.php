<?php session_start(); ?>
<?php include './includes/ClassAutoloader.php'; ?>

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
              <p class="text-light">Firstname Lastname</p>
            </li>
          </ul>


        </div>
      </div>
    </nav>
    </div>
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
  </header>

  <div class="container col-12 d-flex flex-column align-items-center bg-success">

    <div class="col-6 card__container" id="cardContainerApplicant">

      <!-- card profile -->
      <div class="card my-5">

        <div class="card-body row">
          <div class="col-9 ">
            <h4 class=" ">Firstname Lastname</h4>
            <h5 class="mb-4">Email</h5>
            <h6 class="">About me</h6>
            <p class=" ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi libero dicta dolore optio autem. Aliquam sapiente veniam quia aspernatur ipsam temporibus ut, quaerat repellat distinctio quisquam autem perferendis, placeat cum.</p>
          </div>
          <div class="col-2">
            <button class="btn btn-primary ml-3">Connect</button>
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
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
              <span class="badge rounded-pill bg-light ml-3 mb-2">HTML<a href="">&times;</a></span>
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
            <p>Diploma in Computer Science - Nanyang Polytechnic, 2013</p>
            <p>BSc in Computer Science - Oxford Brookes University, 2021</p>
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
            <p>Web developer - ABC pte ltd, 2015-2016</p>
            <p>Senior developer - XYZ pte ltd, 2016-2018</p>
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

  var_dump($applicantAttr);
  echo '<br>';
  var_dump($biographyAttr);
  echo '<br>';
  var_dump($skillsAttr);
  echo '<br>';
  var_dump($educationAttr);
  echo '<br>';
  var_dump($experienceAttr);
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
 
}
