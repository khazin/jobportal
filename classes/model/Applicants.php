<?php

class Applicants
{

    private int $id;
    private String $firstname;
    private String $lastname;
    private String $gender;
    private String $dob;
    private String $jobTitle;
    private String $company;
    private String $country;
    private String $city;

    private array $allApplicants;

    public function __construct()
    {
        echo "Applicants initiated. Applicants data is stored";
        echo "<br>";
    }

    public function setApplicantId($id)
    {
        $this->id = $id;
        echo 'applicant id is set';
        echo '<br>';
    }

    public function getApplicantId()
    {
        return $this->id;
    }

    public function setApplicantFirstname($firstname)
    {
        $this->firstname = $firstname;
        echo 'applicant firstname is set';
        echo '<br>';
    }

    public function getApplicantFirstname()
    {
        return $this->firstname;
    }

    public function setApplicantLastname($lastname)
    {
        $this->lastname = $lastname;
        echo 'applicant lastname is set';
        echo '<br>';
    }

    public function getApplicantLastname()
    {
        return $this->lastname;
    }

    public function setApplicantGender($gender)
    {
        $this->gender = $gender;
        echo 'applicant gender is set';
        echo '<br>';
    }

    public function getApplicantGender()
    {
        return $this->gender;
    }

    public function setApplicantDob($dob)
    {
        $this->dob = $dob;
        echo 'applicant dob is set';
        echo '<br>';
    }

    public function getApplicantDob()
    {
        return $this->dob;
    }

    public function setApplicantJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
        echo 'applicant jobTitle is set';
        echo '<br>';
    }

    public function getApplicantJobTitle()
    {
        return $this->jobTitle;
    }

    public function setApplicantCompany($company)
    {
        $this->company = $company;
        echo 'applicant company is set';
        echo '<br>';
    }

    public function getApplicantCompany()
    {
        return $this->company;
    }

    public function setApplicantCountry($country)
    {
        $this->country = $country;
        echo 'applicant country is set';
        echo '<br>';
    }

    public function getApplicantCountry()
    {
        return $this->country;
    }

    public function setApplicantCity($city)
    {
        $this->city = $city;
        echo 'applicant city is set';
        echo '<br>';
    }

    public function getApplicantCity()
    {
        return $this->city;
    }

  

    public function setApplicant($applicantArr, $id) //remember to put type declaration in arguments
    {

        $this->setApplicantId($id);

        $this->setApplicantFirstname($applicantArr[0]);
        $this->setApplicantLastname($applicantArr[1]);
        $this->setApplicantGender($applicantArr[2]);
        $this->setApplicantDob($applicantArr[3]);
        $this->setApplicantJobTitle($applicantArr[4]);
        $this->setApplicantCompany($applicantArr[5]);
        $this->setApplicantCountry($applicantArr[6]);
        $this->setApplicantCity($applicantArr[7]);


        echo "setApplicant data is set";
        echo "<br>";
    }


    public function getApplicant()
    {

        $applicantAttr = new stdClass();
        $applicantAttr->id = $this->getApplicantId();
        $applicantAttr->firstname = $this->getApplicantFirstname();
        $applicantAttr->lastname = $this->getApplicantLastname();
        $applicantAttr->gender = $this->getApplicantGender();
        $applicantAttr->dob = $this->getApplicantDob();
        $applicantAttr->jobTitle = $this->getApplicantJobTitle();
        $applicantAttr->company = $this->getApplicantCompany();
        $applicantAttr->country = $this->getApplicantCountry();
        $applicantAttr->city = $this->getApplicantCity();
        return $applicantAttr;
    }

    public function setAllApplicants($allApplicants)
    {
        $this->allApplicants = $allApplicants;
        echo "setAllApplicants data is set";
        echo "<br>";
    }

    public function getAllApplicants()
    {
        $applicantsAttr = new stdClass();
        $applicantsAttr->id = $this->allApplicants[0];
        $applicantsAttr->firstname = $this->allApplicants[1];
        $applicantsAttr->lastname = $this->allApplicants[2];
        $applicantsAttr->gender = $this->allApplicants[3];
        $applicantsAttr->dob = $this->allApplicants[4];
        $applicantsAttr->jobTitle = $this->allApplicants[5];
        $applicantsAttr->company = $this->allApplicants[6];
        $applicantsAttr->country = $this->allApplicants[7];
        $applicantsAttr->city = $this->allApplicants[7];

        return $applicantsAttr;
    }
}
