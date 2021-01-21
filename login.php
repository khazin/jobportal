<?php include './includes/ClassAutoloader.php';?>

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
<?php include 'includes/login.php'; ?>

    
</body>
</html>

<?php
  
  ///////////////////LOGIN//////////////////////////
    
    // store user id
    $user = new Users();
    // $userArr = [], $id
    
    // store user object in user controller
    $userController = new UsersController($user);
    
    $email = "cvncvn";
    $password = "cvncvn";
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
    $_SESSION['user_id']=$userObj->userId;
    $_SESSION['email']=$userObj->userEmail;
    $_SESSION['password']=$userObj->userPassword;
    $_SESSION['role']=$userObj->userRole;
