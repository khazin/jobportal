<?php

class Education
{

    private Array $id;
    private int $userId;
    private Array $certification;
    private Array $school;
    private Array $course;
    private Array $graduateYear;

    public function __construct()
    {
        echo "education is initiated";
        echo "<br>";
    }
    public function setEducationId($id)
    {
        $this->id = $id;
        echo "education id is set";
        echo "<br>";
    }

    public function getEducationId()
    {
        return $this->id;
    }

    public function setEducationUserId($userId)
    {
        $this->userId = $userId;
        echo "education userId is set";
        echo "<br>";
    }

    public function getEducationUserId()
    {
        return $this->userId;
    }

    public function setEducationCertification($certification)
    {
        $this->certification = $certification;
        echo "education certification is set";
        echo "<br>";
    }

    public function getEducationCertification()
    {
        return $this->certification;
    }

    public function setEducationSchool($school)
    {
        $this->school = $school;
        echo "education school is set";
        echo "<br>";
    }

    public function getEducationSchool()
    {
        return $this->school;
    }

    public function setEducationCourse($course)
    {
        $this->course = $course;
        echo "education course is set";
        echo "<br>";
    }

    public function getEducationCourse()
    {
        return $this->course;
    }

    public function setEducationGraduateYear($graduateYear)
    {
        $this->graduateYear = $graduateYear;
        echo "education graduateYear is set";
        echo "<br>";
    }

    public function getEducationGraduateYear()
    {
        return $this->graduateYear;
    }

    public function setEducation($educationArr, $id)
    { //remember to put type declaration in arguments
        $this->setEducationId($id);
        $this->setEducationUserId($educationArr[0]);
        $this->setEducationCertification($educationArr[1]);
        $this->setEducationSchool($educationArr[2]);
        $this->setEducationCourse($educationArr[3]);
        $this->setEducationGraduateYear($educationArr[4]);

        echo "education is set";
        echo "<br>";
    }


    public function getEducation()
    {

        $educationAttr = new stdClass();
        $educationAttr->id = $this->getEducationId();
        $educationAttr->userId = $this->getEducationUserId();
        $educationAttr->certification = $this->getEducationCertification();
        $educationAttr->school = $this->getEducationSchool();
        $educationAttr->course = $this->getEducationCourse();
        $educationAttr->graduateYear = $this->getEducationGraduateYear();
      
        return $educationAttr;

        echo "getEducation is run. returning data from DB";
        echo "<br>";
    }
}
