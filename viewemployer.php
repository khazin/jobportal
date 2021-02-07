<?php session_start(); ?>
<?php include './includes/ClassAutoloader.php'; ?>

<?php
if (isset($_GET['id'])) {
    
  $userId = $_GET['id'];
  //   ///////////////////SHOW EMPLOYER PROFILE//////////////////////////

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

  print_r($employerAttr);
  print_r($biographyAttr);
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
              <p class="text-light">firstname lastname</p>
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
            <h4 class=" "><?=$employerAttr->companyName?> <?= $employerAttr->companyType?></h4>
            <h5 class="mb-4"><?=$employerAttr->companyContact?></h5>
            <h6 class="">About me</h6>
            <p class=" "><?= $biographyAttr->bio ?></p>
          </div>
          <div class="col-2">
            <button class="btn btn-primary ml-3">Connect</button>
          </div>
          <div class="col-1"><i class="far fa-edit ml-3"></i></div>
        </div>
      </div>

   

     

 
    </div>



  </div>
  <script src="js/script.js"></script>
  <script src="library/node_modules/jquery/dist/jquery.min.js"></script>
</body>




</html>