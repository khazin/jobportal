<?php

class JobController
{
    public Object $job;

    public function __construct($job) 
    {
        $this->job = $job;
        echo "jobcontroller initiated";
        echo "<br>";
    }

    public function setjobId($id)
    {
        $this->job->setjobId($id);
    }


    public function setJobTitle($jobTitle)
    {
        $this->job->setJobTitle($jobTitle);
    }

    public function setJobEmployerId($employerId)
    {
        $this->job->setJobEmployerId($employerId);
    }

    public function setJobLocation($location)
    {
        $this->job->setJobLocation($location);
    }

    public function setJobMinSalary($minSalary)
    {
        $this->job->setJobMinSalary($minSalary);
    }

    public function setJobMaxSalary($maxSalary)
    {
        $this->job->setJobMaxSalary($maxSalary);
    }

    public function setJobDescription($description)
    {
        $this->job->setJobDescription($description);
    }

    public function setJobSkills($skills)
    {
        $this->job->setJobSkills($skills);
    }

    public function setJob($jobArr, $id)//remember to put type declaration in arguments
    {
        $this->job->setJob($jobArr, $id);
    }

    public function setAllJobs($allJobs) {
        $this->job->setAllJobs($allJobs);
    }
}
