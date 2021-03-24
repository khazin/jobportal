<?php

class JobView
{
    private Object $job;
    
    public function __construct($job)//remember to put type declaration in arguments
    {
        $this->job = $job;
        // echo "JobView initiated. Job object is stored";
        // echo "<br>";
    }

    public function getJobId(){
        return $this->job->getJobId();
    }

    public function getJobTitle(){
        return $this->job->getJobTitle();
    }

    public function getJobEmployerId(){
        return $this->job->getJobEmployerId();
    }

    public function getJobLocation(){
        return $this->job->getJobLocation();
    }

    public function getJobMinSalary(){
        return $this->job->getJobMinSalary();
    }

    
    public function getJobMaxSalary(){
        return $this->job->getJobMaxSalary();
    }
    
    public function getJobDescription(){
        return $this->job->getJobDescription();
    }
    
    public function getJobSkills(){
        return $this->job->getJobSkills();
    }
    
    public function getJobType()
    {
        return $this->job->getJobType();
    }

    public function getJobExperience()
    {
        return $this->job->getJobExperience();
    }
    public function getJob() {
        return $this->job->getJob();
    }

    public function getAllJobs() {
        return $this->job->getAllJobs();
    }

}

