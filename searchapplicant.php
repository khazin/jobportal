<?php include './includes/ClassAutoloader.php'; ?>
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
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container ">
                <a class="navbar-brand col-2" href="index.php">JOB PORTAL</a>

                <div class="collapse navbar-collapse col-8 d-flex justify-content-around">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Search users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Find jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Find company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Post</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2 mt-3 d-flex justify-content-around">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <i class="far fa-user bg-light"></i>
                        </li>
                        <li class="nav-item">
                            <p class="text-light">Firstname Lastname</p>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
        </div>
        <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    </header>

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
                <div class="card mt-5" style="width: 18rem;">
                    <div class="card-body">
                        <h6 class="card-title">Firstname Lastname</h6>
                        <h6 class="card-title">city, country</h6>
                        <h6 class="card-title">jobtitle at company</h6>
                        <div class="card-text mb-4" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"> write bio here bio bio bio</div>
                        <div class="my-4">
                            <h6 class="card-title">Skills</h6>
                            <div style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                                <span class="badge rounded-pill bg-primary">HTML</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
                <div class="card mt-5" style="width: 18rem;">
                    <div class="card-body">
                        <h6 class="card-title">Firstname Lastname</h6>
                        <h6 class="card-title">city, country</h6>
                        <h6 class="card-title">jobtitle at company</h6>
                        <div class="card-text mb-4" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"> write bio here bio bio bio</div>
                        <div class="my-4">
                            <h6 class="card-title">Skills</h6>
                            <div style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                                <span class="badge rounded-pill bg-primary">HTML</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
                <div class="card mt-5" style="width: 18rem;">
                    <div class="card-body">
                        <h6 class="card-title">Firstname Lastname</h6>
                        <h6 class="card-title">city, country</h6>
                        <h6 class="card-title">jobtitle at company</h6>
                        <div class="card-text mb-4" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"> write bio here bio bio bio</div>
                        <div class="my-4">
                            <h6 class="card-title">Skills</h6>
                            <div style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                                <span class="badge rounded-pill bg-primary">HTML</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                                <span class="badge rounded-pill bg-primary">CSS</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary">View Profile</a>
                    </div>
                </div>

            </div>




        </div>
    </div>
</body>
<script src="js/script.js"></script>
<script src="library/node_modules/jquery/dist/jquery.min.js"></script>

</html>

<?php
if (isset($_POST['search'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $jobTitle = $_POST['jobTitle'];
    $company = $_POST['company'];
    $skillsArr = $_POST['skillsArr'];

    $applicantArr = [
        $firstname, $lastname, $gender, $birthday = '',
        $country, $city, $jobTitle, $company
    ];

    print_r($applicantArr);
    print_r($skills);
    //applicant model initiated
    $applicant = new Applicants();
    //skills model initiated
    $skills = new Skills();

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

    $model = new Model();
    $view = new View();
    $modelArr = [$applicant, $skills];
    $viewArr = [$applicantsView, $skillsView];

    $controller = new Controller();
    $applicantsAttr = $view->searchApplicant($model, $modelArr, $viewArr);
}
?>