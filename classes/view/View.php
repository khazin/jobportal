<?php

class View
{

    public Object $user;
    public function __construct()
    {
    }

    public function login($model, $user, $userView)
    { 
        if ($model->login($user) == true) {
            return $userView->getUser();
        } else {
            return false;
        };
    }

    public function login2($model, $user, $userView)
    { 
        if ($model->login2($user) == true) {
            return $userView->getUser();
        } else {
            return false;
        };
    }

    public function showEmployerProfile($model, $modelArr, $viewArr)
    { 

        $employerView = $viewArr[0];
        $biographyView = $viewArr[1];

        $result = $model->showEmployerProfile($modelArr);

        $employerProfObj = new stdClass();
        
        
        if ($result->employerRes == true) {
            $employerProfObj->employerAttr = $employerView->getEmployer();
        } else {
            $employerProfObj->employerAttr = null;
        }
        
        if ($result->biographyRes == true) {
            $employerProfObj->biographyAttr = $biographyView->getBiography();
        } else {
            $employerProfObj->biographyAttr = null;
        }
        
        return $employerProfObj;

        
 
       
    }

    public function showApplicantProfile($model, $modelArr, $viewArr)
    { 
    
        $applicantView = $viewArr[0];
        $biographyView = $viewArr[1];
        $skillsView = $viewArr[2];
        $educationView = $viewArr[3];
        $experienceView = $viewArr[4];

        $result = $model->showApplicantProfile($modelArr);
        $applicantProfObj = new stdClass();

        if ($result->applicantRes == true) {
            $applicantProfObj->applicantAttr = $applicantView->getApplicant();
        } else {
            $applicantProfObj->applicantAttr = null;
        }

        if ($result->biographyRes == true) {
            $applicantProfObj->biographyAttr = $biographyView->getBiography();
        } else {
            $applicantProfObj->biographyAttr = null;
        }

        if ($result->skillsRes == true) {
            $applicantProfObj->skillsAttr = $skillsView->getSkills();
        } else {
            $applicantProfObj->skillsAttr = null;
        }

        if ($result->educationRes == true) {
            $applicantProfObj->educationAttr = $educationView->getEducation();
        } else {
            $applicantProfObj->educationAttr = null;
        }

        if ($result->experienceRes == true) {
            $applicantProfObj->experienceAttr = $experienceView->getExperience();
        } else {
            $applicantProfObj->experienceAttr = null;
        }
        return $applicantProfObj;
 
      
    }

    public function searchApplicant($model, $modelArr, $viewArr) {
    
        $applicantsView = $viewArr[0];
        $skillsView = $viewArr[1];
        $biographyView = $viewArr[2];
        $model->searchApplicant($modelArr);
      
        $searchApplicantsAttr = new stdClass();
        $searchApplicantsAttr->applicantsObj = $applicantsView->getAllApplicants();
        $searchApplicantsAttr->skillsObj = $skillsView->getSkills();
        $searchApplicantsAttr->biographysObj = $biographyView->getAllBiographys();

        return $searchApplicantsAttr;
    

     
    }

    public function searchEmployer($model, $modelArr, $viewArr) {
    
        $EmployerView = $viewArr[0];
        $biographyView = $viewArr[1];
        $model->searchEmployer($modelArr);
      
        $searchEmployerAttr = new stdClass();
        $searchEmployerAttr->employersObj = $EmployerView->getAllEmployers();
        $searchEmployerAttr->biographysObj = $biographyView->getAllBiographys();

        return $searchEmployerAttr;
    

      
    }

    public function showAllJobs($model, $job, $jobView)
    {
        
        if ($model->showAllJobs($job) == true) {
            return $jobView->getAllJobs();
        } else {
            return null;
        }
        ;

      
    }

    public function showJob($model, $job, $jobView)
    {
        // echo "View initiated. retrieving job data";
        // echo "<br>";
        $model->showJob($job);
        return $jobView->getJob();

        // echo "showing selected job";
        // echo "<br>";
    }

    public function searchJob($model,$modelArr,$viewArr){
        // echo "View initiated. retrieving job data";
        // echo "<br>";
        $jobView = $viewArr[0];
        $employerView = $viewArr[1];
        $model->searchJob($modelArr);
        
        $searchJobObj = new stdClass();
        $searchJobObj->jobAttr = $jobView->getAllJobs();
        $searchJobObj->companyName = explode(',',$employerView->getEmployerCompanyName());
        $searchJobObj->companyType = explode(',',$employerView->getEmployerCompanyType());

        return $searchJobObj;
        // echo "showing searched  job";
        // echo "<br>";
    }

    public function searchJob2($model,$modelArr,$viewArr){
        // echo "View initiated. retrieving job data";
        // echo "<br>";
        $jobView = $viewArr[0];
        $employerView = $viewArr[1];
        $model->searchJob2($modelArr);
        
        $searchJobObj = new stdClass();
        $searchJobObj->jobAttr = $jobView->getAllJobs();
        $searchJobObj->companyName = explode(',',$employerView->getEmployerCompanyName());
        $searchJobObj->companyType = explode(',',$employerView->getEmployerCompanyType());

        return $searchJobObj;
        // echo "showing searched  job";
        // echo "<br>";
    }

    public function checkAppliedJob($model, $modelArr)
    {
        // echo "View initiated. retrieving job applied data";
        // echo "<br>";
      
        return $model->checkAppliedJob($modelArr);
    }
    public function checkConnectUser($model, $connection,$connectionView)
    {
        // echo "View initiated. retrieving check connection data";
        // echo "<br>";

        return $model->checkConnectUser($connection);
    }

    public function getMsgSender($model, $modelArr,$viewArr)
    {
        // echo "View initiated. retrieving check connection data";
        // echo "<br>";
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
        // echo "View initiated. retrieving forum data";
        // echo "<br>";
        $forumQuestionView = $viewObj->forumQuestionView;
        $applicantView = $viewObj->applicantView;

        $result = $model->showAllQuestions($modelObj);

        if ($result == true) {
            $applicantsObj = $applicantView->getAllApplicants();
            $forumQuestionObj = $forumQuestionView->getAllforumQuestion();
        } else {
            $applicantsObj = null;
            $forumQuestionObj = null;
        }
       
        $forumQuestionAttr = new stdClass();
        $forumQuestionAttr->applicantsObj = $applicantsObj;
        $forumQuestionAttr->forumQuestionObj = $forumQuestionObj;
        return $forumQuestionAttr;
    }

    public function showQuestion(Object $model,Object $modelObj,Object $viewObj) 
    {
        // echo "View initiated. retrieving forum data";
        // echo "<br>";
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
        // echo "View initiated. retrieving forum data";
        // echo "<br>";
        $forumAnswerView = $viewObj->forumAnswerView;
        $applicantView = $viewObj->applicantView;

        $result = $model->showAllAnswers($modelObj);

        if ($result == true) {
            $applicantsObj = $applicantView->getAllApplicants();
            $forumAnswerObj = $forumAnswerView->getAllforumAnswer();
        } else {
            $applicantsObj = null;
            $forumAnswerObj = null;
        }
       

        $forumAnswerAttr = new stdClass();
        $forumAnswerAttr->applicantsObj = $applicantsObj;
        $forumAnswerAttr->forumAnswerObj = $forumAnswerObj;
        return $forumAnswerAttr;
    }

    public function showBiography($model, $biography, $biographyView)
    {
        // echo "View initiated. retrieving Biography data";
        // echo "<br>";
        $model->showBiography($biography);
        return $biographyView->getBiography();

        // echo "showing selected Biography";
        // echo "<br>";
    }

    public function showSkills($model, $skills, $skillsView)
    {
        // echo "View initiated. retrieving skills data";
        // echo "<br>";
        $model->showSkills($skills);
        return $skillsView->getSkills();

        // echo "showing selected skills";
        // echo "<br>";
    }

    public function showEducation($model, $education, $educationView)
    {
        // echo "View initiated. retrieving education data";
        // echo "<br>";
        $model->showEducation($education);
        return $educationView->getEducation();

        // echo "showing selected education";
        // echo "<br>";
    }
    public function showExperience($model, $experience, $experienceView)
    {
        // echo "View initiated. retrieving experience data";
        // echo "<br>";
        $model->showExperience($experience);
        return $experienceView->getExperience();

        // echo "showing selected experience";
        // echo "<br>";
    }
}
