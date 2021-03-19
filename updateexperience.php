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
        <h5 class="mt-3 card-title text-center">Update Job Experience</h5>
        <div class="card-body ">
        
          <!-- form 4 job experience -->
          <div class="col-10 form__experience-edit" id="formExperience">
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
            <button type="submit" class="btn btn-primary" name="create">Update</button>
            <button type="button" class="btn btn-success" onclick="return addExperiences()">Add</button>
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
  ///////////////////SHOW APPLICANT PROFILE//////////////////////////

  $userId = $_SESSION['user_id'];

  //initialise experience model
  $experience = new Experience();

  // store experience object in experience controller
  $experienceController = new ExperienceController($experience);

  //set experience id
  $experienceController->setExperienceUserId($userId);

  // store experience object in experience view
  $experienceView = new ExperienceView($experience);


  $model = new Model();
  $view = new View();

//   $experienceAttr = $view->showExperience($model, $experience, $experienceView);
