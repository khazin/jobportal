<?php session_start(); ?>
<?php include './includes/ClassAutoloader.php'; ?>
<?php include './includes/settings.php'; ?>


<?php
if (isset($_POST['search'])) {
    $companyName = $_POST['companyName'];
    $companyType = $_POST['companyType'];

    //employer model initiated
    $employer = new Employer();

    //Biography model initiated
    $biography = new Biography();

    // store employer object in employer controller
    $employerController = new EmployerController($employer);


    //set employer company name data
    $employerController->setEmployerCompanyName($companyName);
    //set employer company type data
    $employerController->setEmployerCompanyType($companyType);

    // store applicants object in applicants view
    $employerView = new EmployerView($employer);

    // store biography object in biography view
    $biographyView = new biographyView($biography);

    $model = new Model();
    $view = new View();
    $modelArr = [$employer, $biography];
    $viewArr = [$employerView, $biographyView];

    $controller = new Controller();
    $searchCompanyAttr = $view->searchEmployer($model, $modelArr, $viewArr);

    $employersObj = $searchCompanyAttr->employersObj;
    $biographysObj = $searchCompanyAttr->biographysObj;

    $companyIdArr = $employersObj->id;
    $companyNameArr = $employersObj->companyName;
    $companyTypeArr = $employersObj->companyType;
    $companyContactArr = $employersObj->companyContact;
    $companyAdminArr = $employersObj->companyAdmin;

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

    <div class="container col-12 d-flex  justify-content-center bg-light">

        <div class="container mt-5 col-12 bg-light row">

            <div class=" col-2  d-flex flex-column ">
                <form method="post" class="form mt-5">
                    <input type="text" placeholder="Company Name" class="form-control mb-3" id="companyName" name="companyName">
                    <input type="text" placeholder="Company Type" class="form-control mb-3" id="companyType" name="companyType">
                    <input type="submit" class="btn btn-primary mt-5" name="search" value="Search">

                </form>
            </div>
            <div class=" col-10  bg-secondary ">
                <?php
                for ($i = 0; $i < count($companyIdArr); $i++) {
                ?>
                    <div class="card mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-title"><?= $companyNameArr[$i] ?></h6>
                            <h6 class="card-title"><?= $companyTypeArr[$i] ?></h6>
                            <div class="card-text mb-4" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                                <?= $bioArr[$i] ?>
                            </div>

                            <a href="viewemployer.php?id=<?= $companyIdArr[$i] ?>" class="btn btn-primary">View Profile</a>
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