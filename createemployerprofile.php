<?php session_start();?>
<?php include './includes/settings.php'; ?>
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
            <button type="submit" class="btn btn-primary"  onclick="return validateBiography()" name="create">Confirm</button>

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
    ///////////////////CREATE EMPLOYER PROFILE//////////////////////////
    $biographyBio = $_POST['bio'];
    $userId = $_SESSION['user_id']; // id take from session id

    //biography model initiated
    $biography = new Biography();

    // store biography object in biography controller
    $biographyController = new BiographyController($biography);

    //set biography data
    $biographyController->setBiography($biographyBio, $userId);

    $model = new Model();
    $modelArr = [$biography];

    $controller = new Controller();
    $controller->createEmployerProfile($model, $modelArr);
    header('Location: home.php');
  
}











