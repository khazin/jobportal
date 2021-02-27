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
   <div class="container col-12 bg-success d-flex flex-column align-items-center" style="height:100vh">
      <form action="" method="post" class="form col-6 d-flex flex-column align-items-center" id="formRegister">

         <div class="card mt-5" style="width: 38rem;">
            
            <h6 class="mt-3 card-title text-center">Would you like to create your profile now or proceed to login?</h6>

           


            <div class="card-body col-12 d-flex flex-column align-items-center">
               <div class="d-flex col-12 ">
                  <button type="submit" class="btn btn-primary col-6" id="" name="profile">Create profile</button>
                  <button type="submit" class="btn btn-secondary col-6" id="" name="login">Login</button>
               </div>
            </div>


      </form>
      <form action="" method="post" class="form col-6 " id="formToLogin">
        
      </form>
   </div>


</body>

<script src="library/node_modules/jquery/dist/jquery.min.js"></script>
<script src="js/script.js"></script>

</html>

<?php

if (isset($_GET['email'])) {
    
  $user = new Users();
    // store user object in user controller
  $userController = new UsersController($user);

  $email = $_GET['email'];

  $userController->setUserEmail($email);

  // store user object in user view
  $userView = new UsersView($user);

  $model = new Model();
  $view = new View();

  $userObj = $view->login2($model, $user, $userView);

  
}

if (isset($_POST['login'])) {
    session_start();
    $_SESSION['user_id'] = $userObj->userId;
    $_SESSION['email'] = $userObj->userEmail;
    $_SESSION['password'] = $userObj->userPassword;
    $_SESSION['role'] = $userObj->userRole;
    $_SESSION['first_login'] = $userObj->userFirstLogin;
    header('Location: home.php');
}

if (isset($_POST['profile'])) {
   if ($_GET['role'] == 'applicant') {
    header('Location: createapplicantprofile.php');
   } elseif ($_GET['role'] == 'employer') {
    header('Location: createemployerprofile.php');
   };
}
