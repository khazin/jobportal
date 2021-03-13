<?php
include './includes/settings.php';
include './includes/ClassAutoloader.php';
?>


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
   <div class="container col-12 bg-light d-flex flex-column align-items-center" style="height:100vh">
      <form action="" method="post" class="form col-6 d-flex flex-column align-items-center" id="formRegister">

         <div class="card mt-5" style="width: 38rem;">
            <nav class="nav nav-pills nav-fill navbar__register" id="registerNavbar">
               <button class="nav-link active" type="button" onclick="return nextForm(formEmployer,formApplicant)">For IT Profesionals</button>
               <button class="nav-link" type="button" onclick="return nextForm(formApplicant,formEmployer)">For employer</button>
            </nav>
            <h5 class="mt-3 card-title text-center">Register</h5>

            <!-- form 1 applicant particulars-->
            <div class="card-body col-12 form__applicant" id="formApplicant">
               <h6 class="card-subtitle mb-2 text-muted text-center">Fill in your particulars</h6>
               <div class="d-flex justify-content-between">
                  <div class="mb-3">
                     <label for="firstname" class="form-label">Firstname</label>
                     <input type="text" class="form-control" id="firstname" name="firstname">
                  </div>
                  <div class="mb-3">
                     <label for="lastname" class="form-label">Lastname</label>
                     <input type="text" class="form-control" id="lastname" name="lastname">
                  </div>
               </div>

               <div class="d-flex justify-content-between">
                  <div class="mt-5">
                     <input type="radio" id="male" name="gender" value="male">
                     <label for="male" class="form-label">Male</label>
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female" class="form-label">Female</label>
                  </div>
                  <div class="mb-3">
                     <label for="birthday" class="form-label">Birthday</label>
                     <input type="date" class="form-control" id="birthday" name="birthday" style="width:205px">
                  </div>
               </div>


               <div class="d-flex justify-content-between">
                  <div class="mb-3">
                     <label for="country" class="form-label">Country</label>
                     <input type="text" class="form-control" id="country" name="country">
                  </div>
                  <div class="mb-3">
                     <label for="city" class="form-label">City</label>
                     <input type="text" class="form-control" id="city" name="city">
                  </div>
               </div>

               <div class="d-flex justify-content-between">
                  <div class="mb-3">
                     <label for="job" class="form-label">Job</label>
                     <input type="text" class="form-control" id="job" name="job">
                  </div>
                  <div class="mb-3">
                     <label for="company" class="form-label">Company</label>
                     <input type="text" class="form-control" id="company" name="company">
                  </div>
               </div>

               <button type="button" class="btn btn-primary" id="formApplicantNextBtn" value="applicant" onclick="return toRegisterCredentialForm(this)">Next</button>

            </div>



            <!-- form 2 employer particular-->
            <div class="card-body col-12 form__employer" id="formEmployer">
               <h6 class="card-subtitle mb-2 text-muted text-center">Fill in your company details</h6>

               <div class="mb-3">
                  <label for="companyName" class="form-label">Company Name</label>
                  <input type="text" class="form-control" id="companyName" name="companyName">
               </div>
               <div class="mb-3">
                  <label for="companyType" class="form-label">Company Type</label>
                  <input type="text" class="form-control" id="companyType" name="companyType">
               </div>
               <div class="mb-3">
                  <label for="companyContact" class="form-label">Company Contact</label>
                  <input type="number" class="form-control" id="companyContact" name="companyContact">
               </div>
               <div class="mb-3">
                  <label for="companyAdmin" class="form-label">Company Admin</label>
                  <input type="text" class="form-control" id="companyAdmin" name="companyAdmin">
               </div>

               <button type="button" class="btn btn-primary" id="formEmployerNextBtn" value="employer" onclick="return toRegisterCredentialForm(this)">Next</button>

            </div>

            <!-- form 3 credentials-->
            <div class="card-body col-12 form__credential" id="formCredential">
               <h6 class="card-subtitle mb-2 text-muted text-center">Fill in your credentials</h6>

               <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email">
               </div>
               <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
               </div>
               <div class="mb-3">
                  <label for="confirmPassword" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
               </div>
               <input type="hidden" name="role" id="role" value="">
               <button type="button" class="btn btn-danger" id="formApplicantBackBtn" onclick="return toUserTegisterForm()">Back</button>
               <button type="submit" class="btn btn-success" id="formCredentialSubmitBtn" name="register" onclick="return validateCredentials()">Confirm</button>
            </div>
         </div>


      </form>

   </div>


</body>

<script src="library/node_modules/jquery/dist/jquery.min.js"></script>
<script src="js/script.js"></script>


</html>

<?php

if (isset($_POST['register'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];
   $role = $_POST['role'];

   $userArr = [$email, $password, $role];

   //user model initiated
   $user = new Users();

   // store user object in user controller
   $userController = new UsersController($user);

   //set user data
   $userController->setUser($userArr, $userid = 0);
   if ($role == 'applicant') {

      ///////////////////////REGISTER APPLICANT//////////////////////////


      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $gender = $_POST['gender'];
      $birthday = $_POST['birthday'];
      $country = $_POST['country'];
      $city = $_POST['city'];
      $job = $_POST['job'];
      $company = $_POST['company'];

      $applicantArr = [$firstname, $lastname, $gender, $birthday, $country, $city, $job, $company];

      //applicant model initiated
      $applicant = new Applicants();

      // store applicant object in applicant controller
      $applicantController = new ApplicantsController($applicant);

      //set applicant data
      $applicantController->setapplicant($applicantArr, $id = 0);

      $model = new Model();
      $modelArr = [$user, $applicant];

      $controller = new Controller();
      $controller->registerApplicant($model, $modelArr);
      header("Location: registersuccess.php?email=$email&role=$role");
   } elseif ($role == 'employer') {

      ///////////////////////REGISTER EMPLOYER//////////////////////////

      $companyName = $_POST['companyName'];
      $companyType = $_POST['companyType'];
      $companyContact = $_POST['companyContact'];
      $companyAdmin = $_POST['companyAdmin'];

      $employerArr = [$companyName, $companyType, $companyContact, $companyAdmin];

      //employer model initiated
      $employer = new Employer();

      // store employer object in employer controller
      $employerController = new EmployerController($employer);

      //set employer data
      $employerController->setEmployer($employerArr, $id = 0);

      $model = new Model();
      $modelArr = [$user, $employer];

      $controller = new Controller();

      if ($controller->registerEmployer($model, $modelArr) == false) {
         echo '<script>
       alert("This email has been used. Please choose another email address.");
      </script>';
      } else {
         header("Location: registersuccess.php?email=$email&role=$role");
      }
   };
}
