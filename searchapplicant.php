<?php
session_start();
include './includes/ClassAutoloader.php';
include './includes/settings.php';
?>

<?php
if (isset($_POST['search'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    if (!$_POST['gender']) {
        $gender = 'undefined';
    } else {
        $gender = $_POST['gender'];
    }
    $city = $_POST['city'];
    $country = $_POST['country'];
    $jobTitle = $_POST['jobTitle'];
    $company = $_POST['company'];
    if ($_POST['skillsArr'] == null) {
        $_POST['skillsArr'] = [];
    }
    $skillsArr = $_POST['skillsArr'];
    
    print_r($_POST);
    $applicantArr = [
        $firstname, $lastname, $gender, $birthday = '',
        $country, $city, $jobTitle, $company
    ];


    //applicant model initiated
    $applicant = new Applicants();
    //skills model initiated
    $skills = new Skills();

    //Biography model initiated
    $biography = new Biography();

    // store applicant object in applicant controller
    $applicantController = new ApplicantsController($applicant);
    // store skills object in skills controller
    $skillsController = new SkillsController($skills);

    //set applicant data
    $applicantController->setApplicant($applicantArr, $id = 0);
    //set skills data
    $skillsController->setSkills($skillsArr, $id = 0);

    // store applicants object in applicants view
    $applicantsView = new ApplicantsView($applicant);
    // store skills object in skills view
    $skillsView = new skillsView($skills);
    // store biography object in biography view
    $biographyView = new biographyView($biography);

    $model = new Model();
    $view = new View();
    $modelArr = [$applicant, $skills, $biography];
    $viewArr = [$applicantsView, $skillsView, $biographyView];

    $controller = new Controller();
    $searchApplicantsAttr = $view->searchApplicant($model, $modelArr, $viewArr);

    $applicantsObj = $searchApplicantsAttr->applicantsObj;
    $skillsObj = $searchApplicantsAttr->skillsObj;
    $biographysObj = $searchApplicantsAttr->biographysObj;

    $applicantIdArr = $applicantsObj->applicantId;
    $firstnameArr = $applicantsObj->firstname;
    $lastnameArr = $applicantsObj->lastname;
    $genderArr = $applicantsObj->gender;
    $cityArr = $applicantsObj->city;
    $countryArr = $applicantsObj->country;
    $jobTitleArr = $applicantsObj->jobTitle;
    $companyArr = $applicantsObj->company;
    $skillsArr = $skillsObj->skills;
    $bioArr = $biographysObj->bio;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="library/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/node_modules/@fortawesome/fontawesome-free/css/all.css">
</head>

<body>
    <?php include 'includes/header2.php'; ?>

    <div class="container col-12 d-flex  justify-content-center bg-success">

        <div class="container mt-5 col-12 bg-light row">

            <div class=" col-2  d-flex flex-column ">
                <form method="post" class="form mt-5">
                    <input type="text" placeholder="firstname" class="form-control mb-3" id="firstname" name="firstname">
                    <input type="text" placeholder="lastname" class="form-control mb-3" id="lastname" name="lastname">
                    <div class="">
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male" class="form-label">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female" class="form-label">Female</label>
                    </div>
                    <input type="text" placeholder="country" class="form-control mb-3" id="country" name="country">
                    <input type="text" placeholder="city" class="form-control mb-3" id="city" name="city">
                    <input type="text" placeholder="jobTitle" class="form-control mb-3" id="jobTitle" name="jobTitle">
                    <input type="text" placeholder="company" class="form-control mb-3" id="company" name="company">
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Skills" id="skill">
                        <div class="btn btn-outline-secondary" onclick="return addSkills()"><i class="fas fa-plus"></i></div>
                    </div>

                    <div class="my-4" id="skillsContainer">
                        <h6>Skills</h6>
                        <!-- <span class="badge rounded-pill bg-primary">HTML</span> -->

                    </div>


                    <input type="submit" class="btn btn-primary mt-5" name="search" value="Search">

                </form>
            </div>
            <div class=" col-10  bg-secondary ">
                <?php
                for ($i = 0; $i < count($applicantIdArr); $i++) {
                ?>
                    <div class="card mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-title"><?= $firstnameArr[$i] . " " . $lastnameArr[$i] ?></h6>
                            <h6 class="card-title"><?= $cityArr[$i] . ", " . $countryArr[$i] ?></h6>
                            <h6 class="card-title"><?= $jobTitleArr[$i] . " at " . $lastnameArr[$i] ?></h6>
                            <div class="card-text mb-4" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                                <?= $bioArr[$i] ?>
                            </div>
                            <div class="my-4">
                                <h6 class="card-title">Skills</h6>
                                <div style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                                    <?php
                                    for ($j = 0; $j < count($skillsArr[$i]); $j++) {
                                        echo '<span class="badge rounded-pill bg-primary mr-2">' . $skillsArr[$i][$j] . '</span>';
                                    };
                                    ?>
                                </div>
                            </div>

                            <a href="viewprofile.php?id=<?= $applicantIdArr[$i] ?>" class="btn btn-primary">View Profile</a>
                        </div>
                    </div>
                <?php
                }
                ?>


            </div>




        </div>
    </div>
</body>
<script src="js/script.js"></script>
<script src="library/node_modules/jquery/dist/jquery.min.js"></script>

</html>