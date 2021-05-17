<?php

class Experience
{

    private Array $id;
    private int $userId;
    private Array $jobTitle;
    private Array $company;
    private Array $yearFrom;
    private Array $yearTo;

    public function __construct()
    {
        // echo "experience is initiated";
        // echo "<br>";
    }

    public function setExperienceId(array $id)
    {
        $this->id = $id;
        // echo "experience id is set";
        // echo "<br>";
    }

    public function getExperienceId()
    {
        return $this->id;
    }

    public function setExperienceUserId(int $userId)
    {
        $this->userId = $userId;
        // echo "experience userId is set";
        // echo "<br>";
    }

    public function getExperienceUserId()
    {
        return $this->userId;
    }

    public function setExperienceJobTitle(array $jobTitle)
    {
        $this->jobTitle = $jobTitle;
        // echo "experience jobTitle is set";
        // echo "<br>";
    }

    public function getExperienceJobTitle()
    {
        return $this->jobTitle;
    }

    public function setExperienceCompany(array $company)
    {
        $this->company = $company;
        // echo "experience company is set";
        // echo "<br>";
    }

    public function getExperienceCompany()
    {
        return $this->company;
    }

    public function setExperienceYearFrom(array $yearFrom)
    {
        $this->yearFrom = $yearFrom;
        // echo "experience yearFrom is set";
        // echo "<br>";
    }

    public function getExperienceYearFrom()
    {
        return $this->yearFrom;
    }

    public function setExperienceYearTo(array $yearTo)
    {
        $this->yearTo = $yearTo;
        // echo "experience yearTo is set";
        // echo "<br>";
    }

    public function getExperienceYearTo()
    {
        return $this->yearTo;
    }

    public function setExperience($experienceArr, $id)
    { //remember to put type declaration in arguments

        $this->setExperienceId($id);
        $this->setExperienceUserId($experienceArr[0]);
        $this->setExperienceJobTitle($experienceArr[1]);
        $this->setExperienceCompany($experienceArr[2]);
        $this->setExperienceYearFrom($experienceArr[3]);
        $this->setExperienceYearTo($experienceArr[4]);

        // echo "experience is set";
        // echo "<br>";
    }


    public function getExperience()
    {

        $experienceAttr = new stdClass();
        $experienceAttr->id = $this->getExperienceId();
        $experienceAttr->userId = $this->getExperienceUserId();
        $experienceAttr->jobTitle = $this->getExperienceJobTitle();
        $experienceAttr->company = $this->getExperienceCompany();
        $experienceAttr->yearFrom = $this->getExperienceYearFrom();
        $experienceAttr->yearTo = $this->getExperienceYearTo();

        return $experienceAttr;
        // echo "getExperience is run. returning data from DB";
        // echo "<br>";
    }
}
