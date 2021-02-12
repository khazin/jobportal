<?php

class Job
{

    private int $id;
    private String $jobTitle;
    private int $employerId;
    private String $location;
    private int $minSalary;
    private int $maxSalary;
    private String $description;
    private array $skills;
    private String $jobType;

    private array $allJobs;

    public function __construct()
    {
        echo "Job is initiated";
        echo "<br>";
    }

    public function setJobId($id)
    {
        $this->id = $id;
        echo "Job id is set";
        echo "<br>";
    }

    public function getJobId()
    {
        return $this->id;
    }

    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
        echo "Job jobTitle is set";
        echo "<br>";
    }

    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    public function setJobEmployerId($employerId)
    {
        $this->employerId = $employerId;
        echo "Job employerId is set";
        echo "<br>";
    }

    public function getJobEmployerId()
    {
        return $this->employerId;
    }

    public function setJobLocation($location)
    {
        $this->location = $location;
        echo "Job location is set";
        echo "<br>";
    }

    public function getJobLocation()
    {
        return $this->location;
    }

    public function setJobMinSalary($minSalary)
    {
        $this->minSalary = $minSalary;
        echo "Job minSalary is set";
        echo "<br>";
    }

    public function getJobMinSalary()
    {
        return $this->minSalary;
    }


    public function setJobMaxSalary($maxSalary)
    {
        $this->maxSalary = $maxSalary;
        echo "Job maxSalary is set";
        echo "<br>";
    }

    public function getJobMaxSalary()
    {
        return $this->maxSalary;
    }

    public function setJobDescription($description)
    {
        $this->description = $description;
        echo "Job description is set";
        echo "<br>";
    }

    public function getJobDescription()
    {
        return $this->description;
    }

    public function setJobSkills($skills)
    {
        $this->skills = $skills;
        echo "Job skills is set";
        echo "<br>";
    }

    public function getJobSkills()
    {
        return $this->skills;
    }

    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
        echo "Job jobType is set";
        echo "<br>";
    }

    public function getJobType()
    {
        return $this->jobType;
    }
    
    public function setJob($jobArr, $id)
    { //remember to put type declaration in arguments

        $this->setJobId($id);
        $this->setJobTitle($jobArr[0]);
        $this->setJobEmployerId($jobArr[1]);
        $this->setJobLocation($jobArr[2]);
        $this->setJobMinSalary($jobArr[3]);
        $this->setJobMaxSalary($jobArr[4]);
        $this->setJobDescription($jobArr[5]);
        $this->setJobSkills($jobArr[6]);
        $this->setJobType($jobArr[7]);

        echo "Job is set";
        echo "<br>";
    }


    public function getJob()
    {

        $jobAttr = new stdClass();
        $jobAttr->id = $this->getJobId();
        $jobAttr->jobTitle = $this->getJobTitle();
        $jobAttr->employerId = $this->getJobEmployerId();
        $jobAttr->location = $this->getJobLocation();
        $jobAttr->minSalary = $this->getJobMinSalary();
        $jobAttr->maxSalary = $this->getJobMaxSalary();
        $jobAttr->description = $this->getJobDescription();
        $jobAttr->skills = $this->getJobSkills();
        $jobAttr->jobType = $this->getJobType();

        return $jobAttr;
        echo "getJob is run. returning data from DB";
        echo "<br>";
    }


    public function setAllJobs($allJobs)
    {
        $this->allJobs = $allJobs;
    }

    public function getAllJobs()
    {
        $jobAttr = new stdClass();
        $jobAttr->id = $this->allJobs[0];
        $jobAttr->jobTitle = $this->allJobs[1];
        $jobAttr->employerId = $this->allJobs[2];
        $jobAttr->location = $this->allJobs[3];
        $jobAttr->minSalary = $this->allJobs[4];
        $jobAttr->maxSalary = $this->allJobs[5];
        $jobAttr->description = $this->allJobs[6];
        $jobAttr->skills = $this->allJobs[7];
        $jobAttr->jobType = $this->allJobs[8];

        return $jobAttr;
    }
}
