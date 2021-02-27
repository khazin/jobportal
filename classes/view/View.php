<?php

class View
{

    public Object $user;
    public function __construct()
    {
    }

    public function login($model, $user, $userView)
    { //remember to put type declaration
        if ($model->login($user) == true) {
            return $userView->getUser();
        } else {
            return false;
        };
    }

    public function login2($model, $user, $userView)
    { //remember to put type declaration
        if ($model->login2($user) == true) {
            return $userView->getUser();
        } else {
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

    public function searchApplicant($model, $modelArr, $viewArr) {
        echo "View initiated. retrieving applicabnts  data";
        echo "<br>";
        $applicantsView = $viewArr[0];
        $skillsView = $viewArr[1];
        $biographyView = $viewArr[2];
        $model->searchApplicant($modelArr);
      
        $searchApplicantsAttr = new stdClass();
        $searchApplicantsAttr->applicantsObj = $applicantsView->getAllApplicants();
        $searchApplicantsAttr->skillsObj = $skillsView->getSkills();
        $searchApplicantsAttr->biographysObj = $biographyView->getAllBiographys();

        return $searchApplicantsAttr;
    

        echo "user is searched";
        echo "<br>";
    }

    public function searchEmployer($model, $modelArr, $viewArr) {
        echo "View initiated. retrieving employers  data";
        echo "<br>";
        $EmployerView = $viewArr[0];
        $biographyView = $viewArr[1];
        $model->searchEmployer($modelArr);
      
        $searchEmployerAttr = new stdClass();
        $searchEmployerAttr->employersObj = $EmployerView->getAllEmployers();
        $searchEmployerAttr->biographysObj = $biographyView->getAllBiographys();

        return $searchEmployerAttr;
    

        echo "user is searched";
        echo "<br>";
    }

    public function showAllJobs($model, $job, $jobView)
    {
        echo "View initiated. retrieving job data";
        echo "<br>";
        $model->showAllJobs($job);
        return $jobView->getAllJobs();

        echo "showing all jobs";
        echo "<br>";
    }

    public function showJob($model, $job, $jobView)
    {
        echo "View initiated. retrieving job data";
        echo "<br>";
        $model->showJob($job);
        return $jobView->getJob();

        echo "showing selected job";
        echo "<br>";
    }

    public function searchJob($model,$modelArr,$viewArr){
        echo "View initiated. retrieving job data";
        echo "<br>";
        $jobView = $viewArr[0];
        $employerView = $viewArr[1];
        $model->searchJob($modelArr);
        
        $searchJobObj = new stdClass();
        $searchJobObj->jobAttr = $jobView->getAllJobs();
        $searchJobObj->companyName = explode(',',$employerView->getEmployerCompanyName());
        $searchJobObj->companyType = explode(',',$employerView->getEmployerCompanyType());

        return $searchJobObj;
        echo "showing searched  job";
        echo "<br>";
    }

    public function checkAppliedJob($model, $modelArr)
    {
        echo "View initiated. retrieving job applied data";
        echo "<br>";
      
        return $model->checkAppliedJob($modelArr);
    }
    public function checkConnectUser($model, $connection,$connectionView)
    {
        echo "View initiated. retrieving check connection data";
        echo "<br>";

        return $model->checkConnectUser($connection);
    }

    public function getMsgSender($model, $modelArr,$viewArr)
    {
        echo "View initiated. retrieving check connection data";
        echo "<br>";
        $messageView = $viewArr[0];
        $applicantsView = $viewArr[1];
        $model->getMsgSender($modelArr);
        $applicantsObj = $applicantsView->getAllApplicants();
        $messageObj = $messageView->getAllMessages();

        $msgSenderAttr = new stdClass();
        $msgSenderAttr->applicantsObj = $applicantsObj;
        $msgSenderAttr->messageObj = $messageObj;
        return $msgSenderAttr;
    }

    public function showAllQuestions(Object $model,Object $modelObj,Object $viewObj) 
    {
        echo "View initiated. retrieving forum data";
        echo "<br>";
        $forumQuestionView = $viewObj->forumQuestionView;
        $applicantView = $viewObj->applicantView;

        $model->showAllQuestions($modelObj);

        $applicantsObj = $applicantView->getAllApplicants();
        $forumQuestionObj = $forumQuestionView->getAllforumQuestion();

        $forumQuestionAttr = new stdClass();
        $forumQuestionAttr->applicantsObj = $applicantsObj;
        $forumQuestionAttr->forumQuestionObj = $forumQuestionObj;
        return $forumQuestionAttr;
    }

    public function showQuestion(Object $model,Object $modelObj,Object $viewObj) 
    {
        echo "View initiated. retrieving forum data";
        echo "<br>";
        $forumQuestionView = $viewObj->forumQuestionView;
        $applicantView = $viewObj->applicantView;

        $model->showQuestion($modelObj);

        $firstname = $applicantView->getApplicantFirstname();
        $lastname = $applicantView->getApplicantLastname();
        $forumQuestionObj = $forumQuestionView->getforumQuestion();

        $forumQuestionAttr = new stdClass();
        $forumQuestionAttr->applicantsObj->firstname = $firstname;
        $forumQuestionAttr->applicantsObj->lastname = $lastname;
        $forumQuestionAttr->forumQuestionObj = $forumQuestionObj;
        return $forumQuestionAttr;
    }

    public function showAllAnswers(Object $model,Object $modelObj,Object $viewObj) 
    {
        echo "View initiated. retrieving forum data";
        echo "<br>";
        $forumAnswerView = $viewObj->forumAnswerView;
        $applicantView = $viewObj->applicantView;

        $model->showAllAnswers($modelObj);

        $applicantsObj = $applicantView->getAllApplicants();
        $forumAnswerObj = $forumAnswerView->getAllforumAnswer();

        $forumAnswerAttr = new stdClass();
        $forumAnswerAttr->applicantsObj = $applicantsObj;
        $forumAnswerAttr->forumAnswerObj = $forumAnswerObj;
        return $forumAnswerAttr;
    }

}
