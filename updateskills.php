<?php session_start(); ?>
<?php include './includes/settings.php'; ?>
<?php include './includes/ClassAutoloader.php'; ?>

<?php
///////////////////SHOW APPLICANT SKILLS//////////////////////////

$userId = $_SESSION['user_id'];

//initialise skills model
$skills = new Skills();

// store skills object in skills controller
$skillsController = new skillsController($skills);

//set skills id
$skillsController->setSkillsId($userId);

// store skills object in skills view
$skillsView = new SkillsView($skills);

$model = new Model();
$view = new View();

$skillsAttr = $view->showSkills($model, $skills, $skillsView);

if (isset($_POST['update'])) {
    $skillsArr = $_POST['skillsArr'];

    print_r($skillsArr);

    $skillsController->setSkills($_POST['skillsArr'], $userId);
    $skillsController->setSkillsId($userId);
    $skillsController->setSkillsSkills($_POST['skillsArr']);
    $controller = new Controller();
        
        if ($controller->updateSkills($model, $skills) == true) {
            echo '<script>
                alert("Skills updated!");
                setTimeout(function(){
                    window.location.href = "Home.php";
                 }, 100);
            </script>';
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="icons/node_modules/@fortawesome/fontawesome-free/css/all.css">
</head>

<body>
    <?php include 'includes/header2.php' ?>

    <div class="container col-12 d-flex flex-column align-items-center bg-light">

        <!-- CREATE PROFILE FORM -->
        <form method="post" action="" class="form col-6">
            <div class="card mt-5" style="width: 38rem;">
                <h5 class="mt-3 card-title text-center">Update Skills</h5>
                <div class="card-body ">
                    <!-- form 2 skills-->
                    <div class="col-10 form__skills-edit" id="formSkills">
                        <h6 class="card-subtitle mb-2 text-muted text-center">What skills do you have?</h6>
                        <div class="mb-3">
                            <label for="skill" class="form-label">Skills</label>
                            <input type="text" class="form-control" name="skills" id="skill" list='skills'>
                            <datalist id="skills">
                                <option value="HTML">
                                <option value="CSS">
                                <option value="Javscript">
                                <option value="Linux">
                                <option value="AWS">
                            </datalist>
                            <h6>Skills</h6>
                            <div class="row container__skills" id="skillsContainer">
                                <?php
                                for ($i = 0; $i < count($skillsAttr->skills); $i++) {
                                ?>
                                    <span class="badge rounded-pill bg-primary ml-3 pills"><?= $skillsAttr->skills[$i] ?>
                                        <input type="hidden" class="skills" name="skillsArr[]" value="<?= $skillsAttr->skills[$i] ?>"><i class="fas fa-times ml-1 btn-icon__remove" onclick="removePill(this)"></i></span>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                        <button type="button" class="btn btn-success" onclick="return addSkills();">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
    <script src="library/node_modules/jquery/dist/jquery.min.js"></script>
</body>

</html>