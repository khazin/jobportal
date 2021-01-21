<?php

class EmployerView
{
    private Object $employer;
    
    public function __construct($employer)//remember to put type declaration in arguments
    {
        $this->employer = $employer;
        echo "employersView initiated. employers object is stored";
        echo "<br>";
    }

    public function getEmployerId(){
        return $this->employer->getEmployerId();
    }

    public function getEmployerCompanyName(){
        return $this->employer->getEmployerCompanyName();
    }

    public function getEmployerCompanyType(){
        return $this->employer->getEmployerCompanyType();
    }

    public function getEmployerCompanyContact(){
        return $this->employer->getEmployerCompanyContact();
    }

    public function getEmployerCompanyAdmin(){
        return $this->employer->getEmployerCompanyAdmin();
    }


    public function getEmployer() { //remember to put type declaration in arguments
        return $this->employer->getEmployer();
    }

}

