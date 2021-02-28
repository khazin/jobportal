<?php
 include './includes/ClassAutoloader.php';
 include './includes/settings.php';

if (isset($_POST['login'])) {
  ///////////////////LOGIN//////////////////////////

  $user = new Users();

  // store user object in user controller
  $userController = new UsersController($user);

  $email = $_POST['email'];
  $password = $_POST['password'];

  $userController->setUserEmail($email);
  $userController->setUserPassword($password);

  // store user object in user view
  $userView = new UsersView($user);

  $model = new Model();
  $view = new View();

  $userObj = $view->login($model, $user, $userView);

  if ($userObj == false) {
    $message = 'Your email or password is invalid';

  } else {
    session_start();
    $_SESSION['user_id'] = $userObj->userId;
    $_SESSION['email'] = $userObj->userEmail;
    $_SESSION['password'] = $userObj->userPassword;
    $_SESSION['role'] = $userObj->userRole;
    $_SESSION['first_login'] = $userObj->userFirstLogin;

    if ($_SESSION['first_login'] == 1) {
      echo '
      <script>
      alert("You have succesfully logged in!");
      setTimeout(function() {
        window.location.href = "home.php";
      }, 100)
    </script>';
    } elseif ($_SESSION['first_login'] == 0) {
      header('Location: loginsuccess.php');
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Portal</title>
  <link rel="stylesheet" href="library/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include 'includes/header.php'; ?>
  <div class="container col-12 d-flex align-items-center bg-light d-inline-flex justify-content-center  " style="height:100vh">
    <form action="" method="post" class="form col-6">
      <div class="card mt-5" style="width: 38rem;">
        <h5 class="mt-3 card-title text-center">Login</h5>
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-muted text-center">Login into your account</h6>
          <h6 class="text-center text-danger"><?=$message?> </h6>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary" name="login" onclick="return validateLogin()">Login</button>
        </div>
      </div>
    </form>
  </div>

</body>

<script src="library/node_modules/jquery/dist/jquery.min.js"></script>
<script src="js/script.js"></script>

</html>
