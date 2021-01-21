<?php

class SkillsController
{
    public Object $skills;

    public function __construct($skills)//remember to put type declaration in arguments
    {
        $this->skills = $skills;
        echo "skillscontroller initiated. skills object is stored";
        echo "<br>";

    }

    public function setSkillsId($id)
    {
        $this->skills->setSkillsId($id);
     
    }

    public function setSkillsSkills($skills)
    {
        $this->skills->setSkillsSkills($skills);
 
    }
    public function setSkills($skillsArr, $id) {
        $this->skills->setSkills($skillsArr, $id);
    }


}