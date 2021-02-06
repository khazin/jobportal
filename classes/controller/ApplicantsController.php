<?php

class ApplicantsController
{
    private Object $applicant;

    public function __construct( $applicant)//remember to put type declaration in arguments
    {
        $this->applicant = $applicant;
        echo "applicantscontroller initiated. applicants object is stored";
        echo "<br>";

    }

    public function setApplicantId($id)
    {
        $this->applicant->setApplicantId($id);
    }

    public function setApplicantFirstname($firstname)
    {
        $this->applicant->setApplicantFirstname($firstname);
    }

    public function setApplicantLastname($lastname)
    {
        $this->applicant->setApplicantLastname($lastname);
    }

    public function setApplicantGender($gender)
    {
        $this->applicant->setApplicantGender($gender);
    }

    public function setApplicantDob($dob)
    {
        $this->applicant->setApplicantDob($dob);
    }

    public function setApplicantJobTitle($jobTitle)
    {
        $this->applicant->setApplicantJobTitle($jobTitle);
    }

    
    public function setApplicantCompany($company)
    {
        $this->applicant->setApplicantCompany($company);
    }

    public function setApplicantCountry($country)
    {
        $this->applicant->setApplicantCountry($country);
    }
    
    public function setApplicantCity($city)
    {
        $this->applicant->setApplicantCity($city);
    }

 

    public function setApplicant($applicantArr, $id) {//remember to put type declaration in arguments
        $this->applicant->setApplicant($applicantArr, $id);
    }

 

}