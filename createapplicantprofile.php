<?php 
session_start(); 
include 'includes/settings.php';
?>

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
<?php include 'includes/header.php' ?>


  <div class="container col-12 d-flex flex-column align-items-center bg-light">

    <!-- CREATE PROFILE FORM -->
    <form method="post" action="" class="form col-6">
      <div class="card mt-5" style="width: 38rem;">
        <h5 class="mt-3 card-title text-center">Create Profile</h5>
        <div class="card-body ">
          <!-- form 1 biography-->
          <div class="col-12 form__biography" id="formBiography">
            <h6 class="card-subtitle mb-2 text-muted text-center">Write about yourself</h6>
            <div class="mb-3">
              <label for="bio" class="form-label">About Me</label>
              <textarea class="form-control" name="bio" id="bio" cols="30" rows="10"></textarea>
            </div>
            <button type="button" class="btn btn-primary" id="formBiographyNextBtn" onclick="return validateBiography()">Next</button>
          </div>
          <!-- form 2 skills-->
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
              <div class="row container__skills" id="skillsContainer">

                <!-- <span class="badge rounded-pill bg-primary ml-3 pills">Windows Server<i class="fas fa-times ml-1 btn-icon__remove" onclick="removePill(this)"></i></span> -->
              </div>
            </div>
            <button type="button" class="btn btn-danger" onclick="return nextForm(formSkills, formBiography)">Back</button>
            <button type="button" class="btn btn-primary" onclick="return nextForm(formSkills, formEducation)">Next</button>
            <button type="button" class="btn btn-success" onclick="return addSkills();">Add</button>
          </div>
          <!-- form 3 qualifications-->
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
              <input type="number" class="form-control" name="graduateYear" id="graduateYear">
              <h6>Education</h6>
              <div class="row container__educations" id="educationsContainer">
                <!-- <span class="badge rounded-pill bg-light ml-3 mb-2">Diploma in computer science - Nanyang Polytechnic, 2013<i class="fas fa-times ml-1 btn-icon__remove" onclick="removePill(this)"></i></span>
                <input type="hidden" class="certification" name="certifications[]" value="">
                <input type="hidden" class="school" name="schools[]" value="">
                <input type="hidden" class="course" name="courses[]" value="">
                <input type="hidden" class="graduateYear" name="graduateYears[]" value=""> -->
              </div>
            </div>
            <button type="button" class="btn btn-danger" onclick="return nextForm(formEducation, formSkills)">Back</button>
            <button type="button" class="btn btn-primary" onclick="return nextForm(formEducation, formExperience)">Next</button>
            <button type="button" class="btn btn-success" onclick="return addEducations()">Add</button>
          </div>
          <!-- form 4 job experience -->
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
              <div class="row" class="container__experiences" id="experiencesContainer">
                <!-- <span class="badge rounded-pill bg-light ml-3 mb-2">Web developer - ABC pte ltd,2013 - 2015<a href="">&times;</a></span>
                <span class="badge rounded-pill bg-light ml-3 mb-2">App developer - xyz pte ltd,2015 - 2017<a href="">&times;</a></span> -->
              </div>
            </div>
            <button type="button" class="btn btn-secondary" onclick="return addExperiences()">Add</button>
            <button type="button" class="btn btn-secondary" onclick="return nextForm(formExperience, formEducation)">Back</button>
            <button type="submit" class="btn btn-primary" name="create">Confirm</button>
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


print_r($_SESSION);
if (isset($_POST['create'])) {



    ///////////////////CREATE APPLICANTS PROFILE//////////////////////////

    $biographyBio = $_POST['bio'];

    $skillsArr = $_POST['skillsArr'];

    $certificationsArr = $_POST['certificationsArr'];
    $schoolsArr = $_POST['schoolsArr'];
    $coursesArr = $_POST['coursesArr'];
    $graduateYearsArr = $_POST['graduateYearsArr'];

    $jobTitlesArr = $_POST['jobTitlesArr'];
    $companiesArr = $_POST['companiesArr'];
    $startYearsArr = $_POST['startYearsArr'];
    $endYearsArr = $_POST['endYearsArr'];

    //initialise biography model
    $biography = new Biography();
    //initialise skills model
    $skills = new Skills();
    //initialise education model
    $education = new Education();
    //initialise experience model
    $experience = new Experience();

    // store biography object in biography controller
    $biographyController = new biographyController($biography);
    // store skills object in skills controller
    $skillsController = new skillsController($skills);
    // store education object in education controller
    $educationController = new EducationController($education);
    // store experience object in experience controller
    $experienceController = new ExperienceController($experience);

    $userId = $_SESSION['user_id']; // id take from session id
    //set biography data

    $biographyController->setBiography($biographyBio, $userId);
    //set skills data
    $skillsController->setSkills($skillsArr, $userId);
    //set education data
    $educationArr = [$userId, $certificationsArr, $schoolsArr, $coursesArr, $graduateYearsArr];
    $educationController->setEducation($educationArr, $id = []);
    //set experience data
    $experienceArr = [$userId, $jobTitlesArr, $companiesArr, $startYearsArr, $endYearsArr];
    $experienceController->setExperience($experienceArr, $id = []);

    $model = new Model();
    $modelArr = [$biography, $skills, $education, $experience];

    $controller = new Controller();
    $controller->createApplicantProfile($model, $modelArr);
    header('Location: home.php');
    

  }
  












