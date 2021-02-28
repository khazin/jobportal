<?php
session_start();
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
            <h6 class="mt-3 card-title text-center">You have succesfully login!</h6>
            <h6 class="mt-3 card-title text-center text-muted">Would you like to create your profile now or proceed to login?</h6>
            <div class="card-body col-12 d-flex flex-column align-items-center">
               <div class="d-flex col-12 ">
                  <button type="submit" class="btn btn-primary col-6" id="" name="profile">Create profile</button>
                  <button type="submit" class="btn btn-success col-6" id="" name="login">To home page</button>
               </div>
            </div>
      </form> 
   </div>
</body>

<script src="library/node_modules/jquery/dist/jquery.min.js"></script>
<script src="js/script.js"></script>

</html>

<?php

if (isset($_POST['login'])) {
    echo '<script>
    alert("You have succesfully login!");
   </script>';

   header('Location: home.php');
}

if (isset($_POST['profile'])) {
    if ($_SESSION['role'] == 'applicant') {
        header('Location: createapplicantprofile.php');
      } elseif ($_SESSION['role'] == 'employer') {
        header('Location: createemployerprofile.php');
      }
}
