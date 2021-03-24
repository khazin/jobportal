<?php

class Employer
{

    private int $id;
    private String $companyName;
    private String $companyType;
    private int $companyContact;
    private String $companyAdmin;

    private array $allEmployers;

    public function __construct()
    {
        // echo "Employers initiated. Employers data is stored";
        // echo "<br>";
    }

    public function setEmployerId($id)
    {
        $this->id = $id;
        // echo 'employer id is set';
        // echo '<br>';
    }

    public function getEmployerId()
    {
        return $this->id;
    }

    public function setEmployerCompanyName($companyName)
    {
        $this->companyName = $companyName;
        // echo 'employer companyName is set';
        // echo '<br>';
    }

    public function getEmployerCompanyName()
    {
        return $this->companyName;
    }

    public function setEmployerCompanyType($companyType)
    {
        $this->companyType = $companyType;
        // echo 'employer companyType is set';
        // echo '<br>';
    }

    public function getEmployerCompanyType()
    {
        return $this->companyType;
    }

    public function setEmployerCompanyContact($companyContact)
    {
        $this->companyContact = $companyContact;
        // echo 'employer companyContact is set';
        // echo '<br>';
    }

    public function getEmployerCompanyContact()
    {
        return $this->companyContact;
    }

    public function setEmployerCompanyAdmin($companyAdmin)
    {
        $this->companyAdmin = $companyAdmin;
        // echo 'employer companyAdmin is set';
        // echo '<br>';
    }

    public function getEmployerCompanyAdmin()
    {
        return $this->companyAdmin;
    }

    

    public function setEmployer($employerArr, $id)
    { //remember to put type declaration in arguments

        $this->setEmployerId($id);
        $this->setEmployerCompanyName($employerArr[0]);
        $this->setEmployerCompanyType($employerArr[1]);
        $this->setEmployerCompanyContact($employerArr[2]);
        $this->setEmployerCompanyAdmin($employerArr[3]);

        // echo "setEmployer is run";
        // echo "<br>";
    }


    public function getEmployer()
    {

        $employerObj = new stdClass();
        $employerObj->id = $this->getEmployerId();
        $employerObj->companyName = $this->getEmployerCompanyName();
        $employerObj->companyType = $this->getEmployerCompanyType();
        $employerObj->companyContact = $this->getEmployerCompanyContact();
        $employerObj->companyAdmin = $this->getEmployerCompanyAdmin();

        return $employerObj;

        // echo "getEmployer is run. returning data from DB";
        // echo "<br>";
    }

    public function setAllEmployers($allEmployers)
    {
        $this->allEmployers = $allEmployers;
        // echo "setAllEmployers data is set";
        // echo "<br>";
    }

    public function getAllEmployers()
    {
        $employersAttr = new stdClass();
        $employersAttr->id = $this->allEmployers[0];
        $employersAttr->companyName = $this->allEmployers[1];
        $employersAttr->companyType = $this->allEmployers[2];
        $employersAttr->companyContact = $this->allEmployers[3];
        $employersAttr->companyAdmin = $this->allEmployers[4];

        return $employersAttr;
    }
}
