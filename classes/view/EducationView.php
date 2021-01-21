<?php

class EducationView
{
    private Object $education;
    
    public function __construct($education)//remember to put type declaration in arguments
    {
        $this->education = $education;
        echo "educationView initiated. education object is stored";
        echo "<br>";
    }

    public function getEducationId(){
        return $this->education->getEducationId();
    }

    public function getEducationCertification(){
        return $this->education->getEducationCertification();
    }

    public function getEducationSchool(){
        return $this->education->getEducationSchool();
    }

    public function getEducationCourse(){
        return $this->education->getEducationCourse();
    }

    public function getEducationGraduateYear(){
        return $this->education->getEducationGraduateYear();
    }

    public function getEducation() { //remember to put type declaration in arguments
        return $this->education->getEducation();
    }

}

