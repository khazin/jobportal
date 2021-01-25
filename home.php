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

    <!-- CREATE PROFILE FORM -->
    <form action="post" class="form col-6">
      <div class="card mt-5" style="width: 38rem;">
        <h5 class="mt-3 card-title text-center">Create Profile</h5>
        <div class="card-body ">
          <!-- form 3 biography-->
          <div class="col-12 form__biography" id="formBiography">
            <h6 class="card-subtitle mb-2 text-muted text-center">Write about yourself</h6>
            <div class="mb-3">
              <label for="bio" class="form-label">About Me</label>
              <textarea class="form-control" name="bio" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="button" class="btn btn-primary" id="formBiographyNextBtn" onclick="return nextForm(formBiography, formSkills)">Next</button>
          </div>
          <!-- form 4 skills-->
          <div class="col-10 form__skills" id="formSkills">
            <h6 class="card-subtitle mb-2 text-muted text-center">What skills do you have?</h6>
            <div class="mb-3">
              <label for="skill" class="form-label">Skills</label>
              <input type="text" class="form-control" name="skills" id="skill" list='skills'>
              <datalist id="skills">
                <option value="HTML">
                <option value="CSS">
                <option value="Javscript">
                <option value="Linux">
                <option value="AWS">
              </datalist>
              <h6>Skills</h6>
              <div class="row">
                <span class="badge rounded-pill bg-light ml-3">HTML<a href="">&times;</a></span>
                <span class="badge rounded-pill bg-light ml-3">CSS<a href="">&times;</a></span>
                <span class="badge rounded-pill bg-light ml-3">Linux<a href="">&times;</a></span>
                <span class="badge rounded-pill bg-light ml-3">Windows Server<a href="">&times;</a></span>
              </div>
            </div>
            <button type="button" class="btn btn-secondary">Add</button>
            <button type="button" class="btn btn-primary" onclick="return nextForm(formSkills, formEducation)">Next</button>
            <button type="button" class="btn btn-primary" onclick="return prevForm(formSkills, formBiography)">Back</button>
          </div>
          <!-- form 5 qualifications-->
          <div class="col-10 form__education" id="formEducation">
            <h6 class="card-subtitle mb-2 text-muted text-center">What are your qualifications?</h6>
            <div class="mb-3">
              <label for="certification" class="form-label">Certification</label>
              <input type="text" class="form-control" name="certification" id="certification" list="certifications">
              <datalist id="certifications">
                <option value="Diploma">
                <option value="BSc">
                <option value="Masters">
                <option value="PHD">
                <option value="Industrial certification">
              </datalist>
              <label for="school" class="form-label">School</label>
              <input type="text" class="form-control" name="school" id="school">
              <label for="course" class="form-label">Course</label>
              <input type="text" class="form-control" name="course" id="course">
              <label for="graduate" class="form-label">Graduate year</label>
              <input type="number" class="form-control" name="graduate" id="graduate">
              <h6>Skills</h6>
              <div class="row">
                <span class="badge rounded-pill bg-light ml-3 mb-2">Diploma in computer science - Nanyang Polytechnic, 2013<a href="">&times;</a></span>
                <span class="badge rounded-pill bg-light ml-3 mb-2">BSC in computer science - Oxford Brookes University, 2013<a href="">&times;</a></span>
              </div>
            </div>
            <button type="button" class="btn btn-secondary">Add</button>
            <button type="button" class="btn btn-primary" 
            onclick="return nextForm(formEducation, formExperience)">Next</button>
            <button type="button" class="btn btn-primary" onclick="return prevForm(formEducation, formSkills)">Back</button>
          </div>
          <!-- form 6 job experience -->
          <div class="col-10 form__experience" id="formExperience">
            <h6 class="card-subtitle mb-2 text-muted text-center">What are your job experience?</h6>
            <div class="mb-3">
              <label for="jobtitle" class="form-label">Job title</label>
              <input type="text" class="form-control" id="jobTitle" name="jobTitle" list="jobTitles">
              <datalist id="jobTitles">
                <option value="Web developer">
                <option value="Mobile App developer">
                <option value="Network engineer">
                <option value="Software engineer">
              </datalist>
              <label for="company" class="form-label">Company</label>
              <input type="text" class="form-control" name="company" id="company">
              <label for="startYear" class="form-label">From</label>
              <input type="number" class="form-control" name="startYear" id="startYear">
              <label for="endYear" class="form-label">To</label>
              <input type="number" class="form-control" name="endYear" id="endYear">
              <h6>Work experience</h6>
              <div class="row">
                <span class="badge rounded-pill bg-light ml-3 mb-2">Web developer - ABC pte ltd,2013 - 2015<a href="">&times;</a></span>
                <span class="badge rounded-pill bg-light ml-3 mb-2">App developer - xyz pte ltd,2015 - 2017<a href="">&times;</a></span>
              </div>
            </div>
            <button type="button" class="btn btn-secondary">Add</button>
            <button type="button" class="btn btn-secondary" onclick="return prevForm(formExperience, formEducation)">Back</button>
            <button type="submit" class="btn btn-primary">Confirm</button>
          </div>
        </div>
      </div>


    </form>

  </div>
  <script src="js/script.js"></script>
  <script src="library/node_modules/jquery/dist/jquery.min.js"></script>
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

// //biography model initiated
// $biography = new Biography();


// // store biography object in biography controller
// $biographyController = new BiographyController($biography);


// //set biography data
// $id = 7; // id take from session id
// $biographyBio = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quam?';
// $biographyController->setBiography($biographyBio, $id);

// $model = new Model();
// $modelArr = [$biography];

// $controller = new Controller();
// $controller->createProfile($model, $modelArr);

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

// // initialise employers   
// $employer = new Employer();

// // initialise biography   
// $biography = new Biography();


// $id = 1; // id is session id

// // store employer object in employer controller
// $employerController = new EmployerController($employer);

// // store biography object in biography controller
// $biographyController = new BiographyController($biography);

// $employerController->setEmployerId($id);
// $biographyController->setBiographyId($id);

// // store employer object in employer view
// $employerView = new EmployerView($employer);

// // store biography object in biography view
// $biographyView = new BiographyView($biography);

// $modelArr = [$employer, $biography];
// $viewArr = [$employerView, $biographyView];

// $model = new Model();
// $view = new View();

// $employerProfObj = $view->showProfile($model, $modelArr, $viewArr);
// $employerAttr = $employerProfObj->employerAttr;
// $biographyAttr = $employerProfObj->biographyAttr;
