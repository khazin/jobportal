<?php

class ApplicantsView
{
    private Object $applicant;
    
    public function __construct($applicant)//remember to put type declaration in arguments
    {
        $this->applicant = $applicant;
        echo "applicantsView initiated. applicants object is stored";
        echo "<br>";
    }

    public function getApplicantId()
    {
        return $this->applicant->getApplicantId();
    }

    public function getApplicantFirstname()
    {
        return $this->applicant->getApplicantFirstname();
    }
    
    public function getApplicantLastname()
    {
        return $this->applicant->getApplicantLastname();
    }

    public function getApplicantGender()
    {
        return $this->applicant->getApplicantGender();
    }

    public function getApplicantDob()
    {
        return $this->applicant->getApplicantDob();
    }

    public function getApplicantCompany()
    {
        return $this->applicant->getApplicantCompany();
    }

    public function getApplicantJobTitle()
    {
        return $this->applicant->getApplicantJobTitle();
    }

    public function getApplicantCountry()
    {
        return $this->applicant->getApplicantCountry();
    }

    public function getApplicantCity()
    {
        return $this->applicant->getApplicantCity();
    }
    public function getApplicant() { //remember to put type declaration in arguments
        return $this->applicant->getApplicant();
    }

}

