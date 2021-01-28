<?php include './includes/ClassAutoloader.php'; ?>


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
   <div class="container col-12 bg-success d-flex flex-column align-items-center" style="height:100vh">
      <form action="" method="post" class="form col-6 d-flex flex-column align-items-center">

         <div class="card mt-5" style="width: 38rem;">
            <nav class="nav nav-pills nav-fill">
               <a class="nav-link active" href="#" onclick="return nextForm(formEmployer,formApplicant)">For IT Profesionals</a>
               <a class="nav-link" href="#" onclick="return nextForm(formApplicant,formEmployer)">For employer</a>
            </nav>
            <h5 class="mt-3 card-title text-center">Register</h5>

            <!-- form 1 applicant particulars-->
            <div class="col-12 form__applicant" id="formApplicant">
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

               <button type="button" class="btn btn-primary" id="formApplicantNextBtn" name="formApplicantNextBtn"
               onclick="return nextForm(formApplicant, formCredential)">Next</button>

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
                  <label for="companyAdmin" class="form-label">Company Admin</label>
                  <input type="text" class="form-control" id="companyAdmin" name="companyAdmin">
               </div>
               <div class="mb-3">
                  <label for="companyContact" class="form-label">Company Contact</label>
                  <input type="number" class="form-control" id="companyContact" name="companyContact">
               </div>
               <button type="button" class="btn btn-primary" id="formEmployerNextBtn" 
               onclick="return nextForm(formEmployer, formCredential)">Next</button>
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
               <button type="button" class="btn btn-primary" id="formApplicantBackBtn" onclick="return prevForm(formApplicant,formCredential)">Back</button>

               <button type="submit" class="btn btn-primary" id="formCredentialSubmitBtn">Confirm</button>
            </div>
         </div>


      </form>
   </div>
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


// //user model initiated
// $user = new Users();

// //employer model initiated
// $employer = new Employer();

// // store user object in user controller
// $userController = new UsersController($user);

// // store employer object in employer controller
// $employerController = new EmployerController($employer);

// //set user data
// $userid = 1;
// $userArr = ['email', 'pasword', 'role'];
// $userController->setUser($userArr, $userid);

// $employerArr = ['sdgsdg', 'sdfhe', 2352325, 'sdfhzdg'];
// //set employer data
// $employerController->setEmployer($employerArr, $id = 0);

// $model = new Model();
// $modelArr = [$user, $employer];

// $controller = new Controller();
// $controller->register($model, $modelArr);
