<?php

class ExperienceController
{
    public Object $experience;

    public function __construct($experience) 
    {
        $this->experience = $experience;
        echo "experiencecontroller initiated";
        echo "<br>";
    }

    public function setExperienceId($id)
    {
        $this->experience->setExperienceId($id);
    }


    public function setExperienceJobTitle($jobTitle)
    {
        $this->experience->setExperienceJobTitle($jobTitle);
    }

    public function setExperienceCompany($company)
    {
        $this->experience->setExperienceCompany($company);
    }

    public function setExperienceYearFrom($yearFrom)
    {
        $this->experience->setExperienceYearFrom($yearFrom);
    }

    public function setExperienceYearTo($yearTo)
    {
        $this->experience->setExperienceYearTo($yearTo);
    }

    public function setExperience($experienceArr, $id)//remember to put type declaration in arguments
    {
        $this->experience->setExperience($experienceArr, $id);
    }
}
