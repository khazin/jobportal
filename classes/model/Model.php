<?php
class Model extends DB
{
    public $result;
    public function __construct()
    {
        echo "Model initialised";
    }

    public function insertData($stmt)
    {
        try {
            //prepare statement
            $this->sql = $stmt;
            // echo "$stmt";
            $this->connection();
            //send data to db
            if ($this->connection->query($this->sql) === TRUE) {
                return true;
                echo 'data inserted';
            } else {
                echo "Error : " . $this->connection->error;
                echo 'data not inserted';
            }
            $this->connection->close();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function retrieveData($stmt)
    {
        try {
            //connect to db and get data
            $this->sql = $stmt;
            $this->connection();
            $this->result = mysqli_query($this->connection, $this->sql);
            if ($this->result != false) {
                return true;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function registerApplicant($modelArr)
    {
        $user = $modelArr[0];

        $id = $user->getUserId();
        $email = $user->getUserEmail();
        $password = $user->getUserPassword();
        $role = $user->getUserRole();

        $applicant = $modelArr[1];

        $firstname = $applicant->getApplicantFirstname();
        $lastname = $applicant->getApplicantLastname();
        $gender = $applicant->getApplicantGender();
        $dob = $applicant->getApplicantDob();
        $jobTitle = $applicant->getApplicantJobTitle();
        $company = $applicant->getApplicantCompany();
        $country = $applicant->getApplicantCountry();
        $city = $applicant->getApplicantCity();



        $stmt = "CALL procRegisterApplicant(
            '$firstname', '$lastname','$gender','$dob',
            '$country','$city','$jobTitle','$company',
            '$email', '$password');";

        $this->insertData($stmt);
    }

    public function registerEmployer($modelArr)
    {
        $user = $modelArr[0];

        $id = $user->getUserId();
        $email = $user->getUserEmail();
        $password = $user->getUserPassword();
        $role = $user->getUserRole();

        $employer = $modelArr[1];

        $companyName = $employer->getEmployerCompanyName();
        $companyType = $employer->getEmployerCompanyType();
        $companyContact = $employer->getEmployerCompanyContact();
        $companyAdmin = $employer->getEmployerCompanyAdmin();

        // print_r($employer);

        $stmt = "CALL procRegisterEmployer(
            '$id','$companyName', '$companyType','$companyContact', 
            '$companyAdmin', '$email','$password');";


        $this->insertData($stmt);
    }

    public function login($user)
    {
        $email = $user->getUserEmail();
        $password = $user->getUserPassword();

        $stmt = "SELECT * FROM user WHERE `email` = '$email' AND `password` = '$password'";
        $this->retrieveData($stmt);

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {

                // if (password_verify($this->password, $this->row['password'])) {

                $user->setUserId($this->row['user_id']);
                $user->setUserEmail($this->row['email']);
                $user->setUserPassword($this->row['password']);
                $user->setUserRole($this->row['role']);
                $user->setUserFirstLogin($this->row['first_login']);
                // }
            }
            return true;
        } else {
            return false;
        }
    }

    public function createApplicantProfile($modelArr)
    { //remember to put type declaration
        $biography = $modelArr[0];
        $skills = $modelArr[1];
        $education = $modelArr[2];
        $experience = $modelArr[3];

        $biographyId = $biography->getBiographyId();
        $biographyBio = $biography->getBiographyBio();

        $id = $biographyId;

        $skillsSkills = implode(",", $skills->getSkillsSkills());

        $certification = $education->getEducationCertification();
        $school = $education->getEducationSchool();
        $course = $education->getEducationCourse();
        $graduateYear = $education->getEducationGraduateYear();

        $jobTitle = $experience->getExperienceJobTitle();
        $company = $experience->getExperienceCompany();
        $yearFrom = $experience->getExperienceYearFrom();
        $yearTo = $experience->getExperienceYearTo();

        $stmt1 = "CALL procCreateApplicant('$id' ,'$biographyBio' , 
        '$skillsSkills');";

        $this->insertData($stmt1);

        for ($i = 0; $i < count($course); $i++) {
            $stmt2 = "INSERT INTO `jobportal`.`education` (`education_user_id`, `course`, `certification`, `school`, `gradYear`) 
            VALUES ('$id', '$course[$i]', '$certification[$i]', '$school[$i]', '$graduateYear[$i]');";

            $this->insertData($stmt2);
        }


        for ($i = 0; $i < count($jobTitle); $i++) {
            $stmt3 = "INSERT INTO `jobportal`.`experience` (`experience_user_id`, `job_title`, `company`, `year_from`, `year_to`) 
        VALUES ('$id', '$jobTitle[$i]', '$company[$i]', '$yearFrom[$i]', '$yearTo[$i]');";

            $this->insertData($stmt3);
        }
    }

    public function createEmployerProfile($modelArr)
    { //remember to put type declaration
        $biography = $modelArr[0];

        $biographyId = $biography->getBiographyId();
        $biographyBio = $biography->getBiographyBio();

        $stmt = "CALL procCreateEmployer(
            '$biographyId','$biographyBio');";
        // echo $stmt;
        $this->insertData($stmt);
    }

    public function showEmployerProfile($modelArr)
    {
        $employer = $modelArr[0];
        $biography = $modelArr[1];

        $employerId = $employer->getEmployerId();
        $biographyId = $biography->getBiographyId();

        $stmt1 = "SELECT * FROM employer WHERE `employer_id` = '$employerId'";
        // echo "$stmt";
        $this->retrieveData($stmt1);

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {

                $employer->setEmployerId($this->row['employer_id']);
                $employer->setEmployerCompanyName($this->row['company_name']);
                $employer->setEmployerCompanyType($this->row['company_type']);
                $employer->setEmployerCompanyContact($this->row['company_contact']);
                $employer->setEmployerCompanyAdmin($this->row['company_admin']);
                // var_dump($this->result);
            }
        }

        $stmt2 = "SELECT * FROM biography WHERE `biography_id` = '$biographyId'";

        $this->retrieveData($stmt2);

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {

                $biography->setBiographyId($this->row['biography_id']);
                $biography->setBiographyBio($this->row['bio']);
                // var_dump($this->result);
            }
        }

        //set value of retireve data
    }

    public function showApplicantProfile($modelArr)
    {
        $applicant = $modelArr[0];
        $biography = $modelArr[1];
        $skills = $modelArr[2];
        $education = $modelArr[3];
        $experience = $modelArr[4];

        $applicantId = $applicant->getApplicantId();
        $biographyId = $biography->getBiographyId();
        $skillsId = $skills->getSkillsId();
        $educationUserId = $education->getEducationUserId();
        $experiencUserId = $experience->getExperienceUserId();
        // echo $applicantId;
        // echo $biographyId;
        // echo $skillsId;
        // echo $educationUserId;
        // echo $experiencUserId;

        // get applicant statement
        $stmt1 = "SELECT * FROM applicant WHERE `applicant_id` = '$applicantId'";
        // echo $stmt1;
        $this->retrieveData($stmt1);

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {

                $applicant->setApplicantId($this->row['applicant_id']);
                $applicant->setApplicantFirstname($this->row['firstname']);
                $applicant->setApplicantLastname($this->row['lastname']);
                $applicant->setApplicantGender($this->row['gender']);
                $applicant->setApplicantDob($this->row['dob']);
                $applicant->setApplicantJobTitle($this->row['job_title']);
                $applicant->setApplicantCompany($this->row['company']);
                $applicant->setApplicantCountry($this->row['country']);
                $applicant->setApplicantCity($this->row['city']);

                // var_dump($this->result);
            }
        }

        // get biography statement

        $stmt2 = "SELECT * FROM biography WHERE `biography_id` = '$biographyId'";

        $this->retrieveData($stmt2);

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {

                $biography->setBiographyId($this->row['biography_id']);
                // echo $this->row['biography_id'];

                $biography->setBiographyBio($this->row['bio']);
                // var_dump($this->result);
            }
        }


        // get skills statement
        $stmt3 = "SELECT * FROM skills WHERE `skills_id` = '$skillsId'";

        $this->retrieveData($stmt3);

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {

                $skills->setSkillsId($this->row['skills_id']);
                $skills->setSkillsSkills(explode(",", $this->row['skills_arr']));
                // var_dump($this->result);
            }
        }

        // get education statement
        $stmt4 = "SELECT * FROM education WHERE `education_user_id` = '$educationUserId'";

        $this->retrieveData($stmt4);
        $educationId = [];
        $educationCertification = [];
        $educationSchool = [];
        $educationCourse = [];
        $educationgraduateYear = [];

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {
                array_push($educationId, $this->row['education_id']);
                array_push($educationCertification, $this->row['certification']);
                array_push($educationSchool, $this->row['school']);
                array_push($educationCourse, $this->row['course']);
                array_push($educationgraduateYear, $this->row['gradYear']);
            }
            $education->setEducationId($educationId);
            $education->setEducationCertification($educationCertification);
            $education->setEducationSchool($educationSchool);
            $education->setEducationCourse($educationCourse);
            $education->setEducationGraduateYear($educationgraduateYear);
        }

        // get experience statement
        $stmt5 = "SELECT * FROM experience WHERE `experience_user_id` = '$experiencUserId'";
        $this->retrieveData($stmt5);

        $experienceId = [];
        $experienceJobTitle = [];
        $experienceCompany = [];
        $experienceYearFrom = [];
        $experienceYearTo = [];

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {
                array_push($experienceId, $this->row['experience_id']);
                array_push($experienceJobTitle, $this->row['job_title']);
                array_push($experienceCompany, $this->row['company']);
                array_push($experienceYearFrom, $this->row['year_from']);
                array_push($experienceYearTo, $this->row['year_to']);
            }
            // var_dump($this->result);
            $experience->setExperienceId($experienceId);
            $experience->setExperienceJobTitle($experienceJobTitle);
            $experience->setExperienceCompany($experienceCompany);
            $experience->setExperienceYearFrom($experienceYearFrom);
            $experience->setExperienceYearTo($experienceYearTo);
        }
    }

    public function searchApplicant($modelArr)
    {
        $applicant = $modelArr[0];
        $skills = $modelArr[1];
        $biography = $modelArr[2];

        $firstname = $applicant->getApplicantFirstname();
        $lastname = $applicant->getApplicantLastname();
        $gender = $applicant->getApplicantGender();
        $jobTitle = $applicant->getApplicantJobTitle();
        $company = $applicant->getApplicantCompany();
        $country = $applicant->getApplicantCountry();
        $city = $applicant->getApplicantCity();

        $skillsArr = $skills->getSkillsSkills();

        $stmt1 =  "SELECT `applicant_id`,`firstname`,`lastname`,`gender`,`dob`, 
        `country`,`city`, `job_title`, `company`,
        skills.skills_arr as `skills_arr`,
        biography.bio as `bio_arr`
        from `applicant`
        join `skills` on `skills_id` = `applicant_id`
        join `biography` on `biography_id` = `applicant_id`
        where applicant.firstname like '%$firstname%' 
        or applicant.lastname like '%$lastname%' 
        or applicant.gender like '%$gender%' 
        or applicant.country like '%$country%' 
        or applicant.city like '%$city%' 
        or applicant.job_title like '%$jobTitle%' 
        or applicant.company like '%$company%'";

        $stmt2 = '';
        for ($i=0; $i < count($skillsArr) ; $i++) { 
            $stmt2 .= " or FIND_IN_SET('$skillsArr[$i]', skills.skills_arr)";
        }
        $stmt = $stmt1 . $stmt2;

        $this->retrieveData($stmt);

        $applicantId = [];
        $firstname = [];
        $lastname = [];
        $gender = [];
        $dob = [];
        $jobTitle = [];
        $company = [];
        $country = [];
        $city = [];

        $skillsArr = [];
        $bioArr = [];

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {
                array_push($applicantId, $this->row['applicant_id']);
                array_push($firstname, $this->row['firstname']);
                array_push($lastname, $this->row['lastname']);
                array_push($gender, $this->row['gender']);
                array_push($dob, $this->row['dob']);
                array_push($jobTitle, $this->row['job_title']);
                array_push($company, $this->row['company']);
                array_push($country, $this->row['country']);
                array_push($city, $this->row['city']);
                array_push($skillsArr, explode(",", $this->row['skills_arr']));
                array_push($bioArr, $this->row['bio_arr']);
            }
            $applicantsArr = [$applicantId,$firstname,$lastname,$gender,
            $dob,$jobTitle,$company,$country, $city];
            $biographysArr = [[], $bioArr];
            $applicant->setAllApplicants($applicantsArr);
            $skills->setSkillsSkills($skillsArr);
            $biography->setAllBiographys($biographysArr);
         
        }
    }

    public function searchEmployer($modelArr) {
        $employer = $modelArr[0];
        $biography = $modelArr[1];

        $companyName = $employer->getEmployerCompanyName();
        $companyType = $employer->getEmployerCompanyType();


        $stmt =  "SELECT `employer_id`,`company_name`,`company_type`,
        `company_contact`,`company_admin`,
        biography.bio as `bio_arr`
        from `employer`
        join `biography` on `biography_id` = `employer_id`
        where employer.company_name like '%$companyName%' 
        or employer.company_type like '%$companyType%';";

        $this->retrieveData($stmt);

        $employerIdArr = [];
        $companyNameArr = [];
        $companyTypeArr = [];
        $companyContactArr = [];
        $companyAdminArr = [];
        
        $bioArr = [];

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {
                array_push($employerIdArr, $this->row['employer_id']);
                array_push($companyNameArr, $this->row['company_name']);
                array_push($companyTypeArr, $this->row['company_type']);
                array_push($companyContactArr, $this->row['company_contact']);
                array_push($companyAdminArr, $this->row['company_admin']);
             
                array_push($bioArr, $this->row['bio_arr']);
            }
            $employerArr = [$employerIdArr,$companyNameArr,
            $companyTypeArr,$companyContactArr,$companyAdminArr];
            $biographysArr = [[], $bioArr];
            
            $employer->setAllEmployers($employerArr);
            $biography->setAllBiographys($biographysArr);
         
        }
        

    }

    public function postJob($job)
    {

        $jobTitle = $job->getJobTitle();
        $employerId = $job->getJobEmployerId();
        $location = $job->getJobLocation();
        $minSalary = $job->getJobMinSalary();
        $maxSalary = $job->getJobMaxSalary();
        $description = $job->getJobDescription();
        $skills = implode(',', $job->getJobSkills());
        $jobType = $job->getJobType();

        $stmt = "CALL procPostJob('$employerId','$jobTitle','$location',
        '$minSalary','$maxSalary','$description','$skills','$jobType');";
        // echo $stmt;
        $this->insertData($stmt);
    }

    public function showAllJobs($job)
    {
        $stmt = "SELECT * FROM jobs";
        $this->retrieveData($stmt);
        $jobId = [];
        $jobTitle = [];
        $employerId = [];
        $location = [];
        $minSalary = [];
        $maxSalary = [];
        $description = [];
        $skills = [];
        $jobType = [];


        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {
                array_push($jobId, $this->row['job_id']);
                array_push($jobTitle, $this->row['job_title']);
                array_push($employerId, $this->row['employer_id']);
                array_push($location, $this->row['location']);
                array_push($minSalary, $this->row['min_salary']);
                array_push($maxSalary, $this->row['max_salary']);
                array_push($description, $this->row['job_description']);
                array_push($skills, explode(",", $this->row['skills']));
                array_push($jobType, $this->row['job_type']);
            }
            $allJobs = [
                $jobId, $jobTitle, $employerId, $location,
                $minSalary, $maxSalary, $description, $skills, $jobType
            ];

            $job->setAllJobs($allJobs);
        }
    }

    public function showJob($job)
    {
        $jobId = $job->getJobId();

        $stmt = "SELECT * FROM jobs WHERE `job_id` = '$jobId'";

        $this->retrieveData($stmt);
     

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {
                $job->setJobId($this->row['job_id']);
                $job->setJobTitle($this->row['job_title']);
                $job->setJobEmployerId($this->row['employer_id']);
                $job->setJobLocation($this->row['location']);
                $job->setJobMinSalary($this->row['min_salary']);
                $job->setJobMaxSalary($this->row['max_salary']);
                $job->setJobDescription($this->row['job_description']);
                $job->setJobSkills(explode(",",$this->row['skills']));
                $job->setJobType($this->row['job_type']);

            }
        }
    }

    public function searchJob($modelArr)
    {
        $job = $modelArr[0];
        $employer = $modelArr[1];

        $jobTitle = $job->getJobTitle();
        $jobLocation = $job->getJobLocation();
        $skillsArr = $job->getJobSkills();
        $jobType = explode(',',$job->getJobType());
        $minSalary = $job->getJobMinSalary();
        $maxSalary = $job->getJobMaxSalary();
        $companyType = $employer->getEmployerCompanyType();

        $stmt = "SELECT `job_id`, jobs.employer_id,  `job_title`, `location`, 
        `min_salary`, `max_salary`, `job_description`, `skills`, `job_type`, 
        employer.company_type as company_type,
        employer.company_name as company_name
        from `jobs`
        join `employer` on jobs.employer_id = employer.employer_id 
        where `job_title` like '%$jobTitle%'
        or `location` like '%$jobLocation%'
        or `company_type` like '%$companyType%'
        or `min_salary` >= $minSalary AND `max_salary` <= $maxSalary";

        for ($i=0; $i < count($skillsArr) ; $i++) { 
            $stmt .= " or FIND_IN_SET('$skillsArr[$i]', skills)";
        }

        for ($i=0; $i < count($jobType); $i++) { 
            $stmt .= " or FIND_IN_SET('$jobType[$i]', job_type)";
        }

        // echo $stmt;
        $this->retrieveData($stmt);

        
        $jobId = [];
        $jobTitle = [];
        $employerId = [];
        $location = [];
        $minSalary = [];
        $maxSalary = [];
        $description = [];
        $skills = [];
        $jobType = [];
        $companyName = [];
        $companyType = [];

        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {
                array_push($jobId, $this->row['job_id']);
                array_push($jobTitle, $this->row['job_title']);
                array_push($employerId, $this->row['employer_id']);
                array_push($location, $this->row['location']);
                array_push($minSalary, $this->row['min_salary']);
                array_push($maxSalary, $this->row['max_salary']);
                array_push($description, $this->row['job_description']);
                array_push($skills, explode(",", $this->row['skills']));
                array_push($jobType, $this->row['job_type']);
                array_push($companyName, $this->row['company_name']);
                array_push($companyType, $this->row['company_type']);
            }
            $allJobs = [
                $jobId, $jobTitle, $employerId, $location,
                $minSalary, $maxSalary, $description, $skills, $jobType
            ];
            $job->setAllJobs($allJobs);
            $employer->setEmployerCompanyName(implode(',',$companyName));
            $employer->setEmployerCompanyType(implode(',',$companyType));
        }
    }

    public function applyJob($modelArr)
    {
        $job = $modelArr[0];
        $applicant = $modelArr[1];

        $jobId = $job->getJobId();
        $applicantId = $applicant->getApplicantId();

        $stmt = "CALL procApplyJob($jobId, $applicantId)";

        $this->insertData($stmt);
    }

    public function checkAppliedJob($modelArr)
    {
        $job = $modelArr[0];
        $applicant = $modelArr[1];

        $jobId = $job->getJobId();
        $applicantId = $applicant->getApplicantId();

        $stmt = "SELECT * FROM `jobs_apply` 
        WHERE `job_id` = '$jobId' AND `applicant_id` = '$applicantId'";
        echo $stmt;
        $this->retrieveData($stmt);

        if (mysqli_num_rows($this->result) > 0) {
            return true;       
        } else {
            return false;
        }

    }

    public function connectUser($connection){

        $userRequestId = $connection->getUserRequestId();
        $userReceiveId = $connection->getUserReceiveId();

        $stmt = "CALL procConnectUser($userRequestId, $userReceiveId)";

        $this->insertData($stmt);
    }

    public function checkConnectUser($connection)
    {
        
        $userRequestId = $connection->getUserRequestId();
        $userReceiveId = $connection->getUserReceiveId();

        $stmt = "SELECT * FROM `connection` 
        WHERE `user_request_id` = '$userRequestId' AND 
        `user_receive_id` = '$userReceiveId'";
        echo $stmt;
        $this->retrieveData($stmt);

        if (mysqli_num_rows($this->result) > 0) {
            return true;       
        } else {
            return false;
        }
    }
}
