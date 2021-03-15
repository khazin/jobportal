<?php session_start(); ?>
<?php include './includes/settings.php'; ?>
<?php include './includes/ClassAutoloader.php'; ?>
<?php


$userId = $_SESSION['user_id'];
///////////////////SHOW EMPLOYER PROFILE//////////////////////////
// initialise biography   
$biography = new Biography();

// store biography object in biography controller
$biographyController = new BiographyController($biography);

$biographyController->setBiographyId($userId);

// store biography object in biography view
$biographyView = new BiographyView($biography);

$model = new Model();
$view = new View();

$biographyAttr = $view->showBiography($model, $biography, $biographyView);

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
    <?php include 'includes/header2.php' ?>

    <div class="container col-12 d-flex flex-column align-items-center bg-light">

        <!-- CREATE PROFILE FORM -->
        <form method="post" action="" class="form col-6">
            <div class="card mt-5" style="width: 38rem;">
                <h5 class="mt-3 card-title text-center">Update Biography</h5>
                <div class="card-body ">
                    <!-- form 1 biography-->
                    <div class="col-12 form__biography" id="formBiography">
                        <h6 class="card-subtitle mb-2 text-muted text-center">Write about yourself</h6>
                        <div class="mb-3">
                            <label for="bio" class="form-label">About Me</label>
                            <textarea class="form-control" name="bio" id="bio" cols="30" rows="10"><?= $biographyAttr->bio ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="return validateBiography()" name="update">Update</button>
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

if (isset($_POST['update'])) {
    $biographyController->setBiography($_POST['bio'], $userId);
    $controller = new Controller();
        
        if ($controller->updateBiography($model, $biography) == true) {
            echo '<script>
                alert("Biography updated!");
                setTimeout(function(){
                    window.location.href = "Home.php";
                 }, 100);
            </script>';
        } else {
            echo 'not suces';
        }
}