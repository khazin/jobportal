<?php include './includes/ClassAutoloader.php';?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Job Portal</title>
      <link rel="stylesheet" href="library/node_modules/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
   <?php include 'includes/header.php'; ?>
   <?php include 'includes/register.php'; ?>
    
   </body>
   <script src="js/script.js"></script>
   <script src="library/node_modules/jquery/dist/jquery.min.js"></script>
</html>

<?php

///////////////////////REGISTER APPLICANT//////////////////////////


   //  //user model initiated
   //  $user = new Users();
    
   //  //applicant model initiated
   //  $applicant = new Applicants();

   //  // store user object in user controller
   //  $userController = new UsersController($user);

   //  // store applicant object in applicant controller
   //  $applicantController = new ApplicantsController($applicant);

   //  //set user data
   //  $userid = 0;
   //  $userArr = ['appemail','apppasword', 'applicant'];
   // $userController->setUser($userArr, $userid);

   // $applicantArr = ['firstname','lastname','gender ','dob','country','city','job','compnay'];
   // //set applicant data
   // $applicantController->setapplicant($applicantArr, $id = 0);

   // $model = new Model();
   // $modelArr = [$user,$applicant];

   //  $controller = new Controller();
   //  $controller->register($model, $modelArr);

  
   ///////////////////////REGISTER EMPLOYER//////////////////////////


    //user model initiated
    $user = new Users();
    
    //employer model initiated
    $employer = new Employer();

    // store user object in user controller
    $userController = new UsersController($user);

    // store employer object in employer controller
    $employerController = new EmployerController($employer);

    //set user data
    $userid = 1;
    $userArr = ['email','pasword','role'];
   $userController->setUser($userArr, $userid);

   $employerArr = ['sdgsdg','sdfhe',2352325,'sdfhzdg'];
   //set employer data
   $employerController->setEmployer($employerArr, $id = 0);

   $model = new Model();
   $modelArr = [$user,$employer];

    $controller = new Controller();
    $controller->register($model, $modelArr);
