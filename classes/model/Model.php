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

        //connect to db and get data
        $this->sql = $stmt;
        $this->connection();
        $this->result = mysqli_query($this->connection, $this->sql);
        // create new object, interate data and store in object 
        //extract data


        // return;   
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

        $skillsSkills = json_encode($skills->getSkillsSkills());

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
                $skills->setSkillsSkills(json_decode($this->row['skills']));
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

    public function postJob($job)
    {

        $jobTitle = $job->getJobTitle();
        $employerId = $job->getJobEmployerId();
        $location = $job->getJobLocation();
        $minSalary = $job->getJobMinSalary();
        $maxSalary = $job->getJobMaxSalary();
        $description = $job->getJobDescription();
        $skills = json_encode($job->getJobSkills());

        $stmt = "CALL procPostJob('$employerId','$jobTitle','$location',
        '$minSalary','$maxSalary','$description','$skills');";
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


        if (mysqli_num_rows($this->result) > 0) {
            while ($this->row = mysqli_fetch_assoc($this->result)) {
                //  $job->setAllJobs($this->row);
                // print_r($this->result->num_rows);
                array_push($jobId, $this->row['job_id']);
                array_push($jobTitle, $this->row['job_title']);
                array_push($employerId, $this->row['employer_id']);
                array_push($location, $this->row['location']);
                array_push($minSalary, $this->row['min_salary']);
                array_push($maxSalary, $this->row['max_salary']);
                array_push($description, $this->row['job_description']);
                array_push($skills, $this->row['skills']);
            }
            $allJobs = [
                $jobId, $jobTitle, $employerId, $location,
                $minSalary, $maxSalary, $description, $skills
            ];

            $job->setAllJobs($allJobs);
        }
    }
}
