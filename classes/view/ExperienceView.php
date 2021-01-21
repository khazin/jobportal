<?php

class ExperienceView
{
    private Object $experience;
    
    public function __construct($experience)//remember to put type declaration in arguments
    {
        $this->experience = $experience;
        echo "experienceView initiated. experience object is stored";
        echo "<br>";
    }

    public function getExperienceId(){
        return $this->experience->getExperienceId();
    }
    
    public function getExperienceJobTitle(){
        return $this->experience->getExperienceJobTitle();
    }
    public function getExperienceCompany(){
        return $this->experience->getExperienceCompany();
    }
    public function getExperienceYearFrom(){
        return $this->experience->getExperienceYearFrom();
    }
    public function getExperienceYearTo(){
        return $this->experience->getExperienceYearTo();
    }

    public function getExperience() { //remember to put type declaration in arguments
        return $this->experience->getExperience();
    }

}

