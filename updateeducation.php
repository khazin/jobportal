<?php
session_start();
include 'includes/settings.php';
?>

<?php include './includes/ClassAutoloader.php'; ?>

<?php
///////////////////SHOW EDUCATION//////////////////////////

$userId = $_SESSION['user_id'];

//initialise education model
$education = new Education();


// store education object in education controller
$educationController = new EducationController($education);


//set education id
$educationController->setEducationUserId($userId);


// store education object in education view
$educationView = new EducationView($education);


$model = new Model();
$view = new View();

$educationAttr = $view->showEducation($model, $education, $educationView);

if (isset($_POST['update'])) {
  ///////////////////UPDATE EDUCATION//////////////////////////

  $deleteIdArr = $_POST['deleteId'];
  $certificationsArr = $_POST['certificationsArr'];
  $schoolsArr = $_POST['schoolsArr'];
  $coursesArr = $_POST['coursesArr'];
  $graduateYearsArr = $_POST['graduateYearsArr'];

  //initialise education model
  $education = new Education();

  // store education object in education controller
  $educationController = new EducationController($education);


  $userId = $_SESSION['user_id']; // id take from session id

  //set education data
  $educationController->setEducationId($deleteIdArr);
  $educationController->setEducationCertification($certificationsArr);
  $educationController->setEducationSchool($schoolsArr);
  $educationController->setEducationCourse($coursesArr);
  $educationController->setEducationGraduateYear($graduateYearsArr);
  $educationController->setEducationUserId($userId);

  $model = new Model();

  $controller = new Controller();
  $controller->updateEducation($model, $education);
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
  <?php include 'includes/header.php' ?>


  <div class="container col-12 d-flex flex-column align-items-center bg-light">

    <!-- CREATE PROFILE FORM -->
    <form method="post" action="" class="form col-6">
      <div class="card mt-5" style="width: 38rem;">
        <h5 class="mt-3 card-title text-center">Update Education</h5>
        <div class="card-body ">


          <!-- form 3 qualifications-->
          <div class="col-10 form__education-edit" id="formEducation">
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
                <?php
                for ($i = 0; $i < count($educationAttr->id); $i++) {
                ?>
                  <span class="badge rounded-pill bg-light ml-3 mb-2"><?= $educationAttr->certification[$i] ?> in <?= $educationAttr->course[$i] ?> - <?= $educationAttr->school[$i] ?>, <?= $educationAttr->graduateYear[$i] ?><i class="fas fa-times ml-1 btn-icon__remove" onclick="deletePill(this)"></i></span>
                  <input type="hidden" class="educationId" name="" value="<?= $educationAttr->id[$i] ?>">
                <?php
                }
                ?>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <button type="button" class="btn btn-success" onclick="return addEducations()">Add</button>
          </div>
        </div>
      </div>


    </form>

  </div>
  <script src="js/script.js"></script>
  <script src="library/node_modules/jquery/dist/jquery.min.js"></script>
</body>

</html>