<?php

class SkillsView
{
    private Object $skills;

    public function __construct($skills) //remember to put type declaration in arguments
    {
        $this->skills = $skills;
        // echo "skillsView initiated. skill object is stored";
        // echo "<br>";
    }

    public function getSkillsId()
    {
        return $this->skills->getSkillsId();
    }

    public function getSkillsSkills()
    {
        return $this->skills->getSkillsSkills();
    }

    public function getSkills()
    {
        return $this->skills->getSkills();
    }
}
