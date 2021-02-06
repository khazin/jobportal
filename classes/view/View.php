<?php

class View
{

    public Object $user;
    public function __construct()
    {
    }

    public function login($model, $user, $userView)
    { //remember to put type declaration
        echo "View initiated. retrieving user data";
        echo "<br>";


        if ($model->login($user) == true) {
            return $userView->getUser();
            echo "user logged in";
            echo "<br>";

        } else {
            echo "Your email or password is wrong";
            echo "<br>";
            return false;
        };
    }

    public function showEmployerProfile($model, $modelArr, $viewArr)
    { //remember to put type declaration
        echo "View initiated. retrieveing applicants data";
        echo "<br>";

        $employerView = $viewArr[0];
        $biographyView = $viewArr[1];

        $model->showEmployerProfile($modelArr);

        $employerProfObj = new stdClass();
        $employerProfObj->employerAttr = $employerView->getEmployer();
        $employerProfObj->biographyAttr = $biographyView->getBiography();
        return $employerProfObj;

        
 
        echo "employer profile is shown";
        echo "<br>";
    }

    public function showApplicantProfile($model, $modelArr, $viewArr)
    { //remember to put type declaration
        echo "View initiated. retrieveing applicants data";
        echo "<br>";
        
        $applicantView = $viewArr[0];
        $biographyView = $viewArr[1];
        $skillsView = $viewArr[2];
        $educationView = $viewArr[3];
        $experienceView = $viewArr[4];

        $model->showApplicantProfile($modelArr);

        $applicantProfObj = new stdClass();
        $applicantProfObj->applicantAttr = $applicantView->getApplicant();
        $applicantProfObj->biographyAttr = $biographyView->getBiography();
        $applicantProfObj->skillsAttr = $skillsView->getSkills();
        $applicantProfObj->educationAttr = $educationView->getEducation();
        $applicantProfObj->experienceAttr = $experienceView->getExperience();
        return $applicantProfObj;
 
        echo "applicant profile is shown";
        echo "<br>";
    }

    public function showAllJobs($model, $job, $jobView)
    {
        echo "View initiated. retrieving job data";
        echo "<br>";
        $model->showAllJobs($job);
        return $jobView->getAllJobs();

        echo "user logged in";
        echo "<br>";
    }
}
