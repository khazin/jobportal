<?php

class EmployerController
{
    private Object $employer;

    public function __construct($employer) //remember to put type declaration in arguments
    {
        $this->employer = $employer;
        // echo "employerscontroller initiated. employers object is stored";
        // echo "<br>";
    }

    public function setEmployerId($id)
    {
        $this->employer->setEmployerId($id);
    }

    public function setEmployerCompanyName($companyName)
    {
        $this->employer->setEmployerCompanyName($companyName);
    }

    public function setEmployerCompanyType($companyType)
    {
        $this->employer->setEmployerCompanyType($companyType);
    }

    public function setEmployerCompanyContact($companyContact)
    {
        $this->employer->setEmployerCompanyContact($companyContact);
    }

    public function setEmployerCompanyAdmin($companyAdmin)
    {
        $this->employer->setEmployerCompanyAdmin($companyAdmin);
    }

  
    public function setEmployer($employerArr, $id)
    { //remember to put type declaration in arguments
        $this->employer->setEmployer($employerArr, $id);
    }

    
    public function setAllEmployers($allEmployers)
    {
        $this->employer->setAllEmployers($allEmployers);
    }
}
