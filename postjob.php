<?php include './includes/ClassAutoloader.php';
session_start();
ob_start();
?>

<?php
if (isset($_POST['post'])) {

///////////////////POST JOB//////////////////////////
// job model initiated
 $job = new Job();

 // store job object in job controller
 $jobController = new JobController($job);

  //set job data
  $employerId = $_SESSION['user_id']; // employer id take from session id
  $jobTitle = $_POST['jobTitle'];
  $location = $_POST['location'];
  $minSalary = $_POST['minSalary'];
  $maxSalary = $_POST['maxSalary'];
  $description = $_POST['description'];
  $skillsArr = $_POST['skillsArr'];
  $jobType = $_POST['jobType'];
  $jobArr = [$jobTitle,$employerId,$location,$minSalary,
            $maxSalary,$description,$skillsArr, $jobType];
  $jobController->setJob($jobArr, $id = 0);

    $model = new Model();
    $controller = new Controller();

 $controller->postJob($model, $job);
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

    <!-- CREATE PROFILE FORM -->
    <form method="post" action="" class="form col-6">
      <div class="card mt-5" style="width: 38rem;">
        <h5 class="mt-3 card-title text-center">Post new job</h5>
        <div class="card-body ">
          <!-- post job form -->
          <div class="col-12 form__post-job" id="formPostJob">
            <div class="mb-3">
              <label for="jobTitle" class="form-label">Job Title</label>
              <input type="text" class="form-control" name="jobTitle" id="jobTitle" list="certifications">
              <label for="location" class="form-label">location</label>
              <input type="text" class="form-control" name="location" id="location">
              <label for="minSalary" class="form-label">minSalary</label>
              <input type="number" class="form-control" name="minSalary" id="minSalary">
              <label for="maxSalary" class="form-label">maxSalary year</label>
              <input type="number" class="form-control" name="maxSalary" id="maxSalary">
              <label for="description" class="form-label">Job Description</label>
              <textarea type="text" class="form-control" name="description" id="description"></textarea>
              <div class="my-2"> <span class="mr-2">Job Type:</span> 
                <label for="fullTime" class="form-label">Full Time</label>
                <input type="radio" class="mr-2" id="fullTime" name="jobType" value="full time">
                <label for="partTime" class="form-label">Part Time</label>
                <input type="radio" class="mr-2" id="partTime" name="jobType" value="part time">
                <label for="Remote" class="form-label">Remote</label>
                <input type="radio" class="mr-2" id="Remote" name="jobType" value="remote">
              </div>
              <label for="skill" class="form-label">Skills</label>

              <div class="d-flex">
              <input type="text" class="form-control col-11" name="skills" id="skill" list='skills'>
              <button type="button" class="btn btn-secondary  col-1" onclick="return addSkills();"><i class="fas fa-plus"></i></button>
              </div>
              <datalist id="skills">
                <option value="HTML">
                <option value="CSS">
                <option value="Javscript">
                <option value="Linux">
                <option value="AWS">
              </datalist>
              <h6>Skills</h6>
              <div class="row container__skills" id="skillsContainer">
              <!-- skills badge appended here -->
              </div>
            </div>
            <button type="submit" class="btn btn-primary" onclick="return validatePostJob();" name="post">Post</button>
          </div>

        </div>
      </div>


    </form>

  </div>
  <script src="js/script.js"></script>
  <script src="library/node_modules/jquery/dist/jquery.min.js"></script>
</body>




</html>