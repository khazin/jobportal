<?php include './includes/ClassAutoloader.php'; ?>

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
              <p class="text-light">Firstname Lastname</p>
            </li>
          </ul>


        </div>
      </div>
    </nav>
    </div>
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
  </header>

  <div class="container col-12 d-flex flex-column justify-content-start bg-success">

    <div class="container col-6 ">

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
</body>

</html>

<?php
///////////////////CREATE APPLICANTS PROFILE//////////////////////////



// //initialise biography model
// $biography = new Biography();
// //initialise skills model
// $skills = new Skills();
// //initialise education model
// $education = new Education();
// //initialise experience model
// $experience = new Experience();


// // store biography object in biography controller
// $biographyController = new biographyController($biography);
// // store skills object in skills controller
// $skillsController = new skillsController($skills);
// // store education object in education controller
// $educationController = new EducationController($education);
// // store experience object in experience controller
// $experienceController = new ExperienceController($experience);

// $id = 5; // id take from session id
// //set biography data
// $biographyBio = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quam?';
// $biographyController->setBiography($biographyBio, $id);
// //set skills data
// $skillsArr = ['html','css','js','pythin','mysql'];
// $skillsController->setSkills($skillsArr, $id);
// //set education data
// $educationArr = ['diploma','NYP', 'information techology', '2009'];
// $educationController->setEducation($educationArr, $id);
// //set experience data
// $experienceArr = ['web dev','suntell', 2005, 2009];
// $experienceController->setExperience($experienceArr, $id);

// $model = new Model();
// $modelArr = [$biography,$skills,$education,$experience];

// $controller = new Controller();
// $controller->createProfile($model,$modelArr);

///////////////////CREATE EMPLOYER PROFILE//////////////////////////

 //biography model initiated
 $biography = new Biography();

//  //employer model initiated
//  $employer = new Employer();

 // store biography object in biography controller
 $biographyController = new BiographyController($biography);

//  // store employer object in employer controller
//  $employerController = new EmployerController($employer);

  //set biography data
$id = 7; // id take from session id
  $biographyBio = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quam?';
  $biographyController->setBiography($biographyBio, $id);

// $employerArr = ['sdgsdg','sdfhe',2352325,'sdfhzdg'];
// //set employer data
// $employerController->setEmployer($employerArr, $id = 0);

$model = new Model();
$modelArr = [$biography];

 $controller = new Controller();
 $controller->createProfile($model, $modelArr);

///////////////////SHOW APPLICANT PROFILE//////////////////////////

// // initialise applicants model
// $applicant = new Applicants();
// // initialise biography model
// $biography = new Biography();
// //initialise skills model
// $skills = new Skills();
// //initialise education model
// $education = new Education();
// //initialise experience model
// $experience = new Experience();

// $id = 5; // id is session id

// // store applicant object in applicant controller
// $applicantController = new ApplicantsController($applicant);
// // store biography object in biography controller
// $biographyController = new BiographyController($biography);
// // store skills object in skills controller
// $skillsController = new skillsController($skills);
// // store education object in education controller
// $educationController = new EducationController($education);
// // store experience object in experience controller
// $experienceController = new ExperienceController($experience);

// $applicantController->setApplicantId($id);
// $biographyController->setBiographyId($id);
// $skillsController->setSkillsId($id);
// $educationController->setEducationId($id);
// $experienceController->setExperienceId($id);

// // store applicant object in applicant view
// $applicantView = new ApplicantsView($applicant);
// // store biography object in biography view
// $biographyView = new BiographyView($biography);
// // store skills object in skills view
// $skillsView = new SkillsView($skills);
// // store education object in education view
// $educationView = new EducationView($education);
// // store experience object in experience view
// $experienceView = new ExperienceView($experience);

// $modelArr = [$applicant, $biography, $skills, $education, $experience];
// $viewArr = [$applicantView, $biographyView, $skillsView, $educationView, $experienceView];

// $model = new Model();
// $view = new View();

// $applicantProfObj = $view->showProfile($model, $modelArr, $viewArr);
// $applicantAttr = $applicantProfObj->applicantAttr;
// $biographyAttr = $applicantProfObj->biographyAttr;
// $skillsAttr = $applicantProfObj->skillsAttr;
// $educationAttr = $applicantProfObj->educationAttr;
// $experienceAttr = $applicantProfObj->experienceAttr;

   
 ///////////////////SHOW EMPLOYER PROFILE//////////////////////////
 
//     // initialise employers   
//     $employer = new Employer();

//     // initialise biography   
//     $biography = new Biography();
    

//     $id = 1; // id is session id
  
//   // store employer object in employer controller
//   $employerController = new EmployerController($employer);

//   // store biography object in biography controller
//   $biographyController = new BiographyController($biography);
  
//  $employerController->setEmployerId($id);
//  $biographyController->setBiographyId($id);

//   // store employer object in employer view
//   $employerView = new EmployerView($employer);
  
//   // store biography object in biography view
//   $biographyView = new BiographyView($biography);

//   $modelArr = [$employer,$biography];
//   $viewArr = [$employerView,$biographyView];

//   $model = new Model();
//   $view = new View();

//   $employerProfObj = $view->showProfile($model, $modelArr, $viewArr);
//   $employerAttr = $employerProfObj->employerAttr;
//   $biographyAttr = $employerProfObj->biographyAttr;