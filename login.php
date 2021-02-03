<?php include './includes/ClassAutoloader.php'; ?>

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
  <div class="container col-12 d-flex align-items-center bg-success d-inline-flex justify-content-center  " style="height:100vh">
    <form action="" method="post" class="form col-6">
      <div class="card mt-5" style="width: 38rem;">
        <h5 class="mt-3 card-title text-center">Login</h5>
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-muted text-center">Login into your account</h6>
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

<?php
if (isset($_POST['login'])) {
  ///////////////////LOGIN//////////////////////////

  // store user id
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
  $controller = new Controller();

  $userObj = $view->login($model, $user, $userView);
  // var_dump($userObj);

  session_start();
  $_SESSION['user_id'] = $userObj->userId;
  $_SESSION['email'] = $userObj->userEmail;
  $_SESSION['password'] = $userObj->userPassword;
  $_SESSION['role'] = $userObj->userRole;
  // var_dump($_SESSION);
  header('Location: createprofile.php');

}
