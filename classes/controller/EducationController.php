<?php

class EducationController
{
    public Object $education;

    public function __construct($education) //remember to put type declaration in arguments
    {
        $this->education = $education;
    }
    public function setEducationId($id)
    {
        $this->education->setEducationId($id);
    }

    public function setEducationCertification($certification)
    {
        $this->education->setEducationCertification($certification);
    }

    public function setEducationSchool($school)
    {
        $this->education->setEducationSchool($school);
    }

    public function setEducationCourse($course)
    {
        $this->education->setEducationCourse($course);
    }

    public function setEducationGraduateYear($graduateYear)
    {
        $this->education->setEducationGraduateYear($graduateYear);
    }

    public function setEducation($educationArr, $id)
    { //remember to put type declaration in arguments
        $this->education->setEducation($educationArr, $id);
    }
}
